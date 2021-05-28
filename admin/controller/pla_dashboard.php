<?php
$is_admin = isset($_SESSION['username']);
$amount_of_record = 1000;
$from_date = "";
$pre_script_variables = "";

$plan_file_path = "../assets/plan/";
$id = "";
$title = "";
$description = "";
$hyperlink = "";
$is_file = true;
$error=array();
$remove_image_indexes = "";

if (isset($_POST['amount_of_record']))
{
    $amount_of_record = strip_tags($_POST['amount_of_record']);
    if ($amount_of_record == "")
    {
        $amount_of_record = 1000;
    }
}

if (isset($_POST['from_date'])){
	$from_date = strip_tags($_POST['from_date']);
	if ($from_date != "")
	{
		$time = strtotime($from_date);
		$from_date = date('Y-m-d', $time);
	}
}

//Insert or update table caulacbo
if (isset($_POST['insert_update'])){
	$message = ValidateData($_POST);
	if ($message != ""){
		ShowMessage($message, false);
		$title = strip_tags($_POST['title']);
		$description = strip_tags($_POST['description']);
	} else {
		$id = strip_tags($_POST['id']);
		$title = strip_tags($_POST['title']);
		$description = strip_tags($_POST['description']);
		GetHyperlink($pdo);
		if (count($error) == 0){
			//Case insert, id is always null
			if ($id == ''){
				$history = "Insert by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";
				$sql = "INSERT INTO plan (title,description,hyperlink, history) VALUES "
					. "(?,?,?,?)";
					$statement = $pdo->prepare($sql);
					$statement->execute(array( $title, $description, $hyperlink, $history));
					$register_id = $pdo->lastInsertId();
		
				if ($register_id != 0){
					$title = "";
					$description = "";
					$hyperlink = "";
					echo('<script>alert("Successful");</script>');
				} else {
					echo('<script>alert("Fail!");</script>');
				}
			} else {
				//Case update, id is always has value
				$error=array();
				$history = "Update by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";

				$sql = "UPDATE `plan` SET `title`=?,`description`=?,`hyperlink`=?, history = IFNULL(CONCAT(history, '" . $history . "'), '" . $history . "') WHERE id = ?";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($title, $description, $hyperlink, $id));
				BuildUpdateFields($id, $pdo, $domain);
				ShowMessage('Successful', true);
			}
		}
	}
} else if (isset($_POST['update_button'])){
	$id = strip_tags($_POST['id']);
	BuildUpdateFields($id, $pdo, $domain);
} else if (isset($_POST['delete_button'])){
	$id = strip_tags($_POST['id']);
	DeleteRecord($id, $pdo);
}

function GetHyperlink($pdo){
	global $hyperlink; global $plan_file_path; global $id; global $error;
	if (!file_exists($plan_file_path)) {
		mkdir($plan_file_path, 0777, true);
	}
	$hyperlink_option = strip_tags($_POST['hyperlink_option']);

	if ($hyperlink_option == '0'){
		$image_name = array();
		$error=array();
		if($_FILES['files']['name'][0] != ""){
			$extension=array("jpeg","jpg","png","gif","doc","docx","xls","xlsx","pdf","ppt","pptx","txt");
			foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
				$file_name=$_FILES["files"]["name"][$key];
				$file_tmp=$_FILES["files"]["tmp_name"][$key];
				$ext=pathinfo($file_name,PATHINFO_EXTENSION);
				if(in_array($ext,$extension)) {
					if(!file_exists($plan_file_path.$file_name)) {
						move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key], $plan_file_path.$file_name);
						array_push($image_name, $plan_file_path . $file_name);
					}
					else {
						$filename=basename($file_name,$ext);
						$newFileName=$filename.time().".".$ext;
						move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$plan_file_path.$newFileName);
						array_push($image_name, $plan_file_path . $newFileName);
					}
				}
				else {
					array_push($error,"$file_name, ");
					break;
				}
			}
		}
		if (count($error) > 0){
			echo('<script>alert("Incorrect image extension! ' . implode ("|", array_filter($error)) . '");</script>');
		} else {
			if (count($image_name) > 0)
			{
				$hyperlink = $image_name[0];
				if ($id != ''){
					RemoveOldFiles($pdo);
				}
			} else {
				$hyperlink = "";
			}
		}
	} else {
		$hyperlink = strip_tags($_POST['hyperlink']);
		if ($id != ''){
			RemoveOldFiles($pdo);
		}
	}
}

function RemoveOldFiles($pdo){
	global $id; 
	$sql = "SELECT * FROM plan WHERE id = " . $id;

	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		foreach ($result as $row)
		{
			$hyperlink = $row["hyperlink"];
			if(file_exists($hyperlink)) {
				unlink($hyperlink);
			}
		}
	}
}

function DeleteRecord($id, $pdo){
	if ($id != ''){
		try{
			$sql = "SELECT * FROM plan WHERE id = " . $id;

			$statement = $pdo->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			$sql = "DELETE FROM plan WHERE id = " . $id;

			$statement = $pdo->prepare($sql);
			$statement->execute();

			ShowMessage('Successful', true);
		} catch (Exception $e){
			ShowMessage('Fail', false);
		}
	}
}

function ValidateData($post_data){
	$message = "";
	$title = strip_tags($post_data['title']);
	if ($title == ""){
		$message .= "Xin điền tiêu đề</br>";
	}
	return $message;
}

function BuildUpdateFields($id, $pdo, $domain){
	global $id; global $title; global $description; global $hyperlink; global $is_file;
	if ($id != ''){
		$sql = "SELECT * FROM plan WHERE id = " . $id;

		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if (count($result) > 0)
		{
			foreach ($result as $row)
			{
				$id = $row["id"];
				$title = $row["title"];
				$description = $row["description"];
				$hyperlink = $row["hyperlink"];
				if ($hyperlink == ""){
					$is_file = false;
				} else {
					if (filter_var($hyperlink, FILTER_VALIDATE_URL)) { 
						$is_file = false;
					} else {
						$is_file = true;
					}
				}
			}
		}
	}
}
?>
<script>
	function ClearSearch(){
		$('#amount_of_record').val('');
		$('#from_date').val('');
		return true;
	}

	function ClearForm(){
		$('#id').val('');
		$('#remove_image_indexes').val('');
		$('#title').val('');
		$('#description').val('');
		$('#editor1').code('');
		$('#hyperlink').val('');
		$('#author').val('');
		$('#files').val('');
		$('#image_panel').empty();
		return false;
	}

	function UpdateRecord(element) {
		$('#id').val(element.id);
		$('#update_button').click();
	}

	function RemoveRecord(element){
		if (confirm("Are you sure?")){
			$('#id').val(element.id);
			$('#delete_button').click();
		}
	}
</script>
<div class="dashboard-wrapper" id="plan_pannel">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">
                <!-- Table of all records  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <form id="clb" action="" method="post" enctype='multipart/form-data'>
                                <!-- Header controls -->
                                <div class="card-header">
                                    <h2 class="mb-0" id="page-title">Danh sách bản tin</h2>
                                    <div class="form-group">
                                        <label for="amount_of_record">Số dòng dữ liệu: </label>
                                        <select name="amount_of_record" id="amount_of_record" class="form-control">
                                            <?php
                                            $arr = array(100, 500, 1000);
                                            foreach ($arr as &$value) {
                                            if ($amount_of_record == $value)
                                            {
                                            echo('
                                            <option value="' . $value . '" selected>' . $value . '</option>');
                                            } else {
                                            echo('<option value="' . $value . '">' . $value . '</option>');
                                            }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="from_date">Từ ngày: </label>
                                        <input type="date" class="form-control" name="from_date" id="from_date" value="<?php echo($from_date); ?>" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-space btn-primary" id="search" name="search">Show</button>
                                        <button type="submit" class="btn btn-space btn-secondary" name="cancel_search" onclick="return ClearSearch();">Clear</button>
                                    </div>
                                </div>

                                <!-- Table controls -->
                                <div class="card-header">
									<h2 class="mb-0">Thêm hoặc sửa dữ liệu</h2>
									<input type="hidden" name="id" id="id" value="<?php echo($id); ?>" />
									<button type="submit" id="update_button" name="update_button" style="display: none;"></button>
									<button type="submit" id="delete_button" name="delete_button" style="display: none;"></button>
                                    <div class="form-group">
                                        <label for="title">Tiêu đề: <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?php echo($title); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="description">Nội dung: </label>
										<textarea class="form-control" id="description" name="description" rows="4" cols="50"><?php echo($description); ?></textarea>
                                    </div>
									<div class="form-group">
										<script>
											function loadJQuery(){
												var waitForLoad = function () {
													if (typeof jQuery != "undefined") {
														setupCheckboxForUploadMode();     
													} else {
														window.setTimeout(waitForLoad, 500);
													}
												 };
												 window.setTimeout(waitForLoad, 500);   
											}

											document.addEventListener('DOMContentLoaded', loadJQuery);

											function setupCheckboxForUploadMode(){
												$(".select_upload_file_mode").change(function() {
													if(this.checked) {
														if (this.value == 0){
															$('#files').show();
															$('#hyperlink').hide();
														} else {
															$('#files').hide();
															$('#hyperlink').show();
														}
													}
													$('.select_upload_file_mode').not(this).prop('checked', false);
												});
											}
										</script>
                                        <label for="files">Tập tin: </label>
										<?php if ($is_file){?>
											<input type="file" class="form-control" name="files[]" id="files">
											<input type="text" class="form-control" name="hyperlink" id="hyperlink" value="<?php echo($hyperlink); ?>" style="display:none;"/>
										<?php } else {?>
											<input type="file" class="form-control" name="files[]" id="files" style="display:none;">
											<input type="text" class="form-control" name="hyperlink" id="hyperlink" value="<?php echo($hyperlink); ?>" />
										<?php }?>
										<div id="file_panel"><?php echo($hyperlink) ?></div>
                                    </div>
									<div class="form-group">
										<?php if ($is_file){?>
											<input class="select_upload_file_mode" type="radio" checked id="hyperlink_option1" name="hyperlink_option" value="0" style="display: table-row;">
											<label for="hyperlink_option1"> Tải lên tập tin</label><br>
											<input class="select_upload_file_mode" type="radio" id="hyperlink_option2" name="hyperlink_option" value="1" style="display: table-row;">
											<label for="hyperlink_option2"> Đường dẫn ngoài</label><br>
										<?php } else {?>
											<input class="select_upload_file_mode" type="radio" id="hyperlink_option1" name="hyperlink_option" value="0" style="display: table-row;">
											<label for="hyperlink_option1"> Tải lên tập tin</label><br>
											<input class="select_upload_file_mode" type="radio" checked id="hyperlink_option2" name="hyperlink_option" value="1" style="display: table-row;">
											<label for="hyperlink_option2"> Đường dẫn ngoài</label><br>
										<?php }?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-space btn-success" id="insert_update" name="insert_update">Submit</button>
										<button type="submit" class="btn btn-space btn-danger" name="cancel_insert_update" onclick="return ClearForm();">Cancel</button>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id='example' class='table table-striped table-bordered second dataTable'>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tiêu đề</th>
													<th>Nội dung</th>
                                                    <th>Link Ngoài</th>
                                                    <th>Ngày Khởi Tạo</th>
													<th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($is_admin)
                                                {
													$sql = "SELECT * FROM plan ORDER BY create_date DESC LIMIT " . $amount_of_record;
													if ($from_date != "")
													{
														$sql = "SELECT * FROM plan where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
													}

													$statement = $pdo->prepare($sql);
													$statement->execute();
													$result = $statement->fetchAll(PDO::FETCH_ASSOC);

													$allRecordTable = "";

													if (count($result) > 0)
													{
														$counter = 1;

														foreach ($result as $row)
														{
															$id = $row["id"];
															$title = $row["title"];
															$hyperlink = $row["hyperlink"];
															$description = $row["description"];
															$create_date = date_create($row["create_date"]);

															echo ("<tr>");
															echo ("<td>" . $counter . "</td>" . "
																<td><div class='scrollable'>" . $title . "</div></td>" . "
																<td><div class='scrollable'>" . $description . "</div></td>" . "
																<td><div class='scrollable'>" . $hyperlink . "</div></td>" . "
																<td><div class='scrollable'>" . date_format($create_date, "d-m-Y H:i:s") . "</div></td>" . "
																<td><div class='scrollable'><a id='" . $id . "' style='cursor: pointer; color: green;' onclick='UpdateRecord(this);'>Update</a>" . "
																&nbsp;<a id='" . $id . "' style='cursor: pointer; color: orange;' onclick='RemoveRecord(this);'>Delete</a></td>");
															echo ("</tr>");

															$counter++;
														}
														if ($counter == 1)
														{
															echo ("No record");
														}
													}
													else
													{
														echo ("No record");
													}
                                                }
                                                else
                                                {
													if (headers_sent())
													{
														echo ("<script>window.location.href = 'login.php';</script>");
													}
													else
													{
														exit(header("Location: login.php"));
													}
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
												    <th>#</th>
                                                    <th>Tiêu đề</th>
													<th>Nội dung</th>
                                                    <th>Link Ngoài</th>
                                                    <th>Ngày Khởi Tạo</th>
													<th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end table of all record -->
            </div>
        </div>
    </div>
</div>