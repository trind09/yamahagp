﻿<?php
	$bgjpg = "";
	if ($slider_images){
		$img_url_array = GetImageLinks($slider_images, $domain);
		foreach ($img_url_array as $img_url)
		{
			$bgjpg = $img_url;
		}
	} else {
		$bgjpg = "assets/images/bg.jpg";
	}

	$golden_pictures = array();
	if ($slider_three_golden_pictures){
		$img_url_array = GetImageLinks($slider_three_golden_pictures, $domain);
		foreach ($img_url_array as $img_url)
		{
			array_push($golden_pictures,  $img_url);
		}
	}

	$golden_urls = array();
	$golden_texts = array();
	if ($slider_three_golden_links){
		$doc = new DOMDocument();
		$html_data  = mb_convert_encoding($slider_three_golden_links , 'HTML-ENTITIES', 'UTF-8'); 
		$doc->loadHTML($html_data);    
		$selector = new DOMXPath($doc);
		$result = $selector->query('//a');
		foreach($result as $node) {
			array_push($golden_urls,  $node->getAttribute('href'));
			array_push($golden_texts,  $node->nodeValue);
		}
	}
?>
<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Composer -->
<!-- Source: https://www.jssor.com/premium/full-width/full-width.slider/=edit -->
<script src="assets/js/jssor.slider.min.js" type="text/javascript"></script>
<script type="text/javascript">
	window.jssor_1_slider_init = function() {

		var jssor_1_SlideoTransitions = [
		  [{b:-1,d:1,rX:90},{b:0,d:4000,rX:0,e:{rX:6}}],
		  [{b:-1,d:1,rX:90},{b:0,d:1000,o:1,rX:0,e:{rX:6}}],
		  [{b:-1,d:1,rX:90},{b:500,d:1000,o:1,rX:0,e:{rX:6}}],
		  [{b:-1,d:1,rX:90},{b:1000,d:1000,o:1,rX:0,e:{rX:6}}],
		  [{b:-1,d:1,rX:90},{b:1500,d:1000,o:1,rX:0,e:{o:1,rX:6},p:{o:{dl:0.2},rX:{dl:0.2}}}],
		  [{b:1500,d:1000,ls:0.2,e:{ls:6}}],
		  [{b:-1,d:1,x:100,rY:180,sX:0.5,sY:0.5,p:{x:{c:0}}},{b:3000,d:1000,x:0,o:1,rY:0,sX:1,sY:1,e:{x:1,o:7,rY:1,sX:1,sY:1},p:{x:{dl:0,o:68},o:{dl:0.1,o:4,rd:2},rY:{dl:0.1,o:4,rd:2},sX:{dl:0.1,o:68},sY:{dl:0.1,o:68}}}],
		  [{b:3000,d:2000,o:1,r:-360},{b:5000,d:20,o:0,e:{o:33}},{b:7500,d:20,o:1,e:{o:33}},{b:7520,d:2480,r:-720}],
		  [{b:5000,d:20,o:1,e:{o:33}},{b:5020,d:2480,r:360},{b:7500,d:20,o:0,e:{o:33}}],
		  [{b:3400,d:2000,o:1,r:-360},{b:5400,d:20,o:0,e:{o:33}},{b:7600,d:20,o:1,e:{o:33}},{b:7620,d:2180,r:-720}],
		  [{b:5400,d:20,o:1,e:{o:33}},{b:5420,d:2180,r:360},{b:7600,d:20,o:0,e:{o:33}}],
		  [{b:3800,d:2000,o:1,r:-360},{b:5800,d:20,o:0,e:{o:33}},{b:7700,d:20,o:1,e:{o:33}},{b:7720,d:1880,r:-720}],
		  [{b:5800,d:20,o:1,e:{o:33}},{b:5820,d:1880,r:360},{b:7700,d:20,o:0,e:{o:33}}],
		  [{b:2500,d:2000,o:0.6}],
		  [{b:-1,d:1,r:-10,rX:20,tZ:50}],
		  [{b:-1,d:1,rY:30}],
		  [{b:-1,d:1,x:-200,y:10,rY:180,tZ:200,p:{x:{d:1,dO:9},tZ:{d:2,dO:9}}},{b:0,d:2000,x:0,y:0,o:1,rX:20,rY:10,e:{x:6,y:6,o:6,rX:6,rY:6},p:{x:{dl:0.1,o:1},y:{dl:0.1,o:1},o:{dl:0.1,o:1},rX:{dl:0.1,o:1,d:1,dO:2},rY:{dl:0.1,o:1,d:3,dO:2}}}],
		  [{b:-1,d:1,ls:0.6},{b:0,d:2000,ls:0.05,e:{ls:6}}],
		  [{b:1700,d:1500,pt:{d:"M32,135.4C31.7,135.4 31.3,135.4 31,135.3C29.8,115 28.6,94.7 27.3,73.6C19.6,77 12.6,80.1 5,83.5C4.7,81.9 4.4,80.7 4.4,79.5C3.2,58.2 2.2,36.9 1,15.7C0.8,12.7 1.7,11.3 4.4,10.1C11.7,7 18.9,3.7 27,0C23.9,21 20.8,41 17.7,62.1C25.1,58.8 31.8,56.1 38.1,52.8C42.7,50.3 46.5,50.8 51.1,53.8C44.8,80.9 38.4,108.1 32,135.4Z"},e:{pt:27}}],
		  [{b:-1,d:1,rX:45,rY:-270},{b:1700,d:1500,y:50,o:1,rX:0,rY:0,e:{y:27,o:27,rX:27,rY:27}}],
		  [{b:1600,d:1500,pt:{d:"M24.8,170.3C28.4,155.7 32,141.3 35.8,125.6C30,128.5 25.3,130.9 20.6,133.3C18.6,134.3 16.9,135.6 14.3,133.5C11.9,131.4 12.6,129.5 13.4,127.4C19.6,110.5 25.9,93.7 32.1,76.8C32.7,75.2 33.2,73.5 34.1,70.9C24.6,74.7 16,78.3 7.3,81.6C5.8,82.2 2.9,82.4 2.2,81.5C0.9,79.9-0.3,77.1 0.1,75.2C5,54.8 10.4,34.6 15.4,14.2C16.1,11.3 17.5,9.8 20.3,8.7C27.8,6 35.2,2.9 42.5,0C48.4,6.5 48.5,6.6 44.6,13.7C37.8,26.1 30.8,38.4 24,50.8C24.4,51.2 24.7,51.6 25.1,52C32.9,50.8 40.8,50.1 48.5,48.3C54.7,46.8 55.3,52 58.2,54.7C60.9,57.3 59.2,59.4 57.9,61.8C49.1,78 40.4,94.3 31.6,110.7C31.2,111.5 30.8,112.4 29.8,114.4C38.1,110.5 45.2,107.2 52.2,103.9C58.1,110.4 58.1,110.4 54.1,117.6C44.4,135.1 34.7,152.5 24.8,170.3Z"},e:{pt:27}}],
		  [{b:-1,d:1,rX:45,rY:-270},{b:1600,d:1500,y:17,o:1,rX:0,rY:0,e:{y:27,o:27,rX:27,rY:27}}],
		  [{b:1500,d:1500,pt:{d:"M0,166.8C8.6,148.4 17.1,130.3 25.9,111.5C18.8,113.1 12.6,114.7 6.3,116C4.9,116.3 2.3,115.8 1.8,114.9C1.1,113.6 1.2,111.1 2.1,109.8C13,92 24.2,74.5 35.3,56.9C36.2,55.4 37.1,53.8 38.6,51.3C28.4,54.2 19.3,56.7 10.3,59.3C7.9,60 5.9,60.8 3.8,58C1.6,55.1 3.8,53.6 4.9,51.9C15.8,34.7 26.8,17.5 38,0C44.7,2.4 51.2,4.7 58.5,7.4C49.4,16.9 40.5,26.2 30.9,36.3C43.6,38 55.5,39.7 68.2,41.4C54,60.4 40.2,78.8 25.7,98.2C33.6,98.1 40.5,97.9 47.3,98C48.7,98 51.1,98.7 51.3,99.6C51.9,101.8 52.5,105 51.4,106.4C34.8,126.6 18,146.5 1.2,166.5C1,166.5 0.8,166.5 0,166.8Z"},e:{pt:27}}],
		  [{b:-1,d:1,rX:45,rY:-270},{b:1500,d:1500,y:12,o:1,rX:0,rY:0,e:{y:27,o:27,rX:27,rY:27}}]
		];

		var jssor_1_options = {
		  $AutoPlay: 0,
		  $SlideDuration: 800,
		  $SlideEasing: $Jease$.$OutQuint,
		  $CaptionSliderOptions: {
			$Class: $JssorCaptionSlideo$,
			$Transitions: jssor_1_SlideoTransitions,
			$Controls: [{r:5000},{r:5000,e:10000},{r:5400},{r:5400,e:9800},{r:5800},{r:5800,e:9600}]
		  },
		  $ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		  },
		  $BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$,
			$SpacingX: 15
		  }
		};

		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		/*#region responsive code begin*/

		var MAX_WIDTH = 3000;

		function ScaleSlider() {
			var containerElement = jssor_1_slider.$Elmt.parentNode;
			var containerWidth = containerElement.clientWidth;

			if (containerWidth) {

				var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

				jssor_1_slider.$ScaleWidth(expectedWidth);
			}
			else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();

		$Jssor$.$AddEvent(window, "load", ScaleSlider);
		$Jssor$.$AddEvent(window, "resize", ScaleSlider);
		$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
		/*#endregion responsive code end*/
	};
</script>
<script>
$( document ).ready(function() {
	//reset animation every seconds
	setInterval(function(){ 
		$('.btn-pannel-1').removeClass('animated-button-effect');
		$('.btn-pannel-1').addClass('animated-button-effect');
		setTimeout(function () {
			$('.btn-pannel-1').removeClass('animated-button-effect');
		}, 700);
	}, 2000);

	setInterval(function(){ 
		$('.btn-pannel-2').removeClass('animated-button-effect');
		$('.btn-pannel-2').addClass('animated-button-effect');
		setTimeout(function () {
			$('.btn-pannel-2').removeClass('animated-button-effect');
		}, 700);
	}, 2100);

	setInterval(function(){ 
		$('.btn-pannel-3').removeClass('animated-button-effect');
		$('.btn-pannel-3').addClass('animated-button-effect');
		setTimeout(function () {
			$('.btn-pannel-3').removeClass('animated-button-effect');
		}, 700);
	}, 2200);
});
</script>
<style>
	/*jssor slider loading skin spin css*/
	.jssorl-009-spin img {
		animation-name: jssorl-009-spin;
		animation-duration: 1.6s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;
	}

	@keyframes jssorl-009-spin {
		from { transform: rotate(0deg); }
		to { transform: rotate(360deg); }
	}

	/*jssor slider bullet skin 057 css*/
	.jssorb057 .i {position:absolute;cursor:pointer;}
	.jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
	.jssorb057 .i:hover .b {stroke-opacity:.7;}
	.jssorb057 .iav .b {stroke-opacity: 1;}
	.jssorb057 .i.idn {opacity:.3;}

	/*jssor slider arrow skin 051 css*/
	.jssora051 {display:block;position:absolute;cursor:pointer;}
	.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
	.jssora051:hover {opacity:.8;}
	.jssora051.jssora051dn {opacity:.5;}
	.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>

<!-- Start: Animation Links -->
<link rel="stylesheet" href="<?php echo auto_version('assets/css/animated-button.css'); ?>" type="text/css" />
<!-- End: Animation Links -->
	
<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
	<defs>
		<filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
			<feGaussianBlur stddeviation="10" result="r1"></feGaussianBlur>
			<feColorMatrix in="r1" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="r2"></feColorMatrix>
		</filter>
	</defs>
</svg>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:960px;overflow:hidden;visibility:hidden;margin-top: -24px;">
	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/images/spin.svg" />
	</div>
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:960px;overflow:hidden;">
		<div>
			<img data-u="image" src="<?php echo $bgjpg; ?>" />
			<div data-ts="flat" data-p="1260" style="left:0px;top:0px;width:1920px;height:960px;position:absolute;">
				<div data-to="50% 0px" data-ts="preserve-3d" data-t="0" style="left:-20px;top:0px;width:1920px;height:960px;position:absolute;">
					<img onclick="location.href = '<?php echo $golden_urls[0]; ?>';" data-to="50% 50%" data-t="1" style="left: 30%; top: 12%; width: 42%; height: 133px; position: absolute; opacity: 1; cursor: pointer; transform-origin: 50% 50%; z-index: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); pointer-events: auto;" src="<?php echo $golden_pictures[0]; ?>" />
					<div style="position: absolute; top: 22%; left: 37%; width: 500px;">
						<a href="<?php echo $golden_urls[0]; ?>" class="animated-button1 btn-pannel-1" style="font-weight: bold;width: 100%;height:109px;background-image: linear-gradient(to right, rgb(33 43 29 / 34%), #A6E02F, rgb(33 43 29 / 34%));z-index: 1;font-size: 30pt;color: white;font-weight:bold;font-style:normal"><span></span><span></span><span></span><span></span><?php echo $golden_texts[0]; ?><br/>
						<span style="z-index: 1;font-size: 10pt;font-style: normal;width: 100%;left: 0; text-transform: none; font-weight: normal;">Click here</span></a>
					</div>
					<img onclick="location.href = '<?php echo $golden_urls[1]; ?>';" data-to="50% 50%" data-t="3" style="left:5%;top:50%;width:35%;height:400px;position:absolute;opacity:0;cursor:pointer;" src="<?php echo $golden_pictures[1]; ?>" />
					<img onclick="location.href = '<?php echo $golden_urls[2]; ?>';"data-to="50% 50%" data-t="2" style="right:5%;top:50%;width:35%;height:400px;position:absolute;opacity:0;cursor:pointer;" src="<?php echo $golden_pictures[2]; ?>" />
					<div data-to="50% -200px" data-t="5" data-arr="4" style="left:13%;top:39%;text-transform: uppercase;width:100%;height:230px;position:absolute;opacity:0;color:white;font-size:30pt;font-weight:900;line-height:1.2;">
						<div><a href="<?php echo $golden_urls[1]; ?>" class="animated-button1 btn-pannel-2" style="width: 400px; height:90px; background-image: linear-gradient(to right, rgb(33 43 29 / 34%), #A6E02F, rgb(33 43 29 / 34%)); color: white; font-size:30pt;"><span></span><span></span><span></span><span></span><?php echo $golden_texts[1]; ?> &#10148;</a></div>
						<div style="position: absolute; top: 0; right: 62%; font-size:30pt; color: white; padding-top: 27px;">&</div>
						<div style="position: absolute; top: 0; right: 24%;"><a href="<?php echo $golden_urls[2]; ?>" class="animated-button1 btn-pannel-3" style="width: 400px; height:90px; background-image: linear-gradient(to right, rgb(33 43 29 / 34%), #A6E02F, rgb(33 43 29 / 34%)); color: white; font-size:30pt;"><span></span><span></span><span></span><span></span><?php echo $golden_texts[2]; ?> &#10148;</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb057" style="position:absolute;bottom:18px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		<div data-u="prototype" class="i" style="width:16px;height:16px;">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<circle class="b" cx="8000" cy="8000" r="5000"></circle>
			</svg>
		</div>
	</div>
	<!-- Arrow Navigator -->
	<div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
		</svg>
	</div>
	<div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
		</svg>
	</div>
</div>
<script type="text/javascript">jssor_1_slider_init();
</script>