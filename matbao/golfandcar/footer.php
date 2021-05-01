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
<style>
	@media (max-width: 767px){
		.wrap-ticket-regi {
			top: 2%!important;
		}
	}
</style>
<div class="wrap-phone">
	<div class="wrap-ticket-regi" style="top:-25%;<?php if (strtolower($enable_auction_login) == 'false') { echo 'display: none;'; } ?>">	
		<div class="muave animate__animated animate__zoomIn animate__slower" style="width:145%"><span style="color:white">Tài khoản của tôi</span></div>
		<div class="wrap-ticket phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower">
		</div>
		<a style="cursor: pointer;" onclick="ShowProfile();"><img style="top:11%" src="assets/images/user.png"></a>
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
	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
	  <?php echo $site_facebook_messenger; ?>
</div> 
</body>

</html>