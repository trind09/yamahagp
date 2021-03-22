﻿<?php include 'header.php'; ?>

<body style="background: #010300;">
<?php include 'racing_register.php';?>
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
		  if (iOS()){
		  	  return "tablet";
		  }
		  return "desktop";
		};

		function iOS() {
			return [
			'iPad Simulator',
			'iPhone Simulator',
			'iPod Simulator',
			'iPad',
			'iPhone',
			'iPod'
			].includes(navigator.platform)
			// iPad on iOS 13 detection
			|| (navigator.userAgent.includes("Mac") && "ontouchend" in document)
		}
	</script>
	<style>
		.register-ticket-control-register {
			transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1; position: absolute; top: 20%; left: 5%; z-index: 205;
		}
		.register-ticket-control-ticket {
			transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1; position: absolute; top: 20%; right: 5%; z-index: 205;
		}
		.register-ticket-control-link{
			transform: matrix(1, 0, 0, 1, 0, 0); visibility: inherit; opacity: 1;
		}
		.register-ticket-control {
			display: flex; justify-content: center; padding-top: 20px;
		}
	</style>
	<!-- ---------------------------Start: Panel slider--------------------------- -->
	<?php include 'panel_slider.php'; ?>
	<!-- ---------------------------End: Panel slider--------------------------- -->
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
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
		<div class="about-contain display">
			<div class="copy-about">
                <?php 
                $sql = "SELECT * FROM aboutus";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0 ){
                    $aboutus_paragraph = '';
                    $i=1;
                    foreach ($result as $row){
                        $title = $row["title"];
                        $description = $row["description"];
                        $aboutus_paragraph .= '<div class="aboutus-paragraph aboutus_com">
                                                        <h5 class="aboutus-title" style="cursor: pointer;" onclick="ShowAboutusContent(this, \'aboutus-content-' .$i. '\');" title="'. $title .'"> '. $title .'  ►</h5>
                                                        <div class="aboutus-content aboutus-content-' .$i. '" style="display: none;"> '. $description .' </div>
                                                    </div>';   
 
                        $i++;
                    }
                    echo(' <style>
                                .aboutus_com ul li {list-style: inherit; margin-left: 20px;}
                                .aboutus_com .aboutus-content img {
                                 text-align: center; background: rgb(18 109 12); padding-bottom: 5px;}
                           </style>');
                    echo($aboutus_paragraph);    

                }
                ?>
                <?php 
                $sql = "SELECT * FROM member";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0 ){
                    $aboutus_users = '<div class="aboutus-users">';
                    $aboutus_users .= '<div class="about-us">';
                    $aboutus_users .= '<div class="row" style="display:flex; flex-wrap:wrap">';
                    $i=1;
                    foreach ($result as $row){
                        $name = $row["name"];
                        $description = $row["description"];
                        $picture =  $row["picture"];
                        $img_url_array = $domain . str_replace('../', '', $picture);
                        $aboutus_users .= '<div class="aboutus-column">
                                                <div class="aboutus-card">
                                                    <div class="aboutus-image" title="' .$name. '" style="background-image: url(\''. $img_url_array .'\');"></div>
                                                    <div class="aboutus-card-container">
                                                        <h2>' . $name . '</h2>
                                                        <p>' . $description . '</p>
                                                    </div>
                                                </div>
                                            </div>';
                        $i++;
                    }
                    $aboutus_users .= '</div></div></div>'; 
                    echo($aboutus_users);    

                }
                ?>
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
		<h2>VIETNAM RACING FESTIVAL 2020</h2>
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
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">Event Hightlights</li>
		</ul>
        <?php
         $sql = "SELECT * FROM event WHERE category='EVENT HIGHTLIGHTS'";
            $statement = $pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(count($result) > 0 ){
                $event_slide = '<div class="about-contain display register-contain">';
                $event_slide .= '<div class="js-highlights js-slider" role="toolbar" style="height: 500px; text-align: center;">';
                $i=1;
                foreach ($result as $row){
                    $title = $row["title"];
                    $description = $row["description"];
                    $picture =  $row["picture"];
                    $img_url_array = $domain . str_replace('../', '', $picture);
                    $event_slide .= ' <div class="slider-box">
					                        <p>' . $title . '</p>
					                        <img src="'. $img_url_array .'"/>
					                        <h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">'. $description .'</h5>
				                            </div>';
                    $i++;
                }
                $event_slide .= '</div></div>'; 
                echo($event_slide);    

            }
        ?>
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">Line up</li>
		</ul>
        <div class="about-contain display register-contain">
            <?php
             $sql = "SELECT * FROM event WHERE category='CA SĨ'";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0 ){
                    $event_slide = '<div class="js-highlights js-slider" role="toolbar" style="height: 500px; text-align: center;">';
                    $i=1;
                    foreach ($result as $row){
                        $title = $row["title"];
                        $description = $row["description"];
                        $picture =  $row["picture"];
                        $img_url_array = $domain . str_replace('../', '', $picture);
                        $event_slide .= ' <div class="slider-box">
					                            <p>' . $title . '</p>
					                            <img src="'. $img_url_array .'"/>
					                            <h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">'. $description .'</h5>
				                           </div>';
                        $i++;
                    }
                    $event_slide .= '</div>'; 
                    echo($event_slide);    

                }
            ?>
            <?php
            $sql = "SELECT * FROM event WHERE category='DJ'";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0 ){
                    $event_slide = '<div class="js-highlights js-slider" role="toolbar" style="height: 500px; text-align: center;">';
                    $i=1;
                    foreach ($result as $row){
                        $title = $row["title"];
                        $description = $row["description"];
                        $picture =  $row["picture"];
                        $img_url_array = $domain . str_replace('../', '', $picture);
                        $event_slide .= ' <div class="slider-box">
					                            <p>' . $title . '</p>
					                            <img src="'. $img_url_array .'"/>
					                            <h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">'. $description .'</h5>
				                           </div>';
                        $i++;
                    }
                    $event_slide .= '</div>'; 
                    echo($event_slide);    

                }
            ?>
            <?php
            $sql = "SELECT * FROM event WHERE category='MC'";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0 ){
                    $event_slide = '<div class="js-highlights js-slider" role="toolbar" style="height: 500px; text-align: center;">';
                    $i=1;
                    foreach ($result as $row){
                        $title = $row["title"];
                        $description = $row["description"];
                        $picture =  $row["picture"];
                        $img_url_array = $domain . str_replace('../', '', $picture);
                        $event_slide .= ' <div class="slider-box">
					                            <p>' . $title . '</p>
					                            <img src="'. $img_url_array .'"/>
					                            <h5 style="position: absolute; z-index: 1001; color: #33c331; top: 80px; margin-left: 12px; font-size: 13px;">'. $description .'</h5>
				                           </div>';
                        $i++;
                    }
                    $event_slide .= '</div>'; 
                    echo($event_slide);    

                }
            ?>
        </div>
</section>
<section id="register" class="display">
		<h2>Đăng ký thi đấu</h2>
		<ul class="gallery-tabs js-about--tabs1" style="transform: matrix(1, 0, -0.26795, 1, 0, 0);">
			<li class="active" style="width: 100%;">hạng mục thi đấu</li>
		</ul>
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
							<h6><a style="cursor: pointer;" onclick="ShowExpiredRegistryMessage();" class="registry-link">Vinfast Autogymkhana Cup</a></h6>
							<h6><a style="cursor: pointer;" onclick="OpenRegisterPopup('oto-track-attack');" class="registry-link">Vinfast Track Attact Cup</a></h6>
							<h6><a href='#' onclick="return ShowExpiredRegistryMessage();" class="registry-link">VR Drift Battle</a></h6>
						</div>
					</div>
				</li>
				<li>
					<h2>Roller Sport</h2>
					<div class="copy copy-a" style="background: url(assets/images/rollerlogo.png);">
						<div class="note">
							<h6><a href='#' onclick="OpenRegisterPopup('vr-roller-sport-cup');" class="registry-link">VR Roller Sport Cup</a></h6>
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
	<script>
        function ShowNewsDetail(id){
            var url = '<?php echo $domain; ?>' + 'news_detail.php?id=' + id;
			//To use news page in iframe
            //$('#news_detail_iframe').attr('src', url);
            //$('#news_detail_panel').attr('style', 'display: -webkit-box;');

			//To open news detail page on new window
			window.open(url);
        }

        function CloseNewsDetailPanel(){
            $('#news_detail_iframe').attr('src', '');
            $('#news_detail_panel').attr('style', 'display: none;');
        }
    </script>
    <div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: none;" id="news_detail_panel">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
            <div class="swal2-content" style="text-align: center;">
                <iframe id="news_detail_iframe" height="600px" width="100%"></iframe>
                <button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background: orange !important;" onclick="CloseNewsDetailPanel();">&#10006; Đóng</button>
            </div>
        </div>
    </div>
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
		function ViewPigsizeImage(img_url){
			swal({
			  imageUrl: img_url,
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
		<?php 
            $sql = "SELECT * FROM gallery";
		    $statement = $pdo->prepare($sql);
		    $statement->execute();
		    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(count($result) > 0 ){
                $galary_element = "";
                $select_element = '<select id="type-photo-select">';
                $i=1;
                foreach ($result as $row){
				    $title_gallery = $row["title_gallery"];
                    $image_url = $row["image_url"];
                    $external_album_hyperlink = $row["external_album_hyperlink"];

					if ($i === 1){
						$select_element .= "<option selected value='$i'>" . $title_gallery . "</option>";
					} else {
						$select_element .= "<option value='$i'>" . $title_gallery . "</option>";
					}

                    $image_urls = explode("|", $image_url);
					$thumbnail_urls = array();
					foreach ($image_urls as $img_url){
						$img_url = str_replace('/large/', '/small/', $img_url);
						array_push($thumbnail_urls, $img_url);
					}

					if ($i === 1){
						$galary_element .= '<div class="gallery-item display" id="type-photo' . $i . '">'
							. '<div class="gallery-item-wrap">'
							. '<div class="gallery-photo js-photo">';
					} else {
						$galary_element .= '<div class="gallery-item display" id="type-photo' . $i . '" style="display: none;">'
							. '<div class="gallery-item-wrap">'
							. '<div class="gallery-photo js-photo">';
					}
                    for ($x = 0; $x < count($thumbnail_urls); $x++) {
                        $thumb_url = $thumbnail_urls[$x];
                        $thumb_url = $domain . str_replace('../', '', $thumb_url);
                        $fullimg_url = $domain . str_replace('../', '', $image_urls[$x]);
                        $galary_element .= '<div class="js-img" style="transform: matrix(1, 0, 0, 1, 0, 0);"><img style="cursor: pointer;" src="' . $thumb_url . '" onclick="ViewPigsizeImage(\'' . $fullimg_url . '\');"></div>';
                    }
                    if (isset($external_album_hyperlink)){
                        $galary_element .= '</div></div><a class="btn" href="' . $external_album_hyperlink . '">Xem thêm</a></div>';
                    }
                    else {
                        $galary_element .= '</div></div></div>';
                    }
                    $i++;
			    }
                $select_element .= '</select>';
                echo($select_element);
                echo($galary_element);
            }
        ?>
	</div>
</section>
<?php include 'footer.php'; ?>