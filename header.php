﻿<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
<?php
	$site_name = "";
	$site_description = "";
	$site_image = "";
	$site_favicon = "";
	$site_logo = "";
	$slider_images = "";
	$site_phone_number = "";
	$site_facebook_messenger = "";
	$site_address = "";
	$site_email = "";
	$site_copyright = "";
	$site_facebook = "";
	$site_youtube = "";
	$smtp_host = "";
	$smtp_port = "";
	$smtp_username = "";
	$smtp_password = "";
	$smtp_secure = "";
	$enable_slide_video_and_buy_ticket = "";
	$custom_script_on_slider = "";
	if (!empty($settings)) {
		$site_name = GetSettingByKey($settings, 'Site Name');
		$site_description = GetSettingByKey($settings, 'Site Description');
		$site_image = GetSettingByKey($settings, 'Site Image');
		$site_image = $domain . str_replace("../", "",$site_image);
		$site_favicon = GetSettingByKey($settings, 'Site Favicon');
		$site_favicon = $domain . str_replace("../", "",$site_favicon);
		$site_logo = GetSettingByKey($settings, 'Site Logo');
		$site_logo = $domain . str_replace("../", "",$site_logo);
		$slider_images = GetSettingByKey($settings, 'Site Slider');
		$site_phone_number = GetSettingByKey($settings, 'Site Phone Number');
		$site_facebook_messenger = GetSettingByKey($settings, 'Site Facebook Messenger');
		$site_address = GetSettingByKey($settings, 'Site Address');
		$site_email = GetSettingByKey($settings, 'Site Email');
		$site_copyright = GetSettingByKey($settings, 'Site Copyright');
		$site_facebook = GetSettingByKey($settings, 'Site Facebook');
		$site_youtube = GetSettingByKey($settings, 'Site Youtube');
		$smtp_host = GetSettingByKey($settings, 'SMTP Host');
		$smtp_port = GetSettingByKey($settings, 'SMTP Port');
		$smtp_username = GetSettingByKey($settings, 'SMTP Username');
		$smtp_password = GetSettingByKey($settings, 'SMTP Password');
		$smtp_secure = GetSettingByKey($settings, 'SMTP Secure');
		$enable_slide_video_and_buy_ticket = GetSettingByKey($settings, 'Enable Slide Video and Buy Ticket');
		$custom_script_on_slider = GetSettingByKey($settings, 'Custom Script On Slider');
	}
?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
	<link rel="stylesheet" href="<?php echo auto_version('assets/main.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/index.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/desktop.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/mobile.css'); ?>" type="text/css" />
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <!-- CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
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
	
	<script>
	//Update meta tags
	$('head').append('<meta charset="utf-8">');
	$('head').append('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
	
	//SEO
	$('head').append('<title><?php echo $site_name; ?></title>');
	$('head').append('<meta name="description" content="<?php echo $site_description; ?>">');
	$('head').append('<meta name="keywords" content="">');
	$('head').append('<meta name="og:title" content="<?php echo $site_name; ?>">');
	$('head').append('<meta name="og:description" content="<?php echo $site_description; ?>">');
	$('head').append('<meta name="og:image" content="<?php echo $site_image; ?>">');
	
    $('head').append('<meta property="og:image" content="<?php echo $site_image; ?>">');
	$('head').append('<meta property="og:image:type" content="image/jpg">');
	$('head').append('<meta property="og:image:width" content="1024">');
	$('head').append('<meta property="og:image:height" content="576">');
	$('head').append('<link rel="icon" type="image/png" href="<?php echo $site_favicon; ?>">');
	$('head').append('<meta name="robots" content="noodp, noydir">');
	
	//No Google Translate toolbar
	$('head').append('<meta name="google" content="notranslate">');

	//Viewport and mobile
	$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">');
	$('head').append('<meta name="HandheldFriendly" content="true">');
	$('head').append('<meta name="MobileOptimized" content="320">');
	$('head').append('<meta http-equiv="cleartype" content="on">');
	</script>
</head>