<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
<?php session_start(); ?>
<?php
require 'mail/PHPMailer.php';
require 'mail/Exception.php';
require 'mail/SMTP.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->Host = $smtp_host;
$mail->Port = $smtp_port;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = $smtp_username; // SMTP username
$mail->Password = $smtp_password; // SMTP password
$mail->CharSet = 'UTF-8';				//PHPMailer character encoding support
?>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- SEO -->
	<title>Golf Club Championship 2020</title>
	<meta name="description" content="GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA">
	<meta name="keywords" content="">
	<meta name="og:title" content="Golf Club Championship 2020">
	<meta name="og:description" content="GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA">
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
	<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" type="text/css" />
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<link rel="stylesheet" href="<?php echo auto_version('assets/main.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/index.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/desktop.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/tablet.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/mobile.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/swal-slider.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/auction.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/social-share.css'); ?>" type="text/css" />

	<script>
		function changeVid(youtubeUrl){
			$('.video-div').attr('src', youtubeUrl);
		};

		function ShowProfile(){
			$('#login_form').show();
		}
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
<body style="background: #efefef; background: url(assets/images/p-bg.jpg);">
    <header id="header">
      <div class="contain">
        <nav>
          <ul id="nav" style="visibility: inherit; opacity: 1;">
            <li><a href="#aboutus" class="nav-left" role="aboutus"><span>giới thiệu</span></a></li>
            <li><a href="#events" class="nav-left" role="events"><span>Sự kiện</span></a></li>
            <li><a href="#plan" class="nav-left" role="plan"><span>lịch thi đấu</span></a></li>
            <li class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); cursor: pointer;" onclick="location.href = '<?php echo($domain); ?>';"><a href="<?php echo($domain); ?>"></a></li>
            <li><a href="#term" class="nav-right" role="term"><span>Giải đấu</span></a></li>
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