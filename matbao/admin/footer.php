<footer style="margin-top: 50px;">
	<p class="socials" style="margin-top: 20px;">
        <a href="https://www.facebook.com/Golf-Club-Championship-2020-100887741881243" class="fb" target="_blank"></a> 
        <a href="https://www.youtube.com/channel/UCgz9RWJtC-8jDDyrumOj-oQ" class="ytb" target="_blank"></a>
    </p>
	<p><img src="assets/images/i-location.png" style="width: 15px; height: 15px;"> 113 Nguyễn Văn Hưởng, P. Thảo Điền, Q.2, TP.HCM</p>
	<p><img src="assets/images/i-phone.png" style="width: 15px; height: 15px;"> <a href="tel:+84-817884477">+84-817884477</a></p>
	<p><img src="assets/images/i-email.png" style="width: 15px; height: 15px;"> <a href="mailto:trinhthanhgolfpro@gmail.com">trinhthanhgolfpro@gmail.com</a></p>
    <p class="copyright">© 2020 Copyright <a href="https://www.facebook.com/Golf-Club-Championship-2020-100887741881243" target="_blank">Golf Club Championship 2020</a>. All rights reserved.</p>
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
	<div class="wrap-ticket-regi" style="top:-25%;<?php if (!$enable_auction_login) { echo 'display: none;'; } ?>">	
		<div class="muave animate__animated animate__zoomIn animate__slower" style="width:145%"><span style="color:white">Tài khoản của tôi</span></div>
		<div class="wrap-ticket phoneamination-new ticket animate__animated animate__zoomIn animate__infinite animate__slower">
		</div>
		<a style="cursor: pointer;" onclick="ShowProfile();"><img style="top:11%" src="assets/images/user.png"></a>
	</div>
	<div class="numbershow animate__animated animate__zoomIn animate__slower"><span style="color:white">☎ 0817884477</span></div>
	<div class="phoneamination animate__animated animate__zoomIn animate__infinite animate__slower"></div>
	<a href="tel:0817884477" title="Tel: 0817884477"><i class="material-icons call-me shak-icon">phone</i></a>
</div>
<!--Call me block-->


<!-- Load Facebook Messenger -->
<!-- https://wiki.matbao.net/kb/huong-dan-tich-hop-facebook-chat-vao-website-ma-khong-can-dung-plugin/ -->
<div class="wrap-phone">
	<div class="phoneamination phoneamination1 animate__animated animate__zoomIn  animate__infinite animate__slower"></div>
	<!-- Load Facebook SDK for JavaScript -->
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
			js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));</script>

		  <!-- Your Chat Plugin code -->
		  <div class="fb-customerchat"
			attribution=setup_tool
			page_id="100887741881243"
			  theme_color="#67b868"
			  logged_in_greeting="Chào bạn! Chúng tôi có thể giúp gì?"
			  logged_out_greeting="Chào bạn! Chúng tôi có thể giúp gì?">
	</div>
</div> 
</body>

</html>