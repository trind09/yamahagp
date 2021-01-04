<?php
if (isset($_POST['profile_form'])) {
    unset($_SESSION['customer_id']);
	ShowSwalMessage("Bạn đã đăng xuất thành công.", false, "");
	header('Location: index.php');
}
$customer_id = null;
if (isset($_SESSION['customer_id'])){
	$customer_id = $_SESSION['customer_id'];
}
$fullname = "";
$email = "";
$phone = "";
if ($customer_id) {
	$sql = "SELECT * FROM customer where id = ?;";
	$statement = $pdo->prepare($sql);
	$statement->execute(array($customer_id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0) {
		foreach ($result as $row)
		{
			$id = $row["id"];
			$fullname =  $row["fullname"];
			$email = $row["email"];
			$phone = $row["phone"];

			echo('<script>
			var customer_id = "' . $customer_id . '";
			function ShowProfile(){
				$("#p-fullname").html("' . $fullname . '");
				$("#p-email").html("' . $email . '");
				$("#p-phone").html("' . $phone . '");
				$("#profile_form").show();
			}
			</script>');
		}
	}
}
if (isset($_SESSION['customer_id'])) {
	if(isset($_POST['update_profile_form'])) {
		$message = "";
		$valid = 1;
		$fullname = strip_tags($_POST['u_fullname']);
		$email = strip_tags($_POST['u_email']);
		$phone = strip_tags($_POST['u_phone']);
		if(!isset($fullname)) {
			$valid = 0;
			$message .= 'Xin nhập họ và tên.<br>';
		}
		if(!isset($phone)) {
			$valid = 0;
			$message .= 'Xin nhập số điện thoại.<br>';
		}
		if ($valid == 0){
			ShowSwalMessage($message, false, "$('#update_profile_form').show();");
		} else {
			try{
				$sql = "SELECT * FROM customer where phone = ?;";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($phone));
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);

				if (count($result) > 0) {
					foreach ($result as $row)
					{
						ShowSwalMessage("Số điện thoại đã được đăng ký. Xin đổi số điện thoại khác!", false, "$('#update_profile_form').show();");
					}
				}
				else {
					$sql = "UPDATE customer SET fullname=?, phone = ? where id=?";
					$statement = $pdo->prepare($sql);
					$statement->execute(array($fullname, $phone, $customer_id));
					ShowSwalMessage("Cập nhật thành công", true, "ShowProfile();");
					echo('<script>
					var customer_id = "' . $customer_id . '";
					function ShowProfile(){
						$("#p-fullname").html("' . $fullname . '");
						$("#p-email").html("' . $email . '");
						$("#p-phone").html("' . $phone . '");
						$("#profile_form").show();
					}
					</script>');
				}
			} catch (Exception $e) {
				ShowSwalMessage($e, false, "$('#update_profile_form').show();");
			}
		}
	} else if(isset($_POST['update_password_form'])) {
		$message = "";
		$valid = 1;
		$current_password = strip_tags($_POST['current_password']);
		$new_password = strip_tags($_POST['new_password']);
		$repeat_new_password = strip_tags($_POST['repeat_new_password']);
		if(!isset($current_password)) {
			$valid = 0;
			$message .= 'Xin nhập mật khẩu cũ.<br>';
		}
		if(!isset($new_password)) {
			$valid = 0;
			$message .= 'Xin nhập mật khẩu mới.<br>';
		}
		if(!isset($repeat_new_password)) {
			$valid = 0;
			$message .= 'Xin nhập lại mật khẩu mới.<br>';
		} else if ($new_password != $repeat_new_password){
			$valid = 0;
			$message .= 'Mật khẩu mới không giống nhau.<br>';
		}
		if ($valid == 0){
			ShowSwalMessage($message, false, "$('#update_password_form').show();");
		} else {
			try{
				$sql = "SELECT * FROM customer where id = ?;";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($customer_id));
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);

				if (count($result) > 0) {
					$password_hash = $result[0]["password"];
					if (PasswordVerify($current_password, $password_hash)){
						$sql = "UPDATE customer SET password=? where id = " . $customer_id;
						$statement = $pdo->prepare($sql);
						$statement->execute(array(PasswordHash($new_password)));
						ShowSwalMessage("Cập nhật thành công", true, "ShowProfile();");
					} else {
						ShowSwalMessage("Mật khẩu cũ không chính xác.", false, "$('#update_password_form').show();");
					}
				} else {
					ShowSwalMessage("User không tồn tại.", false, "$('#update_password_form').show();");
				}
			} catch (Exception $e) {
				ShowSwalMessage($e, false, "$('#update_password_form').show();");
			}
		}
	}
} else if(isset($_POST['send_password_form'])) {
	$message = "";
	$valid = 1;
	$send_password_email = strip_tags($_POST['send_password_email']);
	if(!isEmail($send_password_email)) {
		$valid = 0;
		$message .= 'Xin nhập email.<br>';
	}
	if ($valid == 0){
		ShowSwalMessage($message, false, "$('#send_password_form').show();");
	} else {
		try{
			$sql = "SELECT * FROM customer where email = ?;";
			$statement = $pdo->prepare($sql);
			$statement->execute(array($send_password_email));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			if (count($result) > 0) {
				$customer_id = $result[0]["id"];
				$password = RandomPassword();
				$fullname = $result[0]["fullname"];
				$email = $result[0]["email"];
				$mailcontent = '<p>Dear ' . $fullname . '</p>'
					. '<p>Your username is: ' . $email . '</p>'
					. '<p>Your password is: ' . $password . '</p>'
					. '<p>Please login at: <a href="' . $domain . '">' . $domain . '</a></p>'
					. '<p>Sincerely,</p><p>Admin</p>';
				$result = SendMail($mail, $site_name . ' - Pasword recovery', $mailcontent, $smtp_username, "Admin", $smtp_username, "Admin", $email, $fullname, null);
				
				if ($result != null){
					ShowSwalMessage("Send mail fail. Please contact your admin!", false, "$('#send_password_form').show();");
				} else {
					$sql = "UPDATE customer SET password=? where id = " . $customer_id;
					$statement = $pdo->prepare($sql);
					$statement->execute(array(PasswordHash($password)));
					ShowSwalMessage("Mật khẩu đã được gửi đến email của bạn.", true, "$('#login_form').show();");
				}
			} else {
				ShowSwalMessage("Email này chưa được đăng ký.", false, "$('#send_password_form').show();");
			}
		} catch (Exception $e) {
			ShowSwalMessage($e, false, "$('#update_password_form').show();");
		}
	}
}
?>
<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<script>
function ShowUpdateProfile(){
	HideAllControl();
	$('#update_profile_form').show();
}
function ShowUpdatePassword(){
	HideAllControl();
	$('#update_password_form').show();
}
function ShowSendPasswordForm() {
	HideAllControl();
	$('#send_password_form').show();
}
function CheckSendPasswordEmail(){
	var error_message = "";
	var email = $('#send_password_email').val();
	if(!isEmail(email)){
        error_message += "Xin nhập email đúng định dạng.<br>";
		swal({
			title: '<strong>Notification</strong>',
			html: error_message,
			type: 'error',
			confirmButtonText: 'Ok'
			});
		return false;
    } else {
		return true;
	}
}
</script>
<form id="profile_form" action="" method="post" enctype="multipart/form-data" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
	   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
		  <div class="swal2-content">
			 <h2>Thông tin tài khoản</h2>
			 <table style="width: 100%;" class="styled-table">
				<tr>
					<td>Họ và tên: </td><td><p id="p-fullname"></p></td>
				</tr>
				<tr>
					<td>Email: </td><td><p id="p-email"></p></td>
				</tr>
				<tr>
					<td>Số điện thoại: </td><td><p id="p-phone"></p></td>
				</tr>
				<tr>
					<td>
					<button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: #0dab2f !important;" onclick="ShowUpdateProfile();">&#10000; Cập nhật tài khoản</button>
					</td>
					<td>
					<button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: #2c8e04 !important;" onclick="ShowUpdatePassword();">&#9998; Cập nhật mật khẩu</button>
					</td>
				</tr>
			 </table>
			 <h2>Sản phẩm đấu giá</h2>
			 <?php
				if ($customer_id) {
					$sql = "SELECT * FROM auction left join auction_product on auction.aution_product_id = auction_product.id where customer_id = ? order by auction.create_date desc;";
					$statement = $pdo->prepare($sql);
					$statement->execute(array($customer_id));
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);

					if (count($result) > 0) {
						echo('<div style="width: 100%; height: 400px; overflow:auto;">');
						echo('<table style="width: 100%; table-layout:fixed;" class="styled-table">');
						echo('<thead>');
						echo('<tr>');
						echo('<th>#</th><th>Sản phẩm đấu giá</th><th>Giá gốc</th><th>Giá bạn đưa ra</th><th>Ngày đấu giá</th>');
						echo('</tr>');
						echo('</thead>');
						echo('<tbody>');
						$counter = 1;
						foreach ($result as $row)
						{
							$create_date = date_create($row["create_date"]);
							echo('<tr>');
							echo('<td>' . $counter . '</td>');
							echo('<td>' . $row['pro_name'] . '</td>');
							echo('<td>' . format_money($row['price'], $row['currency']) . '</td>');
							echo('<td>' . format_money($row['pid_rate'], $row['currency']) . '</td>');
							echo('<td>' . date_format($create_date, "d-m-Y H:i:s") . '</td>');
							echo('</tr>');
							$counter++;
						}
						echo('</tbody>');
						echo('</table>');
						echo('</div>');
					} else {
						echo('<p>Bạn chưa có thông tin đấu giá nào, hãy đấu giá một sản phẩm của chúng tôi.</p><br/>');
					}
				}
			 ?>
			 <button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: orange !important;" name="profile_form">&#x1f513; Đăng xuất</button>
			 <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="document.getElementById('profile_form').style.display = 'none';">&#10006; Đóng</button>
		  </div>
	   </div>
	</div>
</form>


<form id="update_profile_form" action="" method="post" enctype="multipart/form-data" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
		<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			<div class="swal2-content">
				<h2>Cập nhật tài khoản</h2>
				<input type="hidden" id="u_customer_id" name="u_customer_id" value="<?php echo($customer_id); ?>"/>
				<label for="u_fullname" class="swal2-input-label" id="u_fullname-label">Họ và tên <span style="color: red;">*</span></label>
				<input class="swal2-input" id="u_fullname" name="u_fullname" placeholder="" type="text" style="display: flex; color: black;" value="<?php echo($fullname); ?>">
				<div class="swal2-validation-message" id="u_fullname-validation-message"></div>
				<label style="display: none;" for="u_birthday" class="swal2-input-label" id="u_birthday-label">Ngày tháng năm sinh <span style="color: red;">*</span></label>
				<input style="display: none;" class="swal2-input" id="u_birthday" name="u_birthday" placeholder="dd/mm/yyyy" type="text" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="u_birthday-validation-message"></div>
				<label for="u_phone" class="swal2-input-label" id="u_phone-label">Số điện thoại <span style="color: red;">*</span></label>
				<input class="swal2-input" id="u_phone" name="u_phone" placeholder="" type="text" style="display: flex; color: black;" value="<?php echo($phone); ?>">
				<div class="swal2-validation-message" id="u_phone-validation-message"></div>
				<label style="display: none;" for="email" class="swal2-input-label" id="u_email-label">Email <span style="color: red;">*</span></label>
				<input style="display: none;" class="swal2-input" id="u_email" name="u_email" placeholder="" type="text" style="display: flex; color: black;" value="<?php echo($email); ?>">
				<div style="display: none;" class="swal2-validation-message" id="u_email-validation-message"></div>
				<label style="display: none;" for="u_address" class="swal2-input-label" id="u_address-label">Nơi ở hiện nay <span style="color: red;">*</span></label>
				<input style="display: none;" class="swal2-input" id="u_address" name="u_address" placeholder="" type="text" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="u_address-validation-message"></div>
				<label style="display: none;" for="u_position_level" class="swal2-input-label" id="u_position_level-label">Chức vụ </label>
				<input style="display: none;" class="swal2-input" id="u_position_level" name="u_position_level" placeholder="" type="text" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="u_position_level-validation-message"></div>
			</div>
			<div class="swal2-actions">
				<div class="swal2-loader"></div>
				<button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: green !important;" name="update_profile_form">&#10064; Cập nhật</button>
				<button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="HideAllControl();">&#10006; Đóng</button>
			</div>
		</div>
	</div>
</form>


<form id="update_password_form" action="" method="post" enctype="multipart/form-data" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
		<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			<div class="swal2-content">
				<h2>Cập nhật mật khẩu</h2>
				<input type="hidden" id="u_customer_id" name="u_customer_id" value="<?php echo($customer_id); ?>"/>
				<label for="current_password" class="swal2-input-label" id="current_password-label">Mật khẩu cũ <span style="color: red;">*</span></label>
				<input class="swal2-input" id="current_password" name="current_password" placeholder="" type="password" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="current_password-validation-message"></div>

				<label for="new_password" class="swal2-input-label" id="new_password-label">Mật khẩu mới <span style="color: red;">*</span></label>
				<input class="swal2-input" id="new_password" name="new_password" placeholder="" type="password" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="new_password-validation-message"></div>

				<label for="repeat_new_password" class="swal2-input-label" id="repeat_new_password-label">Lập lại mật khẩu mới <span style="color: red;">*</span></label>
				<input class="swal2-input" id="repeat_new_password" name="repeat_new_password" placeholder="" type="password" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="repeat_new_password-validation-message"></div>
			</div>
			<div class="swal2-actions">
				<div class="swal2-loader"></div>
				<button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: green !important;" name="update_password_form">&#10064; Cập nhật</button>
				<button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="HideAllControl();">&#10006; Đóng</button>
			</div>
		</div>
	</div>
</form>


<form id="send_password_form" action="" method="post" enctype="multipart/form-data" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
		<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			<div class="swal2-content">
				<h2>Gửi mật khẩu</h2>
				<input type="hidden" id="u_customer_id" name="u_customer_id" value="<?php echo($customer_id); ?>"/>
				<label for="send_password_email" class="swal2-input-label" id="send_password_email-label">Email của bạn <span style="color: red;">*</span></label>
				<input class="swal2-input" id="send_password_email" name="send_password_email" placeholder="" type="text" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="send_password_email-validation-message"></div>
			</div>
			<div class="swal2-actions">
				<div class="swal2-loader"></div>
				<button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: green !important;" onclick="return CheckSendPasswordEmail();" name="send_password_form">&#9993; Gửi</button>
				<button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="HideAllControl();">&#10006; Đóng</button>
			</div>
		</div>
	</div>
</form>