<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="DesktopModules_QuanLyMauDon_Source_Dashboard_Default" %>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <!-- Cards CSS -->
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <!-- Loading screen CSS -->
    <style>
        .LockOn {
          display: block;
          visibility: visible;
          position: absolute;
          z-index: 999;
          top: 0px;
          left: 0px;
          width: 105%;
          height: 105%;
          background-color:white;
          vertical-align:bottom;
          padding-top: 20%;
          filter: alpha(opacity=75);
          opacity: 0.75;
          font-size:large;
          color:blue;
          font-style:italic;
          font-weight:400;
          background-image: url("../Images/loading.gif");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          }
        .hidden {
            display: none;
        }
    </style>
    <title>Nộp Đơn - Bảng thông tin tổng hợp</title>
</head>

<body>
    <form id="form1" runat="server">
        <div id="coverScreen"  class="LockOn"></div>
        <script>
            window.onload = function () {
                ShowOnlyDashboard();

                $("#coverScreen").hide();

                //Show AllRecordTable if there is data after btnShowAllRecordTable is clicked
                if ($('#<%=lblAllRecordTable.ClientID%>').html() != '') {
                    HideAll();
                    $('#maudon_link').attr('class', 'nav-link active');
                    $('#maudon').show();
                }

                ActiveReminder();
            }

            function ShowOnlyDashboard() {
                HideAll();
                $('#dashboard_link').attr('class', 'nav-link active');
                $('#dashboard').show();
            }

            function ActiveReminder() {
                //If there is a reminded that want to show assigned_maudon
                var reminder_panel = localStorage.getItem("panel");
                if (reminder_panel == 'assigned_maudon') {
                    HideAll();
                    $('#assigned_maudon_link').attr('class', 'nav-link active');
                    $('#assigned_maudon').show();
                    var hyperlink_id = localStorage.getItem("hyperlink_id");
                    if (hyperlink_id) {
                        $("a[id^=user_id_]").attr('class', '');
                        $('#' + hyperlink_id).attr('class', 'active');
                    }
                    //Clear reminder
                    localStorage.setItem("panel", "");
                    localStorage.setItem("hyperlink_id", "");
                } else if (reminder_panel == 'my_maudon') {
                    HideAll();
                    $('#my_maudon_link').attr('class', 'nav-link active');
                    $('#my_maudon').show();
                    localStorage.setItem("panel", "");
                } else if (reminder_panel == 'my_comment') {
                    HideAll();
                    $('#my_comment_link').attr('class', 'nav-link active');
                    $('#my_comment').show();
                    localStorage.setItem("panel", "");
                }
            }

            function GoTo(view) {
                HideAll();
                if (view == "Dashboard") {
                    ActiveMauDonChart();
                    $('#dashboard_link').attr('class', 'nav-link active');
                    $('#dashboard').show();
                } else if (view == 'ViewAllMauDon') {
                    $('#maudon_link').attr('class', 'nav-link active');
                    $('#maudon').show();
                    if ($('#<%=lblAllRecordTable.ClientID%>').html() == '') {
                        $("#coverScreen").show();
                        $('#<%=btnShowAllRecordTable.ClientID%>').click();
                    }
                } else if (view == 'ViewAssignedMauDonOfAPerson') {
                    $('#assigned_maudon_link').attr('class', 'nav-link active');
                    $('#assigned_maudon').show();
                } else if (view == 'ViewMyMauDon') {
                    $("#coverScreen").show();
                    localStorage.setItem("panel", "my_maudon");
                    $('#<%=btnShowMyDonThu.ClientID%>').click();
                } else if (view == 'ViewMyComment') {
                    $("#coverScreen").show();
                    localStorage.setItem("panel", "my_comment");
                    $('#<%=btnShowMyComment.ClientID%>').click();
                }
                return false;
            }

            function HideAll() {
                $('#maudon_link').attr('class', 'nav-link');
                $('#dashboard_link').attr('class', 'nav-link');
                $('#assigned_maudon_link').attr('class', 'nav-link');
                $('#my_maudon_link').attr('class', 'nav-link');
                $('#my_comment_link').attr('class', 'nav-link');
                $('#maudon').hide();
                $('#dashboard').hide();
                $('#assigned_maudon').hide();
                $('#my_maudon').hide();
                $('#my_comment').hide();
            }

            function Logout() {
                $('#<%=btnLogout.ClientID%>').click();
                return false;
            }
        </script>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <asp:HyperLink ID="hblHome" runat="server" CssClass="navbar-brand">Home</asp:HyperLink>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item dropdown notification">
                                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i><span class="indicator"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                    <li>
                                        <div class="notification-title">Notification</div>
                                        <div class="notification-list">
                                            <div class="list-group" runat="server" id="newest_comments"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-footer"><a href="#" onclick="return GoTo('ViewMyComment');">Xem tất cả tin nhắn</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown connection">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-th"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                    <li class="connection-list">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Hướng dẫn sử dụng" href="/quanlymaudon.aspx?md_page=help" class="connection-item" id="fa_th1">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/Help.png" alt="">
                                                    <span>Hướng dẫn sử dụng</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Quản lý đăng ký và môn học" href="/DesktopModules/QuanLyMauDon/Source/DangKyMonHoc/CourseManagement.aspx" class="connection-item" id="fa_th2">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/CourseManagement.png" alt="">
                                                    <span>Quản lý đăng ký và môn học</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Quản lý danh sách đơn sinh viên" href="/quanlymaudon.aspx?md_page=ticketmanagement" class="connection-item">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/clipboard-list-icon.png" alt="">
                                                    <span>Quản lý danh sách đơn sinh viên</span></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Thiết lập hệ thống Nộp Đơn" href="/quanlymaudon.aspx?md_page=systemconfiguration" class="connection-item">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/200561-200.png" alt="">
                                                    <span>Thiết lập hệ thống Nộp Đơn</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Văn thư" href="/vănthư.aspx" class="connection-item">
                                                    <img src="/DesktopModules/OnlineDocumentArchive/View/Images/add.png" alt=""><span>Văn thư</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Báo lỗi" href="/quanlymaudon.aspx?md_page=feedback" class="connection-item">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/Feedback.png" alt="">
                                                    <span>Báo lỗi</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle" runat="server" id="current_user_photo"/></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name" runat="server" id="user_display_name"></h5>
                                        <span class="status"></span><span class="ml-2" runat="server" id="user_type"></span>
                                    </div>
                                    <a class="dropdown-item" href="#" runat="server" id="user_link"><i class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="#" onclick="return Logout();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                    <asp:Button ID="btnLogout" runat="server" CssClass="hidden" Text="" OnClick="btnLogout_Click" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">Menu</li>
                                <li class="nav-item ">
                                    <a onclick="return GoTo('Dashboard');" id="dashboard_link" class="nav-link active" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-chart-bar"></i>Dashboard <span class="badge badge-success">6</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a onclick="return GoTo('ViewAssignedMauDonOfAPerson');" id="assigned_maudon_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-newspaper"></i>Thông tin xử lý đơn thư <span class="badge badge-success">6</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a onclick="return GoTo('ViewAllMauDon');" id="maudon_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-th"></i>Tất cả đơn thư <span class="badge badge-success">6</span></a>
                                </li>
                                <li class="nav-item ">
                                    <asp:Button ID="btnShowMyDonThu" runat="server" Text="" CssClass="hidden" OnClick="btnShowMyDonThu_Click" />
                                    <a onclick="return GoTo('ViewMyMauDon');" id="my_maudon_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-th"></i>Đơn thư do tôi phụ trách <span class="badge badge-success">6</span></a>
                                </li>
                                <li class="nav-item ">
                                    <asp:Button ID="btnShowMyComment" runat="server" Text="" CssClass="hidden" OnClick="btnShowMyComment_Click" />
                                    <a onclick="return GoTo('ViewMyComment');" id="my_comment_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-th"></i>Tin nhắn của tôi <span class="badge badge-success">6</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                        <div class="ecommerce-widget" id="maudon" style="display: none;">
                            <!-- Table of all records  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- basic table  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="mb-0">Danh sách các đơn thư</h2>
                                            <div class="form-group">
                                                <label for="ddlist-of-teachers">Số dòng dữ liệu: </label>
                                                <asp:DropDownList ID="ddlNumberOfRecords" runat="server" CssClass="form-control">
                                                    <asp:ListItem>100</asp:ListItem>
                                                    <asp:ListItem>500</asp:ListItem>
                                                    <asp:ListItem>1000</asp:ListItem>
                                                </asp:DropDownList>
                                            </div>
                                            <div class="form-group">
                                                <label for="ddlist-of-teachers">Từ ngày: </label>
                                                <asp:TextBox ID="txtAllRecordsFromDate" type="date" runat="server" CssClass="form-control"></asp:TextBox>
                                            </div>
                                            <div class="form-group">
                                                <asp:Button ID="btnShowAllRecords" CssClass="btn btn-space btn-secondary" runat="server" Text="Show" OnClick="btnShowAllRecords_Click" />
                                            </div>
                                            <asp:Button ID="btnShowAllRecordTable" CssClass="hidden" runat="server" Text="" OnClick="btnShowAllRecordTable_Click" />
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <script>
                                                    function Assign(maudon_id, td_id, current_assigned_person_id, current_assigned_person_username
                                                        , current_assigned_person_email, current_assigned_person_displayname) {
                                                        $('#<%=txtAssignMaudonId.ClientID%>').val(maudon_id);
                                                        $('#assign-panel').show();
                                                        var select = document.getElementById("ddlist-of-teachers");

                                                        //Clear all elements
                                                        var length = select.options.length;
                                                        for (i = length-1; i >= 0; i--) {
                                                            select.options[i] = null;
                                                        }

                                                        //Add first option
                                                        var first_option = document.createElement("option");
                                                        first_option.text = '--Xin chọn--';
                                                        first_option.value = 0;
                                                        select.add(first_option);

                                                        teachers.forEach(function (teacher) {
                                                            var res = teacher.split("|");
                                                            if (res.length = 3) {
                                                                var userId = res[0];
                                                                var email = res[1];
                                                                var displayName = res[2];

                                                                var option = document.createElement("option");
                                                                option.text = displayName;
                                                                option.value = userId;
                                                                select.add(option);
                                                            }
                                                        });
                                                        if (current_assigned_person_id) {
                                                            select.value = current_assigned_person_id;
                                                        }

                                                        //get donthu name and student name
                                                        var counter = 0;
                                                        var tr = $('#' + td_id).parent();
                                                        tr.find('td').each(function () {
                                                            if (counter == 1) {
                                                                $('#maudon-name').html($(this).html());
                                                            } else if (counter == 2) {
                                                                $('#student-name').html($(this).html());
                                                            } else if (counter == 3) {
                                                                $('#student-email').html($(this).html());
                                                            }
                                                            counter++;
                                                        });
                                                    }

                                                    function ProcessAssign() {
                                                        var is_confirm = $('#assign-cofirm:checkbox:checked').length
                                                        if (is_confirm == 0) {
                                                            alert("Xin xác nhận trước khi phân công người xử lý.");
                                                        } else {
                                                            var select = document.getElementById("ddlist-of-teachers");
                                                            if (select.value == 0) {
                                                                alert("Xin chọn một giáo viên.");
                                                            } else {
                                                                txtAssignUserId
                                                                $('#<%=txtAssignUserId.ClientID%>').val(select.value);
                                                                $('#<%=btnProcessAssign.ClientID%>').click();
                                                            }
                                                        }
                                                        return false;
                                                    }

                                                    function AfterAssign(is_sucess, message, maudonId, status, teacherUserName, teacherEmail, teacherDisplayName) {
                                                        if (is_sucess) {
                                                            var td_id = "assigned_person_link_" + maudonId;
                                                            var td_status_id = "assigned_status_" + maudonId;
                                                            var assignedPersonLink = "<a title='Username: " + teacherUserName + " | Email: " + teacherEmail + "'>" + teacherDisplayName + "</a>";
                                                            var row_status = "<span class='badge-dot badge-brand mr-1' style='background-color: orange;'></span>" + status + "";
                                                            console.log(td_id, td_status_id);
                                                            $('#' + td_id).html(assignedPersonLink);
                                                            $('#' + td_status_id).html(row_status);
                                                            alert(message);
                                                        } else {
                                                            alert(message);
                                                        }
                                                        CancelAssign();
                                                    }

                                                    function CancelAssign() {
                                                        //clear memory values
                                                        $('#<%=txtAssignMaudonId.ClientID%>').val('');
                                                        $('#<%=txtAssignUserId.ClientID%>').val('');

                                                        $('#maudon-name').html('');
                                                        $('#student-name').html('');
                                                        $('#student-email').html('');

                                                        //Hide assign panel
                                                        $('#assign-panel').hide();
                                                        return false;
                                                    }
                                                </script>
                                                <div class="card" style="display: none;" id="assign-panel">
                                                    <h3 class="card-header">Phân công người phụ trách xử lý</h3>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="maudon-name">Tên đơn thư: </label>
                                                            <span id="maudon-name"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="student-name">Tên sinh viên: </label>
                                                            <span id="student-name"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="student-email">Email: </label>
                                                            <span id="student-email"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ddlist-of-teachers">Danh sách giáo viên: </label>
                                                            <select class="form-control" id="ddlist-of-teachers"></select>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                                <label class="be-checkbox custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="assign-cofirm"><span class="custom-control-label">Tôi chắc chắn</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-6 pl-0">
                                                                <p class="text-right">
                                                                    <asp:TextBox ID="txtAssignMaudonId" runat="server" CssClass="hidden"></asp:TextBox>
                                                                    <asp:TextBox ID="txtAssignUserId" runat="server" CssClass="hidden"></asp:TextBox>
                                                                    <asp:Button ID="btnProcessAssign" runat="server" OnClick="btnProcessAssign_Click" Text="" CssClass="hidden" />
                                                                    <button type="submit" class="btn btn-space btn-primary" onclick="return ProcessAssign();">Assign</button>
                                                                    <button class="btn btn-space btn-secondary" onclick="return CancelAssign();">Cancel</button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <asp:Label ID="lblAllRecordTable" runat="server" Text=""></asp:Label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end basic table  -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- end table of all record -->
                        </div>
                        <!-- ============================================================== -->
                        <div class="ecommerce-widget" id="dashboard">
                            <div class="row" runat="server" id="bieu_do_maudon"></div>
                            <!-- Chairmain cards  -->
                            <!-- ============================================================== -->
                            <div class="row" runat="server" id="divChairmains"></div>
                            <!-- ============================================================== -->
                            <!-- end of Chairmain cards -->
                            <!-- Teacher cards  -->
                            <!-- ============================================================== -->
                            <div class="row" runat="server" id="divTeachers"></div>
                            <!-- ============================================================== -->
                            <!-- end of Teacher cards -->
                        </div>
                        <!-- ============================================================== -->
                        <div class="container-fluid  dashboard-content" id="assigned_maudon">
                            <script>
                                function ShowAssignMauDonOfAPerson(id) {
                                    var user_id = id.replace("user_id_", "");
                                    $('#<%=txtShowAssignedMauDonOfAPerson.ClientID%>').val(user_id);
                                    var currv = $('#<%=txtShowAssignedMauDonOfAPerson.ClientID%>').val();
                                    $("#coverScreen").show();
                                    //make a reminder before leaving
                                    localStorage.setItem("panel", "assigned_maudon");
                                    localStorage.setItem("hyperlink_id", id);
                                    $('#<%=btnShowAssignedMauDonOfAPerson.ClientID%>').click();
                                    return false;
                                }
                            </script>
                            <asp:Button ID="btnShowAssignedMauDonOfAPerson" CssClass="hidden" runat="server" Text="" OnClick="btnShowAssignedMauDonOfAPerson_Click" />
                            <asp:HiddenField ID="txtShowAssignedMauDonOfAPerson" runat="server" />
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h2>Danh sách các đơn thư được chỉ định cho từng thành viên</h2>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class='table table-striped table-bordered'>
                                                <tbody id="divDanhSachNguoiPhuTrachXuLyDonThu" runat="server"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div runat="server" id="divDanhSachNguoiPhuTrachXuLyDonThuMessage">Xin chọn 1 người để biết thông tin</div>
                                </div>
                            </div>
                            <div class="row" runat="server" id="divAssignedOfAPersonTable"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid  dashboard-content" id="my_maudon" style="display: none;">
                    <div class="row" runat="server" id="divMyMauDon"></div>
                </div>
                <div class="container-fluid  dashboard-content" id="my_comment" style="display: none;">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0">Tin nhắn của bạn</h2>
                                </div>
                                <div class="card-body" runat="server" id="divMyComment"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="assets/libs/js/main-js.js"></script>
        <!-- chart chartist js -->
        <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
        <!-- sparkline js -->
        <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
        <!-- morris js -->
        <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
        <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
        <!-- chart c3 js -->
        <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
        <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
        <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
        <!-- datatable js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/vendor/datatables/js/data-table.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    </form>
</body>

</html>
