<?php
$is_admin = isset($_SESSION['username']);
$amount_of_record = 1000;
$from_date = "";
$pre_script_variables = "";

$gallery_image_path = "../assets/gallery/large/";
$gallery_thumb_path = "../assets/gallery/small/";
$temp_directory = "../assets/gallery/temp/";
$id = "";
$title_gallery = "";
$description = "";
$external_album_hyperlink  = "";
$image_url = "";
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

//Insert or update table gallery
if (isset($_POST['insert_update'])){
	$message = ValidateData($_POST);
	if ($message != ""){
		ShowMessage($message, false);
		$title_gallery = strip_tags($_POST['title_gallery']);
	} 	
	else {
		$id = strip_tags($_POST['id']);
		$title_gallery = strip_tags($_POST['title_gallery']);
		$description = strip_tags($_POST['description']);
		$external_album_hyperlink  = strip_tags($_POST['external_album_hyperlink']);
		//Case insert, id is always null
		if ($id == ''){
			$image_name = array();
			$error=array();
			if($_FILES['files']['name'][0] != ""){
				$extension=array("jpeg","jpg","png","gif");
				foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
					$file_name=$_FILES["files"]["name"][$key];
					$file_tmp=$_FILES["files"]["tmp_name"][$key];
					$ext=pathinfo($file_name,PATHINFO_EXTENSION);
					if(in_array($ext,$extension)) {
						if(!file_exists($gallery_image_path.$file_name)) {
							move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key], $gallery_image_path.$file_name);
							array_push($image_name, $gallery_image_path . $file_name);
							$colors=array(255, 255, 255); //white
							CreateThumbnail($gallery_image_path . $file_name, $gallery_thumb_path . $file_name, 416, 227, $ext, $colors);
						}
						else {
							$filename=basename($file_name,$ext);
							$newFileName=$filename.time().".".$ext;
							move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$gallery_image_path.$newFileName);
							array_push($image_name, $gallery_image_path . $newFileName);
							$colors=array(255, 255, 255); //white
							CreateThumbnail($gallery_image_path . $newFileName, $gallery_thumb_path . $newFileName, 416, 227, $ext, $colors);
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
				foreach ($image_name as &$value) {
					unlink($value);
					//Delete all thumpnails
					$value = str_replace('/large/', '/small/', $value);
					unlink($value);
				}
				echo('<script>alert("Incorrect image extension! ' . implode ("|", array_filter($error)) . '");</script>');
			} else {
				$image_name = implode ("|", array_filter($image_name));
				$history = "Insert by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";
				$sql = "INSERT INTO gallery (image_url, title_gallery, description, external_album_hyperlink, history) VALUES "
					. "(?,?,?,?,?)";
					$statement = $pdo->prepare($sql);
					$statement->execute(array($image_name,  $title_gallery, $description, $external_album_hyperlink, $history));
					$register_id = $pdo->lastInsertId();
		
				if ($register_id != 0){
					 $title_gallery = "";
					$description = "";
					$content = "";
					$external_album_hyperlink  = "";
					echo('<script>alert("Successful");</script>');
				} else {
					echo('<script>alert("Fail!");</script>');
				}
			}
		} else {
			//Case update, id is always has value
			$image_name = array();
			$error=array();
			if($_FILES['files']['name'][0] != ""){
				$extension=array("jpeg","jpg","png","gif");
				foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
					$file_name=$_FILES["files"]["name"][$key];
					$file_tmp=$_FILES["files"]["tmp_name"][$key];
					$ext=pathinfo($file_name,PATHINFO_EXTENSION);

					if(in_array($ext,$extension)) {
						if(!file_exists($gallery_image_path.$file_name)) {
							move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key], $gallery_image_path.$file_name);
							array_push($image_name, $gallery_image_path . $file_name);
							$colors=array(255, 255, 255);
							CreateThumbnail($gallery_image_path . $file_name, $gallery_thumb_path . $file_name, 416, 227, $ext, $colors);
						}
						else {
							$filename=basename($file_name,$ext);
							$newFileName=$filename.time().".".$ext;
							move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$gallery_image_path.$newFileName);
							array_push($image_name, $gallery_image_path . $newFileName);
							$colors=array(255, 255, 255);
							CreateThumbnail($gallery_image_path . $newFileName, $gallery_thumb_path . $newFileName, 416, 227, $ext, $colors);
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
				foreach ($image_name as &$value) {
					unlink($value);
					//Delete all thumpnails
					$value = str_replace('/large/', '/small/', $value);
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
					$existing_images = RemoveGalaryImages($remove_image_indexes, $id, $pdo);
				}
				$image_name = implode ("|", array_filter($image_name)) . '|' . implode ("|", array_filter($existing_images));
				$image_name = trim($image_name, "|"); //Remove start and end | 
				
				$history = "Update by " . $_SESSION['username'] . " - " . date("Y-m-d H:i:s") . "<br/>";
				
				$sql = "UPDATE `gallery` SET `image_url`=?,`title_gallery`=?,`description`=?,`external_album_hyperlink`=?, history = IFNULL(CONCAT(history, '" . $history . "'), '" . $history . "') WHERE id = ?";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($image_name,  $title_gallery, $description, $external_album_hyperlink, $id));
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

function DeleteRecord($id, $pdo){
	if ($id != ''){
		try{
			$sql = "SELECT * FROM gallery WHERE id = " . $id;

			$statement = $pdo->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			if (count($result) > 0)
			{
				//Delete all images
				$image_name = $result[0]["image_url"];
				$pieces = array_filter(explode("|", $image_name));
				foreach ($pieces as $piece) {
					unlink($piece);
					//Delete all thumpnails
					$piece = str_replace('/large/', '/small/', $piece);
					unlink($piece);
				}
			}

			$sql = "DELETE FROM gallery WHERE id = " . $id;

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
	 $title_gallery = strip_tags($post_data['title_gallery']);
	if ( $title_gallery == ""){
		$message .= "Xin điền tiêu đầ hình ảnh</br>";
	}
	return $message;
}

function BuildUpdateFields($id, $pdo, $domain){
	global $image_url; global $id; global  $title_gallery; global $description; global $external_album_hyperlink ; 
	if ($id != ''){
		$sql = "SELECT * FROM gallery WHERE id = " . $id;

		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if (count($result) > 0)
		{
			foreach ($result as $row)
			{
				$img_url_array = GetImageLinks($row["image_url"], $domain);
				if (count($img_url_array) > 0){
					$image_url = '<div class="row">';
					$index = 0;
					foreach ($img_url_array as $img_url)
					{
						$image_url .= '<div id="image' . $index . '" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><a target="_blank" href="' . $img_url . '"><img style="width: 300px; height: 300px; padding: 2px;" src="' . $img_url . '" /></a>'
						. '<a style="cursor: pointer;color: #ff9900;font-weight: bold;font-size: 15px;padding: 2px;" onclick="RemoveImage(' . $index . ')">Xóa</a></div>';
						$index++;
					}
					$image_url .= '</div>';
				}
				$id = $row["id"];
				 $title_gallery = $row["title_gallery"];
				$description = $row["description"];
				$external_album_hyperlink  = $row["external_album_hyperlink"];
			}
		}
	}
}

function RemoveGalaryImages($image_indexes, $id, $pdo){
	$array = array();
	$sql = "SELECT * FROM gallery WHERE id = " . $id;

	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		if(!IsArrayEmpty($image_indexes)){
			$image_name = $result[0]["image_url"];
			$pieces = array_filter(explode("|", $image_name));
			$counter = 0;
			foreach ($pieces as $piece) {
				if(IsItemInArray($counter, $image_indexes)) {
					unlink($piece);
					//Remove thumpnails
					$piece = str_replace('/large/', '/small/', $piece);
					unlink($piece);
				} else {
					array_push($array,$piece);
				}
				$counter++;
			}
		} else {
			if (isset($result[0]["image_url"])){
				$image_name =  $result[0]["image_url"];
				$array = array_filter(explode("|", $image_name));
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
		$('#id').val('');
		$('#remove_image_indexes').val('');
		$('#title_gallery').val('');
		$('#description').val('');
		$('#editor1').code('');
		$('#external_album_hyperlink').val('');
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
<div class="dashboard-wrapper" id="news_pannel">
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
                                    <h2 class="mb-0">Hình ảnh Gallery</h2>
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
									<button type="submit" id="update_button" name="update_button" style="display: none;"></button>
									<button type="submit" id="delete_button" name="delete_button" style="display: none;"></button>
                                    <div class="form-group">
                                        <label for="title">Tiêu để hình ảnh: <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="title_gallery" id="title_gallery" value="<?php echo( $title_gallery); ?>" />
                                    </div>
									<div class="form-group">
                                        <label for="description">Mô tả:</label>
										<textarea class="form-control" id="description" name="description" rows="4" cols="50"><?php echo($description); ?></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="upload">Tải ảnh lên: </label>
										<input type="file" class="form-control" name="files[]" id="files" multiple>
										<div id="image_panel"><?php echo($image_url) ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="external_album_hyperlink ">URL: </label>
                                        <input type="text" class="form-control" name="external_album_hyperlink" id="external_album_hyperlink" value="<?php echo($external_album_hyperlink ); ?>" />
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
                                                    <th>Tiêu để hình ảnh</th>
                                                    <th>Mô Tả</th>
                                                    <th>Hình Ảnh</th>
                                                    <th>Link Ngoài</th>
                                                    <th>Ngày Khởi Tạo</th>
													<th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($is_admin)
                                                {
													$sql = "SELECT * FROM gallery ORDER BY create_date DESC LIMIT " . $amount_of_record;
													if ($from_date != "")
													{
														$sql = "SELECT * FROM gallery where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
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
															$image_names = "";
															$img_url_array = GetImageLinks($row["image_url"], $domain);
															foreach ($img_url_array as $img_url)
															{
																$image_names .= '<a target="_blank" href="' . $img_url . '">' . $img_url . '</a><br/>';
															}
															$id = $row["id"];
															$title_gallery = $row["title_gallery"];
															$description = $row["description"];
															$external_album_hyperlink  = $row["external_album_hyperlink"];
															$create_date = date_create($row["create_date"]);

															echo ("<tr>");
															echo ("<td>" . $counter . "</td>" . "
																<td><div class='scrollable'>" .  $title_gallery . "</div></td>" . "
																<td><div class='scrollable'>" . $description . "</div></td>" . "
																<td><div class='scrollable'>" . $image_names . "</div></td>" . "
                                                                <td><div class='scrollable'>" . $external_album_hyperlink  . "</div></td>" . "
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
                                                    <th>Tiêu để hình ảnh</th>
                                                    <th>Mô Tả</th>
                                                    <th>Hình Ảnh</th>
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