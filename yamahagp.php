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
      <div class="contain">
        <nav>
          <ul id="nav" style="visibility: inherit; opacity: 1;">
            <li><a onclick="return ShowAboutUs();" class="nav-left" role="main" style="cursor: pointer;"><span>giới thiệu</span></a></li>
            <li><a href="#sukien" class="nav-left" role="sukien"><span>Sự kiện</span></a></li>
            <li><a href="#plan" class="nav-left" role="plan"><span>lịch thi đấu</span></a></li>
            <li class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); cursor: pointer;" onclick="location.href = '#';"><a href="#"></a></li>
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
	@media (max-width: 920px){
	.main_copy .text {
	    width: 79%;
	    margin: -6% auto;
		}
	.btn1 {
	    width: 231px;
	    height: 54px;
	    line-height: 50px;
	    font-size: 18px
		}
	.btn2{
		margin-top:41%!important	 	
		}
	}
	
	@media (max-width: 767px){
	.main_copy .text {
	    width: 79%;
	    margin: -9% auto;
			}
	.btn1 {
	    width: 141px;
	    height: 31px;
	    line-height: 30px;
	   	font-size: 10px;
	   	margin-top: 18px!important;
	}
	.btn2{
		margin-top:44%!important	 	
		}
	}
	</style>

	<img src="assets/images/bg.jpg" alt="" class="bg_pc">
	
	<img src="assets/images/bg-hmb4.jpg" alt="" class="bg_mb">
	<div class="main_copy">
		<img src="assets/images/2.png" alt="" class="text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		<a href="#sukien" class="btn btn1 btn2 js-joinnow" role="sukien" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">ĐĂNG KÝ NGAY</a><br/>
		<a href="https://ticketbox.vn/vr-fest-2020#booking" class="btn btn1" role="sukien" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">MUA VÉ</a> 
	</div>
</section>


<section id="about" class="display about-video">
	<style type="text/css">
		#about.about-video {
			margin-top: -10vh;
		}
		#about .ytb {
		    height: 420px;
		}
		.video-img-t {
			width: 120px!important;
		}
		#about.about-video .ytb {
			display: flex;
    		flex-direction: column;
		}
		.video-multiple-items {
			height: 20%
		}
		.video-img-t img {
			height: 100%
		}
		#about.about-video .slick-next {
		    width: 21px;
		    height: 16px;
		    top: 94%;
		    right: -10px;
		    z-index: 1000
		}
		#about.about-video .slick-prev {
		    width: 21px;
		    height: 16px;
		    top: 94%;
		    left: -4px;
		    z-index: 1000
		}
		.video-multiple-items{
			margin-left: -10px
		}
		.video-img-t {
			margin-top: 10px;
    		margin-left:10px;
		}
		@media (max-width: 767px){
			#about .ytb {
				height: 348px
			}
			#about.about-video .slick-prev {
		    width: 21px;
		    height: 16px;
		    top: 100%;
		    left: 0px;
			}
			#about.about-video .slick-next {
		    width: 21px;
		    height: 16px;
		    top: 100%;
		    right:-9px;
			}
		}
		@media screen and (max-width: 1024px){
			#about.about-video {
		    margin-top: -5vh;
		    min-height: 122vh;
			}
		}
		@media screen and (max-width: 767px){
			#about.about-video {
		    margin-top: -6vh;
		  }  
		}
		@media (max-width: 567px){
			#about.about-video {
    		margin-top: -5vh;
			}
		}
	</style>
	<div class="contain">
		<h2><img src="assets/images/a-title.png"></h2>

		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">giới thiệu giải đua</li>
		</ul>
		<div class="about-contain display">
			<div class="copy-about">
				<h3><img src="assets/images/tagline.png"></h3>
				<p>Ngày hội đua xe thể thao chuyên nghiệp do Vietnam Racing Academy - VR tổ chức nhầm phát động phong trào RACE TO MIỀN TRUNG. Chương trình với sự đồng hành của hai thương hiệu lớn VINFAST và MOTUL.
Ngày hội đua xe cũng là lễ hội âm nhạc EDM hoành tráng - WHERE’S YOUR LIMNIT? với sự góp mặt của nhiều ca sĩ - DJ nổi tiếng.
Hãy cùng nhau đưa phong trào đua xe thể thao Việt Nam lên tầm chuyên nghiệp.</p>
			</div>
			<div class="video">
				<div class="ytb">
					<iframe id="video-div" width="100%" height="100%" src="https://www.youtube.com/embed/Pbjhj2VnqmE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<div class="video-multiple-items" >
						<div class="video-img-t">
						  <img src="assets/images/abdefaeg.png"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/Pbjhj2VnqmE')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_snow_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/g6fvOcAcRmc')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_mountains_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/cFhKI5UJPBo')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_nature_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/K2tUK44wFwM')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_snow_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/bY6jLt3owBQ')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_mountains_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/4dMNOSqGLy4')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_snow_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/g6fvOcAcRmc')">
						</div>
						<div class="video-img-t">
						  <img src="https://www.w3schools.com/w3css/img_mountains_wide.jpg"
						  style="width:100%" onclick="changeVid('https://www.youtube.com/embed/cFhKI5UJPBo')">
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="sukien"></section>
<section id="about" class="display">
	<div class="contain">
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
		</style>
		<div class="about-contain display">
			<ul class="race-league">
				<li>
					<h2>Moto</h2>
					<div class="copy">
						<div class="note">
							<h6>300 - 400cc</h6>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('semipro-300-400cc');" class="registry-link">- Semi-Pro</a></p>
						</div>
						<div class="note">
							<h6>UB150</h6>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('moto-ub150-pro');" class="registry-link">- Pro</a></p>
							<p><a style="cursor: pointer;" onclick="OpenRegisterPopup('moto-ub150-semipro');" class="registry-link">- Semi-Pro</a></p>
						</div>
						<ol>
							<li>
								<img width="200" height="123" style="width: 200px;height: 123px;margin-top: -20px;" src="assets/images/motorlogo.png">
							</li>
						</ol>
					</div>
				</li>
				<li>
					<h2>Go kart</h2>
					<div class="copy">
						<div class="note">
							<h6 style="margin-bottom: 0px;"><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">2 Thì</a></h6>
							<h6 style="margin-bottom: 0px;"><a href='#' onclick="return ShowRegistryBox('4 Thi');" class="registry-link">4 Thì</a></h6>
						</div>
						<ol>
							<li>
								<img width="200" height="200" style="width: 200px; height: 200px; margin-top: -15px;" src="assets/images/go-kartlogo.png">
							</li>
						</ol>
					</div>
				</li>
				<li>
					<h2>Oto</h2>
					<div class="copy">
						<div class="note">
							<h6><a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-gymkhana');" class="registry-link">GymKhana</a></h6>
							<h6><a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-track-attack');" class="registry-link">Track Attack</a></h6>
							<h6><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">Drift</a></h6>
						</div>
						<ol>
							<li>
								<img width="200" height="200" style="width: 200px; height: 160px;" src="assets/images/otologo.png">
							</li>
						</ol>
					</div>
				</li>
				<li>
					<h2>Roller Sport</h2>
					<div class="copy">
						<div class="note">
							<h6><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">Roller Sport</a></h6>
						</div>
						<ol>
							<li>
								<img width="200" height="200" style="width: 200px; height: 200px; margin-top: 40px;" src="assets/images/rollerlogo.png">
							</li>
						</ol>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="plan" class="display">
	<div class="contain">
		<h2 style="transform: matrix(1, 0, 0, 1, 0, 0);"><img src="assets/images/l-title.png"></h2>

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
							&nbsp;&nbsp;- Đại nhạc hội<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;- Chung kết các giải đua<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- VINFAST AUTOGYMKHANA<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- VINFAST TRACK ATTACK CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MOTUL MOTOR RACING CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ROLLER SPORT<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- VR GO-KART CUP<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- VR DRIFT BATTLE<br/>
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
	</style>
	<div class="contain">
		<h2 style="transform: matrix(1, 0, 0, 1, 0, 0);"><img src="assets/images/title-term.png"></h2>
		<ul class="gallery-tabs js-term--tabs">
			<li class="active" style="width: 100%;">QUY ĐỊNH TRANG PHỤC VÀ XE THI ĐẤU</li>
		</ul>
		<div class="about-contain display">
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
			</ul>
		</div>
	</div>
</section>

<section id="news">
	<div class="contain">
		<h2><img src="assets/images/n-tittle.png"></h2>
		<div class="js-news" role="toolbar">
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
	<style type="text/css">
		#gallery .gallery-tabs {
			width: 60vw;
		}
		.gallery-tabs1 li{
			font-size: 20px
		}
		.gallery-list li {
			color: #6FDA2B;
		}
		.gallery-filter {
			padding-top: 0px;
		}
		.gallery-filter .select_filter select {
			font-size: 13px
		}
		.gallery-filter .luc_province .select_filter select {
			font-size: 10px
		}
		.gallery-filter > div:last-child {
			padding-left: 20px;
			width: 34%;
		}
		.gallery-filter .luc_province  .select_filter {
			background: url(images/ar2.png) no-repeat 80% center;
		}
		.gallery-list1 li:after {
			display: none !important; 
		}
		.wrap-img-active {
			display: flex;
			flex-wrap: wrap;
			margin: 0 auto;
			width: 100%;	
		}
		.text-active a{
			display: block;
		}
		.active-title {
			font-size: 18px;
			font-family: "SFUEurostileBoldOblique", Helvetica Neue, Helvetica, Verdana, Roboto, sans-serif;
			text-align: left;
		}
		.img-active-right {
			margin: 10px;
		}
		.text-active {
			line-height: 2
		}
		.active-title1 {
			color:#6FDA2B;
			font-size: 15px;
		}
		.nav-tab-active{
			color: 	#F4ED2D

		}
		.active-title1:hover {
			cursor: pointer;
			color: 	#F4ED2D
		}
		.gallery-photo-1 {
			display: none
		}
		.active-img {
			display: block
		}
		.animate__animated.animate__fast {
			animation-duration: calc(var(--animate-duration)*5);
		}
		@media (max-width: 767px){
			#gallery .gallery-tabs {
			width: 90%;
			}
			.gallery-tabs {
				margin: 10px auto
			}
			.gallery-tabs1 li {
			font-size: 11px;
			}
			.active-title {
			font-size: 13px;
			}
			.active-title1 {
			font-size: 10px;
			}
		}
	</style>
   
   <script type="text/javascript">
   	$(document).ready(function(){
   		$('.tap-active').click(function(event) {
   			 event.preventDefault();
		  $(this).addClass('nav-tab-active').siblings().removeClass('nav-tab-active');

		  $($(this).attr('href')).addClass('active-img').siblings().removeClass('active-img');
		});
   	});
	
	function ViewPigsizeImage(element){
		var src = $(element).attr("src");
		swal({
		  imageUrl: src,
		  imageWidth: '100%',
		  width: '1200px',
		  imageAlt: 'BG About Us'
		});
	}
   </script>
   <div class="contain">
   		<ul class="gallery-tabs gallery-tabs1 js-term--tabs">
			<li class="active" style="width: 100%;">HÌNH ẢNH & SỰ KIỆN NĂM 2020</li>
		</ul>
      <div class="gallery-item display" id="type-photo">
      	<div class="wrap-img-active">
      		<div class="img-active-right">
      			<div class="active-title">HÌNH ẢNH CHƯƠNG TRÌNH</div>
      			<div class="text-active">
      				<a class="active-title tap-active nav-tab-active active-title1" href="#tab-1">1.HỌP BÁO KỸ THUẬT NGÀY HỘI ĐUA XE VIETNAM RACING FESTIVAL 2020</a>
      				<a class="active-title tap-active active-title1" href="#tab-2">2.PHÁT ĐỘNG PHONG TRÀO ĐUA XE THỂ THAO VIỆT NAM</a>
      			</div>
	             <div id="tab-1" class="gallery-photo gallery-photo-1 active-img">
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2669.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2729.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2394.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2445.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2688.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_1797.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2168.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/PHU_2843.jpg" onclick="ViewPigsizeImage(this);"></div>
	            </div>
	            <div id="tab-2"class="gallery-photo gallery-photo-1">
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-25.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-26.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-28.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-29.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-30.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-31.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-32.jpg" onclick="ViewPigsizeImage(this);"></div>
	               <div class="js-img animate__fadeIn animate__fast animate__animated "><img style="cursor: pointer;" src="assets/images/viber_image_2020-11-10_12-32-33.jpg" onclick="ViewPigsizeImage(this);"></div>
	            </div>
      		</div>
  			
      	</div>
        
	</div>	
	<footer>
      <p class="socials" style="margin-top: 20px;">
         <a href="https://www.facebook.com/vietnamracingacademy" class="fb" target="_blank"></a> 
         <a href="#" class="ytb" target="_blank"></a>
      </p>
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