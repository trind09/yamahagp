using DotNetNuke.Common;
using DotNetNuke.Entities.Users;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class DesktopModules_QuanLyMauDon_Source_Dashboard_Default :  System.Web.UI.Page
{
    //Officer is teacher
    //Head is chairmain
    private DotNetNuke.Entities.Users.UserInfo currentUser = null;
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            if (IsAllowToAccessThisPage())
            {
                BindData();
            }
        }
    }

    #region Main Methods
    private void ViewAllMauDon(bool isChairman)
    {
        string allRecordTable = "";
        var siteUrl = MauDon.GetCurrentSiteURL();
        string strConn = ConfigurationManager.ConnectionStrings["SiteSqlServer"].ToString();
        using (SqlConnection connection = new SqlConnection(strConn))
        {
            connection.Open();
            string whereClause = "";
            if (!String.IsNullOrEmpty(txtAllRecordsFromDate.Text))
            {
                whereClause = " where createDate >= Cast('" + txtAllRecordsFromDate.Text + "' as datetime) ";
            }
            string query = "select top " + ddlNumberOfRecords.SelectedValue + " storage.*, tracker.AssignedPersonId, us.DisplayName as AssignedPersonDisplayName, us.Email as AssignedPersonEmail, us.Username as AssignedPersonUserName "
                + " from dbo.dbo_Maudon_Storage storage left join dbo.dbo_Maudon_Tracker tracker on storage.id = tracker.MaudonId"
                + " left join Users us on tracker.AssignedPersonId = us.UserID " + whereClause + " order by createDate desc;";
            SqlCommand command = new SqlCommand(query, connection);
            try
            {
                DataSet ds = new DataSet();
                SqlDataAdapter dad = new SqlDataAdapter(query, connection);
                dad.Fill(ds);

                //Get all don thu
                DataTable allRecordDt = ds.Tables[0];
                if (allRecordDt.Rows.Count > 0)
                {
                    allRecordTable += "<table id='example' class='table table-striped table-bordered second dataTable'>";
                    allRecordTable += "<thead>"
                                            + "<tr>"
                                                + "<th>Số thứ tự</th>"
                                                + "<th>Tên đơn thư</th>"
                                                + "<th>Tên sinh viên</th>"
                                                + "<th>Email sinh viên</th>"
                                                + "<th>Người phụ trách xử lý</th>"
                                                + "<th>Ngày khởi tạo</th>"
                                                + "<th>Trạng thái</th>";
                    if (isChairman)
                    {
                        allRecordTable += "<th title='Chỉ định giáo viên xử lý'>Chỉ định</th>";
                    }
                    allRecordTable += "</tr>"
                                        + "</thead>"
                                        + "<tbody>";
                    for (int i = 0; i < allRecordDt.Rows.Count; i++)
                    {
                        DataRow row = allRecordDt.Rows[i];
                        int k = i + 1;
                        string maudon_link = siteUrl + "/quanlymaudon.aspx?md_page=ticketdetail&id=" + row["id"];
                        string assignedPersonLink = "";
                        if (row["AssignedPersonId"] == null)
                        {
                            assignedPersonLink = "";
                        } else
                        {
                            assignedPersonLink = "<a title='Username: " + row["AssignedPersonUserName"] + " | Email: " + row["AssignedPersonEmail"] + "'>" + row["AssignedPersonDisplayName"] + "</a>";
                        }
                        allRecordTable += "<tr>"
                                                + "<td>" + k + "</td>"
                                                + "<td><a href='" + maudon_link + "' target='_blank'>" + row["beautifulName"] + "</a></td>"
                                                + "<td>" + row["userFullName"] + "</td>"
                                                + "<td>" + row["userEmail"] + "</td>"
                                                + "<td id='assigned_person_link_" + row["id"] + "'>" + assignedPersonLink + "</td>"
                                                + "<td>" + row["createDate"] + "</td>";
                        if (row["status"] + "" == MauDon.MauDonStatus.Open.Value)
                        {
                            allRecordTable += "<td id='assigned_status_" + row["id"] + "'><span class='badge-dot badge-brand mr-1' style='background-color: red;'></span>" + row["status"] + "</td>";
                        }
                        else if (row["status"] + "" == MauDon.MauDonStatus.Approved.Value)
                        {
                            allRecordTable += "<td id='assigned_status_" + row["id"] + "'><span class='badge-dot badge-brand mr-1' style='background-color: blue;'></span>" + row["status"] + "</td>";
                        }
                        else if (row["status"] + "" == MauDon.MauDonStatus.Finished.Value)
                        {
                            allRecordTable += "<td id='assigned_status_" + row["id"] + "'><span class='badge-dot badge-brand mr-1' style='background-color: green;'></span>" + row["status"] + "</td>";
                        }
                        else if (row["status"] + "" == MauDon.MauDonStatus.Denied.Value)
                        {
                            allRecordTable += "<td id='assigned_status_" + row["id"] + "'><span class='badge-dot badge-brand mr-1' style='background-color: yellow;'></span>" + row["status"] + "</td>";
                        }
                        else if (row["status"] + "" == MauDon.MauDonStatus.Processing.Value)
                        {
                            allRecordTable += "<td id='assigned_status_" + row["id"] + "'><span class='badge-dot badge-brand mr-1' style='background-color: orange;'></span>" + row["status"] + "</td>";
                        }
                        else
                        {
                            allRecordTable += "<td id='assigned_status_" + row["id"] + "'><span class='badge-dot badge-brand mr-1'></span>" + row["status"] + "</td>";
                        }

                        if (isChairman)
                        {
                            allRecordTable += "<td><input type='button' onclick='Assign(\"" + row["id"]
                                + "\",\"assigned_person_link_" + row["id"] + "\",\"" + row["AssignedPersonId"] + "\",\""
                                + row["AssignedPersonUserName"] + "\",\"" + row["AssignedPersonEmail"] + "\",\"" + row["AssignedPersonDisplayName"] + "\");' value='Assign'/></td>";
                        }
                        allRecordTable += "</tr>";
                    }
                    allRecordTable += "</tbody>";
                    allRecordTable += "<tfoot>"
                                        + "<tr>"
                                            + "<th>Số thứ tự</th>"
                                            + "<th>Tên đơn thư</th>"
                                            + "<th>Tên sinh viên</th>"
                                            + "<th>Email sinh viên</th>"
                                            + "<th>Người phụ trách xử lý</th>"
                                            + "<th>Ngày khởi tạo</th>"
                                            + "<th>Trạng thái</th>";
                    if (isChairman)
                    {
                        allRecordTable += "<th title='Chỉ định giáo viên xử lý'>Chỉ định</th>";
                    }
                    allRecordTable += "</tr>"
                                    + "</tfoot>";
                    allRecordTable += "</table>";
                }
            }
            catch (Exception ex)
            {

            }
            finally
            {
                command.Dispose();
                command = null;
                connection.Close();
            }
        }


        if (allRecordTable != "")
        {
            lblAllRecordTable.Text = allRecordTable;
        }
        else
        {
            lblAllRecordTable.Text = "No record";
        }
    }
    private void BindData()
    {
        string js_script = "";
        string strConn = ConfigurationManager.ConnectionStrings["SiteSqlServer"].ToString();
        using (SqlConnection connection = new SqlConnection(strConn))
        {
            connection.Open();
            //Set up url
            var siteUrl = MauDon.GetCurrentSiteURL();
            hblHome.NavigateUrl = siteUrl + "/quanlymaudon.aspx";

            int totalOpenItems = 0;
            int totalApprovedItems = 0;
            int totalFinishedItems = 0;
            int totalDeniedItems = 0;
            int totalProcessingItems = 0;

            string query = "select count(*) as Total from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + " where [status] = N'" + MauDon.MauDonStatus.Open.Value + "';";
            query += "select count(*) as Total from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + " where [status] = N'" + MauDon.MauDonStatus.Approved.Value + "';";
            query += "select count(*) as Total from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + " where [status] = N'" + MauDon.MauDonStatus.Finished.Value + "';";
            query += "select count(*) as Total from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + " where [status] = N'" + MauDon.MauDonStatus.Denied.Value + "';";
            query += "select count(*) as Total from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + " where [status] = N'" + MauDon.MauDonStatus.Processing.Value + "';";

            try
            {
                DataSet ds = new DataSet();
                SqlDataAdapter dad = new SqlDataAdapter(query, connection);
                dad.Fill(ds);
                totalOpenItems = Int32.Parse(ds.Tables[0].Rows[0]["Total"] + "");
                totalApprovedItems = Int32.Parse(ds.Tables[1].Rows[0]["Total"] + "");
                totalFinishedItems = Int32.Parse(ds.Tables[2].Rows[0]["Total"] + "");
                totalDeniedItems = Int32.Parse(ds.Tables[3].Rows[0]["Total"] + "");
                totalProcessingItems = Int32.Parse(ds.Tables[4].Rows[0]["Total"] + "");
                js_script += "<script>const array_maudon_total = {'" + MauDon.MauDonStatus.Open.Value + "': " + totalOpenItems
                    + ", '" + MauDon.MauDonStatus.Approved.Value + "': " + totalApprovedItems
                    + ", '" + MauDon.MauDonStatus.Finished.Value + "': " + totalFinishedItems
                    + ", '" + MauDon.MauDonStatus.Denied.Value + "': " + totalDeniedItems
                    + ", '" + MauDon.MauDonStatus.Processing.Value + "': " + totalProcessingItems + "};";

                js_script += "function defer(method) {if (window.jQuery){method();}else{setTimeout(function() { defer(method) }, 50);}}"
                    + "defer(function () {"
                    + "ActiveMauDonChart();"
                    + "}); ";
                js_script += "function ActiveMauDonChart() {var i = 0; var labels = []; var series = [];"
                    + "for (const [key, value] of Object.entries(array_maudon_total)) {"
                        + "labels.push(key); series.push(value);}"
                    + "new Chartist.Bar('.ct-chart-product', { labels: labels, series: [series]}"
                    + ", {low: 0, showPoint: true, showArea: true, lineSmooth: Chartist.Interpolation.cardinal({divisor: 3})"
                    + ", seriesBarDistance: 12, axisX:{showGrid: false,offset: 30, labelOffset:{x: 23}},axisY: "
                    + "{type: Chartist.AutoScaleAxis, showGrid: true, offset: 80, scaleMinSpace: 100}}, {stackBars: true,axisY:{labelInterpolationFnc: function(value) {return (value / 1000) + 'k';}"
                    + "}, axisX:{labelInterpolationFnc: function(value, index) {return index % 2 === 0 ? value : null;}}}).on('draw', function(data) {"
                    + "if (data.type === 'bar'){data.element.attr({style: 'stroke-width: 40px;','title': series[i]});i++;}"
                                            + "$('.ct-bar').on('mouseover', function() {$('#tooltip').html('<b>Số lượng: </b>' + $(this).attr('ct:value'));"
                    + "});$('.ct-bar').on('mouseout', function() {$('#tooltip').html('<b>Số lượng:</b>');});}); }</script>";

                js_script += "<div class='col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12'>"
                                    + "<div class='card'>"
                                        + "<div class='card-header'>"
                                            + "<h2>Biểu đồ số lượng đơn thư</h2>"
                                            + "<div id='tooltip'><b>Số lượng:</b></div>"
                                            + "</div>"
                                            + "<div class='card-body'>"
                                            + "<div class='ct-chart-product ct-golden-section'></div>"
                                        + "</div></div></div>";
                js_script += "<ul><li>" + MauDon.MauDonStatus.Open.Value + ": <i>" + totalOpenItems + "</i></li>";
                js_script += "<li>" + MauDon.MauDonStatus.Approved.Value + ": <i>" + totalApprovedItems + "</i></li>";
                js_script += "<li>" + MauDon.MauDonStatus.Finished.Value + ": <i>" + totalFinishedItems + "</i></li>";
                js_script += "<li>" + MauDon.MauDonStatus.Denied.Value + ": <i>" + totalDeniedItems + "</i></li>";
                js_script += "<li>" + MauDon.MauDonStatus.Processing.Value + ": <i>" + totalProcessingItems + "</i></li></ul>";

                //Init all data
                InitAllData4Interface();
            }
            catch (Exception ex)
            {

            }
            finally
            {
                connection.Close();
            }
        }

        bieu_do_maudon.InnerHtml = js_script;

        ShowAllComment();
    }

    private void ShowAllComment(int providedUserID = 0, System.Web.UI.HtmlControls.HtmlGenericControl control = null)
    {
        if (currentUser != null) {
            var siteUrl = MauDon.GetCurrentSiteURL();
            List<MauDonTracker> allItems = GetAllAssigned(currentUser);
            string strConn = ConfigurationManager.ConnectionStrings["SiteSqlServer"].ToString();
            using (SqlConnection connection = new SqlConnection(strConn))
            {
                connection.Open();
                string where_clause = "";
                if (allItems.Count > 0)
                {
                    where_clause = " where ";
                    for (int i = 0; i < allItems.Count; i++)
                    {
                        MauDonTracker tracker = allItems[i];
                        if (i == allItems.Count - 1)
                        {
                            where_clause += " id = " + tracker.MaudonId;
                        }
                        else
                        {
                            where_clause += " id = " + tracker.MaudonId + " or ";
                        }
                    }
                    string query = "select * from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + where_clause + " order by createDate desc;";
                    try
                    {
                        DataSet ds = new DataSet();
                        SqlDataAdapter dad = new SqlDataAdapter(query, connection);
                        dad.Fill(ds);

                        //Get all don thu
                        DataTable allRecordDt = ds.Tables[0];
                        if (allRecordDt.Rows.Count > 0)
                        {
                            where_clause = " where ";
                            for (int i = 0; i < allRecordDt.Rows.Count; i++)
                            {
                                DataRow row = allRecordDt.Rows[i];
                                if (i == allRecordDt.Rows.Count - 1)
                                {
                                    where_clause += " maudonId = " + row["id"];
                                }
                                else
                                {
                                    where_clause += " maudonId = " + row["id"] + " or ";
                                }
                            }
                            query = "select top 10 * from " + MauDon.databaseTablePrefix + MauDon.maudon_comment_table_name + where_clause + " order by createDate desc;";
                            if (providedUserID > 0 && control != null)
                            {
                                query = "select * from " + MauDon.databaseTablePrefix + MauDon.maudon_comment_table_name + where_clause + " order by createDate desc;";
                            }
                            dad = new SqlDataAdapter(query, connection);
                            DataSet ds1 = new DataSet();
                            dad.Fill(ds1);

                            //Get all comment
                            DataTable allCommentDt = ds1.Tables[0];
                            if (allCommentDt.Rows.Count > 0)
                            {
                                string list_of_comment_html = "";
                                foreach (DataRow item in allCommentDt.Rows)
                                {
                                    string comment = System.Text.RegularExpressions.Regex.Replace(item["comment"] + "", "<.*?>", String.Empty);
                                    IEnumerable<string> words = comment.Split().Take(15);
                                    string fixed_comment = "";
                                    foreach (string word in words)
                                        fixed_comment += word + " ";
                                    fixed_comment += "...";
                                    if (providedUserID != 0 && control != null)
                                    {
                                        fixed_comment = "<p>" + item["comment"] + "</p>";
                                    }
                                    int user_id = int.Parse(item["userId"] + "");
                                    string maudon_link = siteUrl + "/quanlymaudon.aspx?md_page=ticketdetail&id=" + item["maudonId"];
                                    string time_ago = GetPrettyDate(DateTime.Parse(item["createDate"] + ""));
                                    string comment_item_html = "<a target='_blank' href='" + maudon_link + "' class='list-group-item list-group-item-action' title='" + item["title"] + "'>"
                                            + "<div>"
                                                + "<span class='notification-list-user-name'>" + item["userFullName"] + "</span>" + fixed_comment
                                                + "<div class='notification-date' style='font-style: italic; font-weight: normal; font-size: x-small;'>" + time_ago + " (" + item["createDate"] + ")</div>"
                                            + "</div>"
                                            + "</a>";
                                    list_of_comment_html += comment_item_html;
                                }
                                if (list_of_comment_html != "") {
                                    if (providedUserID != 0 && control != null)
                                    {
                                        string all_comment_html = "<div class='list-group'>"
                                            + list_of_comment_html
                                            + "</div>";
                                        control.InnerHtml = all_comment_html;
                                    }
                                    else
                                    {
                                        newest_comments.InnerHtml = list_of_comment_html;
                                    }
                                }
                            }
                        }
                    }
                    catch (Exception ex)
                    {

                    }
                    finally
                    {
                        connection.Close();
                    }
                }
            }
        }
    }

    private void InitAllData4Interface()
    {
        string[] chairmans = null;
        string[] teachers = null;
        var configFilePath = MauDon.configFilePath;

        System.Collections.Hashtable _ret = new System.Collections.Hashtable();
        if (System.IO.File.Exists(HttpContext.Current.Server.MapPath(configFilePath)))
        {
            string xmlIn = "";
            using (System.IO.FileStream s = System.IO.File.OpenRead(HttpContext.Current.Server.MapPath(configFilePath)))
            {
                using (System.IO.TextReader reader = new System.IO.StreamReader(s))
                {
                    xmlIn = reader.ReadToEnd();
                    reader.Close();
                }
            }

            System.Xml.XmlDocument doc = new System.Xml.XmlDocument();
            doc.LoadXml(xmlIn);
            foreach (System.Xml.XmlNode child in doc.ChildNodes)
                if (child.Name.Equals("Settings"))
                    if (child.ChildNodes.Count > 0)
                    {
                        foreach (System.Xml.XmlNode node in child.ChildNodes)
                            if (node.Name.Equals("add"))
                            {
                                if (node.Attributes["key"].Value == "chairmans")
                                {
                                    chairmans = node.Attributes["value"].Value.Split(';');
                                }
                                else if (node.Attributes["key"].Value == "teachers")
                                {
                                    teachers = node.Attributes["value"].Value.Split(';');
                                }
                            }
                    }
        }

        //Get all chairmains
        string jslist_of_chairmains = "<script> const chairmains = [";
        UserController userController = new UserController();
        string chairmain_list_html = "";
        if (chairmans != null)
        {
            string chairmain_html = "";
            chairmain_list_html = "<tr><td style='color: blue;'>Trưởng phòng</td>";
            for (int i = 0; i < chairmans.Length; i++)
            {
                string chairman = chairmans[i];
                UserInfo userInfo = userController.GetUserByUsername(0, chairman);
                List<MauDonTracker> allAssignTrackers = GetAllAssigned(userInfo);
                int totalTracker = allAssignTrackers == null ? 0 : allAssignTrackers.Count;
                if (userInfo != null)
                {
                    string user_photo = userInfo.Profile.PhotoURL;
                    string user_phone = userInfo.Profile.Telephone;
                    chairmain_html += "<div class='col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12'>";
                    chairmain_html += "<div class='card'>";
                    chairmain_html += "<img class='card-img-top img-fluid' src='" + userInfo.Profile.PhotoURL + "' alt='" + userInfo.DisplayName + "'>";
                    chairmain_html += "<div class='card-body'>";
                    chairmain_html += "<h3 class='card-title'>" + userInfo.DisplayName + "</h3>";
                    chairmain_html += "<p class='card-text'>Username: " + userInfo.Username + "</p>";
                    chairmain_html += "<p class='card-text'>Email: " + userInfo.Email + "</p>";
                    chairmain_html += "<p class='card-text'>Phone number: " + userInfo.Profile.Telephone + "</p>";
                    chairmain_html += "<p class='card-text'>Số lượng đơn thư đang phụ trách xử lý: " + totalTracker + "</p>";
                    chairmain_html += "<a title='UserId:" + userInfo.UserID + " | Email:" + userInfo.Email + " | DisplayName:" + userInfo.DisplayName + "' href='#' class='btn btn-primary' onclick='return ShowAssignMauDonOfAPerson(\"user_id_" + userInfo.UserID + "\");'>Xem danh sách đơn thư</a>";
                    chairmain_html += "</div>";
                    chairmain_html += "</div>";
                    chairmain_html += "</div>";

                    jslist_of_chairmains += "'" + userInfo.UserID + "|" + userInfo.Email + "|" + userInfo.DisplayName + "',";

                    if (i == 0)
                    {
                        chairmain_list_html += "<td><a title='UserId:" + userInfo.UserID + " | Email:" + userInfo.Email + " | DisplayName:" + userInfo.DisplayName + "' href='#' class='active' onclick='return ShowAssignMauDonOfAPerson(\"user_id_" + userInfo.UserID + "\");' id='user_id_" + userInfo.UserID + "'><b>" + userInfo.DisplayName + "</b> (Đang xử lý " + totalTracker  + " đơn thư)</a></td>";
                    } else
                    {
                        chairmain_list_html += "<td><a title='UserId:" + userInfo.UserID + " | Email:" + userInfo.Email + " | DisplayName:" + userInfo.DisplayName + "' href='#' onclick='return ShowAssignMauDonOfAPerson(\"user_id_" + userInfo.UserID + "\");' id='user_id_" + userInfo.UserID + "'><b>" + userInfo.DisplayName + "</b> (Đang xử lý " + totalTracker + " đơn thư)</a></td>";
                    }
                }
            }
            jslist_of_chairmains += "];</script>";
            string chairmain_div_title = "<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>"
                                            + "<div class='section-block' id='cards'>"
                                                + "<h2 class='section-title'>Danh sách trưởng phòng (sshead)</h2>"
                                                + "<hr/>"
                                                + "<p>Thông tin cơ bản về các trưởng phòng (sshead)</p>"
                                            + "</div>"
                                        + "</div>";
            if (chairmain_html != "")
            {
                divChairmains.InnerHtml = chairmain_div_title + chairmain_html;
            }
            else
            {
                divChairmains.InnerHtml = chairmain_div_title + "No data";
            }

            chairmain_list_html += "</tr>";
        }

        //Get all teachers
        string jslist_of_teachers = "<script> const teachers = [";
        string teacher_list_html = "";
        if (teachers != null)
        {
            string teacher_html = "";
            teacher_list_html = "<tr><td style='color: blue;'>Giảng viên</td>";
            for (int i = 0; i < teachers.Length; i++)
            {
                string teacher = teachers[i];
                UserInfo userInfo = userController.GetUserByUsername(0, teacher);
                List<MauDonTracker> allAssignTrackers = GetAllAssigned(userInfo);
                int totalTracker = allAssignTrackers == null ? 0 : allAssignTrackers.Count;
                if (userInfo != null)
                {
                    string user_photo = userInfo.Profile.PhotoURL;
                    string user_phone = userInfo.Profile.Telephone;
                    teacher_html += "<div class='col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12'>";
                    teacher_html += "<div class='card'>";
                    teacher_html += "<img class='card-img-top img-fluid' src='" + userInfo.Profile.PhotoURL + "' alt='" + userInfo.DisplayName + "'>";
                    teacher_html += "<div class='card-body'>";
                    teacher_html += "<h3 class='card-title'>" + userInfo.DisplayName + "</h3>";
                    teacher_html += "<p class='card-text'>Username: " + userInfo.Username + "</p>";
                    teacher_html += "<p class='card-text'>Email: " + userInfo.Email + "</p>";
                    teacher_html += "<p class='card-text'>Phone number: " + userInfo.Profile.Telephone + "</p>";
                    teacher_html += "<p class='card-text'>Số lượng đơn thư đang phụ trách xử lý: " + totalTracker + "</p>";
                    teacher_html += "<a title='UserId:" + userInfo.UserID + " | Email:" + userInfo.Email + " | DisplayName:" + userInfo.DisplayName + "' href='#' class='btn btn-primary' onclick='return ShowAssignMauDonOfAPerson(\"user_id_" + userInfo.UserID + "\");'>Xem danh sách đơn thư</a>";
                    teacher_html += "</div>";
                    teacher_html += "</div>";
                    teacher_html += "</div>";

                    jslist_of_teachers += "'" + userInfo.UserID + "|" + userInfo.Email + "|" + userInfo.DisplayName + "',";

                    if (i == 0)
                    {
                        teacher_list_html += "<td><a title='UserId:" + userInfo.UserID + " | Email:" + userInfo.Email + " | DisplayName:" + userInfo.DisplayName + "' href='#' class='active' onclick='return ShowAssignMauDonOfAPerson(\"user_id_" + userInfo.UserID + "\");' id='user_id_" + userInfo.UserID + "'><b>" + userInfo.DisplayName + "</b> - (Đang xử lý " + totalTracker + " đơn thư)</a></td>";
                    }
                    else
                    {
                        teacher_list_html += "<td><a title='UserId:" + userInfo.UserID + " | Email:" + userInfo.Email + " | DisplayName:" + userInfo.DisplayName + "' href='#' onclick='return ShowAssignMauDonOfAPerson(\"user_id_" + userInfo.UserID + "\");' id='user_id_" + userInfo.UserID + "'><b>" + userInfo.DisplayName + "</b> - (Đang xử lý " + totalTracker + " đơn thư)</a></td>";
                    }
                }
            }
            jslist_of_teachers += "];</script>";
            string teacher_div_title = "<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>"
                                            + "<div class='section-block' id='cards'>"
                                                + "<h2 class='section-title'>Danh sách giảng viên phụ trách xử lý đơn thư (ssofficer)</h2>"
                                                + "<hr/>"
                                                + "<p>Thông tin cơ bản về các giảng viên phụ trách xử lý đơn thư (ssofficer)</p>"
                                            + "</div>"
                                        + "</div>";
            if (teacher_html != "")
            {
                divTeachers.InnerHtml = teacher_div_title + teacher_html;
            }
            else
            {
                divTeachers.InnerHtml = teacher_div_title + "No data";
            }

            teacher_list_html += "</tr>";
        }

        divDanhSachNguoiPhuTrachXuLyDonThu.InnerHtml = chairmain_list_html + teacher_list_html + jslist_of_chairmains + jslist_of_teachers;
    }

    private void ShowAssignedMauDonOfAPerson(int user_id, System.Web.UI.HtmlControls.HtmlGenericControl control)
    {
        UserController userController = new UserController();
        string allRecordTable = "";
        var siteUrl = MauDon.GetCurrentSiteURL();
        UserInfo userInfo = userController.GetUser(0, user_id);
        List<MauDonTracker> allItems = GetAllAssigned(userInfo);

        string strConn = ConfigurationManager.ConnectionStrings["SiteSqlServer"].ToString();
        using (SqlConnection connection = new SqlConnection(strConn))
        {
            connection.Open();
            string where_clause = "";
            if (allItems.Count > 0)
            {
                where_clause = " where ";
                for (int i = 0; i < allItems.Count; i++)
                {
                    MauDonTracker tracker = allItems[i];
                    if (i == allItems.Count - 1)
                    {
                        where_clause += " id = " + tracker.MaudonId;
                    }
                    else
                    {
                        where_clause += " id = " + tracker.MaudonId + " or ";
                    }
                }
                string query = "select * from " + MauDon.databaseTablePrefix + MauDon.maudon_storage_table_name + where_clause + " order by createDate desc;";
                SqlCommand command = new SqlCommand(query, connection);
                try
                {
                    DataSet ds = new DataSet();
                    SqlDataAdapter dad = new SqlDataAdapter(query, connection);
                    dad.Fill(ds);

                    //Get all don thu
                    DataTable allRecordDt = ds.Tables[0];
                    if (allRecordDt.Rows.Count > 0)
                    {
                        allRecordTable += "<table id='example1' class='table table-striped table-bordered first'>";
                        allRecordTable += "<thead>"
                                                + "<tr>"
                                                    + "<th>Số thứ tự</th>"
                                                    + "<th>Tên đơn thư</th>"
                                                    + "<th>Tên sinh viên</th>"
                                                    + "<th>Email sinh viên</th>"
                                                    + "<th>Ngày khởi tạo</th>"
                                                    + "<th>Trạng thái</th>"
                                                + "</tr>"
                                            + "</thead>"
                                            + "<tbody>";
                        for (int i = 0; i < allRecordDt.Rows.Count; i++)
                        {
                            DataRow row = allRecordDt.Rows[i];
                            int k = i + 1;
                            string maudon_link = siteUrl + "/quanlymaudon.aspx?md_page=ticketdetail&id=" + row["id"];
                            allRecordTable += "<tr>"
                                                    + "<td>" + k + "</td>"
                                                    + "<td><a href='" + maudon_link + "' target='_blank'>" + row["beautifulName"] + "</a></td>"
                                                    + "<td>" + row["userFullName"] + "</td>"
                                                    + "<td>" + row["userEmail"] + "</td>"
                                                    + "<td>" + row["createDate"] + "</td>";
                            if (row["status"] + "" == MauDon.MauDonStatus.Open.Value)
                            {
                                allRecordTable += "<td><span class='badge-dot badge-brand mr-1' style='background-color: red;'></span>" + row["status"] + "</td>";
                            }
                            else if (row["status"] + "" == MauDon.MauDonStatus.Approved.Value)
                            {
                                allRecordTable += "<td><span class='badge-dot badge-brand mr-1' style='background-color: blue;'></span>" + row["status"] + "</td>";
                            }
                            else if (row["status"] + "" == MauDon.MauDonStatus.Finished.Value)
                            {
                                allRecordTable += "<td><span class='badge-dot badge-brand mr-1' style='background-color: green;'></span>" + row["status"] + "</td>";
                            }
                            else if (row["status"] + "" == MauDon.MauDonStatus.Denied.Value)
                            {
                                allRecordTable += "<td><span class='badge-dot badge-brand mr-1' style='background-color: yellow;'></span>" + row["status"] + "</td>";
                            }
                            else if (row["status"] + "" == MauDon.MauDonStatus.Processing.Value)
                            {
                                allRecordTable += "<td><span class='badge-dot badge-brand mr-1' style='background-color: orange;'></span>" + row["status"] + "</td>";
                            }
                            else
                            {
                                allRecordTable += "<td><span class='badge-dot badge-brand mr-1'></span>" + row["status"] + "</td>";
                            }
                            allRecordTable += "</tr>";
                        }
                        allRecordTable += "</tbody>";
                        allRecordTable += "<tfoot>"
                                            + "<tr>"
                                                + "<th>Số thứ tự</th>"
                                                + "<th>Tên đơn thư</th>"
                                                + "<th>Tên sinh viên</th>"
                                                + "<th>Email sinh viên</th>"
                                                + "<th>Ngày khởi tạo</th>"
                                                + "<th>Trạng thái</th>"
                                            + "</tr>"
                                        + "</tfoot>";
                        allRecordTable += "</table>";
                    }
                }
                catch (Exception ex)
                {

                }
                finally
                {
                    command.Dispose();
                    command = null;
                    connection.Close();
                }
            }
        }

        if (allRecordTable == "")
        {
            allRecordTable = "<span style='font-weight: normal; font-style: italic;'>Không có đơn thư nào được chỉ định cho " + userInfo.DisplayName + "</span>";
        }
        string outerDivForAssignedMauDonTable = "<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'><div class='card'><div class='card-header'>"
            + "<div class='card'>"
            + "<div class='card-header'><h5 track_id='outerDivForAssignedMauDonTable' style='text-transform: uppercase; font-weight: bold;'>"
            + userInfo.DisplayName + "<h5/><span style='font-weight: normal; font-style: italic;'>Username: " + userInfo.Username + "</span></div>"
            + "<div class='card-body'><div class='table-responsive'>"
            + allRecordTable
            + "</div></div></div></div>";
        control.InnerHtml = outerDivForAssignedMauDonTable;
        divDanhSachNguoiPhuTrachXuLyDonThuMessage.InnerHtml = "";
    }

    private void Assign(int maudonId, int userId, bool isChairman)
    {
        UserController userController = new UserController();
        int currentPortalID = DotNetNuke.Entities.Portals.PortalController.GetCurrentPortalSettings().PortalId;
        DotNetNuke.Entities.Users.UserInfo _teacherInfo = userController.GetUser(currentPortalID, userId);

        if (_teacherInfo != null)
        {
            string strConn = ConfigurationManager.ConnectionStrings["SiteSqlServer"].ToString();
            using (SqlConnection connection = new SqlConnection(strConn))
            {
                connection.Open();
                try
                {
                    var modifiedValue = MauDon.UpdateMaudonStatus(connection, MauDon.MauDonStatus.Processing.Value, maudonId);

                    int n;
                    bool isNumeric = int.TryParse(modifiedValue, out n);
                    if (isNumeric)
                    {
                        var siteUrl = MauDon.GetCurrentSiteURL();
                        var maudon = MauDon.GetMauDonByID(connection, maudonId, null);
                        var pageUrl = siteUrl + "/Default.aspx" + "?TabID=" + 265 + "&md_page=ticketdetail&id=" + maudonId;

                        //Re-show mau don again
                        DotNetNuke.Entities.Users.UserInfo currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();

                        //Gởi thư thông báo giáo viên sau khi xác nhận đơn
                        string emailFilePath1 = Server.MapPath("~/DesktopModules/QuanLyMauDon/Source/Mail/4.txt");
                        string[] lines1 = System.IO.File.ReadAllLines(emailFilePath1);
                        string emailToTeacherTitle = lines1[0];
                        lines1 = lines1.Skip(1).ToArray();
                        var emailToTeacherContains = "";
                        for (int i = 0; i < lines1.Length; i++)
                        {
                            emailToTeacherContains += lines1[i] + "<br/>";
                        }

                        emailToTeacherContains = emailToTeacherContains.Replace("[[name]]", _teacherInfo.DisplayName);
                        emailToTeacherContains = emailToTeacherContains.Replace("[[maudon_link]]", "<a href='" + pageUrl + "' target='_blank'>đây</a>");

                        string sendEmailResult1 = MauDon.SendEmail(null, _teacherInfo.Email, null, _teacherInfo.DisplayName, emailToTeacherTitle, emailToTeacherContains, null);
                        if (sendEmailResult1 != null)
                        {
                            string jsFunc = "AfterAssign(false, '" + sendEmailResult1 + "')";
                            ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
                        }
                        else
                        {
                            int insertId = MauDon.SaveCommentToDatabase(connection, maudonId, "Xác nhận đề nghị học vụ",
                                "Đã xác nhận đề nghị học vụ thành công."
                                + "<p>Người assign là: <br/><ul><li>Họ và tên: " + currentUser.DisplayName + "</li><li>Username: " + currentUser.Username + "</li><li>Email: " + currentUser.Email + "</li></ul></p>"
                                + "<p>Người được assign là: <br/><ul><li>Họ và tên: " + _teacherInfo.DisplayName + "</li><li>Username: " + _teacherInfo.Username + "</li><li>Email: " + _teacherInfo.Email + "</li></ul></p>"
                                + "<p>Ngày assign: " + DateTime.UtcNow + "</p>"
                                , null, currentUser, "");
                            string trackResult = MauDon.TrackAssign(currentUser, _teacherInfo, maudonId, insertId, DateTime.UtcNow);
                            if (trackResult != null)
                            {
                                string jsFunc = "AfterAssign(false, '" + trackResult + "')";
                                ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
                            } else
                            {
                                string assignedPersonLink = "<a title='Username: " + _teacherInfo.Username + " | Email: " + _teacherInfo.Email + "'>" + _teacherInfo.DisplayName + "</a>";
                                string jsFunc = "AfterAssign(true, 'Đã phân công xử lý đơn thư thành công!', '" 
                                    + maudonId + "', '" + MauDon.MauDonStatus.Processing.Value + "', '"
                                    + _teacherInfo.Username + "', '" + _teacherInfo.Email + "', '" + _teacherInfo.DisplayName + "')";
                                ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
                            }
                        }

                        //Gởi thư thông báo sinh viên sau khi xác nhận đơn
                        string emailFilePath1a = Server.MapPath("~/DesktopModules/QuanLyMauDon/Source/Mail/7.txt");
                        string[] lines1a = System.IO.File.ReadAllLines(emailFilePath1a);
                        string emailToStudentTitle = lines1a[0];
                        lines1a = lines1a.Skip(1).ToArray();
                        var emailToStudentContains = "";
                        for (int i = 0; i < lines1a.Length; i++)
                        {
                            emailToStudentContains += lines1a[i] + "<br/>";
                        }

                        emailToStudentContains = emailToStudentContains.Replace("[[student_name]]", maudon.userFullName);
                        emailToStudentContains = emailToStudentContains.Replace("[[maudon_title]]", maudon.beautifulName);
                        emailToStudentContains = emailToStudentContains.Replace("[[teacher_name]]", _teacherInfo.DisplayName);
                        emailToStudentContains = emailToStudentContains.Replace("[[teacher_email]]", _teacherInfo.Email);
                        emailToStudentContains = emailToStudentContains.Replace("[[maudon_status]]", maudon.status);
                        emailToStudentContains = emailToStudentContains.Replace("[[maudon_link]]", "<a href='" + pageUrl + "' target='_blank'>đây</a>");

                        string sendEmailResult2 = MauDon.SendEmail(_teacherInfo.Email, maudon.userEmail, null, maudon.userFullName, emailToStudentTitle, emailToStudentContains, null);
                        if (sendEmailResult2 != null)
                        {
                            string jsFunc = "AfterAssign(false, '" + sendEmailResult2 + "')";
                            ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
                        }
                        else
                        {
                            int insertId = MauDon.SaveCommentToDatabase(connection, maudonId, emailToStudentTitle,
                                "<p>Chào " + maudon.userFullName + ",</p>"
                                + "<p>Đơn thư <b>" + maudon.beautifulName + "</b> của bạn đã được phân công xử lý. Giáo viên chịu trách nhiệm xử lý đơn thư của bạn là:</p>"
                                + "<p>Họ và tên: " + _teacherInfo.DisplayName + "<br/>Địa chỉ email: " + _teacherInfo.Email + "</p>"
                                + "<p>Bạn có thể liên hệ trực tiếp với giáo viên xử lý đơn thư của bạn bằng cách chuyển tiếp email này đến địa chỉ email " + _teacherInfo.Email + ". Hoặc xem chi tiết đơn thư và giao tiếp trực tuyến với giáo viên xử lý đơn thư của bạn tại " + "<a href='" + pageUrl + "' target='_blank'>đây</a>" + "</p>"
                                + "<p>Trạng thái đơn thư của bạn là: " + maudon.status + "</p>"
                                + "<p>Cảm ơn bạn đã sử dụng chức năng Đơn Thư.</p>"
                                , null, _teacherInfo, "");
                        }
                    }
                    else
                    {
                        string jsFunc = "AfterAssign(false, '" + modifiedValue + "')";
                        ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
                    }
                }
                catch (Exception ex)
                {
                    string jsFunc = "AfterAssign(false, '" + ex.Message + "')";
                    ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
                }
                finally
                {
                    connection.Close();
                }
            }
        }
        else
        {
            string jsFunc = "AfterAssign(false, 'Cộng tác viên không tồn tại.')";
            ScriptManager.RegisterStartupScript(this.Page, Page.GetType(), "AfterAssign", jsFunc, true);
        }
    }
    #endregion

    #region Utils
    private bool IsAllowToAccessThisPage()
    {
        currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();
        if (currentUser.UserID != -1)
        {
            var siteUrl = MauDon.GetCurrentSiteURL();
            user_display_name.InnerHtml = currentUser.DisplayName;
            string userLink = siteUrl + "/ActivityFeed/MyProfile/tabid/61/userId/" + currentUser.UserID + "/language/en-US/Default.aspx";
            user_link.HRef = userLink;
            current_user_photo.Src = currentUser.Profile.PhotoURL;
            bool isAdmin = false;
            foreach (var role in currentUser.Roles)
            {
                if (role == "Administrators")
                {
                    isAdmin = true;
                    user_type.InnerHtml = "Admin";
                }
            }

            System.Collections.Hashtable _ret = MauDon.ReadConfigFile();
            string[] chairmans = _ret["chairmans"].ToString().Split(';');
            string[] teachers = _ret["teachers"].ToString().Split(';');

            if (chairmans.Contains(currentUser.Username))
            {
                user_type.InnerHtml = "SSHead";
            }

            if (teachers.Contains(currentUser.Username))
            {
                user_type.InnerHtml = "SSOffice";
            }

            //If student submit this form, so we save the Mau Don and send email
            if (isAdmin || chairmans.Contains(currentUser.Username) || teachers.Contains(currentUser.Username))
            {
                return true;
            }
            else
            {
                MauDon.GoToLogin();
                return false;
            }
        }
        MauDon.GoToLogin();
        return false;
    }

    private List<MauDonTracker> GetAllAssigned(UserInfo userInfo)
    {
        List<MauDonTracker> allTrackers = new List<MauDonTracker>();
        string strConn = ConfigurationManager.ConnectionStrings["SiteSqlServer"].ToString();
        using (SqlConnection connection = new SqlConnection(strConn))
        {
            connection.Open();
            try
            {
                string query = "select * from [dbo].[dbo_Maudon_Tracker] where [AssignedPersonId] = " + userInfo.UserID + ";";
                SqlCommand command = new SqlCommand(query, connection);

                DataSet ds = new DataSet();
                SqlDataAdapter dad = new SqlDataAdapter(query, connection);
                dad.Fill(ds);

                //Get all don thu
                DataTable allRecordDt = ds.Tables[0];
                if (allRecordDt.Rows.Count > 0)
                {
                    for (int i = 0; i < allRecordDt.Rows.Count; i++)
                    {
                        DataRow row = allRecordDt.Rows[i];
                        MauDonTracker tracker = new MauDonTracker();
                        tracker.id = Int32.Parse(row["id"] + "");
                        tracker.AssignerId = Int32.Parse(row["AssignerId"] + "");
                        tracker.AssignedPersonId = Int32.Parse(row["AssignedPersonId"] + "");
                        tracker.MaudonId = Int32.Parse(row["MaudonId"] + "");
                        tracker.CommentId = Int32.Parse(row["CommentId"] + "");
                        tracker.AssignDate = (DateTime)row["AssignDate"];
                        allTrackers.Add(tracker);
                    }
                }
            }
            catch (Exception ex)
            {

            }
            finally
            {
                connection.Close();
            }
        }
        return allTrackers;
    }

    public string GetPrettyDate(DateTime d)
    {
        // 1.
        // Get time span elapsed since the date.
        TimeSpan s = DateTime.Now.Subtract(d);

        // 2.
        // Get total number of days elapsed.
        int dayDiff = (int)s.TotalDays;

        // 3.
        // Get total number of seconds elapsed.
        int secDiff = (int)s.TotalSeconds;

        // 4.
        // Don't allow out of range values.
        if (dayDiff < 0 || dayDiff >= 31)
        {
            return null;
        }

        // 5.
        // Handle same-day times.
        if (dayDiff == 0)
        {
            // A.
            // Less than one minute ago.
            if (secDiff < 60)
            {
                return "just now";
            }
            // B.
            // Less than 2 minutes ago.
            if (secDiff < 120)
            {
                return "1 minute ago";
            }
            // C.
            // Less than one hour ago.
            if (secDiff < 3600)
            {
                return string.Format("{0} minutes ago",
                    Math.Floor((double)secDiff / 60));
            }
            // D.
            // Less than 2 hours ago.
            if (secDiff < 7200)
            {
                return "1 hour ago";
            }
            // E.
            // Less than one day ago.
            if (secDiff < 86400)
            {
                return string.Format("{0} hours ago",
                    Math.Floor((double)secDiff / 3600));
            }
        }
        // 6.
        // Handle previous days.
        if (dayDiff == 1)
        {
            return "yesterday";
        }
        if (dayDiff < 7)
        {
            return string.Format("{0} days ago",
                dayDiff);
        }
        if (dayDiff < 31)
        {
            return string.Format("{0} weeks ago",
                Math.Ceiling((double)dayDiff / 7));
        }
        return null;
    }
    #endregion

    #region Button actions
    protected void btnShowAllRecordTable_Click(object sender, EventArgs e)
    {
        currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();
        if (currentUser.UserID != -1)
        {
            System.Collections.Hashtable _ret = MauDon.ReadConfigFile();
            string[] chairmans = _ret["chairmans"].ToString().Split(';');
            bool isChairman = false;
            if (chairmans.Contains(currentUser.Username))
            {
                isChairman = true;
            }
            ViewAllMauDon(isChairman);
        }
    }
    protected void btnShowAssignedMauDonOfAPerson_Click(object sender, EventArgs e)
    {
        if (!String.IsNullOrEmpty(txtShowAssignedMauDonOfAPerson.Value))
        {
            ShowAssignedMauDonOfAPerson(Int32.Parse(txtShowAssignedMauDonOfAPerson.Value), divAssignedOfAPersonTable);
        }
    }
    protected void btnLogout_Click(object sender, EventArgs e)
    {
        // Logout user
        DotNetNuke.Security.PortalSecurity objPortalSecurity = new DotNetNuke.Security.PortalSecurity();
        objPortalSecurity.SignOut();

        // Redirect the user to the current page
        Response.Redirect(Globals.NavigateURL());
    }
    protected void btnShowMyDonThu_Click(object sender, EventArgs e)
    {
        currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();
        if (currentUser.UserID != -1)
        {
            ShowAssignedMauDonOfAPerson(currentUser.UserID, divMyMauDon);
        }
    }
    protected void btnShowMyComment_Click(object sender, EventArgs e)
    {
        currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();
        if (currentUser.UserID != -1)
        {
            ShowAllComment(currentUser.UserID, divMyComment);
        }
    }
    protected void btnProcessAssign_Click(object sender, EventArgs e)
    {
        currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();
        if (currentUser.UserID != -1)
        {
            System.Collections.Hashtable _ret = MauDon.ReadConfigFile();
            string[] chairmans = _ret["chairmans"].ToString().Split(';');
            bool isChairman = false;
            if (chairmans.Contains(currentUser.Username))
            {
                isChairman = true;
            }
            if (isChairman)
            {
                int maudon_id = Int32.Parse(txtAssignMaudonId.Text);
                int user_id = Int32.Parse(txtAssignUserId.Text);
                Assign(maudon_id, user_id, isChairman);
            }
        }
    }

    protected void btnShowAllRecords_Click(object sender, EventArgs e)
    {
        currentUser = DotNetNuke.Entities.Users.UserController.GetCurrentUserInfo();
        if (currentUser.UserID != -1)
        {
            System.Collections.Hashtable _ret = MauDon.ReadConfigFile();
            string[] chairmans = _ret["chairmans"].ToString().Split(';');
            bool isChairman = false;
            if (chairmans.Contains(currentUser.Username))
            {
                isChairman = true;
            }
            ViewAllMauDon(isChairman);
        }
    }
    #endregion
}

public class MauDonTracker
{
    internal int id;
    public int AssignerId { get; internal set; }
    public int AssignedPersonId { get; internal set; }
    public int MaudonId { get; internal set; }
    public int CommentId { get; internal set; }
    public DateTime AssignDate { get; internal set; }
}