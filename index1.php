<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
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
	<link rel="stylesheet" href="<?php echo auto_version('assets/index1/main1.css'); ?>" type="text/css" />
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <!-- CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<script>
		function changeVid(youtubeUrl){
			$('.video-div').attr('src', youtubeUrl);
		};
	</script>
	<!-- Start: Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z2075FRD1R"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-Z2075FRD1R');
    </script>
    <!-- End: Global site tag (gtag.js) - Google Analytics -->
    
    <!-- Start: Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2740220276218425');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2740220276218425&ev=PageView&noscript=1"
    /></noscript>
    <!-- End: Facebook Pixel Code -->
</head>
<body>
  <header id="header">
    <div class="contain">
      <nav>
        <ul id="nav" style="visibility: inherit; opacity: 1;">
          <li><a href="#aboutus" class="nav-left" role="aboutus"><span>giới thiệu</span></a></li>
          <li><a href="#events" class="nav-left" role="events"><span>Sự kiện</span></a></li>
          <li><a href="#plan" class="nav-left" role="plan"><span>lịch thi đấu</span></a></li>
          <li class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); cursor: pointer;" onclick="location.href = '<?php echo($domain); ?>';"><a href="<?php echo($domain); ?>"></a></li>
          <li><a href="#term" class="nav-right" role="term"><span>thể lệ <br>thi đấu</span></a></li>
          <li><a href="#news" class="nav-right" role="news"><span>tin tức</span></a></li>
          <li><a href="#gallery" class="nav-right" role="gallery"><span>HÌNH ẢNH <br>&amp; KẾT QUẢ</span></a></li>
        </ul>
      </nav>
    </div>
    <div class="header-mb">
      <a href="<?php echo($domain); ?>" class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0);"></a>
        <div class="menu-toggle-wrapper" aria-hidden="true">
        <button class="btn-menu menu-closed">
            <span class="menu-icon"></span>
        </button>
      </div>  
    </div>
  </header>

<!-- sectionMain -->
<section id="main" style="visibility: inherit; opacity: 1;" class="main-section">
	<script>
		const getDeviceType = () => {
		  const ua = navigator.userAgent;
		  if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
			return "tablet";
		  }
		  if (
			/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(
			  ua
			)
		  ) {
			return "mobile";
		  }
		  return "desktop";
		};
		
		$( document ).ready(function() {
			var currentDevice = getDeviceType();
			if (currentDevice != "desktop"){
				$('.panel_controls').hide();
				$('.panel_table_controls').show();
				if (currentDevice == "tablet"){
					$('.video-div').each(function( index ) {
						$( this ).attr("height","300px");
					});
				}
			} else {
				if($(".bg_mb").is(":visible")){
					$('.panel_controls').hide();
					$('.panel_table_controls').show();
					$('.video-div').each(function( index ) {
						$( this ).attr("height","300px");
					});
				}
			}
		});
	</script>
	<style>
		.panel_table_controls {
			top: 20%;
		}
		.panel_table_controls table tr td {
			text-align: center;
		}
	</style>
		<div class="wrap-slider-banner bg_pc">
		<div class="mySlides" style="display:none">
			<img class="autoImg" src="assets/images/slider01.jpg" style="width:100%">
		</div>
		<div class="mySlides" style="display:none">
			<img class="autoImg" src="assets/images/slider02.jpg" style="width:100%">
		</div>
		<div class="mySlides" style="display:none">
			<img class="autoImg" src="assets/images/slider03.jpg" style="width:100%">
		</div>
		<div class="mySlides" style="display:none">
			<img class="autoImg"src="assets/images/slider04.jpg" style="width:100%">
		</div>
		<div class="mySlides" style="display:none">
			<img class="autoImg" src="assets/images/slider05.jpg" style="width:100%">
		</div>
		<button class="slick-prev" onclick="plusDivs(-1)">&#10094;</button>
		<button class="slick-next" onclick="plusDivs(1)">&#10095;</button>
	</div>
	<img src="assets/images/bg-hmb4.jpg" alt="" class="bg_mb">
	<div class="main_copy panel_controls">
		<div class="mb-btn">
			<a href="#register" class="btn btn1 btn2 js-joinnow" role="register" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">ĐĂNG KÝ THI ĐẤU</a><br/>
			<a href="https://ticketbox.vn/vr-fest-2020#booking" class="btn btn1" role="ticket" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">MUA VÉ</a>
		</div>
	</div>
	<script>
		// slick sider
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		showDivs(slideIndex += n);
		}

		function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		x[slideIndex-1].style.display = "block";  
		}

		// set time out
		var myIndex = 0;
		carousel();

		function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>

	<div class="main_copy panel_table_controls" style="display: none;">
		<table style="width: 100%;">
			<tr>
				<td>
					<iframe class="video-div" width="100%" height="100%" src="//www.youtube.com/embed/Pbjhj2VnqmE?modestbranding=1&showinfo=0&fs=0&rel=0&autohide=1&controls=0" frameborder="0" allowfullscreen></iframe>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#register" class="btn js-joinnow" role="register" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">ĐĂNG KÝ THI ĐẤU</a>&nbsp;
					<a href="https://ticketbox.vn/vr-fest-2020#booking" class="btn" role="ticket" style="transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;">MUA VÉ</a>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
					<img src="assets/images/Logo_Vinfast.png" width="90%" />
				</td>
			</tr>
			<tr>
				<td><img src="assets/images/whereisyourlimit.png" width="100%" /></td>
			</tr>
			<tr>
				<td><img src="assets/images/don_vi_to_chuc.png" width="100%" /></td>
			</tr>
		</table>
	</div>
</section>
  
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>

<script src="assets/js/underscore.js"></script>
<script src="assets/js/jquery.history.js"></script>

<script src="assets/js/gscript.js"></script>
<script src="<?php echo auto_version('assets/main.js'); ?>"></script>
</body>
</html>