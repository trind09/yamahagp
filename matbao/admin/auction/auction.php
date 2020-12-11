<script>
   function OpenAuctionPopup(){
      $('#aution_form').show();
      $('.swal2a-container').css('display','-webkit-box');
   }
   function CancelAuction(){
      $('#aution_form').attr("style", "display: none;");
   }
   function ProcessAuction(){
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
</script>
<?php
setlocale(LC_MONETARY, 'en_US');
if(isset($_POST['form1'])) {
	$valid = 1;
	$message = "";
	$fullname = strip_tags($_POST['fullname']);
	$birthday = strip_tags($_POST['birthday']);
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	$address = strip_tags($_POST['address']);
	$position_level = strip_tags($_POST['position_level']);
   $pid_rate = strip_tags($_POST['pid_rate']);
	if(!isset($fullname)) {
		$valid = 0;
		$message .= 'Xin nhập họ và tên.<br>';
	}
	if(!isset($birthday)) {
		$valid = 0;
		$message .= 'Xin nhập ngày sinh.<br>';
	} else {
		$pieces = [];
		if (strpos($birthday, '/') !== false) {
			$pieces = explode("/", $birthday);
		} else if (strpos($birthday, '-') !== false) {
			$pieces = explode("-", $birthday);
		} else if (strpos($birthday, '.') !== false) {
			$pieces = explode(".", $birthday);
		}
		$year = $pieces[2 ];
		$month = $pieces[1];
		$day = $pieces[0];
		$birthday = $year . "-" . $month . "-" . $day;
		if (DateTime::createFromFormat('Y-m-d', $birthday) == FALSE) {
			$valid = 0;
			$message .= 'Xin nhập ngày sinh đúng định dạng.<br>';
		}
   }
	if(!isset($phone)) {
		$valid = 0;
		$message .= 'Xin nhập số điện thoại.<br>';
	}
	
	if(!isEmail($email)){
      $valid = 0;
      $message .= 'Xin nhập email đúng định dạng.<br>';
   }
	
	if(!isset($address)) {
		$valid = 0;
		$message .= 'Xin nhập địa chỉ nơi ở hiện nay.<br>';
    }
   if(!is_numeric($pid_rate)) {
		$valid = 0;
      $message .= 'Xin nhập số tiền đấu giá.<br>';
   }

   if($valid != 0) {
      try{
         $sql = "INSERT INTO auction (fullname, birthday, phone, "
         . "email, address, position_level, pid_rate) VALUES "
         . "(?,?,?,?,?,?,?)";
         $statement = $pdo->prepare($sql);
         $statement->execute(array($fullname, $birthday, $phone, $email, $address, $position_level, $pid_rate));
         $message = "<span style=\"text-transform: uppercase;\">Đấu giá thành công</br></br>"
            . "<b>Họ và tên: </b>" . $fullname . "</br>"
            . "<b>Ngày sinh: </b>" . $birthday . "</br>"
            . "<b>Số điện thoại: </b>" . $phone . "</br>"
            . "<b>Email: </b>" . $email . "</br>"
            . "<b>Địa chỉ: </b>" . $address . "</br>"
            . "<b>Chức vụ: </b>" . $position_level . "</br>"
            . "<b>Số tiền đấu giá là </b>" . "<span style=\"color:green\"><b>" . money_format('%i', $pid_rate) . "</b></span></br>"
            . ".</span>";
      } catch (Exception $e) {
         $valid = 0;
         $message = $e;
      }
   }

   if($valid == 1 ){
      echo '<script language="javascript">';
      echo "$(document).ready(function() {  
            swal({
            title: '<strong>Thông báo</strong>',
            html: '". $message . "',
            type: 'success',
            confirmButtonText: 'Ok'
            }).then((result) => {
               window.location = window.location.href;
            });
         });";
      echo '</script>';
   } else{
      echo '<script language="javascript">';
      echo "$(document).ready(function() {
            swal({
            title: '<strong>Thông báo</strong>',
            html: '" . $message . "',
            type: 'error',
            confirmButtonText: 'Ok'
            }).then((result) => {
            if (!result.isConfirmed) {
               $('#aution_form').show();
               $('.swal2a-container').css('display','-webkit-box');
            }
            });
         });";
      echo '</script>';
   }

} 

function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>

<div class="auction-card">
	<img src="auction/images/products/The_Anatomy_of_a_Golffe_IV.jpg" alt="Denim Jeans" style="width:100%">
	<h2>The Anatomy of a Golfer lV, Atelier</h2>
	<p>-Thể loại: Tác phẩm điêu khắc</p>
	<p>-Người Tặng: <span style="font-weight:bold">Ms. Lệ Hằng - Chủ Tịch Câu Lạc Bộ Từ Thiện OPEN ARMS</span></p>
	<p>-Giá khởi điểm: <span class="price"> <?php echo(money_format('%i', 8700)); ?></span></p>
	<p class="des">-The Anatomy of a Golfer lV, Atelier là tác phẩm đầu tiên trong loạt các tay golf của Richard MacDonald được lấy cảm hứng từ việc tạo ra tác phẩm điêu khắc anh hùng của ông ...</p>
	<button onclick="OpenAuctionPopup();">ĐẤU GIÁ</button>
</div>

<form id="form1" action="" method="post" enctype="multipart/form-data" >
   <div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: none;" id="aution_form">
      <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
         <div class="swal2-header" id="oto-track-attack">
            <h2 class="swal2-title" id="swal2-title">The Anatomy of a Golfer lV, Atelier</h2>
            <div class="swal2-content" style="width: 100%; display:flex;flex-wrap:wrap;justify-content:space-between">
               <div class="swal2-des">
                  <img src="auction/images/products/The_Anatomy_of_a_Golffe_IV.jpg" style="width:100%"/>
               </div>
               <div class="swal2-des">
                  <p style="line-height:1.5"><span style="color:#197114;font-weight: bold;">Thể loại:</span> Tác phẩm điêu khắc</p>
                  <p style="line-height:1.5;font-weight: bold;"><span style="color:#197114;font-weight: bold;">Người tặng:</span> Ms. Lệ Hằng - Chủ Tịch Câu Lạc Bộ Từ Thiện OPEN ARMS</p>
                  <p style="line-height:1.5"><span style="color:#197114;font-weight: bold;">Gía khởi điểm:</span><span style="color: #197114;font-size: 20px;"> <?php echo(money_format('%i', 8700)); ?></span></p>
                  <p style="line-height:1.5"><span style="color:#197114;font-weight: bold;">Mô tả sản phẩm:</span>The Anatomy of a Golfer lV, Atelier là tác phẩm đầu tiên trong loạt các tay golf của Richard MacDonald được lấy cảm hứng từ việc tạo ra tác phẩm điêu khắc anh hùng của ông, MOMENTUM, đánh dấu Kỷ niệm 100 năm Giải đấu Golf mở rộng Hoa Kỳ tại Pebble Beach Golf Links lịch sử vào năm 2000 Giải phẫu của một Golfer lV, Atelier mô tả tất cả năm chuyển động của cú swing - từ chuyển động quay ngược lại đến tiếp tục đánh. Mỗi tác phẩm điêu khắc trong loạt bài ca ngợi chủ nghĩa thể thao và sự tập trung cần thiết để chiến thắng trong một trong những môn thể thao thách thức nhất của thời đại chúng ta.</p>
               </div>
            </div>
         </div>
         <br/>
         <br/>
         <br/>
         <div class="swal2-content">
            <p class="swal2-content" style="color: red;">*Bắt buộc</p>
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
            <label for="position_level" class="swal2-input-label" id="position_level-label">Chức vụ </label>
            <input class="swal2-input" id="position_level" name="position_level" placeholder="" type="text" style="display: flex; color: black;">
            <div class="swal2-validation-message" id="position_level-validation-message"></div>
			   <label for="pid_rate" class="swal2-input-label" id="pid_rate-label">Số tiền đấu giá (USD) <span style="color: red;">*</span></label>
            <input class="swal2-input" id="pid_rate" name="pid_rate" placeholder="" type="text" style="display: flex; color: black;">
            <div class="swal2-validation-message" id="pid_rate-validation-message"></div>
         </div>
         <div class="swal2-actions">
            <div class="swal2-loader"></div>
            <button type="submit" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;" onclick="return ProcessAuction();" name="form1">Gửi đấu giá</button>
            <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="CancelAuction();">Đóng</button>
         </div>
      </div>
   </div>
</form>