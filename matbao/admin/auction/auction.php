<style>
.bid-btn {
  background-color: #23a028; /* Green */
  border: none;
  color: white;
  padding: 4px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.bid-btn:hover {
  background-color: #4CAF50; /* Green */
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
<script>
	$(document).ready(function() {
		var aid =  getParameterByName('aid');
		if (aid != ''){
			$('#nut_dau_gia' + aid).click();
		}
	});

   function OpenAuctionPopup(id){
		HideAllControl();
		try {
			if (customer_id !== undefined) {
				ShowPidForm(id);
			} else {
				$('#selected_auction_product_id').val(id);
				if ('<?php echo $enable_auction_login; ?>' == ''){
					ShowPidForm(id);
				} else {
					$('#login_form').show();
				}
			}
		} catch(err) {
			$('#selected_auction_product_id').val(id);
			if ('<?php echo $enable_auction_login; ?>' == ''){
				ShowPidForm(id);
			} else {
				$('#login_form').show();
			}
		}
   }

   function ShowPidForm(id){
   	   $('#aution_product_id').val(id);
		var image_array = $('#image_array' + id).html();
		var pro_description = $('#pro_description' + id).html();
		$('#pro_description').html(pro_description);
		var pro_name = $('#pro_name' + id).html();
		$('#pro_name').html(pro_name);
		var	pro_type = $('#pro_type' + id).html();
		$('#pro_type').html('<span style="color:#197114;font-weight: bold;">Thể loại: ' + pro_type + '</span>');
		var price = $('#price' + id).html();
		var price_number = $('#price_number' + id).val();
		$('#price').html('<span style="color: #0bbb19;font-size: 15pt;font-weight: bold;">Giá hiện tại: ' + price + '<input type="hidden" id="price_number" value="' + price_number + '" /></span></span>');
		var extra_option = $('#extra_option' + id).html();
		$('#extra_option').html(extra_option);
		$('#selected_auction_product_id1').val(id);
		
		var list_of_auctions = this["list_of_auctions_" + id];
		if (list_of_auctions){
			var list_of_auctions_html = '';
			list_of_auctions_html += '<div style="width: 100%; height: 400px; overflow:auto;">';
			list_of_auctions_html += '<table style="width: 100%; table-layout:fixed;" class="styled-table">';
			list_of_auctions_html += '<thead>';
			list_of_auctions_html += '<tr>';
			list_of_auctions_html += '<th>#</th><th>Họ và tên</th><th>Số điện thoại</th><th>Giá gốc</th><th>Giá đưa ra</th><th>Ngày đấu giá</th>';
			list_of_auctions_html += '</tr>';
			list_of_auctions_html += '</thead>';
			list_of_auctions_html += '<tbody>';
			var counter = 1;
			$.each(list_of_auctions, function( index, value ) {
				//$x = $row['fullname'] . '|' . $row['phone'] . '|' . $row['pro_name'] . '|' . $row['create_date'] . '|' . $row['root_price'] . '|' . $row['pid_rate'];
				var arr = value.split("|");
				list_of_auctions_html += '<tr>';
				list_of_auctions_html += '<td>' + counter + '</td>';
				list_of_auctions_html += '<td>' + arr[0] + '</td>';
				list_of_auctions_html += '<td>' + arr[1] + '</td>';
				list_of_auctions_html += '<td>' + arr[4] + '</td>';
				list_of_auctions_html += '<td>' + arr[5] + '</td>';
				list_of_auctions_html += '<td>' + arr[3] + '</td>';
				list_of_auctions_html += '</tr>';
				counter++;
			});
			list_of_auctions_html += '</tbody>';
			list_of_auctions_html += '</table>';
			list_of_auctions_html += '</div>';
			$('#list_of_auctions_panel').html(list_of_auctions_html);
		} else {
			$('#list_of_auctions_panel').html('');
		}

		var arr = image_array.split("|");
		if (arr.length > 0){
			$('#aution_product_image').val(arr[0]);
			var image_slider = '<div class="w3-content" style="max-width:1200px">';
			jQuery.each(arr, function(index, item) {
				image_slider += '<img class="mySlides" src="' + item + '" style="width:100%;display:none">';
			});
			image_slider += '<div class="w3-row-padding w3-section" style="overflow: auto;" id="aution_product_image_slider">';
			var counter = 1;
			jQuery.each(arr, function(index, item) {
				image_slider += '<div class="w3-col s4"><img class="demo w3-opacity w3-hover-opacity-off" src="' + item + '" style="width:100%;cursor:pointer" onclick="currentDiv(' + counter + ')"></div>';
				counter++;
			});
			image_slider += '</div></div>';
			$('#product_image_array').html(image_slider);
			currentDiv(1);
		}
		if ('<?php echo $enable_auto_auction_register; ?>' == '1'){
			$('#flash_auction_fullname').attr('style','display: flex; color: black;');
			$('#flash_auction_fullname-label').show();
			$('#flash_auction_phone').attr('style','display: flex; color: black;');
			$('#flash_auction_phone-label').show();
		}
		$('#pid_form').show();
   }

   function HideAllControl(){
		$('#login_form').hide();
		$('#register_form').hide();
		$('#pid_form').hide();
		$('#profile_form').hide();
		$('#update_profile_form').hide();
		$('#update_password_form').hide();
		$('#send_password_form').hide();
		$('#auction_share_panel').hide();
   }

   function ShowRegisterForm(){
		HideAllControl();
		var selected_auction_product_id = $('#selected_auction_product_id').val();
		$('#selected_auction_product_id1').val(selected_auction_product_id);
		$('#register_form').show();
   }

   function CancelAuction(){
      $('#aution_form').attr("style", "display: none;");
   }

   function ProcessAuction(){
		var error_message = "";
		if ('<?php echo $enable_auto_auction_register; ?>' == '1'){
			var name = $('#flash_auction_fullname').val();
			if(name == ''){
				error_message += "Xin điền họ và tên của bạn.<br>";
			}

			var phone_filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
			var phone = $('#flash_auction_phone').val();
			if (!phone_filter.test(phone)) {
				error_message += "Xin điền số điện thoại của bạn.<br>";
			}
		}

		var pid_rate = $('#pid_rate').val();
		pid_rate = parseFloat(pid_rate);
		var max_pid_rate = 99999999999.99;
		if(!isNumeric($('#pid_rate').val())){
			error_message += "Xin nhập giá tiền bằng số<br>";
		} else if (pid_rate >= max_pid_rate){
			error_message += "Số tiền quá lớn. Xin liên hệ trực tiếp với chúng tôi để đặt giá giúp bạn.<br>";
		} else if (pid_rate < 0){
			error_message += "Không chấp nhận số tiền âm.<br/>";
		}
		var price_number = parseFloat($('#price_number').val());
		if (pid_rate < price_number){
			error_message += "Giá bạn đưa ra thấp hơn giá hiện tại.<br>";
		}
		if (pid_rate == price_number){
			error_message += "Giá bạn đưa ra phải cao hơn giá hiện tại.<br>";
		}
		if (error_message == ""){
			if (confirm("Bạn đã chắc chắn số tiền đấu giá?")) {
				return true;
			} else {
			return false;
			}
		} else {
			swal({
			title: '<strong>Notification</strong>',
			html: error_message,
			type: 'error',
			confirmButtonText: 'Ok'
			});
			return false;
		}
	}

	function ShareAuction(){
		var aution_product_id = $('#aution_product_id').val();
		var auction_link = '<?php echo $domain; ?>?aid=' + aution_product_id;
		var pro_name = $('#pro_name').html();
		var pro_short_description = $('#pro_short_description' + aution_product_id).html();
		var aution_product_image = $('#aution_product_image').val();
		var mail_title = "<?php echo $site_name;?> - Your auction link";
		var mail_body = "Dear customer,%0D%0A%0D%0AYour product name is: " + pro_name + "%0D%0ACopy this link to your browser to access the auction: " + auction_link + "%0D%0A%0D%0ASincerely,%0D%0A<?php echo $site_name;?>";
		//https://www.inithtml.com/html-css/them-cac-nut-chia-se-len-mang-xa-hoi-vao-website/
		//http://www.facebook.com/sharer.php?s=100&p[title]=YOUR_TITLE&p[summary]=YOUR_SUMMARY&p[url]=YOUR_URL&p[images][0]=YOUR_IMAGE_TO_SHARE_OBJECT
		//https://www.facebook.com/sharer/sharer.php?u=
		//var fs_link = 'https://www.facebook.com/sharer/sharer.php?s=100&p[title]=' + pro_name + '&p[summary]=' + pro_short_description + '&p[url]=' + auction_link + '&p[images][0]=' + aution_product_image;
		//$('#aution_facebook_link').attr('href', fs_link);
		$('#aution_twitter_link').attr('href', 'https://twitter.com/share?text=' + encodeURIComponent(pro_name) + '&url=' + auction_link);
		$('#aution_email_link').attr('href', 'https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=' + mail_title + '&body=' + mail_body);
		$('#auction_share_panel').show();
	}

	function CopyAuctionLink(){
		var aution_product_id = $('#aution_product_id').val();
		var auction_link = '<?php echo $domain; ?>?aid=' + aution_product_id;
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val(auction_link).select();
		document.execCommand("copy");
		$temp.remove();

		swal({
		title: '<strong>Notification</strong>',
		html: "Đã sao chép",
		type: 'success',
		confirmButtonText: 'Ok'
		});
	}

	function CloseAuctionSharePanel(){
		$('#auction_share_panel').hide();
	}

	function Login(){
		var error_message = "";
        
        if(!isEmail($('#login_email').val())){
            error_message += "Xin nhập email đúng định dạng.<br>";
        }

        if($('#login_password').val() == ''){
            error_message += "Xin nhập mật khẩu<br>";
        }

		if (error_message != ""){
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

	function Register(){
		var error_message = "";

		if($('#fullname').val() == ''){
            error_message += "Xin nhập họ và tên<br>";
        }

		if($('#phone').val() == ''){
            error_message += "Xin nhập số điện thoại<br>";
        }

        if(!isEmail($('#email').val())){
            error_message += "Xin nhập email đúng định dạng.<br>";
        }
		var password = $('#password').val();
        if(password == ''){
            error_message += "Xin nhập mật khẩu<br>";
        } else if (password.length < 6){
			error_message += "Mật khẩu phải có ít nhất 6 ký tự.<br>";
		}

		if (error_message != ""){
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

   function ValidateForm(){
        var error_message = "";
        
        if($('#fullname').val() == ''){
            error_message += "Xin nhập họ và tên.<br>";
        }
        // if(!isDate($('#birthday').val())){
            // error_message += "Xin nhập ngày sinh đúng định dạng (Ví dụ 02/11/1994).<br>";
        // }
        if($('#phone').val() == ''){
            error_message += "Xin nhập số điện thoại.<br>";
        }
        if(!isEmail($('#email').val())){
            error_message += "Xin nhập email đúng định dạng.<br>";
        }
        // if($('#address').val() == ''){
            // error_message += "Xin nhập địa chỉ nơi ở hiện nay.<br>";
        // }
        if(!isNumeric($('#pid_rate').val())){
            error_message += "Xin nhập giá tiền bằng số<br>";
        }
       
        return error_message;
	}

   function isNumeric(str) {
        if (typeof str != "string") return false // we only process strings!  
        return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
        !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
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

	function getParameterByName( name ){
		var regexS = "[\\?&]"+name+"=([^&#]*)", 
		regex = new RegExp( regexS ),
		results = regex.exec( window.location.search );
		if( results == null ){
		return "";
		} else{
		return decodeURIComponent(results[1].replace(/\+/g, " "));
		}
	}
</script>
<?php
$selected_auction_product_id = "";
$selected_auction_product_id1 = "";
if (!isset($_SESSION['customer_id'])) {
	if ($enable_auto_auction_register && isset($_POST['pid_form'])){
		$valid = 1;
		$message = "";
		$flash_auction_fullname = strip_tags($_POST['flash_auction_fullname']);
		$flash_auction_phone = strip_tags($_POST['flash_auction_phone']);
		if(!isset($flash_auction_fullname)){
			$valid = 0;
			$message .= 'Xin nhập họ và tên.<br>';
		}
		if(!validate_phone_number($flash_auction_phone)) {
			$valid = 0;
			$message .= 'Xin nhập số điện thoại.<br>';
		}
		$aution_product_id = strip_tags($_POST['aution_product_id']);
		$pid_rate = strip_tags($_POST['pid_rate']);
		if(!isset($aution_product_id)) {
			$valid = 0;
			$message .= 'Xin chọn sản phẩm.<br>';
		}
		if(!is_numeric($pid_rate)) {
			$valid = 0;
			$message .= 'Xin nhập số tiền đấu giá.<br>';
		}
		
		if ($valid == 0){
			ShowSwalMessage($message, false, "");
		} else {
			$sql = "SELECT * FROM customer where phone = ?;";
			$statement = $pdo->prepare($sql);
			$statement->execute(array($flash_auction_phone));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			$customer_id = 0;
			//case customer existed
			if (count($result) > 0) {
				foreach ($result as $row)
				{
					//update customer fullname if he change his name but does not change phone number
					$customer_id = $row["id"];
					$sql = "UPDATE `customer` SET `fullname`=? WHERE id = ?";
					$statement = $pdo->prepare($sql);
					$statement->execute(array($flash_auction_fullname, $customer_id));
				}
			} else {
				//Create a new customer with phone number
				$sql = "INSERT INTO customer (fullname, birthday, phone, "
				. "email, address, position_level, password) VALUES "
				. "(?,?,?,?,?,?,?)";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($flash_auction_fullname, '', $flash_auction_phone, '', '', '', PasswordHash(RandomPassword())));
				$register_id = $pdo->lastInsertId();
				$customer_id = $register_id;
			}

			//Start record pid
			try{
				$current_price = GetCurrentAutionProductPrice($pdo, $aution_product_id);
				$max_pid_rate = 99999999999.99;
				if ($pid_rate < 0){
					$valid = 0;
					$message = "Không chấp nhận số tiền âm.<br/>";
				} else if ($pid_rate >= $max_pid_rate){
					$valid = 0;
					$message = "Số tiền quá lớn. Xin liên hệ trực tiếp với chúng tôi để đặt giá giúp bạn.<br>";
				} else {
					if ($current_price >= $pid_rate){
						$valid = 0;
						$message = 'Số tiền đấu giá phải cao hơn giá hiện tại.<br>';
					} else {
						$sql = "SELECT * FROM auction_product where id = " . $aution_product_id;
						$statement = $pdo->prepare($sql);
						$statement->execute();
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);

						if (count($result) > 0)
						{
							$root_price = $result[0]["price"];
							$sql = "INSERT INTO auction (root_price, pid_rate, aution_product_id, customer_id) VALUES "
							. "(?,?,?,?)";
							$statement = $pdo->prepare($sql);
							$statement->execute(array($root_price, $pid_rate, $aution_product_id, $customer_id));
							$message = "<span style=\"text-transform: uppercase;\">Đấu giá thành công!</span>";
						} else {
							$message = "<span style=\"text-transform: uppercase;\">Sản phẩm không tồn tại.</span>";
						}
					}
				}
			} catch (Exception $e) {
				$valid = 0;
				$message = $e;
			}

			if($valid == 1 ){
				ShowSwalMessage($message, true, "");
			} else{
				ShowSwalMessage($message, false, "");
			}
		}
	}
	else if(isset($_POST['login_form'])) {
		$valid = 1;
		$email = strip_tags($_POST['login_email']);
		$password = strip_tags($_POST['login_password']);
		if(!isEmail($email)){
		  $valid = 0;
		  $message .= 'Xin nhập email đúng định dạng.<br>';
	   }
		if(!isset($password)) {
			$valid = 0;
			$message .= 'Xin nhập mật khẩu.<br>';
		}
		if ($valid == 0){
			ShowSwalMessage($message, false, "$('#login_form').show();");
		} else {
			$sql = "SELECT * FROM customer where email = ?;";
			$statement = $pdo->prepare($sql);
			$statement->execute(array($email));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			if (count($result) > 0) {
				foreach ($result as $row)
				{
					$password_hash = $row["password"];
					if (PasswordVerify($password, $password_hash)){
						$id = $row["id"];
						$_SESSION['customer_id'] = $id;
						if ($_POST['selected_auction_product_id'] != ''){
							//Try to catch selected product id to client to re-trigger product detail after login
							$selected_auction_product_id = strip_tags($_POST['selected_auction_product_id']);
							$selected_auction_product_id1 = strip_tags($_POST['selected_auction_product_id']);
							ShowSwalMessage("Đăng nhập thành công", true, "$('#nut_dau_gia" . $selected_auction_product_id . "').click();");
						 } else {
					 		 ShowSwalMessage("Đăng nhập thành công", true, "ShowProfile();");
						 }
					} else {
						ShowSwalMessage('Sai mật khẩu.', false, "$('#login_form').show();");
					}
				}
			} else {
				ShowSwalMessage('Email không tồn tại.', false, "$('#login_form').show();");
			}
		}
	} else if (isset($_POST['register_form'])){
		$message = "";
		$valid = 1;
		$email = strip_tags($_POST['email']);
		$password = strip_tags($_POST['password']);
		$fullname = strip_tags($_POST['fullname']);
		$phone = strip_tags($_POST['phone']);
		if(!isset($fullname)) {
			$valid = 0;
			$message .= 'Xin nhập họ và tên.<br>';
		}
		if(!isset($phone)) {
			$valid = 0;
			$message .= 'Xin nhập số điện thoại.<br>';
		}
		if(!isEmail($email)){
		  $valid = 0;
		  $message .= 'Xin nhập email đúng định dạng.<br>';
	   }
		if(!isset($password)) {
			$valid = 0;
			$message .= 'Xin nhập mật khẩu.<br>';
		} else if (strlen($password) < 6){
			$valid = 0;
			$message .= "Mật khẩu phải có ít nhất 6 ký tự.<br>";
		}
		if ($valid == 0){
			ShowSwalMessage($message, false, "$('#register_form').show();");
		} else {
			$sql = "SELECT * FROM customer where email = ? or phone = ?;";
			$statement = $pdo->prepare($sql);
			$statement->execute(array($email, $phone));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			if (count($result) > 0) {
				ShowSwalMessage('Email hay số điện thoại đã tồn tại. Xin vui lòng đăng ký với email và số điện thoại khác.', false, "$('#register_form').show();");
			} else {
				try{
					 $sql = "INSERT INTO customer (fullname, birthday, phone, "
					 . "email, address, position_level, password) VALUES "
					 . "(?,?,?,?,?,?,?)";
					 $statement = $pdo->prepare($sql);
					 $statement->execute(array($fullname, '', $phone, $email, '', '', PasswordHash($password)));
					 $sql = "SELECT * FROM customer where email = ?;";
					 $register_id = $pdo->lastInsertId();
					 $_SESSION['customer_id'] = $register_id;
					 if ($_POST['selected_auction_product_id1'] != ''){
						//Try to catch selected product id to client to re-trigger product detail after register
						$selected_auction_product_id = strip_tags($_POST['selected_auction_product_id1']);
						$selected_auction_product_id1 = strip_tags($_POST['selected_auction_product_id1']);
						ShowSwalMessage("Đăng ký thành công", true, "$('#nut_dau_gia" . $selected_auction_product_id1 . "').click();");
					 } else {
					 	 ShowSwalMessage("Đăng ký thành công", true, "ShowProfile();");
					 }
				  } catch (Exception $e) {
					 ShowSwalMessage($e, false, "$('#register_form').show();");
				  }
			}
		}
	}
} else {
	if(isset($_POST['pid_form'])) {
		$valid = 1;
		$message = "";
		$aution_product_id = strip_tags($_POST['aution_product_id']);
		$pid_rate = strip_tags($_POST['pid_rate']);
		if(!isset($aution_product_id)) {
			$valid = 0;
			$message .= 'Xin chọn sản phẩm.<br>';
		}
		if(!is_numeric($pid_rate)) {
			$valid = 0;
			$message .= 'Xin nhập số tiền đấu giá.<br>';
		}

	   if($valid != 0) {
		  try{
			$current_price = GetCurrentAutionProductPrice($pdo, $aution_product_id);
			$max_pid_rate = 99999999999.99;
			if ($pid_rate < 0){
				$valid = 0;
				$message = "Không chấp nhận số tiền âm.";
			} else if ($pid_rate >= $max_pid_rate){
				$valid = 0;
				$message = "Số tiền quá lớn. Xin liên hệ trực tiếp với chúng tôi để đặt giá giúp bạn.<br>";
			}else {
				if ($current_price >= $pid_rate){
					 $valid = 0;
					$message = 'Số tiền đấu giá phải cao hơn giá hiện tại.';
				} else {
					$sql = "SELECT * FROM auction_product where id = " . $aution_product_id;
					$statement = $pdo->prepare($sql);
					$statement->execute();
					$result = $statement->fetchAll(PDO::FETCH_ASSOC);

					if (count($result) > 0)
					{
						 $root_price = $result[0]["price"];
						 $sql = "INSERT INTO auction (root_price, pid_rate, aution_product_id, customer_id) VALUES "
						 . "(?,?,?,?)";
						 $statement = $pdo->prepare($sql);
						 $customer_id = $_SESSION['customer_id'];
						 $statement->execute(array($root_price, $pid_rate, $aution_product_id, $customer_id));
						 $message = "<span style=\"text-transform: uppercase;\">Đấu giá thành công. Hãy vào mục <a style=\"font-weight: bold;cursor: pointer; color: green;\" onclick=\"swal.close(); ShowProfile();\">tài khoản của tôi</a> để xem thông tin chi tiết.</span>";
					 }
				 }
			 }
		  } catch (Exception $e) {
			 $valid = 0;
			 $message = $e;
		  }
	   }

	   if($valid == 1 ){
		  ShowSwalMessage($message, true, "ShowProfile();");
	   } else{
		  ShowSwalMessage($message, false, "$('#pid_form').show();");
	   }
	}
}
?>

<?php
$sql = "SELECT * FROM auction_product ORDER BY create_date DESC LIMIT 10";
$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0)
{
	echo('<div class="contain"><div class="about-contain display" id="race">');
	echo ('<ul class="race-league">');
	foreach ($result as $row)
	{
		$id = $row["id"];
		$pro_name = $row["pro_name"];
		$pro_short_description = $row["pro_short_description"];
		$pro_description = $row["pro_description"];
		$pro_type = $row["pro_type"];
		$start_date = $row["start_date"];
		$end_date = $row["end_date"];
		$list_of_auctions = GetListOfAuction($pdo, $id, $start_date, $end_date);
		$isDateEligible = CheckDateBetween($row["start_date"], $row["end_date"]);
		$price = $row["price"];
		if ($isDateEligible) {
			$price = GetCurrentAutionProductPrice($pdo, $id);
		}
		$currency = $row["currency"];
		$extra_option = $row["extra_option"];
		$create_date = date_create($row["create_date"]);

		$first_image = "";
		$img_url_array = GetImageLinks($row["picture"], $domain);
		$image_array_str = "";
		if (count($img_url_array) > 0)
		{
			$first_image = '<img src="' . $img_url_array[0] . '" alt="' . $pro_name . '" style="width:100%"/>';
			$image_array_str = implode ("|", $img_url_array);
		}

		$gmtTimezone = new DateTimeZone('GMT');
		$start_date = new DateTime($start_date, $gmtTimezone);
		$end_date = new DateTime($end_date, $gmtTimezone);
		$script_datetime = "<script>
				$(document).ready(function() {
					// Set the date we're counting down to
					var start_date = new Date('" . date_format($start_date,"Y/m/d H:i:s") . "');
					var end_date = new Date('" . date_format($end_date,"Y/m/d H:i:s") . "');
					var current_date = new Date();
					if(Date.parse(current_date) <= Date.parse(end_date) && Date.parse(current_date) >= Date.parse(start_date)){
						  var countdown_time = end_date.getTime();
						  // Update the count down every 1 second
						  var x = setInterval(function() {
							  // Find the distance between now and the count down date
							  var now = new Date().getTime();
							  var distance = countdown_time - now;
    
							  // Time calculations for days, hours, minutes and seconds
							  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
							  // Output the result in an element with id='count_down_timer" . $id . "'
							  document.getElementById('count_down_timer" . $id . "').innerHTML = '<p>&#128336; ' + days + ' ngày ' + hours + ' giờ '
							  + minutes + ' phút ' + seconds + ' giây</p>';
    
							  // If the count down is over, write some text 
							  if (distance < 0) {
								clearInterval(x);
								document.getElementById('count_down_timer" . $id . "').innerHTML = 'EXPIRED';
							  }
						  }, 1000);
					}
				});
				</script>";
		if ($list_of_auctions != null){
			$script_datetime .= "<script>
					var list_of_auctions_" . $id . " = " . json_encode($list_of_auctions) . ";
				</script>";
		}
		$nut_dau_gia = $script_datetime . '<span style="color: orange;font-size: 13pt;font-weight: bold;" id="count_down_timer' . $id . '"></span><a id="nut_dau_gia' . $id . '" style="cursor: pointer;" class="bid-btn" onclick="OpenAuctionPopup(' . $id . ');">ĐẤU GIÁ</a>';
		if (!$isDateEligible){
			$nut_dau_gia = '<span style="color: orange;font-size: 13pt;font-weight: bold;" id="count_down_timer' . $id . '"></span><a style="cursor: pointer; background: #b5b3b3c9;" class="bid-btn">Kết thúc..</a>';
		}
		echo ('<li style="width: 349px; margin-top: 30px;
						height: auto; padding-bottom: 20px;
						position: relative; background: green;
						background-size: cover;
						border-radius: 13px; border: 2px solid #284c28;
						display: inline-block;
						vertical-align: top;">
					<h2>Sản phẩm</h2>
					<div class="copy">
						<div class="note">' . $first_image . '<div style="display: none;" id="image_array' . $id . '">' . $image_array_str . '</div><div style="display: none;" id="pro_short_description' . $id . '">' . $pro_short_description . '</div><div style="display: none;" id="pro_description' . $id . '">' . $pro_description . '</div>
							<h6 style="color: #f4ed2d; margin-bottom: 0;" id="pro_name' . $id . '">' . $pro_name . '</h6>
							<p style="color: #CDDC39; font-size: 14px;">- Thể loại: <span id="pro_type' . $id . '" style="color: #CDDC39; font-size: 14px;">' . $pro_type . '</span></p>
							<p style="color: aliceblue; font-size: 12pt; border: 1px solid;">- Giá hiện tại: <span id="price' . $id . '" style="color: aliceblue;font-size: 12pt;">' . format_money($price, $currency) . '</span></p>
							<input type="hidden" id="price_number' . $id . '" value="' . $price . '"/>
							<p style="color: #3df900; font-size: 11pt;" id="extra_option' . $id . '">' . $extra_option . '</p>
							<p style="color: #ffffff; font-size: 12pt;" id="pro_short_description' . $id . '">' . $pro_short_description . '</p>
							' . $nut_dau_gia . '
						</div>
					</div>
				</li>');
	}
	echo ('</ul>');
	echo ('</div></div>');
}
else
{
	echo ("No record");
}

function CheckDateBetween($start_date, $end_date){
	$phpdate = strtotime( $start_date );
	$start_date = date( 'Y-m-d H:i:s', $phpdate );
	$phpdate = strtotime( $end_date );
	$end_date = date( 'Y-m-d H:i:s', $phpdate );
	$today = date("Y-m-d H:i:s");
	if (($today >= $start_date) && ($today <= $end_date)){
		return true;
	}
	return false;
}

function GetCurrentAutionProductPrice($pdo, $auction_product_id) {
	$sql = "SELECT * FROM auction_product where id = " . $auction_product_id;
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		$price = $result[0]["price"];
		$start_date = $result[0]["start_date"];
		$phpdate = strtotime( $start_date );
		$start_date = date( 'Y-m-d H:i:s', $phpdate );
		$end_date = $result[0]["end_date"];
		$phpdate = strtotime( $end_date );
		$end_date = date( 'Y-m-d H:i:s', $phpdate );
		$sql = "SELECT MAX(pid_rate) as max_pid_rate, customer_id, aution_product_id, create_date, id FROM auction where aution_product_id = " . $auction_product_id . " and create_date >= '" . $result[0]["start_date"] . "' and create_date <= '" . $result[0]["end_date"] . "';";
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		if (count($result) > 0)
		{
			if ($result[0]['max_pid_rate'] != null){
				$max_pid_rate = $result[0]['max_pid_rate'];
				$winner_customer_id = $result[0]['customer_id'];
				return $max_pid_rate;
			} else {
				return $price;
			}
		} else {
			return $price;
		}
	}
	return 0;
}

function GetListOfAuction($pdo, $auction_product_id, $start_date, $end_date){
	$sql = "SELECT au.*, cu.fullname, cu.email, cu.phone, pro.pro_name, pro.currency FROM auction au left join customer cu on au.customer_id = cu.id left join auction_product pro on au.aution_product_id = pro.id where au.aution_product_id = " . $auction_product_id . " AND au.create_date >= '" . $start_date . "' AND au.create_date <= '" . $end_date . "' ORDER BY au.create_date DESC";
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		$array = array();
		foreach ($result as $row)
		{
			$create_date = date_create($row["create_date"]);
			$x = $row['fullname'] . '|' . $row['phone'] . '|' . $row['pro_name'] . '|' . date_format($create_date, "d-m-Y H:i:s") . '|' . format_money($row['root_price'], $row['currency']) . '|' . format_money($row['pid_rate'], $row['currency']);
			$array[] = $x;
		}
		return $array;
	}
	return null;
}
?>



<form id="login_form" action="" method="post" enctype="multipart/form-data" id="register_panel" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
		<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			<div class="swal2-content">
				<h2>Đăng nhập</h2>
				<input type="hidden" id="selected_auction_product_id" name="selected_auction_product_id" value="<?php echo($selected_auction_product_id); ?>"/>
				<label for="login_email" class="swal2-input-label" id="login_email-label">Email <span style="color: red;">*</span></label>
				<input class="swal2-input" id="login_email" name="login_email" placeholder="" type="text" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="login_email-validation-message"></div>
				<label for="login_password" class="swal2-input-label" id="login_password-label">Mật khẩu <span style="color: red;">*</span></label>
				<input class="swal2-input" id="login_password" name="login_password" placeholder="" type="password" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="login_password-validation-message"></div>
			</div>
			<div class="swal2-actions">
				<div class="swal2-loader"></div>
				<!-- Using unicode sympol: https://www.toptal.com/designers/htmlarrows/symbols/ -->
				<button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: green !important;" onclick="return Login();" name="login_form">&#128275; Đăng nhập</button>
				<button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="HideAllControl();">&#10006; Đóng</button>
				<br/><a style="cursor: pointer;" onclick="ShowRegisterForm();">Chưa có tài khoản? Đăng ký ngay.</a><br/>
				<a style="cursor: pointer;" onclick="ShowSendPasswordForm();">Quên mật khẩu? Lấy lại mật khẩu ngay.</a>
			</div>
		</div>
	</div>
</form>

<form id="register_form" action="" method="post" enctype="multipart/form-data" id="register_panel" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
		<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
			<div class="swal2-content">
				<h2>Đăng ký tài khoản</h2>
				<input type="hidden" id="selected_auction_product_id1" name="selected_auction_product_id1" value="<?php echo($selected_auction_product_id1); ?>"/>
				<label for="fullname" class="swal2-input-label" id="fullname-label">Họ và tên <span style="color: red;">*</span></label>
				<input class="swal2-input" id="fullname" name="fullname" placeholder="" type="text" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="fullname-validation-message"></div>
				<label style="display: none;" for="birthday" class="swal2-input-label" id="birthday-label">Ngày tháng năm sinh <span style="color: red;">*</span></label>
				<input style="display: none;" class="swal2-input" id="birthday" name="birthday" placeholder="dd/mm/yyyy" type="text" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="birthday-validation-message"></div>
				<label for="phone" class="swal2-input-label" id="phone-label">Số điện thoại <span style="color: red;">*</span></label>
				<input class="swal2-input" id="phone" name="phone" placeholder="" type="text" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="phone-validation-message"></div>
				<label for="email" class="swal2-input-label" id="email-label">Email <span style="color: red;">*</span></label>
				<input class="swal2-input" id="email" name="email" placeholder="" type="text" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="email-validation-message"></div>
				<label for="password" class="swal2-input-label" id="password-label">Mật khẩu <span style="color: red;">*</span></label>
				<input class="swal2-input" id="password" name="password" placeholder="" type="password" style="display: flex; color: black;">
				<div class="swal2-validation-message" id="password-validation-message"></div>
				<label style="display: none;" for="address" class="swal2-input-label" id="address-label">Nơi ở hiện nay <span style="color: red;">*</span></label>
				<input style="display: none;" class="swal2-input" id="address" name="address" placeholder="" type="text" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="address-validation-message"></div>
				<label style="display: none;" for="position_level" class="swal2-input-label" id="position_level-label">Chức vụ </label>
				<input style="display: none;" class="swal2-input" id="position_level" name="position_level" placeholder="" type="text" style="display: flex; color: black;">
				<div style="display: none;" class="swal2-validation-message" id="position_level-validation-message"></div>
			</div>
			<div class="swal2-actions">
				<div class="swal2-loader"></div>
				<button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: green !important;" onclick="return Register();" name="register_form">&#9998; Đăng ký</button>
				<button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="HideAllControl();">&#10006; Đóng</button>
			</div>
		</div>
	</div>
</form>


		
<form id="pid_form" action="" method="post" enctype="multipart/form-data" style="display: none;">
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: -webkit-box;">
	   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
		  <div class="swal2-header" id="product_detail_panel">
			 <h2 class="swal2-title" id="pro_name"></h2>
			 <div class="swal2-content" style="width: 100%; display:flex;flex-wrap:wrap;justify-content:space-between">
				<div class="swal2-des" id="product_image_array"></div>
				<div class="swal2-des">
				   <p style="line-height:1.5" id="pro_type"></p>
				   <p style="line-height:1.5;font-weight: bold;" id="extra_option"></p>
				   <p style="line-height:1.5" id="price"></p>
				   <p style="line-height:1.5" id="pro_description"></p>
				</div>
			 </div>
		  </div>
		  <br/>
		  <br/>
		  <br/>
		  <div class="swal2-content">
			 <input id="aution_product_id" name="aution_product_id" type="hidden">
			 <input id="aution_product_image" name="aution_product_image" type="hidden">
			 <label for="flash_auction_fullname" class="swal2-input-label" id="flash_auction_fullname-label" style="display: none;">Họ và tên <span style="color: red;">*</span></label>
			 <input class="swal2-input" id="flash_auction_fullname" name="flash_auction_fullname" placeholder="" type="text" style="display: none; color: black;">
			 <label for="flash_auction_phone" class="swal2-input-label" id="flash_auction_phone-label" style="display: none;">Số điện thoại <span style="color: red;">*</span></label>
			 <input class="swal2-input" id="flash_auction_phone" name="flash_auction_phone" placeholder="" type="text" style="display: none; color: black;">
			 <label for="pid_rate" class="swal2-input-label" id="pid_rate-label">Số tiền đấu giá (VND) <span style="color: red;">*</span></label>
			 <input class="swal2-input" id="pid_rate" name="pid_rate" placeholder="" type="text" style="display: flex; color: black;">
			 <div class="swal2-validation-message" id="pid_rate-validation-message"></div>
		  </div>
		  <div class="swal2-actions">
			 <div class="swal2-loader"></div>
			 <button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: green !important;" onclick="return ProcessAuction();" name="pid_form"><i class="fa fa-check"></i> Gửi đấu giá</button>
			 <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="HideAllControl();"><i class="fa fa-times"></i> Đóng</button>
			 <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block; background: #3a5899;" onclick="ShareAuction();"><i class="fa fa-share-alt"></i> Chia sẻ</button>
		  </div>
		  <div class="swal2-content" id="list_of_auctions_panel"></div>
	   </div>
	</div>
	<div class="swal2a-container swal2a-center swal2-backdrop-show" style="overflow-y: auto; display: none;" id="auction_share_panel">
		<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex; left: 35%; top: 30%;">
			<div class="swal2-content">
				<div id="swal2-content" style="display: block;">
				<div class="socials-share">
					<a class="bg-twitter" id="aution_twitter_link" href="" target="_blank"><span class="fa fa-twitter"></span> Tweet</a>
					<a class="bg-email" id="aution_email_link" href="" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
					<a class="bg-copy" id="aution_copy_link" style="cursor: pointer;" target="_blank" onclick="CopyAuctionLink();"><span class="fa fa-copy"></span> Copy link</a>
				</div>
				</div>
			</div>
			<div class="swal2-actions" style="display: flex;"><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);" onclick="CloseAuctionSharePanel();">Ok</button></div>
		</div>
	</div>
</form>
<?php include 'customer/profile.php'; ?>