

<!DOCTYPE html>
<html lang="en" >

<head>

  <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <!-- CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<!-- https://sweetalert2.github.io/#icons -->
	
	<script>
		function OpenRegisterPopup(form_id){
			HideAllFormTitleAndDescription();
			ShowAllFormControls();
			if (form_id == "semipro-300-400cc"){
				$('#semipro-300-400cc').show();
				
				$('[id^=license_file2]').hide();
				$('[id^=license_file3]').hide();
				
				$('[id^=comment1]').hide();
				$('[id^=comment2]').hide();
			} else if (form_id == "oto-track-attack"){
				$('#oto-track-attack').show();
				
				$('[id^=license_file1]').hide();
				
				$('[id^=comment2]').hide();
				
				$('[id^=banktransfer_file1]').hide();
			} else if (form_id == "oto-gymkhana"){
				$('#oto-gymkhana').show();
				
				$('[id^=license_file1]').hide();
				$('[id^=license_file3]').hide();
				
				$('[id^=comment1]').hide();
				
				$('[id^=banktransfer_file1]').hide();
			} else if (form_id == "motul-motor-racing-cup-he-300-400cc"){
				$('#motul-motor-racing-cup-he-300-400cc').show();
				
				$('[id^=license_file2]').hide();
				$('[id^=license_file3]').hide();
				
				$('[id^=comment1]').hide();
				$('[id^=comment2]').hide();
			}
			$('input#form_id').val(form_id);
			$('#register_form').show();
		}
		
		function HideAllFormTitleAndDescription(){
			$('#semipro-300-400cc').hide();
			$('#oto-track-attack').hide();
			$('#oto-gymkhana').hide();
			$('#motul-motor-racing-cup-he-300-400cc').hide();
		}
		
		function ShowAllFormControls(){
			$('[id^=fullname]').show();
			$('[id^=birthday]').show();
			$('[id^=phone]').show();
			$('[id^=email]').show();
			$('[id^=club_name]').show();
			$('[id^=address]').show();
			$('[id^=social_link]').show();
			$('[id^=license_file1]').show();
			$('[id^=license_file2]').show();
			$('[id^=license_file3]').show();
			$('[id^=number]').show();
			$('[id^=sponsor_fullname]').show();
			$('[id^=sponsor_phone]').show();
			$('[id^=banktransfer_file1]').show();
			$('[id^=comment1]').show();
			$('[id^=comment2]').show();
		}
		
		function CancelRegister(){
			$('#register_form').hide();
		}
		
		function ProcessRegister(){
			alert('a');
		}
	</script>
</head>
<?php
$dbhost = 'localhost';
// Database Name
$dbname = 'ilear871_vietnam_racing_festival';
// Database Username
$dbuser = 'ilear871_ilearn';
// Database Password
$dbpass = 'panda@80';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
if(isset($_POST['form1'])) {
	$valid = 1;
	$error_message = "";
	
	$form_id = strip_tags($_POST['form_id']);
	$fullname = strip_tags($_POST['fullname']);
	$birthday = strip_tags($_POST['birthday']);
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	$club_name = strip_tags($_POST['club_name']);
	$address = strip_tags($_POST['address']);
	$social_link = strip_tags($_POST['social_link']);
	$number = strip_tags($_POST['number']);
	$sponsor_fullname = strip_tags($_POST['sponsor_fullname']);
	$sponsor_phone = strip_tags($_POST['sponsor_phone']);
	$license_file1 = "";
	$license_file2 = "";
	$license_file3 = "";
	$banktransfer_file1 = "";
	if (isset($_FILES)){
		if (isset($_FILES['license_file1'])){
			$license_file1 = $_FILES['license_file1']['name'];
		}
		if (isset($_FILES['license_file2'])){
			$license_file1 = $_FILES['license_file2']['name'];
		}
		if (isset($_FILES['license_file3'])){
			$license_file1 = $_FILES['license_file3']['name'];
		}
		if (isset($_FILES['banktransfer_file1'])){
			$banktransfer_file1 = $_FILES['banktransfer_file1']['name'];
		}
	}
	
	$comment1 = strip_tags($_POST['comment1']);
	$comment2 = strip_tags($_POST['comment2']);
	
	if(empty($_POST['form_id'])) {
		$valid = 0;
		$error_message .= 'Please select a form.<br>';
	}

	if(empty($fullname)) {
		$valid = 0;
		$error_message .= 'Xin nhập họ và tên.<br>';
	}
	
	if(empty($birthday)) {
		$valid = 0;
		$error_message .= 'Xin nhập ngày sinh.<br>';
	}
	
	if(empty($phone)) {
		$valid = 0;
		$error_message .= 'Xin nhập số điện thoại.<br>';
	}
	
	if(empty($email)) {
		$valid = 0;
		$error_message .= 'Xin nhập email.<br>';
	}
	
	if(empty($club_name)) {
		$valid = 0;
		$error_message .= 'Xin nhập tên câu lạc bộ.<br>';
	}
	
	if(empty($address)) {
		$valid = 0;
		$error_message .= 'Xin nhập địa chỉ nơi ở hiện nay.<br>';
	}
	
	if(empty($social_link)) {
		$valid = 0;
		$error_message .= 'Xin nhập link Facebook hoặc Zalo của bạn.<br>';
	}
	
	if(empty($number)) {
		$valid = 0;
		$error_message .= 'Xin nhập Số đua đăng ký.<br>';
	}
	
	if(empty($sponsor_fullname)) {
		$valid = 0;
		$error_message .= 'Xin nhập Họ và tên người bảo hộ.<br>';
	}
	
	if(empty($sponsor_phone)) {
		$valid = 0;
		$error_message .= 'Số điện thoại người bảo hộ.<br>';
	}
	
	if(!empty($_POST['form_id'])) {
		$form_id = $_POST['form_id'];
		if ($form_id == 'semipro-300-400cc'){
			if($license_file1 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng lái A2 còn hiệu lực.<br>';
			} else {
				$path = $_FILES['license_file1']['name'];
				$path_tmp = $_FILES['license_file1']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Tập tin bằng lái A2 không đúng định dạng.<br>';
				}
			}
			
			if($banktransfer_file1 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh xác nhận chuyển khoản.<br>';
			} else {
				$path = $_FILES['banktransfer_file1']['name'];
				$path_tmp = $_FILES['banktransfer_file1']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Tập tin xác nhận chuyển khoản không đúng định dạng.<br>';
				}
			}
		} else if ($form_id == 'oto-track-attack'){
			if($license_file2 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng lái B trở lên còn hiệu lực.<br>';
			} else {
				$path = $_FILES['license_file2']['name'];
				$path_tmp = $_FILES['license_file2']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng lái B không đúng định dạng.<br>';
				}
			}
			
			if($license_file3 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng đua xe VMA.<br>';
			} else {
				$path = $_FILES['license_file3']['name'];
				$path_tmp = $_FILES['license_file3']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng đua xe VMA không đúng định dạng.<br>';
				}
			}
			
			if(empty($comment1)) {
				$valid = 0;
				$error_message .= 'Xin chia sẻ kinh nghiệm đua xe của bạn.<br>';
			}
		} else if ($form_id == 'oto-gymkhana'){
			if($license_file2 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng lái B trở lên còn hiệu lực.<br>';
			} else {
				$path = $_FILES['license_file2']['name'];
				$path_tmp = $_FILES['license_file2']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng lái B không đúng định dạng.<br>';
				}
			}
			
			if(empty($comment2)) {
				$valid = 0;
				$error_message .= 'Xin chia sẻ kinh nghiệm và kỹ năng lái xe, đua xe của bạn.<br>';
			}
		} else if ($form_id == 'motul-motor-racing-cup-he-300-400cc'){
			if($license_file1 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng lái A2 còn hiệu lực.<br>';
			} else {
				$path = $_FILES['license_file1']['name'];
				$path_tmp = $_FILES['license_file1']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng lái A2 không đúng định dạng.<br>';
				}
			}
			
			if($banktransfer_file1 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh xác nhận chuyển khoản thành công.<br>';
			} else {
				$path = $_FILES['banktransfer_file1']['name'];
				$path_tmp = $_FILES['banktransfer_file1']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh chuyển khoản không đúng định dạng.<br>';
				}
			}
		}
	}

	if($valid == 1) {
		if ($form_id == 'semipro-300-400cc'){
			// saving into the database
			$statement = $pdo->prepare("INSERT INTO registers ('number', 'fullname', 'birthday', 'phone', "
				. "'email', 'club_name', 'address', 'social_link', 'sponsor_fullname', 'sponsor_phone', 'create_date') VALUES "
				. "('" . $number . "','" . $fullname . "','" . $birthday . "','" . $phone . "','" . $email . "','" . $club_name
				. "','" . $address . "','" . $social_link . "','" . $sponsor_fullname . "','" . $sponsor_phone. "',curdate())");
			$statement->execute();
		} else if ($form_id == 'oto-track-attack'){
			
		} else if ($form_id == 'oto-gymkhana'){
			
		} else if ($form_id == 'motul-motor-racing-cup-he-300-400cc'){
			
		}
		
		echo '<script language="javascript">';
		echo "$(document).ready(function() {  
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: 'CHỨC MỪNG " . $fullname . " ĐÃ ĐĂNG KÝ THÀNH CÔNG HỆ GIẢI',
				  type: 'success',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					window.location = window.location.href;
				});
			});";
		echo '</script>';
		//$statement = $pdo->prepare("INSERT INTO tbl_faq (faq_title,faq_content) VALUES (?,?)");
		//$statement->execute(array($_POST['faq_title'],$_POST['faq_content']));
			
		//$success_message = 'FAQ is added successfully!';

		//unset($_POST['faq_title']);
		//unset($_POST['faq_content']);
	} else {
		echo '<script language="javascript">';
		echo "$(document).ready(function() {  
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: '" . $error_message . "',
				  type: 'error',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					//alert('" . $_POST['form_id'] . "');
				  if (!result.isConfirmed) {
					window.location = window.location.href;
				  }
				});
			});";
		echo '</script>';
	}
}
?>
<body style="background: green;" >
	<a style="cursor: pointer;" onclick="OpenRegisterPopup('semipro-300-400cc');">Semipro-300-400cc</a><br/>
	<a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-track-attack');">oto-track-attack</a><br/>
	<a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-gymkhana');">oto-gymkhana</a><br/>
	<a style="cursor: pointer;" onclick="OpenRegisterPopup('motul-motor-racing-cup-he-300-400cc');">motul-motor-racing-cup-he-300-400cc</a><br/>
	<form action="" method="post">
		<div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto; display: none;" id="register_form">
		   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			  <input style="display: none;" id="form_id" name="form_id" value=""/>
			  <div class="swal2-header" id="semipro-300-400cc">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký đua MOTUL MOTOR RACING CUP HỆ 300-400cc</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Phí đăng ký tham gia thi đấu: 1.000.000 vnđ<br/>
				 CƠ CẤU GIẢI THƯỞNG NHẤT - NHÌ - BA HẤP DẪN<br/>
				 <br/>
				 Bao gồm :<br/>
				 -	2 vé xem event trị giá 700.000vnđ<br/>
				 -	Thay nhớt Motul<br/>
				 -	Quà từ BTC<br/>
				 -	1 phòng khách sạn Đại Nam ngày 11/12<br/>
				 <br/>
				 ĐIỀU LỆ:<br/>
				 <a href="https://docs.google.com/document/d/1VUcOfXfRYNlkU0wTkk4Tma43v2CXWd_-/edit">Xem điều lệ tại đây</a><br/>
				 Bạn hãy tham gia nhóm dành cho VĐV để cập nhật thêm thông tin về giải đua: <br/>
				 <a href="https://www.facebook.com/groups/motulmotorracingcup2020">MOTUL MOTOR RACING CUP - VietNam Racing Festival 2020</a><br/>
				 LIÊN HỆ MUA VÉ XEM CHƯƠNG TRÌNH: <a href="https://ticketbox.vn/vr-fest-2020#booking">https://ticketbox.vn/vr-fest-2020#booking</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="oto-track-attack">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký thi đấu VINFAST TRACK ATTACK CUP</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Đăng ký đầy đủ thông tin bên dưới. Điều lệ:<br/>
				 <a href="https://docs.google.com/document/d/1T9jG8Tg0eqTBNKeNOzvxrt7POjUrfqvi/edit">Xem điều lệ tại đây</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="oto-gymkhana">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký thi đấu VINFAST AUTOGYMKHANA CUP</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Đăng ký đầy đủ thông tin bên dưới. Điều lệ:<br/>
				 <a href="https://docs.google.com/document/d/17-jo4X1tcdLu6yQ-C7QKk3mefIE9ZThY/edit#heading=h.gjdgxs">Xem điều lệ tại đây</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="motul-motor-racing-cup-he-300-400cc">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký đua MOTUL MOTOR RACING CUP HỆ 300-400cc</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Phí đăng ký tham gia thi đấu: 1.000.000 vnđ<br/>
				 CƠ CẤU GIẢI THƯỞNG NHẤT - NHÌ - BA HẤP DẪN<br/>
				 <br/>
				 Bao gồm :<br/>
				 -	2 vé xem event trị giá 700.000vnđ<br/>
				 -	Thay nhớt Motul<br/>
				 -	Quà từ BTC<br/>
				 -	1 phòng khách sạn Đại Nam ngày 11/12<br/>
				 <br/>
				 ĐIỀU LỆ:<br/>
				 <a href="https://docs.google.com/document/d/1VUcOfXfRYNlkU0wTkk4Tma43v2CXWd_-/edit">Xem điều lệ tại đây</a><br/>
				 Bạn hãy tham gia nhóm dành cho VĐV để cập nhật thêm thông tin về giải đua: <br/>
				 <a href="https://www.facebook.com/groups/motulmotorracingcup2020">MOTUL MOTOR RACING CUP - VietNam Racing Festival 2020</a><br/>
				 LIÊN HỆ MUA VÉ XEM CHƯƠNG TRÌNH: <a href="https://ticketbox.vn/vr-fest-2020#booking">https://ticketbox.vn/vr-fest-2020#booking</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <br/>
			  <br/>
			  <br/>
			  <div class="swal2-content">
				<label for="fullname" class="swal2-input-label" id="fullname-label">Họ và tên <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="fullname" name="fullname" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="fullname-validation-message"></div>
				 
				<label for="birthday" class="swal2-input-label" id="birthday-label">Ngày tháng năm sinh <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="birthday" name="birthday" placeholder="dd/mm/yyyy" type="date" style="display: flex;">
				 <div class="swal2-validation-message" id="birthday-validation-message"></div>
				 
				<label for="phone" class="swal2-input-label" id="phone-label">Số điện thoại <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="phone" name="phone" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="phone-validation-message"></div>
				 
				<label for="email" class="swal2-input-label" id="email-label">Email <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="email" name="email" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="email-validation-message"></div>
				 
				<label for="club_name" class="swal2-input-label" id="club_name-label">Tên Câu lạc bộ <span style="color: red;">*</span></label>
				 <script>
					$(document).ready(function() {      
						$("#club_name-checkbox").change(function() {
							if(this.checked) {
								$("#club_name").val("Tự do hay cá Nhân");
							} else {
								$("#club_name").val("");
							}
						});
					});
				 </script>
				 <label for="club_name-checkbox" class="swal2-checkbox" id="club_name-checkbox-label" style="display: flex; -webkit-box-align: left; -ms-flex-align: left; align-items: left; -webkit-box-pack: left; -ms-flex-pack: left; justify-content: left;">
					<input type="checkbox" value="Tự do hay Cá Nhân" id="club_name-checkbox">
					<span class="swal2-label">Tự do/Cá Nhân</span>
				 </label>
				 <input class="swal2-input" id="club_name" name="club_name" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="club_name-validation-message"></div>
				 
				<label for="address" class="swal2-input-label" id="address-label">Nơi ở hiện nay <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="address" name="address" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="address-validation-message"></div>
				 
				<label for="social_link" class="swal2-input-label" id="social_link-label">Zalo hoặc link Facebook <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="social_link" name="social_link" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="social_link-validation-message"></div>
				 
				<label for="license_file1" class="swal2-input-label" id="license_file1-label">Hình ảnh bằng lái A2 còn hiệu lực (Upload tâp tin jpg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, png, pdf, docx" id="license_file1" name="license_file1" class="swal2-file" placeholder="" style="display: flex;">
				 <div class="swal2-validation-message" id="license_file1-validation-message"></div>
				 
				<label for="license_file2" class="swal2-input-label" id="license_file2-label">Hình ảnh bằng lái B trở lên còn hiệu lực (Upload tâp tin jpg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, png, pdf, docx" id="license_file2" name="license_file2" class="swal2-file" placeholder="" style="display: flex;">
				 <div class="swal2-validation-message" id="license_file2-validation-message"></div>
				 
				<label for="license_file3" class="swal2-input-label" id="license_file3-label">Hình ảnh bằng đua xe VMA (Upload tâp tin jpg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, png, pdf, docx" id="license_file3" name="license_file3" class="swal2-file" placeholder="" style="display: flex;">
				 <div class="swal2-validation-message" id="license_file3-validation-message"></div>
				 
				<label for="number" class="swal2-input-label" id="number-label">Số đua đăng ký <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="number" name="number" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="number-validation-message"></div>
				 
				<label for="sponsor_fullname" class="swal2-input-label" id="sponsor_fullname-label">Họ và tên người bảo hộ <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="sponsor_fullname" name="sponsor_fullname" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="sponsor_fullname-validation-message"></div>
				 
				<label for="sponsor_phone" class="swal2-input-label" id="sponsor_phone-label">Số điện thoại người bảo hộ <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="sponsor_phone" name="sponsor_phone" placeholder="" type="text" style="display: flex;">
				 <div class="swal2-validation-message" id="sponsor_phone-validation-message"></div>
				 
				<label for="banktransfer_file1" class="swal2-input-label" id="banktransfer_file1-label">Chuyển khoản vào STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM . Hình ảnh xác nhận thành công (Upload tâp tin jpg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, png, pdf, docx" id="banktransfer_file1" name="banktransfer_file1" class="swal2-file" placeholder="" style="display: flex;">
				 <div class="swal2-validation-message" id="banktransfer_file1-validation-message"></div>
				 
				<label for="comment1" class="swal2-input-label" id="comment1-label">Hãy chia sẻ với chúng tôi về những kinh nghiệm đua xe của bạn: Bạn từng tham gia giải đua nào tại Đại Nam? Các giải đua khác bạn từng tham gia, thành tích đạt được?.... Cảm ơn bạn đã chia sẻ! <span style="color: red;">*</span></label>
				 <textarea aria-label="Type your message here" class="swal2-textarea" id="comment1" name="comment1" placeholder="" id="swal2-input" style="display: flex;"></textarea>
				 <div class="swal2-validation-message" id="comment1-validation-message"></div>
				 
				<label for="comment2" class="swal2-input-label" id="comment2-label">Giới thiệu chi tiết về kinh nghiệm và kỹ năng lái xe, đua xe của bản thân để được vào vòng loại. <span style="color: red;">*</span></label>
				 <textarea aria-label="Type your message here" class="swal2-textarea" id="comment2" name="comment2" placeholder="" id="swal2-input" style="display: flex;"></textarea>
				 <div class="swal2-validation-message" id="comment2-validation-message"></div>
			  </div>
			  <div class="swal2-actions">
				 <div class="swal2-loader"></div>
				 <button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;" onclick="ProcessRegister();" name="form1">Đăng ký</button>
				 <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="CancelRegister();">Đóng</button>
			  </div>
		   </div>
		</div>
	</form>
</body>

</html>
 
