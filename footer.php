<footer style="margin-top: 50px;">
    <p class="socials" style="margin-top: 20px;">
        <a href="<?php echo $site_facebook; ?>" class="fb" target="_blank"></a> 
        <a href="<?php echo $site_youtube; ?>" class="ytb" target="_blank"></a>
    </p>
	<p><img src="assets/images/i-location.png" style="width: 15px; height: 15px;"> <?php echo $site_address; ?></p>
	<p><img src="assets/images/i-phone.png" style="width: 15px; height: 15px;"> <a href="tel:<?php echo $site_phone_number; ?>"><?php echo $site_phone_number; ?></a></p>
	<p><img src="assets/images/i-email.png" style="width: 15px; height: 15px;"> <a href="mailto:<?php echo $site_email; ?>"><?php echo $site_email; ?></a></p>
    <p class="copyright"><?php echo $site_copyright; ?></p>
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
		<?php if (strtolower($enable_slide_video_and_buy_ticket) == 'true'){ ?>
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

	<div class="numbershow animate__animated animate__zoomIn animate__slower"><span style="color:white">☎ <?php echo $site_phone_number; ?></span></div>
	<div class="phoneamination animate__animated animate__zoomIn animate__infinite animate__slower"></div>
	<a href="tel:<?php echo $site_phone_number; ?>" title="Tel: <?php echo $site_phone_number; ?>"><i class="material-icons call-me shak-icon">phone</i></a>
</div>
<!--Call me block-->


<!-- Load Facebook Messenger -->
<!-- https://wiki.matbao.net/kb/huong-dan-tich-hop-facebook-chat-vao-website-ma-khong-can-dung-plugin/ -->
<div class="wrap-phone">
	<div class="phoneamination phoneamination1 animate__animated animate__zoomIn  animate__infinite animate__slower"></div>
	<div id="fb-root"></div>
  <?php echo $site_facebook_messenger; ?>
</div>
	  
</body></html>