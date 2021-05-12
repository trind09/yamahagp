<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
$is_admin = isset($_SESSION['username']);
$amount_of_record = 1000;
$from_date = "";
$pre_script_variables = "";

$virtual_path = "../assets/setting/";
$id = "";
$name = "";
$s_value = "";
$image = "";
$history = "";

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
	} else {
		$id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['s_name']);
		$s_value = $_POST['value'];
		//Case insert, id is always null
		if ($id == ''){
			echo '<script>alert("Bạn không được phép thêm thiết lập mới! Liên hệ Admin để biết thêm chi tiết.")</script>';
		} else {
			//Case update, id is always has value
			$picture = array();
			$error=array();
			if($_FILES['files']['name'][0] != ""){
				$extension=array("jpeg","jpg","png","gif");
				foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
					$file_name=$_FILES["files"]["name"][$key];
					$file_tmp=$_FILES["files"]["tmp_name"][$key];
					$ext=pathinfo($file_name,PATHINFO_EXTENSION);

					if(in_array($ext,$extension)) {
						if(!file_exists($virtual_path.$file_name)) {
							move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key], $virtual_path.$file_name);
							array_push($picture, $virtual_path . $file_name);
						}
						else {
							$filename=basename($file_name,$ext);
							$newFileName=$filename.time().".".$ext;
							move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$virtual_path.$newFileName);
							array_push($picture, $virtual_path . $newFileName);
						}
					}
					else {
						array_push($error,"$file_name, ");
						break;
					}
				}
			}
			if (count($error) > 0){
				//remove uploaded files if error
				foreach ($picture as &$s_value) {
					unlink($s_value);
				}
				ShowMessage('Incorrect image extension! ' . implode ("|", array_filter($error)), false);
			} else {
				//Remove deleted images
				$existing_images = array();
				if (isset($_POST['remove_image_indexes'])){
					$remove_image_indexes = strip_tags($_POST['remove_image_indexes']);
					$remove_image_indexes = explode("|", $remove_image_indexes);
					$remove_image_indexes = array_filter($remove_image_indexes, 'strlen');
					$existing_images = RemoveAutionProductImages($remove_image_indexes, $id, $pdo);
				}
				$picture = implode ("|", array_filter($picture)) . '|' . implode ("|", array_filter($existing_images));
				$picture = trim($picture, "|"); //Remove start and end | 
				$history = "Update by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";

				$sql = "UPDATE `setting` SET `value`=?, history = IFNULL(CONCAT(history, '" . $history . "'), '" . $history . "') WHERE id = ?";
                $statement = $pdo->prepare($sql);
				if ($picture != ""){
					$statement->execute(array($picture, $id));
				} else {
					$statement->execute(array($s_value, $id));
				}
				BuildUpdateFields($id, $pdo, $domain);
				ShowMessage('Successful', true);
			}
		}
	}
} else if (isset($_POST['update_button'])){
	$id = strip_tags($_POST['id']);
	BuildUpdateFields($id, $pdo, $domain);
} else if (isset($_POST['reset_setting'])){
	//Remove all current settings
	$sql = "DELETE FROM setting;";
	$statement = $pdo->prepare($sql);
	$statement->execute();
	//Setup default settings
	CheckSettingData($pdo);
} else if (isset($_POST['backup_setting'])) {
	BackupSettingData($pdo);
}

function ValidateData($post_date){
	$message = "";
	/*$name = strip_tags($post_date['name']);
	if ($name == ""){
		$message .= "Xin điền tên hình ảnh</br>";
	}*/
	return $message;
}

function BuildUpdateFields($id, $pdo, $domain){
	global $id; global $image; global $name; global $s_value; global $history;
	if ($id != ''){
		$sql = "SELECT * FROM setting WHERE id = " . $id;

		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if (count($result) > 0)
		{
			foreach ($result as $row)
			{
				if (IsFileString($row["value"])){
					$img_url_array = GetImageLinks($row["value"], $domain);
					$image = '<div class="row">';
					$index = 0;
					foreach ($img_url_array as $img_url)
					{
						$image .= '<div id="image' . $index . '" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><a target="_blank" href="' . $img_url . '"><img style="width: 300px; height: 300px; padding: 2px;" src="' . $img_url . '" /></a>'
						. '<a style="cursor: pointer;color: #ff9900;font-weight: bold;font-size: 15px;padding: 2px;" onclick="RemoveImage(' . $index . ')">Xóa</a></div>';
						$index++;
					}
					$image .= '</div>';
					$s_value = "";
				} else {
					$image = "";
					$s_value = $row["value"];
				}
				$id = $row["id"];
				$name = $row["name"];
				$history = $row["history"];
			}
		}
	}
}

function RemoveAutionProductImages($image_indexes, $id, $pdo){
	$array = array();
	$sql = "SELECT * FROM setting WHERE id = " . $id;

	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		if (IsFileString($result[0]["value"])){
			if(!IsArrayEmpty($image_indexes)){
				$picture = $result[0]["value"];
				$pieces = array_filter(explode("|", $picture));
				$counter = 0;
				foreach ($pieces as $piece) {
					if(IsItemInArray($counter, $image_indexes)) {
						unlink($piece);
					} else {
						array_push($array,$piece);
					}
					$counter++;
				}
			} else {
				if (isset($result[0]["value"])){
					$picture =  $result[0]["value"];
					$array = array_filter(explode("|", $picture));
				}
			}
		} else {
			return $array;
		}
	}
	return $array;
}
?>
<script>
	function ClearSearch(){
		$('#amount_of_record').val('');
		$('#from_date').val('');
		return true;
	}

	function ClearForm(){
		var today = new Date();
		var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
		var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		var dateTime = date + 'T' + time;

		$('#id').val('');
		$('#remove_image_indexes').val('');
		$('#name').val('');
		$('#category').val('');
		$('#editor1').code('');
		$('#files').val('');
		$('#image_panel').empty();
		return false;
	}

	function ResetSettings() {
		var result = confirm("This action will reset all of your current settings to default. Are you sure to proceed?");
		if (result) {
			return true;
		} else {
			return false;
		}
	}

	function BackupSettings(){
		var result = confirm("This action will backup all of your current settings. Current settings will be your default settings. Are you sure to proceed?");
		if (result) {
			return true;
		} else {
			return false;
		}
	}

	function UpdateRecord(element) {
		$('#id').val(element.id);
		$('#update_button').click();
	}

	function RemoveImage(index){
		var current_remove_image_indexes = $('#remove_image_indexes').val();
		if (current_remove_image_indexes != ''){
			$('#remove_image_indexes').val(current_remove_image_indexes + "|" + index);
		} else {
			$('#remove_image_indexes').val(index);
		}
		$('#image' + index).remove();
	}
</script>
<div class="dashboard-wrapper" id="caulacbo_pannel">
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
                                    <h2 class="mb-0">Thiết lập hệ thống</h2>
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
									<h2 class="mb-0">Sửa dữ liệu</h2>
									<input type="hidden" name="id" id="id" value="<?php echo($id); ?>" />
									<input type="hidden" name="remove_image_indexes" id="remove_image_indexes" value="<?php echo($remove_image_indexes); ?>" />
									<input type="hidden" name="history" id="history" value="<?php echo($history); ?>" />
									<input type="hidden" name="s_name" id="s_name" value="<?php echo($name); ?>" />
									<button type="submit" id="update_button" name="update_button" style="display: none;"></button>
                                    <input type="hidden" id="category" name="category" />
                                    
                                     <script>
                                        var default_father_category_val = $('#father_category').children("option:selected").val();
                                        $("#father_category").change(function(){
                                            $('.child_category_class').hide();
                                            var thai = $(this).find(":selected").attr('thai');
                                            $('#' + thai).show();

                                            var selected_val = $(this).children("option:selected").val();
                                            SetCategory(selected_val);
                                        });

                                        $("#child_category").change(function(){
                                            var selected_val = $(this).children("option:selected").val();
                                            SetCategory(selected_val);
                                        });

                                        function SetCategory(selected_val){
                                            if (selected_val != default_father_category_val){
                                                var default_val = $("#child_category").children("option:selected").val();
                                                $('#category').val(default_val);
                                            } else {
                                                $('#category').val(selected_val);
                                            }
                                        }

                                        $(function() {
                                            SetCategory(default_father_category_val);
                                        });
                                       </script>
                                    <div class="form-group">
                                        <label for="name">Name: </label>
                                        <input disabled type="text" class="form-control" name="name" id="name" value="<?php echo($name); ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Value: </label>
										<textarea class="form-control" id="value" name="value" rows="4" cols="50"><?php echo($s_value); ?></textarea>
                                    </div>
									<div class="form-group">
										<script>
											$(function() {
												 $("#files").change(function (){
													var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
													$("#value").val(fileName);
												 });
											  });
										</script>
                                        <label for="upload">Hình ảnh: </label>
										<input type="file" class="form-control" name="files[]" id="files" multiple>
										<div id="image_panel"><?php echo($image) ?></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-space btn-success" id="insert_update" name="insert_update">Submit</button>
										<button type="submit" class="btn btn-space btn-dark" name="cancel_insert_update" onclick="return ClearForm();">Cancel</button>
										<button type="submit" class="btn btn-space btn-info" style="position: absolute; right: 150;" name="backup_setting" onclick="return BackupSettings();">Backup Settings</button>
										<button type="submit" class="btn btn-space btn-danger" style="position: absolute; right: 0;" name="reset_setting" onclick="return ResetSettings();">Reset All Settings</button>
                                    </div>
                                </div>
                               
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id='example' class='table table-striped table-bordered second dataTable'>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Value</th>
                                                    <th>Ngày Khởi Tạo</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($is_admin)
                                                {
													CheckSettingData($pdo);
													$sql = "SELECT * FROM setting ORDER BY create_date DESC LIMIT " . $amount_of_record;
													if ($from_date != "")
													{
														$sql = "SELECT * FROM setting where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
													}

													$statement = $pdo->prepare($sql);
													$statement->execute();
													$result = $statement->fetchAll(PDO::FETCH_ASSOC);

													if (count($result) > 0)
													{
														$counter = 1;

														foreach ($result as $row)
														{
															$s_value = "";
															if (IsFileString($row["value"])){
																$img_url_array = GetImageLinks($row["value"], $domain);
																foreach ($img_url_array as $img_url)
																{
																	$s_value .= '<a target="_blank" href="' . $img_url . '">' . $img_url . '</a><br/>';
																}
															} else {
																$s_value = $row["value"];
															}
															$id = $row["id"];
                                                            $name = $row["name"];
															$create_date = date_create($row["create_date"]);
															echo ("<tr>");
															echo ("<td>" . $counter . "</td>" . "
																<td><div class='scrollable'>" . $name . "</div></td>" . "
																<td><div class='scrollable'>" . $s_value . "</div></td>" . "
																<td><div class='scrollable'>" . date_format($create_date, "d-m-Y H:i:s") . "</div></td>" . "
																<td><div class='scrollable'><a id='" . $id . "' style='cursor: pointer; color: green;' onclick='UpdateRecord(this);'>Update</a></td>");
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
                                                    <th>Name</th>
                                                    <th>Value</th>
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
<?php
function CheckSettingData($pdo){
	$sql = "SELECT count(*) FROM `setting`"; 
	$result = $pdo->prepare($sql); 
	$result->execute(); 
	$number_of_rows = $result->fetchColumn(); 

	if ($number_of_rows == 0)
	{
		$_ENV = ReadEnvironmentSettingFile();
		if ($_ENV){
			foreach ($_ENV as $key => $value)
			{
				$history = "Insert by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";
				$sql = "INSERT INTO setting (name, value, history) VALUES "
						. "(?,?,'" . $history . "');";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($key, $value));
			}
		}
	}
}

function BackupSettingData($pdo){
	$history = "Backup_by_" . $_SESSION['username'] . " - " . date("Y-m-d H-i-s") . ".env";
	$file_path = realpath(dirname(__FILE__) . '/../..') . '/assets/setting/.env';
	$backup_file_path = realpath(dirname(__FILE__) . '/../..') . '/assets/setting/' . $history;
	if ( !file_exists( $file_path ) || !is_readable( $file_path ) ) {
		throw new Exception( 'The .env file is not found or unreadable.' );
	}
	else {
		$sql = "SELECT * FROM setting;";
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		if (count($result) > 0)
		{
			//Backup current env file
			copy($file_path,$backup_file_path);
			//clear the file before add new lines
			file_put_contents($file_path, "");
			foreach ($result as $row)
			{
				$contents = $row['name'] . "=" . $row['value'];
				file_put_contents($file_path, $contents . "\n", FILE_APPEND);
			}
		}
	}
}

//Source: https://gist.github.com/brandonkramer/81939c8d528ab0e6cc763ec74d74e8d1/revisions
function ReadEnvironmentSettingFile() {
	try {
		/**
		 * Throw exception if not found or is unreadable
		 */
		$root = realpath(dirname(__FILE__) . '/../..');
		 
		if ( !file_exists( $root . '/assets/setting/.env' ) || !is_readable( $root . '/assets/setting/.env' ) ) {
			throw new Exception( 'The .env file is not found or unreadable.' );
		}
		/**
		 * Get the .env file, ignore new and empty lines.
		 */
		$_ENV = file( $root . '/assets/setting/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );

		/**
		 * Check if we are dealing with an array
		 */
		if ( is_array( $_ENV ) ) {

			/**
			 * Catch settings and create an readable array
			 */
			$_ENV = array_column( array_map( function ( $_ENV_VAR ) {
				if ( substr( $_ENV_VAR, 0, 1 ) !== '#' && strpos( $_ENV_VAR, '=' ) !== false ) {
					list( $key, $value ) = explode( '=', trim( $_ENV_VAR ), 2 );
					return [ $key, $value ];
				}
			}, $_ENV ), 1, 0 );
		} else throw new Exception( 'The .env file is not found or unreadable.' );

		/**
		 * Handle exceptions
		 */
	} catch ( Exception $e ) {
	   echo $e->getMessage();
	   return null;
	} finally {

		/**
		 * Globalize environment settings array
		 */
		global $_ENV;
		return $_ENV;
	}
}
?>