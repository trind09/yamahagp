<footer style="margin-top: 50px;">
    <p class="socials" style="margin-top: 20px;">
        <a href="https://www.facebook.com/vietnamracingacademy" class="fb" target="_blank"></a> 
        <a href="#" class="ytb" target="_blank"></a>
    </p>
	<p><img src="assets/images/i-location.png" style="width: 15px; height: 15px;"> 87 Nguyễn Cơ Thạch, Khu đô thị Sala, Phường An Lợi Đông, Quận 2, Thành phố Hồ Chí Minh, Việt Nam</p>
	<p><img src="assets/images/i-phone.png" style="width: 15px; height: 15px;"> <a href="tel:+84-907879999">+84-907879999</a></p>
	<p><img src="assets/images/i-email.png" style="width: 15px; height: 15px;"> <a href="mailto:vietnam.racing.academy@gmail.com">vietnam.racing.academy@gmail.com</a></p>
    <p class="copyright">© 2020 Copyright <a href="https://www.facebook.com/vietnamracingacademy" target="_blank">Vietnam Racing Academy</a>. All rights reserved.</p>
</footer>

<script src="assets/js/underscore.js"></script>
<script src="assets/js/jquery.history.js"></script>

<script src="assets/js/gscript.js"></script>
<script src="<?php echo auto_version('assets/main.js'); ?>"></script>

<!-- endinject -->

<!--[if lt IE 9]>-->
<!--<script src="assets/js/ie.body.min.js"></script>-->
<!--<![endif]-->


<!--Call me, register, booking ticket block-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script type="text/javascript">
	$(document).scroll(function() {
	  var y = $(this).scrollTop();
	  if (y > 600) {
	    $('.wrap-ticket-regi').fadeIn();
	  } else {
	    $('.wrap-ticket-regi').fadeOut();
	  }
	});
</script>
<div class="wrap-phone">
	<div class="wrap-ticket-regi" style="display: none">
		<?php if ($enable_slide_video_and_buy_ticket){ ?>
		<div class="muave animate__animated animate__zoomIn animate__slower"><span>Mua Vé</span></div>
		<div class="wrap-ticket phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower"></div>
		<a href="https://ticketbox.vn/vr-fest-2020#booking"><img class="img-ticket" src="assets/images/ticket.png"></a>
		<?php } else { ?>
		<div style="display: none;" class="muave animate__animated animate__zoomIn animate__slower"><span>Mua Vé</span></div>
		<div style="background: none; border: none;" class="wrap-ticket phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower"></div>
		<a style="display: none;" href="https://ticketbox.vn/vr-fest-2020#booking"><img style="display: none;" class="img-ticket" src="assets/images/ticket.png"></a>
		<?php } ?>
		<div class="dangky animate__animated animate__zoomIn  animate__slower"><span>Đăng Ký Thi Đấu</span></div>
		<div class="wrap-regi phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower"></div>
		<a href="#" onclick="window.location.href='https://docs.google.com/forms/d/19GkT4zTwKXRzjjSt0BaKU5cQPh38QSvxIXJwEfdzZ5w';" class="js-joinnow"><img class="img-regi" src="assets/images/register.png"></a>
	</div>

	<div class="numbershow animate__animated animate__zoomIn animate__slower"><span style="color:white">☎ 0909337777</span></div>
	<div class="phoneamination animate__animated animate__zoomIn animate__infinite animate__slower"></div>
	<a href="tel:0909337777" title="Tel: 0909337777"><i class="material-icons call-me shak-icon">phone</i></a>
</div>
<!--Call me block-->


<!-- Load Facebook Messenger -->
<!-- https://wiki.matbao.net/kb/huong-dan-tich-hop-facebook-chat-vao-website-ma-khong-can-dung-plugin/ -->
<div class="wrap-phone">
	<div class="phoneamination phoneamination1 animate__animated animate__zoomIn  animate__infinite animate__slower"></div>
	<div id="fb-root"></div>
  <script>
	window.fbAsyncInit = function() {
	  FB.init({
		xfbml            : true,
		version          : 'v9.0'
	  });
	};

	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat shak-icon"
	attribution=setup_tool
	page_id="104362934697822"
	theme_color="#67b868">
  </div>
</div>
	  
</body></html>