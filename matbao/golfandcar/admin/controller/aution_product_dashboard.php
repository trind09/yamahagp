<?php
$is_admin = isset($_SESSION['username']);
$amount_of_record = 1000;
$from_date = "";
$pre_script_variables = "";

$virtual_path = "../assets/aution_product/";
$id = "";
$pro_name = "";
$pro_short_description = "";
$pro_description = "";
$pro_type = "";
$price = "";
$currency = "";
$start_date = "";
$end_date = "";
$image = "";
$extra_option = "";
$remove_image_indexes = "";
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
		$pro_name = strip_tags($_POST['pro_name']);
		$pro_short_description = strip_tags($_POST['pro_short_description']);
		$pro_description = $_POST['pro_description'];
		$price = strip_tags($_POST['price']);
		$start_date = strip_tags($_POST['start_date']);
		$end_date = strip_tags($_POST['end_date']);
		$extra_option = strip_tags($_POST['extra_option']);
	} else {
		$id = strip_tags($_POST['id']);
		$pro_name = strip_tags($_POST['pro_name']);
		$pro_short_description = strip_tags($_POST['pro_short_description']);
		$pro_description = $_POST['pro_description'];
		$pro_type = strip_tags($_POST['pro_type']);
		$price = strip_tags($_POST['price']);
		$currency = strip_tags($_POST['currency']);
		$start_date = strip_tags($_POST['start_date']);
		$end_date = strip_tags($_POST['end_date']);
		$extra_option = strip_tags($_POST['extra_option']);
		//Case insert, id is always null
		if ($id == ''){
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
				foreach ($picture as &$value) {
					unlink($value);
				}
				ShowMessage('Incorrect image extension! ' . implode ("|", array_filter($error)), false);
			} else {
				$history = "Insert by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";
				$picture = implode ("|", array_filter($picture));
				$sql = "INSERT INTO auction_product (picture, pro_name, pro_short_description, pro_description, pro_type, price, currency, start_date , end_date, extra_option, history) VALUES "
					. "(?,?,?,?,?,?,?,?,?,?,?)";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($picture, $pro_name, $pro_short_description, $pro_description, $pro_type, $price, $currency, $start_date, $end_date, $extra_option, $history));
				$register_id = $pdo->lastInsertId();
		
				if ($register_id != 0){
					$pro_name = "";
					$pro_short_description = "";
					$pro_description = "";
					$pro_type = "";
					$price = "";
					$currency = "";
					$start_date = "";
					$end_date = "";
					$extra_option = "";
					ShowMessage('Successful', true);
				} else {
					ShowMessage('Fail', false);
				}
			}
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
				foreach ($picture as &$value) {
					unlink($value);
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

				$sql = "UPDATE `auction_product` SET `picture`=?,`pro_name`=?,`pro_short_description`=?,`pro_description`=?,`pro_type`=?,`price`=?,`currency`=?,`start_date`=?,`end_date`=?,`extra_option`=?, history = IFNULL(CONCAT(history, '" . $history . "'), '" . $history . "') WHERE id = ?";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($picture, $pro_name, $pro_short_description, $pro_description, $pro_type, $price, $currency, $start_date, $end_date, $extra_option, $id));
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

function ValidateData($post_date){
	$message = "";
	$pro_name = strip_tags($post_date['pro_name']);
	if ($pro_name == ""){
		$message .= "Xin điền tên sản phẩm</br>";
	}
	$price = strip_tags($post_date['price']);
	if (!is_numeric($price)){
		$message .= "Xin điền giá sản phẩm</br>";
	}
	$start_date = strip_tags($post_date['start_date']);
	if ($start_date == ""){
		$message .= "Xin điền ngày bắt đầu đấu giá</br>";
	}
	$end_date = strip_tags($post_date['end_date']);
	if ($end_date == ""){
		$message .= "Xin điền ngày kết thúc đấu giá</br>";
	} else {
		try{
			$start_date = new DateTime($start_date);
			$end_date = new DateTime($end_date);
			if ($end_date <= $start_date){
				$message .= "Ngày kết thúc phải lớn hơn ngày băt đầu</br>";
			}
		} catch (Exception $e){
			
		}
	}
	return $message;
}

function DeleteRecord($id, $pdo){
	if ($id != ''){
		try{
			$sql = "SELECT * FROM auction_product WHERE id = " . $id;

			$statement = $pdo->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			if (count($result) > 0)
			{
				$picture = $result[0]["picture"];
				$pieces = array_filter(explode("|", $picture));
				foreach ($pieces as $piece) {
					unlink($piece);
				}
			}

			$sql = "DELETE FROM auction_product WHERE id = " . $id;

			$statement = $pdo->prepare($sql);
			$statement->execute();
			ShowMessage('Successful', true);
		} catch (Exception $e){
			ShowMessage($e, false);
		}
	}
}

function BuildUpdateFields($id, $pdo, $domain){
	global $image; global $id; global $pro_name; global $pro_short_description; global $pro_description; global $pro_type; global $price; global $currency; global $start_date; global $end_date; global $extra_option; global $history;
	if ($id != ''){
		$sql = "SELECT * FROM auction_product WHERE id = " . $id;

		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if (count($result) > 0)
		{
			foreach ($result as $row)
			{
				$img_url_array = GetImageLinks($row["picture"], $domain);
				if (count($img_url_array) > 0){
					$image = '<div class="row">';
					$index = 0;
					foreach ($img_url_array as $img_url)
					{
						$image .= '<div id="image' . $index . '" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><a target="_blank" href="' . $img_url . '"><img style="width: 300px; height: 300px; padding: 2px;" src="' . $img_url . '" /></a>'
						. '<a style="cursor: pointer;color: #ff9900;font-weight: bold;font-size: 15px;padding: 2px;" onclick="RemoveImage(' . $index . ')">Xóa</a></div>';
						$index++;
					}
					$image .= '</div>';
				}
				$id = $row["id"];
				$pro_name = $row["pro_name"];
				$pro_short_description = $row["pro_short_description"];
				$pro_description = $row["pro_description"];
				$pro_type = $row["pro_type"];
				$price = $row["price"];
				$currency = $row["currency"];
				$start_date = $row["start_date"];
				$end_date = $row["end_date"];
				$extra_option = $row["extra_option"];
				$history = $row["history"];
			}
		}
	}
}

function RemoveAutionProductImages($image_indexes, $id, $pdo){
	$array = array();
	$sql = "SELECT * FROM auction_product WHERE id = " . $id;

	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		if(!IsArrayEmpty($image_indexes)){
			$picture = $result[0]["picture"];
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
			if (isset($result[0]["picture"])){
				$picture =  $result[0]["picture"];
				$array = array_filter(explode("|", $picture));
			}
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
		$('#pro_name').val('');
		$('#pro_short_description').val('');
		$('#editor1').code('');
		$('#pro_type').val('');
		$('#price').val('');
		$('#currency').val('');
		$('#start_date').val(dateTime);
		$('#end_date').val(dateTime);
		$('#extra_option').val('');
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
                                    <h2 class="mb-0">Danh sách sản phẩm đấu giá</h2>
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
									<input type="hidden" name="remove_image_indexes" id="remove_image_indexes" value="<?php echo($remove_image_indexes); ?>" />
									<input type="hidden" name="history" id="history" value="<?php echo($history); ?>" />
									<button type="submit" id="update_button" name="update_button" style="display: none;"></button>
									<button type="submit" id="delete_button" name="delete_button" style="display: none;"></button>
                                    <div class="form-group">
                                        <label for="pro_name">Tên sản phẩm: <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="pro_name" id="pro_name" value="<?php echo($pro_name); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="pro_short_description">Mô tả ngắn gọn: </label>
										<textarea class="form-control" id="pro_short_description" name="pro_short_description" rows="4" cols="50"><?php echo($pro_short_description); ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="pro_description">Mô tả: </label>
										<textarea class="form-control" id="editor1" name="pro_description" rows="4" cols="50"><?php echo($pro_description); ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="pro_type">Loại sản phẩm: </label>
										<select name="pro_type" id="pro_type" class="form-control">
											<?php 
												$arr = array('Tác phẩm điêu khắc', 'Tác phẩm nghệ thuật', 'Du lịch');
												foreach ($arr as $value) {
													if($value == $pro_type){
														echo("<option selected>" . $value . "</option>");
													} else {
														echo("<option>" . $value . "</option>");
													}
												}
											?>
										</select>
                                    </div>
									<div class="form-group">
                                        <label for="pro_type">Giá khởi điểm: <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="price" id="price" value="<?php echo($price); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="currency">Đơn vị tiền tệ: </label>
										<select name="currency" id="currency" class="form-control">
											<?php 
												$arr = array('VND', 'USD');
												foreach ($arr as $value) {
													if($value == $currency){
														echo("<option selected>" . $value . "</option>");
													} else {
														echo("<option>" . $value . "</option>");
													}
												}
											?>
										</select>
                                    </div>
									<div class="form-group">
                                        <label for="start_date">Ngày bắt đầu đấu giá: <span style="color: red;">*</span></label>
                                        <input step="1" type="datetime-local" placeholder="yyyy-mm-dd" class="form-control" name="start_date" id="start_date" value="<?php echo (BuildClientDateTime($start_date)); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="end_date">Ngày kết thúc đấu giá: <span style="color: red;">*</span></label>
                                        <input step="1" type="datetime-local" placeholder="yyyy-mm-dd" class="form-control" name="end_date" id="end_date" value="<?php echo (BuildClientDateTime($end_date)); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="extra_option">Thuộc tính sản phẩm: </label>
                                        <input type="text" class="form-control" name="extra_option" id="extra_option" value="<?php echo($extra_option); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="upload">Ảnh sản phẩm: </label>
										<input type="file" class="form-control" name="files[]" id="files" multiple>
										<div id="image_panel"><?php echo($image) ?></div>
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
                                                    <th>Tên sản phẩm</th>
													<th>Mô Tả ngắn gọn</th>
                                                    <th>Loại sản phẩm</th>
                                                    <th>Giá</th>
													<th>Đơn vị tiền tệ</th>
													<th>Ngày bắt đầu</th>
													<th>Ngày kết thúc</th>
													<th>Thuộc tính</th>
													<th>Hình ảnh</th>
                                                    <th>Ngày Khởi Tạo</th>
													<th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($is_admin)
                                                {
													$sql = "SELECT * FROM auction_product ORDER BY create_date DESC LIMIT " . $amount_of_record;
													if ($from_date != "")
													{
														$sql = "SELECT * FROM auction_product where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
													}

													$statement = $pdo->prepare($sql);
													$statement->execute();
													$result = $statement->fetchAll(PDO::FETCH_ASSOC);

													if (count($result) > 0)
													{
														$counter = 1;

														foreach ($result as $row)
														{
															$pictures = "";
															$img_url_array = GetImageLinks($row["picture"], $domain);
															foreach ($img_url_array as $img_url)
															{
																$pictures .= '<a target="_blank" href="' . $img_url . '">' . $img_url . '</a><br/>';
															}
															$id = $row["id"];
															$pro_name = $row["pro_name"];
															$pro_short_description = $row["pro_short_description"];
															$pro_description = $row["pro_description"];
															$pro_type = $row["pro_type"];
															$price = $row["price"];
															$currency = $row["currency"];
															$start_date = date_create($row["start_date"]);
															$end_date = date_create($row["end_date"]);
															$extra_option = $row["extra_option"];
															$create_date = date_create($row["create_date"]);
															echo ("<tr>");
															echo ("<td>" . $counter . "</td>" . "
																<td><div class='scrollable'>" . $pro_name . "</div></td>" . "
																<td><div class='scrollable'>" . $pro_short_description . "</div></td>" . "
																<td><div class='scrollable'>" . $pro_type . "</div></td>" . "
																<td><div class='scrollable'>" . $price . "</div></td>" . "
																<td><div class='scrollable'>" . $currency . "</div></td>" . "
																<td><div class='scrollable'>" . date_format($start_date, "d-m-Y H:i:s") . "</div></td>" . "
																<td><div class='scrollable'>" . date_format($end_date, "d-m-Y H:i:s") . "</div></td>" . "
																<td><div class='scrollable'>" . $extra_option . "</div></td>" . "
																<td><div class='scrollable'>" . $pictures . "</div></td>" . "
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
                                                    <th>Tên sản phẩm</th>
													<th>Mô Tả ngắn gọn</th>
                                                    <th>Loại sản phẩm</th>
                                                    <th>Giá</th>
													<th>Tiền tệ</th>
													<th>Ngày bất đầu</th>
													<th>Ngày kết thúc</th>
													<th>Thêm lựa chọn</th>
													<th>Hình ảnh</th>
                                                    <th>Ngày khởi Tạo</th>
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