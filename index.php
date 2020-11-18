<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <!-- SEO -->
    <title>Vietnam Racing Festival 2020</title>
	<meta name="description" content="Where's your limit?">
	<meta name="keywords" content="">
	<meta name="og:title" content="Vietnam Racing Festival 2020">
	<meta name="og:description" content="Where's your limit?">
	<meta name="og:image" content="assets/images/logo.png">
    
	<meta property="og:image" content="assets/images/bg.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="576">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="robots" content="noodp, noydir">

    <!-- No Google Translate toolbar -->

    <meta name="google" content="notranslate">

    <!-- Viewport and mobile -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="cleartype" content="on">
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="assets/main.css">
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <!-- CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<script>
		function ShowAboutUs(){
			swal({
			  imageUrl: 'assets/images/BG%20about%20us.jpg',
			  imageWidth: '100%',
			  width: '1200px',
			  imageAlt: 'BG About Us'
			});
			return false;
		}
		
		function changeVid(youtubeUrl){
			$('#video-div').attr('src', youtubeUrl);
		};
	</script>
</head>
<body>
	<?php include 'racing_register.php';?>
    <header>
	  <style>
		@media screen and (max-width: 1024px){
			.header-mb {
				height: 50px
			}
			.header-mb:before {
				background-image: url("assets/images/bg-smartphone-bar.png");
				content: '';
				display: flex;
				height: 70px;
				width: 100%;
				position: absolute;
				z-index: 0;
				background-size: cover;
				background-repeat: inherit;
			}
			.menu-icon, .menu-icon:before, .menu-icon:after {
				background-color: white
			}
		}
		
		@media screen and (max-width: 520px){
				.header-mb:before {
					height: 50px;
				}
		}
	  </style>
      <div class="contain" id="menu">
        <nav>
          <ul id="nav" style="visibility: inherit; opacity: 1;">
            <li><a onclick="return ShowAboutUs();" class="nav-left" style="cursor: pointer;"><span>giới thiệu</span></a></li>
            <li><a href="#events" class="nav-left" role="events"><span>Sự kiện</span></a></li>
            <li><a href="#plan" class="nav-left" role="plan"><span>lịch thi đấu</span></a></li>
            <li class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); cursor: pointer;" onclick="location.href = '#';"><a href="#menu"></a></li>
            <li><a href="#term" class="nav-right" role="term"><span>thể lệ <br>thi đấu</span></a></li>
            <li><a href="#news" class="nav-right" role="news"><span>tin tức</span></a></li>
            <li><a href="#gallery" class="nav-right" role="gallery"><span>HÌNH ẢNH <br>&amp; KẾT QUẢ</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="header-mb">
        <a href="#" class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
         <div class="menu-toggle-wrapper" aria-hidden="true">
          <button class="btn-menu menu-closed">
             <span class="menu-icon"></span>
          </button>
        </div>  
      </div>
    </header>

	<section id="pHome">
	<script type="text/javascript">
	var _folder = '/';
	var _newsDetail = ''; 
	var isMobile = '0';
</script>
<section id="main" style="visibility: inherit; opacity: 1;">
	<style type="text/css">
		.wrap-video-banner {
			position: relative;
			padding-bottom: 56.25%;
			padding-top: 25px;

		}
		.video-position {
			position: absolute;
			width: 46%;
			right: 3%;
			bottom: 15%;
			z-index: 99;
		}
		.responsive-iframe {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			border: none;
		}
		@media (max-width: 920px){
		.main_copy .text {
			width: 79%;
			margin: -6% auto;
			}
		.mb-btn .btn1 {
			width: 231px;
			height: 54px;
			line-height: 50px;
			font-size: 18px
			}
		.mb-btn .btn2{
			margin-top: 0
		}
		.main_copy .mb-btn .btn {
			margin-top: 0
		}
		.mb-btn {
			display: flex;
			position: absolute;
			top: 61%;
			left: 23%;
		}
		.video-position {
		   width: 59%;
			right: 18%;
			bottom: 40%;
		}
		#events {
			margin-top: -6vh;
			height: 113vh;
		}
		#events .contain {
			padding: 6vh 2vh;
		}
		}
		@media (max-width: 767px){
		.mb-btn {
			left: 21%;
		}
		.mb-btn .btn1 {
			width: 120px;
			height: 25px;
			line-height: 26px;
			font-size: 8px;
		}
		.video-position {
			top: 29%;
			right: 21%
		}
		}
		@media (max-width: 375px){
		.mb-btn {
			left: 23%;
		}
		.mb-btn .btn1 {
			width: 106px;
			height: 25px;
			line-height: 26px;
			font-size: 8px;
		}
		.video-position {
			top: 28%;
		}
		#events {
			height: 130vh;
		}
		}
		@media (max-width: 320px){
			.mb-btn .btn1 {
			width: 91px;
			height: 21px;
			line-height: 20px;
			font-size: 6px;
		}
		#events {
			height: 160vh;
		}
		}
	</style>

	<img src="assets/images/bg.jpg" alt="" class="bg_pc">
	
	<img src="assets/images/bg-hmb4.jpg" alt="" class="bg_mb">
	<div class="main_copy">
		<img src="assets/images/2.png" alt="" class="text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		<div class="mb-btn">
			<a href="#register" class="btn btn1 btn2 js-joinnow" role="register" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">ĐĂNG KÝ THI ĐẤU</a><br/>
			<a href="https://ticketbox.vn/vr-fest-2020#booking" class="btn btn1" role="ticket" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">MUA VÉ</a>
		</div>
	</div>
	<div class="video-position">
		<div class="wrap-video-banner">
			<iframe class="responsive-iframe" id="video-div" width="100%" height="100%" src="//www.youtube-nocookie.com/embed/Pbjhj2VnqmE?modestbranding=1&showinfo=0&fs=0&rel=0&autohide=1&controls=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>


<section id="events" class="display about-video">
	<style>
		.event-text-list {
			background: url(assets/images/line.png) no-repeat center;
			background-size: 100%;
			font-size: 14px;
			text-transform: none;
			padding-top: 4px;
			padding-bottom: 4px;
			color: #f4ed2d;
			font-family: 'SFUEurostileBoldOblique', Helvetica Neue, Helvetica, Verdana, Roboto, sans-serif;
		}
		
		.event-text {
			font-family: "SFUEurostileOblique", Helvetica Neue, Helvetica, Verdana, Roboto, sans-serif;
			font-size: 16px;
			font-weight: normal;
			color: #fff;
			line-height: 1.5;
			position: relative;
			letter-spacing: normal;
			-webkit-font-smoothing: subpixel-antialiased;
			padding-top: 4px;
			padding-bottom: 4px;
		}
	</style>
	<div class="contain">
		<h4 style="text-align: center;">WHERE’S YOUR LIMIT?</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<div class="about-contain display">
			<div class="copy-about">
				<p class="event-text">Chuỗi sự kiện đại nhạc hội giải trí đỉnh cao đúng <strong style="color: #f4ed2d;">“chất”</strong> sẽ được tổ chức tại Trường đua Đại Nam với quy mô lớn mang tên gọi <strong style="color: #f4ed2d;">WHERE’S YOUR LIMIT?</strong></p>
				<p class="event-text">Chương trình sẽ diễn ra xuyên suốt trong ngày 12/12/2020 cùng sự góp mặt của <strong style="color: #f4ed2d;">RAPPER KARIK, DJ MIE, DJ THANH HƯƠNG, DJ NICKY, DJ COCA.</strong></p>
				<p class="event-text">Khách tham dự sự kiện sẽ được hoà mình vào không khí lễ hội âm nhạc sôi động với hàng loạt các hoạt động dành cho fan hâm mộ cùng các phần biểu diễn nghệ thuật và giải trí hấp dẫn: </p>
				<p class="event-text-list"><strong><img src="assets/images/bullet1.png" style="width: 20px; height: 20px;" />	Chiêm ngưỡng dàn  siêu xe “khủng”<strong></p>
				<p class="event-text-list"><strong><img src="assets/images/bullet1.png" style="width: 20px; height: 20px;" />	Tiết mục trình diễn Flyboard đẹp mắt<strong></p>
				<p class="event-text-list"><strong><img src="assets/images/bullet1.png" style="width: 20px; height: 20px;" />	Biểu diễn Stunt đẳng cấp<strong></p>
				<p class="event-text-list"><strong><img src="assets/images/bullet1.png" style="width: 20px; height: 20px;" />	Thưởng thức những giải đua xe hàng đầu Việt Nam gồm: oto, go-kart, moto và bộ môn Roller Sport tốc độ.<strong></p>
				<p class="event-text">Các khu vực vui chơi giải trí được bố trí rộng khắp chương trình, khán giả sẽ vừa xem chương trình vừa có cơ hội mang về cho mình những phần quá hấp dẫn từ những đơn vị tài trợ. <strong style="color: #f4ed2d;">WHERE’S YOUR LIMIT? - VIETNAM RACING FESTIVAL 2020</strong> hứa hẹn sẽ là ngọn lửa thổi bùng đam mê, thúc đẩy bộ môn đua xe thể thao nước nhà.</p>
			</div>
		</div>
	</div>
</section>
<section id="register" class="display">
	<div class="contain">
		<h4 style="text-align: center;">Đăng ký thi đấu</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">hạng mục thi đấu</li>
		</ul>
		<script>
			//https://sweetalert.js.org/guides/
			function ShowExpiredRegistryMessage(){
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: 'HẾT HẠN ĐĂNG KÝ',
				  type: 'error',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					
				});
				return false;
			}
			
			//https://sweetalert2.github.io/#icons
			function ShowRegistryBox(){
				swal({
				  title: '<strong>Thông báo</strong>',
				  html: 'ĐĂNG KÝ CHO MỤC NÀY CHƯA CÓ',
				  type: 'success',
				  confirmButtonText: 'Ok'
				}).then((result) => {
					
				});
				return false;
			}
		</script>
		<style>
			.registry-link{
				color: white;
				text-decoration: underline;
			}
			
			.copy-a {
				 background-size: 200px 130px !important;
				 background-position: bottom center !important;
				 background-repeat: no-repeat !important;
				 height: 300px;
			}
			
			/* For general iPad layouts */
			@media only screen and (device-width: 768px) {
			  .register-contain {
				  margin-bottom: 10px;
			  }
			  
			  .copy-a {
					 background-size: 250px 180px !important;
					 height: 450px;
				}
			}
			
			/* For general Mobiles Landscape */
			@media (min-width: 481px) and (max-width: 767px) {
  
			  .copy-a {
					 background-size: 250px 180px !important;
					 height: 450px;
				}
			  
			}

			/* For general Mobiles Portrait */
			@media (min-width: 320px) and (max-width: 480px) {
			  .copy-a {
					 background-size: 250px 180px !important;
					 height: 450px;
				}
			}
		</style>
		<div class="about-contain display register-contain">
			<ul class="race-league">
				<li>
					<h2>Moto</h2>
					<div class="copy copy-a" style="background: url(assets/images/motorlogo.png);">
						<div class="note">
							<h6>Motul Motor Racing Cup</h6>
							<p>Hệ 300 - 400cc</p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('semipro-300-400cc');" class="registry-link">- Semi-Pro</a></p>
						</div>
						<div class="note">
							<h6>Motul Motor Racing Cup</h6>
							<p>Hệ UB150</p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('moto-ub150-pro');" class="registry-link">- Pro</a></p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('moto-ub150-semipro');" class="registry-link">- Semi-Pro</a></p>
						</div>
					</div>
				</li>
				<li>
					<h2>Go kart</h2>
					<div class="copy copy-a" style="background: url(assets/images/go-kartlogo.png);">
						<div class="note">
							<h6 style="margin-bottom: 0px;"><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">VR Go-Kart Cup Hệ 2 THÌ</a></h6>
							<h6 style="margin-bottom: 0px;"><a href='#' onclick="return ShowRegistryBox('4 Thi');" class="registry-link">VR Go-Kart Cup Hệ 4 THÌ</a></h6>
						</div>
					</div>
				</li>
				<li>
					<h2>Oto</h2>
					<div class="copy copy-a" style="background: url(assets/images/otologo.png);">
						<div class="note">
							<h6><a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-gymkhana');" class="registry-link">Vinfast Autogymkhana Cup</a></h6>
							<h6><a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-track-attack');" class="registry-link">Vinfast Track Attact Cup</a></h6>
							<h6><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">VR Drift Battle</a></h6>
						</div>
					</div>
				</li>
				<li>
					<h2>Roller Sport</h2>
					<div class="copy copy-a" style="background: url(assets/images/rollerlogo.png);">
						<div class="note">
							<h6><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">VR Roller Sport Cup</a></h6>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="plan" class="display">
	<div class="contain">
		<h4 style="text-align: center;">lịch trình</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>

		<div class="plan-wrap">
			<ul class="plan-list">
				
				<li class="disable" style="transform: matrix(1, 0, -0.17632, 0.99999, 0, 0);">
					<span>Lịch thi đấu</span>
					<div class="plan-item">
						<h3>Vòng loại</h3>
						<p><img src="assets/images/i-time.png">6/12/2020 Vòng loại giải MOTUL MOTOR RACING CUP</p>
						<p><img src="assets/images/i-time.png">11/12/2020 Vòng loại VINFAST AUTOGYMKHANA, VINFAST TRACK ATTACK CUP</p>
						<p><img src="assets/images/i-location.png">Trường Đua Xe Đại Nam, Bình Dương, Xã Hiệp An, Thủ Dầu Một, Bình Dương.</p>
						<h4>1</h4>
					</div>
				</li>

				<li class="disable" style="transform: matrix(1, 0, -0.17632, 0.99999, 0, 0);">
					<span>Lịch thi đấu</span>
					<div class="plan-item">
						<h3>Vòng chung kết</h3>
						<p><img src="assets/images/i-time.png">12/12/2020<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- Chung kết các giải đua<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VINFAST AUTOGYMKHANA<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VINFAST TRACK ATTACK CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- MOTUL MOTOR RACING CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- ROLLER SPORT<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VR GO-KART CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- VR DRIFT BATTLE<br/>
						</p>
						<p><img src="assets/images/i-location.png">Trường Đua Xe Đại Nam, Bình Dương, Xã Hiệp An, Thủ Dầu Một, Bình Dương.</p>
						<h4>2</h4>
					</div>
				</li>

			</ul>
		</div>
	</div>

	<div class="cld-popup">
		<div class="cld-detail">
			<h3><img src="assets/images/lct-title.png"></h3>
			<h4>Tại <span>Cần Thơ</span> ngày <span>28/5/2017</span></h4>
			<table cellspacing="0" cellpadding="0" border="0" class="cld-item">
				<tbody><tr>
					<th width="40%">thời gian</th>
					<th>nội dung</th>
				</tr>
				<tr>
					<td>6:00 – 8:00:</td>
					<td>Tiếp nhận VĐV</td>
				</tr>
				<tr>
					<td>8:00 – 9:00:</td>
					<td>Hướng dẫn luật thi đấu</td>
				</tr>
				<tr>
					<td>9:00 – 10:20: </td>
					<td>Vòng loại 1</td>
				</tr>
				<tr>
					<td>10:20 – 10:50: </td>
					<td>Lễ khai mạc</td>
				</tr>
				<tr>
					<td>10:50 – 12:10:</td>
					<td>Vòng loại 2</td>
				</tr>
				<tr>
					<td>12:10 – 13:10:</td>
					<td>Thi chọn vị trí xuất phát</td>
				</tr>
				<tr>
					<td>13:20 – 15:20:</td>
					<td>Vòng chung kết và trao giải</td>
				</tr>
			</tbody></table>
			<span class="bg"></span>
			<span class="btn js-close--cld">đóng</span>
		</div>

		<span class="ovl"></span>
	</div>
</section>

<section id="term" class="display ">
	<style>
		.red_link {
			font-family: "SFUEurostileBoldOblique", Helvetica Neue, Helvetica, Verdana, Roboto, sans-serif;
			color: #f00;
			text-decoration: underline;
			margin-top: 10px;
		}
		.red_link:hover {
			color: #343520;
		}
		#term {
			height: auto;
		}
		.race-league > li {
			margin-bottom: 30px
		}
		@media only screen and (device-width: 768px) {
		  /* For general iPad layouts */
		  .term-content {
				margin-bottom: 10px;
			}
		}
	</style>
	<div class="contain">
		<h4 style="text-align: center;">thể lệ thi đấu</h4>
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<ul class="gallery-tabs js-term--tabs">
			<li class="active" style="width: 100%;">QUY ĐỊNH TRANG PHỤC VÀ XE THI ĐẤU</li>
		</ul>
		<div class="about-contain display term-content">
			<ul class="race-league">
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VINFAST AUTOGYMKHANA CUP</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_VINFAST_AUTOGYMKHANA_CUP.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VINFAST TRACK ATTACT CUP</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_VINFAST_TRACK_ATTACK_CUP.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VR Drift Battle</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_VR_DRIFT_BATTLE.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI MOTUL MOTOR RACING CUP HỆ 300 - 400CC</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_300_400cc.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI MOTUL MOTOR RACING CUP HỆ UB150</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_MOTUL_MOTOR_RACING_CUP_UB150.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VR GO-KART CUP</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/ĐIEU_LE_CAC_GIAI_GO_KART_CUP.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
				<li>
					<div class="copy">
						<h5>ĐIỀU LỆ GIẢI VR Roller Sport Cup</h5>
						<p>Các quy định và lịch tập luyện trong quá trình tham gia thi đấu giải</p>
						<p><a class="red_link" href="assets/docs/The_thuc_VR_ROLLER_SPORTS.pdf" target="_blank">Xem Thêm >></a></p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="news">
	<div class="contain">
		<h4 style="text-align: center;">tin tức</h4>
		<h2>Mới Nhất</h2>
		<div class="js-news" role="toolbar">
			<div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Giai_dua_Motul_Motor_Racing_Cup_sap.htm" tabindex="0"><img src="assets/images/Poster-Sponsor-VR-Event-3-1068x1488.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Giai_dua_Motul_Motor_Racing_Cup_sap.htm" tabindex="0">Giải đua Motul Motor Racing Cup sắp “Bùng nổ” tại chương trình Vietnam Racing Festival 2020</a></h4>
					<p>Ngày 12/12 tới đây, GIẢI ĐUA MOTUL MOTOR RACING CUP hệ UB150 sẽ “BÙNG NỔ” tại Trường đua Đại Nam. Được biết giải đua này nằm trong chuỗi sự kiện VIETNAM RACING FESTIVAL 2020 do VR Academy tổ chức.</p>
					<a href="assets/news/Giai_dua_Motul_Motor_Racing_Cup_sap.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		   <div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Hop_bao_le_hoi_dua_xe_VietNam_Racing_Fest_2020.htm" tabindex="0"><img src="assets/news/images/Họp-báo-VR-Fest-2020-5-1.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Hop_bao_le_hoi_dua_xe_VietNam_Racing_Fest_2020.htm" tabindex="0">Họp báo Lễ hội đua xe VietNam Racing Fest 2020, chuyên nghiệp đầu tiên tại Việt Nam</a></h4>
					<p>Sáng này 03/11/2020 tại sân Golf Tân Sơn Nhất – Tp.Hồ Chí Minh, vừa diễn ra họp báo công bố chiến dịch Race To Miền Trung bao gồm: Một giải Golf lớn nhất trong năm 2020 và đặc biệt là sự kiện VietNam Racing Fest 2020 (VR Fest 2020) lễ hội đua xe chuyên nghiệp lần đầu tiên tổ chức tại Việt Nam.</p>
					<a href="assets/news/Hop_bao_le_hoi_dua_xe_VietNam_Racing_Fest_2020.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		   <div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Nhung_nguoi_viet_nam_dau_tien_nhan_bang_dua_xe_o_to_the_thao.htm" tabindex="0"><img src="assets/news/images/VMA47C.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Nhung_nguoi_viet_nam_dau_tien_nhan_bang_dua_xe_o_to_the_thao.htm" tabindex="0">Những người Việt Nam đầu tiên nhận bằng đua xe ô tô thể thao</a></h4>
					<p>Ngày 04/07/2020, Hiệp hội Ô tô Thể thao Việt Nam phối hợp cùng Công ty TNHH Hiệp hội Thể thao Xe động cơ (VMA) - thành viên của Liên đoàn Ô tô Quốc tế (FIA) tổ chức Lễ trao bằng đua xe ô tô thể thao cho 32 tay đua người Việt Nam tại Trường đua Công thức 1 Hà Nội, nhằm công nhận thành tích và ghi nhận nỗ lực của các VĐV đua xe ô thể thao đầu tiên của Việt Nam khi là những người tiên phong trong môn thể thao tốc độ này.</p>
					<a href="assets/news/Nhung_nguoi_viet_nam_dau_tien_nhan_bang_dua_xe_o_to_the_thao.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		   <div class="js-news--detail">
			  <div class="news-item">
				 <p class="thumb"><a href="assets/news/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.htm" tabindex="0"><img src="assets/images/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.jpg"></a></p>
				 <div class="copy">
					<h4><a href="assets/news/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.htm" tabindex="0">Thông tin chương trình VIETNAM RACING FESTIAL 2020</a></h4>
					<p>Ngày hội đua xe thể thao chuyên nghiệp do Vietnam Racing Academy - VR tổ chức nhầm phát động phong trào RACE TO MIỀN TRUNG. Chương trình với sự đồng hành của hai thương hiệu lớn VINFAST và MOTUL. Ngày hội đua xe cũng là lễ hội âm nhạc EDM hoành tráng - WHERE’S YOUR LIMIT? với sự góp mặt của nhiều ca sĩ - DJ nổi tiếng và chương trình MOTUL STUNT SHOW 2020.</p>
					<a href="assets/news/Thong_tin_chuong_trinh_VIETNAM_RACING_FESTIAL_2020.htm" class="viewmore" tabindex="0">Xem chi tiết</a>
				 </div>
			  </div>
		   </div>
		</div>
	</div>
</section>

<section id="gallery" class="display">
   <script type="text/javascript">
		function ViewPigsizeImage(element){
			var src = $(element).attr("src");
			var larger_src = src.replace("/small/", "/large/");
			swal({
			  imageUrl: larger_src,
			  imageWidth: '100%',
			  width: '1200px',
			  imageAlt: 'BG Gallery',
			});
      	}
   </script>
   <style>
		.gallery-content {
			height: 600px;
		}
		@media (max-width: 767px) and (max-width: 520px){
			.gallery-content {
				height: 400px;
			}
		}
		
		@media only screen 
		and (min-device-width : 768px) 
		and (max-device-width : 1024px)  { 
			/* iPad in portrait & landscape */
			.gallery-content {
				height: 400px;
			}
		}
		
		/*Fix issue footer collapted on other elements*/
		#gallery {
			min-height: 143vh;
		}
		@media(max-height: 920px){
			footer {
				padding: 50px 20px 20px 20px;
			}
		}
		@media screen and (max-width: 567px){
			#gallery {
				height: 170vh;
			}
			#gallery footer {
				font-size: 11px;
			}
		}
		@media screen and (max-width: 375px){
			#gallery {
				height: 175vh;
			}
		}
		/*Fix issue footer collapted on other elements*/
   </style>
   <div class="contain">
		<h2>HÌNH ẢNH & SỰ KIỆN NĂM 2020</h2>
		<ul class="gallery-tabs" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">HÌNH ẢNH CHƯƠNG TRÌNH</li>
		</ul>
		<select id="type-photo-select">
		  <option value="1">1.	HỌP BÁO KỸ THUẬT NGÀY HỘI ĐUA XE VIETNAM RACING FESTIVAL 2020</option>
		  <option value="2">2.	PHÁT ĐỘNG PHONG TRÀO ĐUA XE THỂ THAO VIỆT NAM</option>
	   </select>
	   <div class="gallery-item display" id="type-photo1" style="display: none;">
		   <div class="gallery-item-wrap">
			  <div class="gallery-photo js-photo">
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2669.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2729.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2394.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2445.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2688.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_1797.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2168.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/PHU_2843.jpg" onclick="ViewPigsizeImage(this);"></div>
			  </div>
		   </div>
		   <a class="btn" href="#">Xem thêm</a>
		</div>
		<div class="gallery-item display" id="type-photo2" style="display: none;">
		   <div class="gallery-item-wrap">
			  <div class="gallery-photo js-photo">
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-25.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-26.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-30.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-31.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-32.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-33.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-25.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/viber_image_2020-11-10_12-32-26.jpg" onclick="ViewPigsizeImage(this);"></div>
			  </div>
		   </div>
		   <a class="btn" href="#">Xem thêm</a>
		</div>
	</div>
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
</section>

<script src="http://code.jquery.com/jquery-1.11.1.js"></script>

<script src="assets/js/underscore.js"></script>
<script src="assets/js/jquery.history.js"></script>

<script src="assets/js/gscript.js"></script>
<script src="assets/main.js"></script>

<!-- endinject -->

<!--[if lt IE 9]>-->
<!--<script src="assets/js/ie.body.min.js"></script>-->
<!--<![endif]-->


<!--Call me block-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
.wrap-phone{
	position: fixed;
	top: auto;
	bottom: 24px;
	right: 12px;
	display: block;
	z-index: 2147483644;
}
.phoneamination {
    border: 2px solid #126D0C;
    border-radius: 50%;
    height: 90px;
    width: 90px;
    z-index: -1;
    right: 3%;
    top: 31%;
    position: absolute;
    background: #126D0C;
}

.call-me {
	font-size: 72px;
	color: transparent;
	margin: 0px 12px;
	adding: 0px;
	width: 70px;
	border-radius: 29px;
	box-shadow: none;
	background: none;
	display: block;
	padding-bottom: 130px;
	background-image: url("assets/images/phone-02.png");
	background-repeat: no-repeat;
	background-size: contain;
	background-position: center;
}
.numbershow {
	color: white;
    font-size: 15px;
    position: absolute;
    background: #126D0C;
    right: 3%;
    padding: 5px 10px 6px;
    border-radius: 39px;
    bottom: 72%;
}
.phoneamination1 {
    top: -75px;
    right: -3px;
}

@media (max-width: 767px){
	.numbershow {
		display: none
	}
	.call-me {
		width: 55px;
	}
	.phoneamination {
	    height: 65px;
	    width: 65px;
	    right: 8%;
    	top: 37%;
	}
	.phoneamination1 {
		right: 6px;
    	top: -54px;
	}
}

@media (max-width: 520px){
	.numbershow {
		display: none
	}
	.call-me {
		width: 66px;
	}
	.phoneamination {
	    height: 70px;
	    width: 70px;
	    right: 11%;
	    top: 36%;
	}
	.phoneamination1 {
		right: 6px;
    	top: -64px;
	}
}
</style>
<div class="wrap-phone">
	<div class="numbershow animate__animated animate__zoomIn animate__delay-2s animate__slower"><span>Phone:0909337777</span></div>
	<div class="phoneamination animate__animated animate__zoomIn animate__delay-2s animate__infinite animate__slower"></div>
	<a href="tel:0909337777" title="Tel: 0909337777"><i class="material-icons call-me shak-icon">phone</i></a>
</div>
<!--Call me block-->


<!-- Load Facebook Messenger -->
<!-- https://wiki.matbao.net/kb/huong-dan-tich-hop-facebook-chat-vao-website-ma-khong-can-dung-plugin/ -->
<div class="wrap-phone">
	<div class="phoneamination phoneamination1 animate__animated animate__zoomIn animate__delay-2s animate__infinite animate__slower"></div>
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