	<script>
		$(document).ready(function() {
			var form_id = localStorage.getItem('form_id');
			if (form_id){
				OpenRegisterPopup(form_id);
				localStorage.setItem('form_id', '');
			}
		});
		
		function OpenRegisterPopup(form_id){
			HideAllFormTitleAndDescription();
			ShowAllFormControls();
			if (form_id == "semipro-300-400cc"){
				$('#semipro-300-400cc').show();
				
				$('[id^=license_file2]').hide();
				$('[id^=license_file3]').hide();
				$('[id^=license_file4]').hide();
				
				$('[id^=comment1]').hide();
				$('[id^=comment2]').hide();
				
				$('#racing_level').val("Hệ 300-400cc SemiPro - GIẢI MOTUL MOTOR RACING CUP");
			} else if (form_id == "oto-track-attack"){
				$('#oto-track-attack').show();
				
				$('[id^=license_file1]').hide();
				$('[id^=license_file4]').hide();
				
				$('[id^=comment2]').hide();
				
				$('[id^=banktransfer_file1]').hide();
				
				$('#racing_level').val("HỆ OTO Track Attack - GIẢI VINFAST TRACK ATTACK CUP");
			} else if (form_id == "oto-gymkhana"){
				$('#oto-gymkhana').show();
				
				$('[id^=license_file1]').hide();
				$('[id^=license_file3]').hide();
				$('[id^=license_file4]').hide();
				
				$('[id^=comment1]').hide();
				
				$('[id^=banktransfer_file1]').hide();
				
				$('#racing_level').val("Hệ OTO GYMKHANA - GIẢI VINFAST AUTOGYMKHANA CUP");
			} else if (form_id == "moto-ub150-semipro"){
				$('#moto-ub150-semipro').show();
				
				$('[id^=license_file1]').hide();
				$('[id^=license_file2]').hide();
				$('[id^=license_file3]').hide();
				
				$('[id^=comment1]').hide();
				$('[id^=comment2]').hide();
				$('[id^=comment3]').hide();
				
				$('#racing_level').val("HỆ Moto UB150 SemiPro - GIẢI MOTUL MOTOR RACING CUP");
			} else if (form_id == "moto-ub150-pro"){
				$('#moto-ub150-pro').show();
				
				$('[id^=license_file1]').hide();
				$('[id^=license_file2]').hide();
				$('[id^=license_file3]').hide();
				
				$('[id^=comment1]').hide();
				$('[id^=comment2]').hide();
				$('[id^=comment3]').hide();
				
				$('#racing_level').val("HỆ Moto UB150 Pro - GIẢI MOTUL MOTOR RACING CUP");
			}
			$('input#form_id').val(form_id);
			$('#register_form').attr("style", "display: -webkit-box;");
		}
		
		function HideAllFormTitleAndDescription(){
			$('#semipro-300-400cc').hide();
			$('#oto-track-attack').hide();
			$('#oto-gymkhana').hide();
			$('#moto-ub150-semipro').hide();
			$('#moto-ub150-pro').hide();
		}
		
		function ShowAllFormControls(){
			$('[id^=fullname]').show();
			$('[id^=birthday]').show();
			$('[id^=phone]').show();
			$('[id^=email]').show();
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
			$('#register_form').attr("style", "display: none;");
		}
		
		function ProcessRegister(){
			var error_message = ValidateForm();
			if (error_message == ""){
				if (confirm("Bạn đã điền thông tin chính xác và đầy đủ?")) {
					 return true;
				  } else {
					return false;
				  }
			} else {
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: error_message,
				  type: 'error',
				  confirmButtonText: 'Ok'
				});
				return false;
			}
		}
		
		function ValidateForm(){
			var form_id = $('input#form_id').val();
			
			var error_message = "";
			
			if($('#fullname').val() == ''){
				error_message += "Xin nhập họ và tên.<br>";
			}
			if(!isDate($('#birthday').val())){
				error_message += "Xin nhập ngày sinh đúng định dạng (Ví dụ 02/11/1994).<br>";
			}
			if($('#phone').val() == ''){
				error_message += "Xin nhập số điện thoại.<br>";
			}
			if(!isEmail($('#email').val())){
				error_message += "Xin nhập email đúng định dạng.<br>";
			}
			if($('#address').val() == ''){
				error_message += "Xin nhập địa chỉ nơi ở hiện nay.<br>";
			}
			
			if (form_id == 'semipro-300-400cc'){
				if(document.getElementById("license_file1").files.length == 0) {
					error_message += 'Xin upload hình ảnh bằng lái A2 còn hiệu lực.<br>';
				} else {
					if (!isValidFileType("license_file1")){
						error_message += 'Xin upload hình ảnh bằng lái A2 đúng định dạng.<br>';
					}
				}
				
				if(document.getElementById("banktransfer_file1").files.length == 0) {
					error_message += 'Xin upload hình ảnh xác nhận chuyển khoản.<br>';
				} else {
					if (!isValidFileType("banktransfer_file1")){
						error_message += 'Xin upload hình ảnh xác nhận chuyển khoản đúng định dạng.<br>';
					}
				}
			} else if (form_id == 'oto-track-attack'){
				if(document.getElementById("license_file2").files.length == 0) {
					error_message += 'Xin upload hình ảnh bằng lái B trở lên còn hiệu lực.<br>';
				} else {
					if (!isValidFileType("license_file2")){
						error_message += 'Xin upload hình ảnh bằng lái B đúng định dạng.<br>';
					}
				}
				
				if(document.getElementById("license_file3").files.length == 0) {
					error_message += 'Xin upload hình ảnh bằng đua xe VMA còn hiệu lực.<br>';
				} else {
					if (!isValidFileType("license_file3")){
						error_message += 'Xin upload hình ảnh bằng đua xe VMA đúng định dạng.<br>';
					}
				}
				
				if($("#comment1").val() == "") {
					error_message += 'Xin chia sẻ kinh nghiệm đua xe của bạn.<br>';
				}
			} else if (form_id == 'oto-gymkhana'){
				if(document.getElementById("license_file2").files.length == 0) {
					error_message += 'Xin upload hình ảnh bằng lái B trở lên còn hiệu lực.<br>';
				} else {
					if (!isValidFileType("license_file2")){
						error_message += 'Xin upload hình ảnh bằng lái B đúng định dạng.<br>';
					}
				}
				
				if($("#comment2").val() == "") {
					error_message += 'Xin chia sẻ kinh nghiệm và kỹ năng lái xe, đua xe của bạn.<br>';
				}
			} else if (form_id == 'moto-ub150-semipro'){
				if(document.getElementById("license_file4").files.length == 0) {
					error_message += 'Xin upload hình ảnh bằng lái A1 còn hiệu lực.<br>';
				} else {
					if (!isValidFileType("license_file4")){
						error_message += 'Xin upload hình ảnh bằng lái A1 đúng định dạng.<br>';
					}
				}
				
				if(document.getElementById("banktransfer_file1").files.length == 0) {
					error_message += 'Xin upload hình ảnh xác nhận chuyển khoản thành công.<br>';
				} else {
					if (!isValidFileType("banktransfer_file1")){
						error_message += 'Xin upload hình ảnh xác nhận chuyển khoản đúng định dạng.<br>';
					}
				}
			} else if (form_id == 'moto-ub150-pro'){
				if(document.getElementById("license_file4").files.length == 0) {
					error_message += 'Xin upload hình ảnh bằng lái A1 còn hiệu lực.<br>';
				} else {
					if (!isValidFileType("license_file4")){
						error_message += 'Xin upload hình ảnh bằng lái A1 đúng định dạng.<br>';
					}
				}
				
				if(document.getElementById("banktransfer_file1").files.length == 0) {
					error_message += 'Xin upload hình ảnh xác nhận chuyển khoản thành công.<br>';
				} else {
					if (!isValidFileType("banktransfer_file1")){
						error_message += 'Xin upload hình ảnh xác nhận chuyển khoản đúng định dạng.<br>';
					}
				}
			}
			
			return error_message;
		}
		
		//---------------------Utils---------------------//
		function isValidFileType(input_id){
			var file = $('#' + input_id)[0].files[0]
			if (file){
				var fileExtension = ['jpeg', 'jpg', 'png', 'docx', 'pdf'];
				if ($.inArray(file.name.split('.').pop().toLowerCase(), fileExtension) == -1) {
					return false;
				}
				return true;
			}
			return false;
		}
		
		function isEmail(email) {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			return regex.test(email);
		}
		
		function isDate(txtDate) {
			var currVal = txtDate;
			if(currVal == '')
				return false;

			var dtArray = currVal.split("/");
			if (currVal.indexOf("-") >= 0){
				dtArray = currVal.split("-");
			} else if (currVal.indexOf(".") >= 0){
				dtArray = currVal.split(".");
			}

			if (dtArray == null) 
				return false;
			
			//Checks for mm/dd/yyyy format.
			dtMonth = parseInt(dtArray[1]);
			dtDay = parseInt(dtArray[0]);
			dtYear = parseInt(dtArray[2]);
			
			if (Number.isNaN(dtMonth) || Number.isNaN(dtDay) || Number.isNaN(dtYear)){
				return false;
			}
			
			if (dtMonth < 1 || dtMonth > 12) 
				return false;
			else if (dtDay < 1 || dtDay> 31) 
				return false;
			else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
				return false;
			else if (dtMonth == 2) 
			{
				var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
				if (dtDay> 29 || (dtDay ==29 && !isleap)) 
						return false;
			}
			
			var d = new Date();
			var currYear = d.getFullYear();
  
			if (dtYear >= 1500 && dtYear <= currYear) {
			  return true;
			} else {
			  return false;
			}
		}
		//---------------------Utils---------------------//
	</script>

<?php
include 'inc/config.php';
	
if(isset($_POST['form1'])) {
	$valid = 1;
	$error_message = "";
	
	$form_id = strip_tags($_POST['form_id']);
	$racing_level = strip_tags($_POST['racing_level']);
	$fullname = strip_tags($_POST['fullname']);
	$birthday = strip_tags($_POST['birthday']);
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	$address = strip_tags($_POST['address']);
	$social_link = strip_tags($_POST['social_link']);
	$number = strip_tags($_POST['number']);
	$sponsor_fullname = strip_tags($_POST['sponsor_fullname']);
	$sponsor_phone = strip_tags($_POST['sponsor_phone']);
	$license_file1 = "";
	$license_file2 = "";
	$license_file3 = "";
	$license_file4 = "";
	$banktransfer_file1 = "";
	if (isset($_FILES)){
		if (isset($_FILES['license_file1'])){
			$license_file1 = $_FILES['license_file1']['name'];
		}
		if (isset($_FILES['license_file2'])){
			$license_file2 = $_FILES['license_file2']['name'];
		}
		if (isset($_FILES['license_file3'])){
			$license_file3 = $_FILES['license_file3']['name'];
		}
		if (isset($_FILES['license_file4'])){
			$license_file4 = $_FILES['license_file4']['name'];
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
	} else {
		$pieces = [];
		if (strpos($birthday, '/') !== false) {
			$pieces = explode("/", $birthday);
			
		} else if (strpos($birthday, '-') !== false) {
			$pieces = explode("-", $birthday);
		} else if (strpos($birthday, '.') !== false) {
			$pieces = explode(".", $birthday);
		}
		$year = $pieces[2];
		$month = $pieces[1];
		$day = $pieces[0];
		$birthday = $year . "-" . $month . "-" . $day;
		if (DateTime::createFromFormat('Y-m-d', $birthday) == FALSE) {
			$valid = 0;
			$error_message .= 'Xin nhập ngày sinh đúng định dạng.<br>';
		}
	}
	
	if(empty($phone)) {
		$valid = 0;
		$error_message .= 'Xin nhập số điện thoại.<br>';
	}
	
	if(empty($email)) {
		$valid = 0;
		$error_message .= 'Xin nhập email.<br>';
	}
	
	if(empty($address)) {
		$valid = 0;
		$error_message .= 'Xin nhập địa chỉ nơi ở hiện nay.<br>';
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
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
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
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
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
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
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
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
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
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng lái B không đúng định dạng.<br>';
				}
			}
			
			if(empty($comment2)) {
				$valid = 0;
				$error_message .= 'Xin chia sẻ kinh nghiệm và kỹ năng lái xe, đua xe của bạn.<br>';
			}
		} else if ($form_id == 'moto-ub150-semipro'){
			if($license_file4 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng lái A1 còn hiệu lực.<br>';
			} else {
				$path = $_FILES['license_file4']['name'];
				$path_tmp = $_FILES['license_file4']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng lái A1 không đúng định dạng.<br>';
				}
			}
			
			if($banktransfer_file1 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh xác nhận chuyển khoản thành công.<br>';
			} else {
				$path = $_FILES['banktransfer_file1']['name'];
				$path_tmp = $_FILES['banktransfer_file1']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh chuyển khoản không đúng định dạng.<br>';
				}
			}
		} else if ($form_id == 'moto-ub150-pro'){
			if($license_file4 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh bằng lái A1 còn hiệu lực.<br>';
			} else {
				$path = $_FILES['license_file4']['name'];
				$path_tmp = $_FILES['license_file4']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh bằng lái A1 không đúng định dạng.<br>';
				}
			}
			
			if($banktransfer_file1 == '') {
				$valid = 0;
				$error_message .= 'Xin upload hình ảnh xác nhận chuyển khoản thành công.<br>';
			} else {
				$path = $_FILES['banktransfer_file1']['name'];
				$path_tmp = $_FILES['banktransfer_file1']['tmp_name'];
				$ext = pathinfo( $path, PATHINFO_EXTENSION );
				$ext = strtolower($ext);
				$file_name = basename( $path, '.' . $ext );
				if( $ext!='jpg' && $ext!='png' && $ext!='docx' && $ext!='pdf' && $ext!='jpeg' ) {
					$valid = 0;
					$error_message .= 'Hình ảnh chuyển khoản không đúng định dạng.<br>';
				}
			}
		}
	}

	if($valid == 1) {
		$exceptionMessage = "";
		
		// saving into the database
		$sql = "INSERT INTO registers (number, fullname, birthday, phone, "
			. "email, address, social_link, sponsor_fullname, sponsor_phone, comment1, comment2, form_id, form_name) VALUES "
			. "(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $pdo->prepare($sql);
		$statement->execute(array($number, $fullname, $birthday, $phone, $email, $address, $social_link, $sponsor_fullname, $sponsor_phone, $comment1, $comment2, $form_id, $racing_level));
		$register_id = $pdo->lastInsertId();
		
		if ($register_id != 0){
			$dt = new DateTime();
			$current_datetime = $dt->format('d-m-Y H:i:s');
			$formated_current_datetime = str_replace(" ", "_", $current_datetime);
			$formated_current_datetime = str_replace(":", "-", $formated_current_datetime);
			
			$license_file_urls = array();
			$bank_file_urls = array();
			
			if ($license_file1 != ''){
				$path_tmp = $_FILES['license_file1']['tmp_name'];
				$ext = pathinfo( $license_file1, PATHINFO_EXTENSION );
				$final_name = 'photo_'.$email.'_A2_' . $formated_current_datetime . '.'.$ext;
				move_uploaded_file( $path_tmp, 'register_files/uploads/'.$final_name );
				array_push($license_file_urls, 'register_files/uploads/' . $final_name);
			}
			
			if ($license_file2 != ''){
				$path_tmp = $_FILES['license_file2']['tmp_name'];
				$ext = pathinfo( $license_file2, PATHINFO_EXTENSION );
				$final_name = 'photo_'.$email.'_B_' . $formated_current_datetime . '.'.$ext;
				move_uploaded_file( $path_tmp, 'register_files/uploads/'.$final_name );
				array_push($license_file_urls, 'register_files/uploads/' . $final_name);
			}
			
			if ($license_file3 != ''){
				$path_tmp = $_FILES['license_file3']['tmp_name'];
				$ext = pathinfo( $license_file3, PATHINFO_EXTENSION );
				$final_name = 'photo_'.$email.'_VMA_' . $formated_current_datetime . '.'.$ext;
				move_uploaded_file( $path_tmp, 'register_files/uploads/'.$final_name );
				array_push($license_file_urls, 'register_files/uploads/' . $final_name);
			}
			
			if ($license_file4 != ''){
				$path_tmp = $_FILES['license_file4']['tmp_name'];
				$ext = pathinfo( $license_file4, PATHINFO_EXTENSION );
				$final_name = 'photo_'.$email.'_A1_' . $formated_current_datetime . '.'.$ext;
				move_uploaded_file( $path_tmp, 'register_files/uploads/'.$final_name );
				array_push($license_file_urls, 'register_files/uploads/' . $final_name);
			}
			
			if ($banktransfer_file1 != ''){
				$path_tmp = $_FILES['banktransfer_file1']['tmp_name'];
				$ext = pathinfo( $banktransfer_file1, PATHINFO_EXTENSION );
				$final_name = 'photo_'.$email.'_bank1_' . $formated_current_datetime . '.'.$ext;
				move_uploaded_file( $path_tmp, 'register_files/uploads/'.$final_name );
				array_push($bank_file_urls, 'register_files/uploads/' . $final_name);
			}

			if (count($license_file_urls) > 0){
				$license_files = implode ('|', $license_file_urls);
				$statement = $pdo->prepare("UPDATE registers SET license_files = ? WHERE id = ?");
				$statement->execute(array($license_files, $register_id));
			}
			
			if (count($bank_file_urls) > 0){
				$banktransfer_files = implode ('|', $bank_file_urls);
				$statement = $pdo->prepare("UPDATE registers SET banktransfer_files = ? WHERE id = ?");
				$statement->execute(array($banktransfer_files, $register_id));
			}
			
			$success_message = "<span style=\"text-transform: uppercase;\">Chúc mừng <b>" . $fullname . "</b> đã đăng ký thành công " . $racing_level . ".</span>";
			echo '<script language="javascript">';
			echo "$(document).ready(function() {  
					swal({
					  title: '<strong>Thông báo</strong>',
					  html: '". $success_message . "',
					  type: 'success',
					  confirmButtonText: 'Ok'
					}).then((result) => {
						window.location = window.location.href;
					});
				});";
			echo '</script>';
		} else {
			echo '<script language="javascript">';
			echo "$(document).ready(function() {  
					swal({
					  title: '<strong>Thông báo</strong>',
					  html: '" . $exceptionMessage . "',
					  type: 'success',
					  confirmButtonText: 'Ok'
					}).then((result) => {
						window.location = window.location.href;
					});
				});";
			echo '</script>';
		}
	} else {
		echo '<script language="javascript">';
		echo "$(document).ready(function() {
				var form_id = localStorage.getItem('form_id');
				if (form_id != ''){
					OpenRegisterPopup('" . $form_id . "');
				}
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: '" . $error_message . "',
				  type: 'error',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					//alert('" . $_POST['form_id'] . "');
				  if (!result.isConfirmed) {
					localStorage.setItem('form_id', '" . $form_id . "');
					window.location = window.location.href;
				  }
				});
			});";
		echo '</script>';
	}
}
?>
	
	<style>
		.swal2a-container.swal2a-center {
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.swal2a-container.swal2a-center {
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.swal2a-container {
			display: -ms-flexbox;
			display: flex;
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			-ms-flex-direction: row;
			flex-direction: row;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			padding: 10px;
			background-color: transparent;
			z-index: 1060;
			overflow-x: hidden;
			-webkit-overflow-scrolling: touch;
			overflow-y: auto; 
		}
	</style>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: none;" id="register_form">
		   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			  <input style="display: none;" id="form_id" name="form_id" value=""/>
			  <input style="display: none;" id="racing_level" name="racing_level" value=""/>
			  <div class="swal2-header" id="semipro-300-400cc">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký đua MOTUL MOTOR RACING CUP HỆ 300-400cc</h2>
				 <div class="swal2-content" style="width: 100%;">
				 <p>Phí đăng ký tham gia thi đấu: 1.000.000 vnđ</p>
				 <p>
				 CƠ CẤU GIẢI THƯỞNG NHẤT - NHÌ - BA HẤP DẪN<br/>
				 Bao gồm :<br/>
				 -	2 vé xem event trị giá 700.000vnđ<br/>
				 -	Thay nhớt Motul<br/>
				 -	Quà từ BTC<br/>
				 -	1 phòng khách sạn Đại Nam ngày 11/12<br/>
				 </p>
				 <p>
				 ĐIỀU LỆ:<br/>
				 <a href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_300_400cc.pdf" target="_blank">Xem điều lệ tại đây</a>
				 </p>
				 <p>
				 LIÊN HỆ MUA VÉ XEM CHƯƠNG TRÌNH: <a href="https://ticketbox.vn/vr-fest-2020#booking" target="_blank">https://ticketbox.vn/vr-fest-2020#booking</a>
				 </p>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="oto-track-attack">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký thi đấu VINFAST TRACK ATTACK CUP</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Đăng ký đầy đủ thông tin bên dưới. Điều lệ:<br/>
				 <a href="assets/docs/ĐIEU_LE_VINFAST_TRACK_ATTACK_CUP.pdf" target="_blank">Xem điều lệ tại đây</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="oto-gymkhana">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký thi đấu VINFAST AUTOGYMKHANA CUP</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Đăng ký đầy đủ thông tin bên dưới. Điều lệ:<br/>
				 <a href="assets/docs/Đieu_le_Vinfast_Fadil_AutoGymkhanaCup.pdf" target="_blank">Xem điều lệ tại đây</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="moto-ub150-semipro">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký đua MOTUL MOTOR RACING CUP HỆ UB150 SemiPro</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Phí đăng ký tham gia thi đấu: 1.000.000 vnđ<br/><br/>
				 CƠ CẤU GIẢI THƯỞNG NHẤT - NHÌ - BA HẤP DẪN<br/>
				 Bao gồm :<br/>
				 -	2 vé xem event trị giá 700.000vnđ<br/>
				 -	Thay nhớt Motul<br/>
				 -	Quà từ BTC<br/>
				 -	1 phòng khách sạn Đại Nam ngày 11/12<br/>
				 <br/>
				 VĐV vui lòng đọc kỹ ĐIỀU LỆ:<br/>
				 <a href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_UB150.pdf" target="_blank">Xem điều lệ tại đây</a><br/>
				 <br/>
				 LIÊN HỆ MUA VÉ XEM CHƯƠNG TRÌNH: <a href="https://ticketbox.vn/vr-fest-2020#booking" target="_blank">https://ticketbox.vn/vr-fest-2020#booking</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <div class="swal2-header" id="moto-ub150-pro">
				 <h2 class="swal2-title" id="swal2-title">Đăng ký đua MOTUL MOTOR RACING CUP HỆ UB150 Pro</h2>
				 <div class="swal2-content" style="width: 100%;">
				 Phí đăng ký tham gia thi đấu: 1.000.000 vnđ<br/><br/>
				 CƠ CẤU GIẢI THƯỞNG NHẤT - NHÌ - BA HẤP DẪN<br/>
				 Bao gồm :<br/>
				 -	2 vé xem event trị giá 700.000vnđ<br/>
				 -	Thay nhớt Motul<br/>
				 -	Quà từ BTC<br/>
				 -	1 phòng khách sạn Đại Nam ngày 11/12<br/>
				 <br/>
				 VĐV vui lòng đọc kỹ ĐIỀU LỆ:<br/>
				 <a href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_UB150.pdf" target="_blank">Xem điều lệ tại đây</a><br/>
				 <br/>
				 LIÊN HỆ MUA VÉ XEM CHƯƠNG TRÌNH: <a href="https://ticketbox.vn/vr-fest-2020#booking" target="_blank">https://ticketbox.vn/vr-fest-2020#booking</a><br/>
				 <br/>
				 <span class="swal2-content" style="color: red;">*Bắt buộc</span>
				 </div>
			  </div>
			  <br/>
			  <br/>
			  <br/>
			  <div class="swal2-content">
				<label for="fullname" class="swal2-input-label" id="fullname-label">Họ và tên <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="fullname" name="fullname" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="fullname-validation-message"></div>
				 
				<label for="birthday" class="swal2-input-label" id="birthday-label">Ngày tháng năm sinh <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="birthday" name="birthday" placeholder="dd/mm/yyyy" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="birthday-validation-message"></div>
				 
				<label for="phone" class="swal2-input-label" id="phone-label">Số điện thoại <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="phone" name="phone" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="phone-validation-message"></div>
				 
				<label for="email" class="swal2-input-label" id="email-label">Email <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="email" name="email" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="email-validation-message"></div>
				 
				<label for="address" class="swal2-input-label" id="address-label">Nơi ở hiện nay <span style="color: red;">*</span></label>
				 <input class="swal2-input" id="address" name="address" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="address-validation-message"></div>
				 
				<label for="social_link" class="swal2-input-label" id="social_link-label">Địa chỉ trang mạng xã hội của bạn</label>
				 <input class="swal2-input" id="social_link" name="social_link" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="social_link-validation-message"></div>
				 
				<label for="license_file1" class="swal2-input-label" id="license_file1-label">Hình ảnh bằng lái A2 còn hiệu lực (Upload tâp tin jpg, jpeg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, jpeg, png, pdf, docx" id="license_file1" name="license_file1" class="swal2-file" placeholder="" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="license_file1-validation-message"></div>
				 
				<label for="license_file2" class="swal2-input-label" id="license_file2-label">Hình ảnh bằng lái B trở lên còn hiệu lực (Upload tâp tin jpg, jpeg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, jpeg, png, pdf, docx" id="license_file2" name="license_file2" class="swal2-file" placeholder="" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="license_file2-validation-message"></div>
				 
				<label for="license_file3" class="swal2-input-label" id="license_file3-label">Hình ảnh bằng đua xe VMA (Upload tâp tin jpg, jpeg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, jpeg, png, pdf, docx" id="license_file3" name="license_file3" class="swal2-file" placeholder="" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="license_file3-validation-message"></div>
				 
				<label for="license_file4" class="swal2-input-label" id="license_file4-label">Hình ảnh bằng lái A1 còn hiệu lực <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, jpeg, png, pdf, docx" id="license_file4" name="license_file4" class="swal2-file" placeholder="" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="license_file4-validation-message"></div>
				 
				<label for="number" class="swal2-input-label" id="number-label">Số đua đăng ký</label>
				 <input class="swal2-input" id="number" name="number" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="number-validation-message"></div>
				 
				<label for="sponsor_fullname" class="swal2-input-label" id="sponsor_fullname-label">Họ và tên người bảo hộ</label>
				 <input class="swal2-input" id="sponsor_fullname" name="sponsor_fullname" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="sponsor_fullname-validation-message"></div>
				 
				<label for="sponsor_phone" class="swal2-input-label" id="sponsor_phone-label">Số điện thoại người bảo hộ</label>
				 <input class="swal2-input" id="sponsor_phone" name="sponsor_phone" placeholder="" type="text" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="sponsor_phone-validation-message"></div>
				 
				<label for="banktransfer_file1" class="swal2-input-label" id="banktransfer_file1-label">Chuyển khoản vào STK: 19036288269012 - TECHCOMBANK - CONG TY TNHH HOC VIEN THE THAO TOC DO VIET NAM. Nội dung: HỌ TÊN - HẠNG MỤC ĐĂNG KÝ. Hình ảnh xác nhận thành công (Upload tâp tin jpg, jpeg, png, pdf, docx) <span style="color: red;">*</span></label>
				 <input type="file" aria-label="Upload tâp tin jpg, jpeg, png, pdf, docx" id="banktransfer_file1" name="banktransfer_file1" class="swal2-file" placeholder="" style="display: flex; color: black;">
				 <div class="swal2-validation-message" id="banktransfer_file1-validation-message"></div>
				 
				<label for="comment1" class="swal2-input-label" id="comment1-label">Hãy chia sẻ với chúng tôi về những kinh nghiệm đua xe của bạn: Bạn từng tham gia giải đua nào tại Đại Nam? Các giải đua khác bạn từng tham gia, thành tích đạt được?.... Cảm ơn bạn đã chia sẻ! <span style="color: red;">*</span></label>
				 <textarea aria-label="Type your message here" class="swal2-textarea" id="comment1" name="comment1" placeholder="" id="swal2-input" style="display: flex; color: black;"></textarea>
				 <div class="swal2-validation-message" id="comment1-validation-message"></div>
				 
				<label for="comment2" class="swal2-input-label" id="comment2-label">Giới thiệu chi tiết về kinh nghiệm và kỹ năng lái xe, đua xe của bản thân để được vào vòng loại. <span style="color: red;">*</span></label>
				 <textarea aria-label="Type your message here" class="swal2-textarea" id="comment2" name="comment2" placeholder="" id="swal2-input" style="display: flex; color: black;"></textarea>
				 <div class="swal2-validation-message" id="comment2-validation-message"></div>
				 
				<p>Bạn hãy tham gia nhóm dành cho VĐV để cập nhật thêm thông tin về giải đua: <a href="https://www.facebook.com/groups/motulmotorracingcup2020">MOTUL MOTOR RACING CUP - VietNam Racing Festival 2020</a></p>
			  </div>
			  <div class="swal2-actions">
				 <div class="swal2-loader"></div>
				 <button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;" onclick="return ProcessRegister();" name="form1">Đăng ký</button>
				 <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="CancelRegister();">Đóng</button>
			  </div>
		   </div>
		</div>
	</form>

 
