<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
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
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<link rel="stylesheet" href="<?php echo auto_version('assets/main.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/index.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/desktop.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/tablet.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/mobile.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo auto_version('assets/css/swal-slider.css'); ?>" type="text/css" />
	
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

	<section id="pHome">
	<script type="text/javascript">
	var _folder = '/';
	var _newsDetail = ''; 
	var isMobile = '0';
</script>
<!-- media style for both phone and ipad: @media screen and (max-width: 900px) -->
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
	<?php include 'slider.php'; ?>
</section>


<section id="aboutus" class="display about-video">
	<script>
		var currentAboutContentIndex = 0;
		function ShowAboutusContent(element, className){
			var elementClass = $(element).attr("class");
			$('.' + elementClass).each(function( index ) {
				$( this ).text($( this ).attr("title") + " ►");
			});
			var elementText = $(element).attr("title");
			$(element).text(elementText + " ▼");
			
			var arr = className.split("-");
			$('.' + arr[0] + '-' + arr[1]).hide();
			$('.' + className).each(function( index ) {
				if (arr[2] != currentAboutContentIndex){
					$( this ).show();
				} else {
					$( this ).hide();
					$(element).text(elementText + " ►");
				}
			});
			if (arr[2] != currentAboutContentIndex){
				currentAboutContentIndex = arr[2];
			} else {
				currentAboutContentIndex = arr[2] + 1;
			}
		}
	</script>
	<div class="contain">
		<h4 style="text-align: center;">VỀ CHÚNG TÔI</h4>
		<h2>GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA</h2>
		<div class="about-contain display">
			<div class="copy-about">
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-1');" title="Về chúng tôi">Về chúng tôi ►</h5>
					<p class="aboutus-content aboutus-content-1" style="display: none;">Năm 2019 khởi đầu cho sự kiện quy tụ các Golfer hàng đầu thuộc nhiều CLB golf tại TP Hồ Chí Minh và các tỉnh phía Nam tạo nên sự kiện Vô Địch Các CLB Golf Phía Nam tranh cúp Tasmania, năm 2020 tiếp nối sự thành công đó là sự đầu tư chỉn chu hơn từ phía ban tổ chức cũng như 50 CLB Golf tham dự sẽ tạo nên một ngày hội golf phương Nam sẽ diễn ra ngày 8 và ngày 9’tháng 12 năm 2020 với gần 700 Golfer tham dự.</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-2');" title="Câu chuyện">Câu chuyện ►</h5>
					<p class="aboutus-content aboutus-content-2" style="display: none;">Sự kiện Vô Địch Các CLB Golf ra đời nhằm thay đổi thói quen golf của các Golfer xưa nay đó là chỉ chơi với chính mình và ít mở rộng giao thương kết nối, thì đây sẽ là cầu nối để các CLB Golf khắp nơi xây dựng văn hoá , phong cách và màu cờ sắc áo của đội mình và hơn hết là tinh thần đồng đội được đề cao hơn hết cho một chiến thắng tập thể thay vì thành tích cá nhân.</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-3');" title="Định hướng">Định hướng ►</h5>
					<p class="aboutus-content aboutus-content-3" style="display: none;">Đây sẽ là sự kiện được tổ chức định kỳ hàng năm , mỗi năm sẽ có đầu tư mạnh mẽ hơn về chất lượng chuyên môn cũng như tài chính mạnh hơn nhằm đem đến một ngày hội golf thực sự của các Golfer phía Nam.</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-4');" title="Giá trị cốt lõi">Giá trị cốt lõi ►</h5>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Chuyên Nghiệp</p>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Đam Mê</p>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Điêu Luyện</p>
					<p class="aboutus-content aboutus-content-4" style="display: none;">-	Tinh Thần Thể Thao</p>
				</div>
				<div class="aboutus-paragraph">
					<h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, 'aboutus-content-5');" title="Tầm nhìn tương lai">Tầm nhìn tương lai ►</h5>
					<p class="aboutus-content aboutus-content-5" style="display: none;">Chúng tôi thực hiện sứ mệnh truyền tải cảm hứng golf đến cộng đồng Golfer toàn quốc , tạo ra hiệu ứng tốt để phát triển phong trào golf , đưa golf trở nên phổ thông hơn với người Việt chúng ta, là cầu nối để kết nối giao thương giữa các Golfer trong nước và quốc tế.</p>
				</div>
				<div class="aboutus-users">
					<div class="about-us">
						<div class="row">
						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="VŨ THÀNH HUẾ" style="background-image: url('assets/images/person1.jpg');"></div>
							  <div class="aboutus-card-container">
								<h2>VŨ THÀNH HUẾ</h2>
								<p>Chủ tịch tập đoàn Tasmania & Partner - Chủ tịch giải đấu</p>
							  </div>
							</div>
						  </div>

						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="Vi Quốc Tuấn" style="background-image: url('<?php echo auto_version('assets/images/person3.jpg'); ?>');"></div>
							  <div class="aboutus-card-container">
								<h2>Vi Quốc Tuấn</h2>
								<p>Phó chủ tịch tập đoàn Tasmania, Phó chủ tịch Hiệp Hội Golf Việt Nam, Chủ tịch Hội Golf Hải Phòng, Phó chủ tịch giải đấu</p>
							  </div>
							</div>
						  </div>

							<div class="aboutus-column">
								<div class="aboutus-card">
								  <div class="aboutus-image" title="Trần Ngọc Hải" style="background-image: url('assets/images/person6.jpg');"></div>
								  <div class="aboutus-card-container">
									<h2>Trần Ngọc Hải</h2>
									<p>Phó chủ tịch HĐQT, Tổng giám đốc công ty Cp Đầu tư Long Biên - Phó chủ tịch giải đấu </p>
								  </div>
								</div>
							</div>
						  
						  <div class="aboutus-column">
							<div class="aboutus-card">
							  <div class="aboutus-image" title="Hoàng Trọng Khánh" style="background-image: url('assets/images/person4.jpg');"></div>
							  <div class="aboutus-card-container">
								<h2>Hoàng Trọng Khánh</h2>
								<p>Tổng Giám Đốc KMTC Việt Nam - Phó chủ tịch giải đấu</p>
							  </div>
							</div>
						  </div>
						</div>

						<div class="row">
						  <div class="aboutus-column">
							<div class="aboutus-card">
								<div class="aboutus-image" title="TRỊNH VĂN THÀNH" style="background-image: url('assets/images/person2.jpg');"></div>
								  <div class="aboutus-card-container">
									<h2>TRỊNH VĂN THÀNH</h2>
									<p>Chủ tịch Cty Golf Pro - Trưởng BTC Giải</p>
								  </div>
								</div>
							</div>

							<div class="aboutus-column">
								<div class="aboutus-card">
								  <div class="aboutus-image" title="Dương Quang Huy" style="background-image: url('assets/images/person5.jpg');"></div>
								  <div class="aboutus-card-container">
									<h2>Dương Quang Huy</h2>
									<p>Giám đốc Golf sân golf TSN - Tổng trọng tài giải đấu </p>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="aboutus-paragraph">
					<script>
						//var swalTimeOut;
						//var swalInterval;
						var currentSwalSliderIndex = 1;
						var totalSlide = 0;
						function ShowClb(image_name, total_file, title, description, hyperlink){
							totalSlide = total_file;
							currentSwalSliderIndex = 1;
							if (total_file || title || description || hyperlink){
								var slider = "";
								if (total_file){
									slider += "<div class='swalslider'>";

									var fileName = image_name.split('.').shift();
									var fileExtention = image_name.split('.').pop();

									var slide_number = "";
									var slide_image = "<div class='swalslides'>";
									var i = 1;
									for (; i <= total_file; i++) {
										var image_number = i - 1;
										if (image_number == 0){
											image_number = "";
										}
										slide_number += "<a href='#swalslide-" + i + "' id='swallink-" + i + "'>" + i + "</a>";
										slide_image += "<div id='swalslide-" + i + "'><img class='swalslide-img' src='" + 'assets/clbs/' + fileName + image_number + "." + fileExtention + "' /></div>";
									}
									slide_image += "</div>";

									slider += slide_number;
									slider += slide_image;
									slider += "</div>";
									slider += "<a class='swal-next' onclick='goNextSwalSlide();' id='nextSwalSlideBtn'><img src='assets/images/next.png' style='width: 50px;' /></a>";
									slider += "<a class='swal-prev' onclick='goPreviousSwalSlide();' id='previousSwalSlideBtn'><img src='assets/images/prev.png' style='width: 50px;' /></a>";
								}

								if (hyperlink){
									hyperlink = "<p><a target='_blank' href='" + hyperlink + "'>Xem thêm</a></p>";
								}
								if (typeof description === "undefined") {
									description = ""
								}
								if (typeof hyperlink === "undefined") {
									hyperlink = ""
								}
								swal({
								  title: "<i>" + title + "</i>", 
								  html: slider + "<p>" + description + hyperlink + "</p>",  
								  confirmButtonText: "Đóng",
								  onClose: ClearSwalSliderInterval
								});

								//swalTimeOut = setTimeout( function(){
								//	swalInterval = window.setInterval(function(){
								//		$('#nextSwalSlideBtn').click();
								//	}, 2000);
								//},100);
							} else {
								//Replace all spaces to %20
								//var imageFileName = image.replace(/\ /g, "%20");
								swal({
									imageUrl: 'assets/clbs/' + image_name,
									imageWidth: '100%',
									imageHeight: '100%',
									width: '681px',
									imageAlt: '',
								});
							}
						}

						function goNextSwalSlide(){
							var newSwalSliderIndex = currentSwalSliderIndex + 1;
							var swalLink = $("#swallink-" + newSwalSliderIndex);
							if (swalLink.length > 0){
								currentSwalSliderIndex = newSwalSliderIndex;
								swalLink[0].click();
							} else {
								currentSwalSliderIndex = 1;
								swalLink = $("#swallink-" + currentSwalSliderIndex);
								swalLink[0].click();
							}
						}

						function goPreviousSwalSlide(){
							var newSwalSliderIndex = currentSwalSliderIndex - 1;
							var swalLink = $("#swallink-" + newSwalSliderIndex);
							if (swalLink.length > 0){
								currentSwalSliderIndex = newSwalSliderIndex;
								swalLink[0].click();
							} else {
								currentSwalSliderIndex = totalSlide;
								swalLink = $("#swallink-" + currentSwalSliderIndex);
								swalLink[0].click();
							}
						}

						function ClearSwalSliderInterval(){
							currentSwalSliderIndex = 1;
							//clearInterval(swalInterval);
							//clearTimeout(swalTimeOut);
						}
					</script>
					<style>
						.clbs-title {
							font-size: 16pt !important;
							color: #F44336;
						}
						.list-of-clbs {
							columns: 2; -webkit-columns: 2; -moz-columns: 2;
						}

						.list-of-clbs li {
							font-size: 17pt;
							cursor: pointer;
							list-style-type: decimal !important;
							margin-left: 30px !important;
							text-transform: uppercase;
						}

						ol.list-of-clbs {list-style-type: upper-greek;}

						@media only screen and (max-device-width: 653px) {
							.list-of-clbs li {
								font-size: 12pt;
							}
						}
					</style>
					<h5 class="clbs-title" title="CLB GOLF SẼ THAM GIA NĂM 2020">CLB GOLF SẼ THAM GIA NĂM 2020</h5>
					<ol class="list-of-clbs" type="1">
						<li onclick="ShowClb('Untitled_page-0041.jpg');">Hội Golf Tỉnh Đồng Nai</li>
						<li onclick="ShowClb('HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU.jpg', 2, 'HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU');">HỘI GOLF TỈNH BÀ RỊA - VŨNG TÀU</li>
						<li onclick="ShowClb('CLB GOLF TỈNH BÌNH THUẬN.jpg', 2, 'CLB GOLF TỈNH BÌNH THUẬN');">CLB GOLF TỈNH BÌNH THUẬN</li>
						<li onclick="ShowClb('HỘI GOLF NHA TRANG.jpg', 2, 'HỘI GOLF NHA TRANG');">HỘI GOLF NHA TRANG</li>
						<li onclick="ShowClb('HỘI GOLF TỈNH LÂM ĐỒNG.jpg', 2, 'HỘI GOLF TỈNH LÂM ĐỒNG');">HỘI GOLF TỈNH LÂM ĐỒNG</li>
						<li onclick="ShowClb('CLB GOLF TASMANIA.jpg', 2, 'CLB GOLF TASMANIA');">CLB GOLF TASMANIA</li>
						<li onclick="ShowClb('CLB GOLF DOANH NHÂN TRẺ TP. HCM.jpg', 2, 'CLB GOLF DOANH NHÂN TRẺ TP. HCM');">CLB GOLF DOANH NHÂN TRẺ TP. HCM</li>
						<li onclick="ShowClb('CLB GOLF DOANH NHÂN SÀI GÒN.jpg');">CLB GOLF DOANH NHÂN SÀI GÒN</li>
						<li onclick="ShowClb('SAIGON OPEN GOLF CLUB.jpg');">SÀI GÒN OPEN GOLF CLUB</li>
						<li onclick="ShowClb('CLB GOLF BẤT ĐỘNG SẢN TP. HCM.jpg', 2 , 'CLB GOLF BẤT ĐỘNG SẢN TP. HCM');">CLB GOLF BẤT ĐỘNG SẢN TP. HCM</li>
						<li onclick="ShowClb('CLB GOLF SG - TB.jpg', 2, 'CLB GOLF SG - TB');">CLB GOLF SG - TB</li>
						<li onclick="ShowClb('CLB GOLF LADIES AND BEAUTY CLUB.jpg', 2, 'CLB GOLF LADIES & BEAUTY CLUB');">CLB GOLF LADIES & BEAUTY CLUB</li>
						<li onclick="ShowClb('CLB GOLF MIỀN TRUNG AND FRIENDS.jpg', 2, 'CLB GOLF MIỀN TRUNG AND FRIENDS');">CLB GOLF MIỀN TRUNG & FRIENDS</li>
						<li onclick="ShowClb('CLB GOLF VŨ VÕ.jpg', 2, 'CLB GOLF VŨ VÕ');">CLB GOLF VŨ VÕ</li>
						<li onclick="ShowClb('CLB GOLF TÂN SƠN NHẤT.jpg', 2, 'CLB GOLF TÂN SƠN NHẤT');">CLB GOLF TÂN SƠN NHẤT</li>
						<li onclick="ShowClb('CLB GOLF BÔNG LÚA VÀNG.jpg');">CLB GOLF BÔNG LÚA VÀNG</li>
						<li onclick="ShowClb('CLB GOLF DOANH NHÂN VIỆT NAM.jpg', 2, 'CLB GOLF DOANH NHÂN VIỆT NAM');">CLB GOLF DOANH NHÂN VIỆT NAM</li>
						<li onclick="ShowClb('CLB GOLF HỌ TRẦN VIỆT NAM.jpg', 2, 'CLB GOLF HỌ TRẦN VIỆT NAM');">CLB GOLF HỌ TRẦN VIỆT NAM</li>
						<li onclick="ShowClb('CLB GOLF AND FRIENDS.jpg',2, 'CLB Golf & Friends');">CLB Golf & Friends</li>
						<li onclick="ShowClb('CLB GOLF HỌ LÊ.jpg', 2, 'CLB GOLF HỌ LÊ');">CLB GOLF HỌ LÊ</li>
						<li onclick="ShowClb('XỨ THANH GOLF CLUB.jpg', 2, 'XỨ THANH GOLF CLUB');">CLB Golf Xứ Thanh</li>
						<li onclick="ShowClb('CLB GOLF CÁ CƠM - TRIPLE C.jpg', 2, 'CLB GOLF CÁ CƠM - TRIPLE C');">CLB GOLF CÁ CƠM - TRIPLE C</li>
						<li onclick="ShowClb('CLB GOLF G78.jpg', 2, 'CLB GOLF G78');">CLB GOLF G78</li>
						<li onclick="ShowClb('CLB GOLF G76.jpg', 2, 'CLB GOLF G76');">CLB GOLF G76</li>
						<li onclick="ShowClb('Untitled_page-0005.jpg');">CLB Bách Khoa HCM</li>
						<li onclick="ShowClb('CLB GOLF HỘI DOANH NGHIỆP QUẬN THỦ ĐỨC.jpg', 2, 'CLB GOLF HỘI DOANH NGHIỆP QUẬN THỦ ĐỨC');">CLB golf hội doanh nghiệp quận Thủ Đức (TBA Golf Club)</li>
						<li onclick="ShowClb('CLB GOLF VINHOMES CENTRAL PARK.jpg', 2, 'CLB GOLF VINHOMES CENTRAL PARK GOLF CLUB ( VCPG)');">CLB GOLF VINHOMES CENTRAL PARK GOLF CLUB ( VCPG)</li>
						<li onclick="ShowClb('CLB GOLF HERBALIFE.jpg', 2, 'CLB GOLF HERBALIFE');">CLB GOLF HERBALIFE</li>
						<li onclick="ShowClb('CLB GOLF DOANH NHÂN NGHỆ TĨNH.jpg', 2, 'CLB GOLF DOANH NHÂN NGHỆ TĨNH');">CLB GOLF DOANH NHÂN NGHỆ TĨNH</li>
						<li onclick="ShowClb('CLB GOLF HUẾ - SÀI GÒN.jpg', 2, 'CLB GOLF HUẾ - SÀI GÒN');">CLB GOLF HUẾ - SÀI GÒN</li>
						<li onclick="ShowClb('CLB GOLF PHÚ MỸ HƯNG.jpg', 2, 'CLB GOLF PHÚ MỸ HƯNG');">CLB GOLF PHÚ MỸ HƯNG</li>
						<li onclick="ShowClb('CLB GOLF BNG.jpg');">CLB GOLF BNG</li>
						<li onclick="ShowClb('CLB GOLF LOBICO.jpg', 2, 'CLB GOLF LOBICO');">CLB GOLF LOBICO</li>
						<li onclick="ShowClb('CLB GOLF CB.jpg', 3, 'CLB GOLF CB');">CLB GOLF CB</li>
						<li onclick="ShowClb('CLB GOLF TCGA.jpg', 2, 'CLB GOLF TCGA VŨNG TÀU');">CLB GOLF TCGA Vũng Tàu</li>
						<li onclick="ShowClb('CLB GOLF STANDARD GOLFERS CLUB.jpg', 2, 'CLB GOLF STANDARD GOLFERS CLUB');">CLB GOLF STANDARD GOLFERS CLUB - SGC</li>
						<li onclick="ShowClb('CLB GOLF IT.jpg', 2, 'CLB GOLF IT');">CLB GOLF IT</li>
						<li onclick="ShowClb('CLB GOLF KN.jpg', 2, 'CLB GOLF KN');">CLB GOLF KN</li>
						<li onclick="ShowClb('CLB GOLF HÀ NỘI - SÀI GÒN.jpg', 2, 'CLB GOLF HÀ NỘI - SÀI GÒN');">CLB GOLF HÀ NỘI - SÀI GÒN</li>
						<li onclick="ShowClb('CLB GOLF THÀNH PHỐ BIÊN HÒA.jpg', 2, 'CLB GOLF THÀNH PHỐ BIÊN HÒA');">CLB GOLF THÀNH PHỐ BIÊN HÒA</li>
						<li style="color: #3c220b; cursor: auto;">CLB Golf Họ Nguyễn</li>
						<li style="color: #3c220b; cursor: auto;">CLB Golf G&G</li>
						<li onclick="ShowClb('CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG.jpg', 2, 'CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG');">CLB GOLF DOANH NGHIỆP BÌNH DƯƠNG</li>
						<li style="color: #3c220b; cursor: auto;">CLB Golf FGC</li>
						<li onclick="ShowClb('CLB GOLF DOANH NHÂN 2030.jpg', 2, 'CLB GOLF DOANH NHÂN 2030');">CLB GOLF DOANH NHÂN 2030</li>
						<li onclick="ShowClb('CLB GOLF BÁCH KHOA ALUMNI.jpg', 2, 'CLB GOLF BÁCH KHOA ALUMNI');">CLB GOLF BÁCH KHOA ALUMNI</li>
						<li onclick="ShowClb('CLB GOLF HỌ NGUYỄN PHÍA NAM.jpg', 2, 'CLB GOLF HỌ NGUYỄN PHÍA NAM');">CLB GOLF HỌ NGUYỄN PHÍA NAM</li>
						<li onclick="ShowClb('CLB GOLF PMG.jpg', 2, 'CLB GOLF PMG');">CLB GOLF PMG</li>
						<li onclick="ShowClb('CLB GOLF DANH NHÂN SÀI GÒN.jpg');">CLB GOLF DANH NHÂN SÀI GÒN</li>
						<li onclick="ShowClb('CLB GOLF PRIENDS GOLF CLUB.jpg');">CLB GOLF PRIENDS GOLF CLUB</li>
						<!-- <li>CLB Golf G20</li>
						<li>CLB Golf GLC</li>
						<li>CLB Golf Họ Phạm</li>
						<li>CLB Golf Bunker</li> -->
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="term" class="term1">
	<style>
		.video-container {
			position: relative;
			overflow: hidden;
			width: 100%;
			padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
		}

		/* Then style the iframe to fit in the container div with full height and width */
		.video-container-responsive-iframe {
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			width: 100%;
			height: 100%;
		}

		.g-overview{
			padding: 0px !important;
		}
	</style>
	<div class="contain">
		<h4 style="text-align: center;">KẾ HOẠCH TỔ CHỨC GIẢI VÔ ĐỊCH CÁC CLB GOLF 2020</h4>
		<h2 style="text-align: center; margin-bottom: 40px;">GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA</h2>
		<ul class="gallery-tabs js-term--tabs">
			<li class="active" style="width: 33.3%;">Video</li>
			<li class="" style="width: 33.3%;">Kế hoạch</li>	
			<li class="" style="width: 33.3%;">Điều lệ</li>	
		</ul>
		<div class="term-contain display">
			<div class="video">
				<div class="video-container">
					<iframe class="video-container-responsive-iframe" src="https://drive.google.com/file/d/1XKvrvgsUFJYmygSekObgCWAth2KqxPsT/preview"></iframe>
				</div>
			</div>
		</div>
		<div class="term-contain ">
			<div class="video">
				<div class="video-container" style="height: 500px;">
					<iframe class="video-container-responsive-iframe" src="https://drive.google.com/file/d/1I06apgfMPmpAPf1-2kOZZthad7cStTvY/preview"></iframe>
				</div>
			</div>
		</div>
		<div class="term-contain ">
			<div class="video">
				<div class="video-container" style="height: 500px;">
					<iframe class="video-container-responsive-iframe" src="https://drive.google.com/file/d/1TvFbxltrLv0HpMauBwz0feLk8dpHAvPt/preview"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
$(window).on("load", function() {
    //Wait util all images are loaded
	$('#events').show();
});
</script>
<section id="events" class="display" style="display: none;">
	<div class="contain">
		<h4 style="text-align: center;">Sự kiện</h4>
		<h2>GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA</h2>
		<img style="width: 100%;" src="assets/sukien/events.png">
</section>

<section id="plan" class="display">
	<div class="contain">
		<h4 style="text-align: center;">lịch trình chi tiết</h4>
		<h2>GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA</h2>
		<p style="text-transform: uppercase; color: #af2e2e; font-weight: bold; text-align: center; font-size: large;">Thời gian đăng ký hạn chót: 25/11/2020</p>
		<p style="text-transform: uppercase; color: #af2e2e; font-weight: bold; text-align: center; font-size: large;">Thời gian chốt HDCP: 30/11/2020</p>
		<br/>
		<div class="plan-wrap">
			<ul class="plan-list">
				
				<li class="disable">
					<span>LỊCH TRÌNH LỄ CÔNG BỐ GIẢI ĐẤU</span>
					<div class="plan-item">
						<h3>26/11/2020</h3>
						<p><img src="assets/images/i-location.png">Địa điểm: 113 Nguyễn Văn Hưởng, P. Thảo Điền, Q2, TP.HCM</p>
						<p><img src="assets/images/i-time.png">16:00 - 17:00: Đón khách</p>
						<p><img src="assets/images/i-time.png">17:00 - 18:00: Công bố giải đấu với đại diện của 50 đội tuyển & khách mời</p>
						<p><img src="assets/images/i-time.png">18:00 - 22:00: Tiệc BBQ chiêu đãi và âm nhạc</p>
						<h4>1</h4>
					</div>
				</li>

				<li class="disable">
					<span>LỊCH TRÌNH NGÀY THI ĐẤU VÒNG LOẠI</span>
					<div class="plan-item">
						<h3>08/12/2020</h3>
						<p><img src="assets/images/i-location.png">Địa điểm: Sân golf Tân Sơn Nhất, số 6 Tân Sơn, P.12, Q. Gò Vấp, TP.HCM</p>
						<p style="color: #d6ef0e; font-weight: bold;">Buổi sáng:</p>
						<p><img src="assets/images/i-time.png">05:00 - 05:30: Checkin ăn sáng</p>
						<p><img src="assets/images/i-time.png">05:45 - 05:55: Khai mạc</p>
						<p><img src="assets/images/i-time.png">06:00: Chính thức thi đấu vòng loại (Đấu gậy tính điểm Net)</p>
						<p><img src="assets/images/i-time.png">11:30: Kết thúc giải đấu buổi sáng</p>
						<p><img src="assets/images/i-time.png">12:30: Tiệc trao giải cá nhân & công bố kết quả đồng đội</p>
						<p style="color: #d6ef0e; font-weight: bold;">Buổi chiều:</p>
						<p><img src="assets/images/i-time.png">10:00 - 11:00: Checkin ăn trưa</p>
						<p><img src="assets/images/i-time.png">11:30 - 11:50: Khai mạc vòng loại buổi chiều</p>
						<p><img src="assets/images/i-time.png">12:00 - 17:00: Chính thức thi đấu vòng loại (Đấu gậy tính điểm Net)</p>
						<p><img src="assets/images/i-time.png">18:00: Kết thúc giải đấu buổi chiều</p>
						<p><img src="assets/images/i-time.png">19:00: Tiệc trao giải cá nhân & công bố kết quả đồng đội</p>
						<p><img src="assets/images/i-time.png">20:00: Bốc thăm ghép cặp thi đấu Match Play vòng chung kết</p>
						<h4>2</h4>
					</div>
				</li>
				
				<li class="disable">
					<span>LỊCH TRÌNH NGÀY THI ĐẤU VÒNG CHUNG KẾT</span>
					<div class="plan-item">
						<h3>09/12/2020</h3>
						<p><img src="assets/images/i-location.png">Địa điểm: Sân golf Tân Sơn Nhất, số 6 Tân Sơn, P.12, Q. Gò Vấp, TP.HCM</p>
						<p style="color: #d6ef0e; font-weight: bold;">Buổi chiều:</p>
						<p><img src="assets/images/i-time.png">10:00 - 11:00: Checkin ăn trưa</p>
						<p><img src="assets/images/i-time.png">11:30 - 11:50: Khai mạc vòng chung kết giải đấu</p>
						<p><img src="assets/images/i-time.png">12:00 - 17:00: Chính thức thi đấu thể thức (Match Play - Four Ball)</p>
						<p><img src="assets/images/i-time.png">18:00: Kết thúc giải đấu</p>
						<p><img src="assets/images/i-time.png">19:00: Tiệc trao giải đồng đội</p>
						<p><img src="assets/images/i-time.png">20:00: Lễ hội âm nhạc chúc mừng giải đấu</p>
						<h4>3</h4>
					</div>
				</li>
				
			</ul>
		</div>
		<br/>
		<p style="text-transform: uppercase; color: #af2e2e; font-weight: bold; text-align: center; font-size: large;">Thông tin liên hệ: Mr Trịnh Văn Chính - 0817884477</p>
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

<section id="news">
	<div class="contain">
		<h4 style="text-align: center;">tin tức</h4>
		<h2>Mới Nhất</h2>
		<div class="js-news" role="toolbar">
			<?php include 'news.php'; ?>
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
   <div class="contain">
		<h2>HÌNH ẢNH & SỰ KIỆN NĂM 2020</h2>
		<ul class="gallery-tabs" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">HÌNH ẢNH CHƯƠNG TRÌNH</li>
		</ul>
		<select id="type-photo-select">
		  <option value="1">1.	GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA ALBUM 1</option>
		  <option value="2">2.	GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA ALBUM 2</option>
	   </select>
	   <div class="gallery-item display" id="type-photo1" style="display: none;">
		   <div class="gallery-item-wrap">
			  <div class="gallery-photo js-photo">
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957389029_bdaaacca5693b573a1b10ab6aa2fc280.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957401391_9ed54e51bfadc32c148ae7321bb2361d.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957411606_e330a9c4ea4d39fc7c54b0d2c19ceaec.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957414455_273a6f59fd6df6c09090a5c432271017.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957417518_8c847d233e348c48e09256f3b7ed892e.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957424484_a9af29b4e05612c05e63a408d36faa0f.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957435992_10025a99da5fcbb60164adff1b8f5a93.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957436595_92bea7185e5cff6d398b3a71e5de47f4.jpg" onclick="ViewPigsizeImage(this);"></div>
			  </div>
		   </div>
		   <a class="btn" href="https://drive.google.com/drive/folders/1pznlvLfmi1NOdjKBXhVkFvbAyGrjYVMD">Xem thêm</a>
		</div>
		<div class="gallery-item display" id="type-photo2" style="display: none;">
		   <div class="gallery-item-wrap">
			  <div class="gallery-photo js-photo">
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957442519_6ad066eb4c45859743a8d8809b281acf.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957448731_757d89cb21a9b5b3a04f5840b76291e4.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957460101_ee46fd8de052c4d39ad226034fa41f0e.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957463002_b1c236ce2ae09484d9c9300b0e999492.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957467762_620f3e8fb8b8841b1071c7ff29652f07.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957476987_9b2f8c71f95d9c9f0cfafabbbebe2a1c.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957489212_3e683181b3aa89faf7753465354824e3.jpg" onclick="ViewPigsizeImage(this);"></div>
				 <div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="assets/gallery/small/z2201957424484_a9af29b4e05612c05e63a408d36faa0f.jpg" onclick="ViewPigsizeImage(this);"></div>
			  </div>
		   </div>
		   <a class="btn" href="https://drive.google.com/drive/folders/1pznlvLfmi1NOdjKBXhVkFvbAyGrjYVMD">Xem thêm</a>
		</div>
	</div>
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
</section>

<script src="http://code.jquery.com/jquery-1.11.1.js"></script>

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
	  
</body></html>