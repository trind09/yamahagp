<?php include 'header.php'; ?>
<body style="background: #efefef; background: url(assets/images/p-bg.jpg);">
<header id="header">
  <div class="contain">
	<nav>
	  <ul id="nav" style="visibility: inherit; opacity: 1;">
		<li><a href="#aboutus" class="nav-left" role="aboutus"><span>giới thiệu</span></a></li>
		<li><a href="#events" class="nav-left" role="events"><span>Sự kiện</span></a></li>
		<li><a href="#plan" class="nav-left" role="plan"><span>lịch thi đấu</span></a></li>
		<li class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); cursor: pointer;" onclick="location.href = '<?php echo($domain); ?>';"><a style="background: url(<?php echo $site_logo; ?>) no-repeat center; background-size: cover;" href="<?php echo($domain); ?>"></a></li>
		<li><a href="#term" class="nav-right" role="term"><span>Giải đấu</span></a></li>
		<li><a href="#news" class="nav-right" role="news"><span>tin tức</span></a></li>
		<li><a href="#gallery" class="nav-right" role="gallery"><span>HÌNH ẢNH <br>&amp; KẾT QUẢ</span></a></li>
	  </ul>
	</nav>
  </div>
  <div class="header-mb">
    <a href="<?php echo($domain); ?>" class="logo" style="visibility: visible; transform: matrix(1, 0, 0, 1, 0, 0); background: url(<?php echo $site_logo; ?>) no-repeat center; background-size: cover;"></a>
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
                        $aboutus_paragraph .= '<div class="aboutus-paragraph">
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
                        $img_url_array = $domain . 'assets/member/noperson.jpg';
                        if (trim($picture) != ''){
                            $img_url_array = $domain . str_replace('../', '', $picture);
                        }
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
				<div class="aboutus-paragraph">
					<script>
						//var swalTimeOut;
						//var swalInterval;
						var currentSwalSliderIndex = 1;
						var totalSlide = 0;
						function ShowClb(image_array, title, description, hyperlink){
							totalSlide = image_array.length;
							currentSwalSliderIndex = 1;
							if (title){
								var slider = "";
								if (totalSlide > 0){
									slider += "<div class='swalslider'>";

									var slide_number = "";
									var slide_image = "<div class='swalslides'>";
									var counter = 1;
									$.each(image_array, function( index, value ) {
										var image_url = value.replace("../", '<?php echo($domain); ?>');
										slide_number += "<a href='#swalslide-" + index + "' id='swallink-" + index + "'>" + counter + "</a>";
										slide_image += "<div id='swalslide-" + index + "'><img class='swalslide-img' src='" + image_url + "' /></div>";
										counter++;
									});
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
						<?php
							$sql = "SELECT * FROM caulacbo";

							$statement = $pdo->prepare($sql);
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);

							if (count($result) > 0)
							{
								foreach ($result as $row){
									$img_url_array = GetImageLinks($row["image_name"], $domain);
									$id = $row["id"];
									$title = $row["title"];
									$description = $row["description"];
									$hyperlink = $row["hyperlink"];

									echo("<li onclick='ShowClb(" . js_array($img_url_array) . ", \"" . $title . "\", \"" . $description . "\", \"" . $hyperlink . "\");'>" . $title . "</li>");
								}
							}
						?>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="TCBC_RACETOMIENTRUNG">
	<div class="contain" style="text-align: center;">
		<h4 style="text-align: center;">RACE TO MIEN TRUNG </h4>
		<h2 style="text-align: center;">Xin mời quý vị bắt đầu đấu giá những sản phẩm mình yêu thích</h2>
		<br/><br/>
	</div>
	<?php include 'auction/auction.php';?>
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
		<?php
			$sql = "SELECT * FROM plan";

			$statement = $pdo->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $term_contain = '';
            $element_plan = '<ul class="gallery-tabs js-term--tabs">';
			if (count($result) > 0)
			{
                $i=1;
				foreach ($result as $row){
					$id = $row["id"];
					$title = $row["title"];
					$hyperlink = $row["hyperlink"];
                    if($i === 1){
                        $element_plan .= '<li class="active" style="width: 33.3%;" id="'.$i.'">'. $title .'</li>';
                    }
                    else{
                    $element_plan .= '<li style="width: 33.3%;" id="'.$i.'">'. $title .'</li>';
                    }
                    if($i === 1){
                        $term_contain .= '<div class="term-contain display id="'.$i.'"">' . '
			                          <div class="video">' . '
				                      <div class="video-container">' . '
					                  <iframe class="video-container-responsive-iframe" src="' . $hyperlink . '/preview"></iframe>';
                        $term_contain  .= '</div></div></div>';
                    }
                    else {
                     $term_contain .= '<div class="term-contain">' . '
			                          <div class="video">' . '
				                      <div class="video-container">' . '
					                  <iframe class="video-container-responsive-iframe" src="' . $hyperlink . '/preview"></iframe>';
                        $term_contain  .= '</div></div></div>';
                    }
					$i++;
				}

			}
            $element_plan .= '</ul>';
            echo($element_plan);
            echo($term_contain);
		?>
	</div>
</section>

<script>
$(window).on("load", function() {
    //Wait util all images are loaded
	$('#events').show();
});
</script>
<section id="events" class="display" style="display: none;">
	<div class="contain" style="text-align: center;">
		<h4 style="text-align: center;">Sự kiện</h4>
		<h2>GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA</h2>
		<img style="width: 70%;" src="assets/sukien/events.png">
</section>

<section id="plan" class="display">
	<div class="contain">
		<h4 style="text-align: center;">lịch trình chi tiết</h4>
		<h2>GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA</h2>
		<br/>
		<div class="plan-wrap">
			<ul class="plan-list">
				
				<li class="disable">
					<span>LỊCH TRÌNH NGÀY THI ĐẤU VÒNG LOẠI</span>
					<div class="plan-item">
						<h3>12/01/2021</h3>
						<p><img src="assets/images/i-location.png">Địa điểm: Sân golf Tân Sơn Nhất, số 6 Tân Sơn, P.12, Q. Gò Vấp, TP.HCM</p>
						<p style="color: #d6ef0e; font-weight: bold;">Buổi sáng:</p>
						<p><img src="assets/images/i-time.png">05:00 - 06:00: Checkin ăn sáng</p>
						<p><img src="assets/images/i-time.png">06:10: Khai mạc</p>
						<p><img src="assets/images/i-time.png">06:20: Chính thức thi đấu vòng loại (Đấu gậy tính điểm Net)</p>
						<p><img src="assets/images/i-time.png">11:30: Kết thúc giải đấu buổi sáng</p>
						<p><img src="assets/images/i-time.png">12:30: Tiệc trao giải cá nhân & công bố kết quả đồng đội</p>
						<p style="color: #d6ef0e; font-weight: bold;">Buổi chiều:</p>
						<p><img src="assets/images/i-time.png">10:00 - 11:00: Checkin ăn trưa</p>
						<p><img src="assets/images/i-time.png">11:30 - 11:50: Khai mạc vòng loại buổi chiều</p>
						<p><img src="assets/images/i-time.png">12:00 - 17:00: Chính thức thi đấu vòng loại (Đấu gậy tính điểm Net)</p>
						<p><img src="assets/images/i-time.png">18:00: Kết thúc giải đấu buổi chiều</p>
						<p><img src="assets/images/i-time.png">19:00: Tiệc trao giải cá nhân & công bố kết quả đồng đội</p>
						<p><img src="assets/images/i-time.png">20:00: Bốc thăm ghép cặp thi đấu Match Play vòng chung kết</p>
						<h4>1</h4>
					</div>
				</li>

				<li class="disable">
					<span>LỊCH TRÌNH NGÀY THI ĐẤU VÒNG CHUNG KẾT</span>
					<div class="plan-item">
						<h3>13/01/2020</h3>
						<p><img src="assets/images/i-location.png">Địa điểm: Sân golf Tân Sơn Nhất, số 6 Tân Sơn, P.12, Q. Gò Vấp, TP.HCM</p>
						<p style="color: #d6ef0e; font-weight: bold;">Buổi chiều:</p>
						<p><img src="assets/images/i-time.png">10:00 - 11:00: Checkin ăn trưa</p>
						<p><img src="assets/images/i-time.png">11:30 - 11:50: Khai mạc vòng chung kết giải đấu</p>
						<p><img src="assets/images/i-time.png">12:00 - 17:00: Chính thức thi đấu thể thức (Match Play - Four Ball)</p>
						<p><img src="assets/images/i-time.png">18:00: Kết thúc giải đấu</p>
						<p><img src="assets/images/i-time.png">19:00: Tiệc trao giải đồng đội</p>
						<p><img src="assets/images/i-time.png">20:00: Lễ hội âm nhạc chúc mừng giải đấu</p>
						<h4>2</h4>
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
	<script>
		function ShowNewsDetail(id){
			var url = '<?php echo $domain; ?>' + 'news_detail.php?id=' + id;
			$('#news_detail_iframe').attr('src', url);
			$('#news_detail_panel').attr('style', 'display: -webkit-box;');
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