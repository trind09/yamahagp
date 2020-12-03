<script src="assets/js/bjqs-1.3.js"></script>
<script class="secret-source">
jQuery(document).ready(function($) {
	$('#banner-fade').bjqs({
        width: $("#banner-fade").width(),
        height: $("#banner-fade").width() /2,
        responsive: true,
        randomstart: true,
		animspeed: 2000,
		showcontrols: true,
		showmarkers: false,
		nexttext: '►',
		prevtext: '◄'
	});
});
</script>
<style>
ul.bjqs{position:relative; list-style:none;padding:0;margin:0;overflow:hidden; display:none;}
li.bjqs-slide{position:absolute; display:none;}
ul.bjqs-controls{list-style:none;margin:0;padding:0;z-index:9999;}
ul.bjqs-controls.v-centered li a{position:absolute;}
ul.bjqs-controls.v-centered li.bjqs-next a{right:0;}
ul.bjqs-controls.v-centered li.bjqs-prev a{left:0;}
ol.bjqs-markers{list-style: none; padding: 0; margin: 0; width:100%;}
ol.bjqs-markers.h-centered{text-align: center;}
ol.bjqs-markers li{display:inline;}
ol.bjqs-markers li a{display:inline-block;}
p.bjqs-caption{display:block;width:96%;margin:0;padding:2%;position:absolute;bottom:0;}

ul.bjqs-controls.v-centered li a{
	display:block;
	padding:10px;
	color:#126d0c;
	text-decoration: none;
	z-index: 205;
	font-size: 35pt;
	font-weight: bold;
}

ul.bjqs-controls.v-centered li a:hover{
	color:#126d0c;
}

ol.bjqs-markers li a{
	padding:5px 10px;
	color:#126d0c;
	margin:5px;
	text-decoration: none;
	z-index: 202;
}

ol.bjqs-markers li.active-marker a,
ol.bjqs-markers li a:hover{
	background: #999;
}

p.bjqs-caption{
	background: rgba(255,255,255,0.5);
}
</style>
<!--  Outer wrapper for presentation only, this can be anything you like -->
<div style="width: 100%; max-width: 100% !important;" id="banner-fade">
   <!-- start Basic Jquery Slider -->
   <ul class="bjqs">
      <li><img src="assets/pannel/20201201_191433.jpg" ></li>
      <li><img src="assets/pannel/20201201_191416.jpg" ></li>
      <li><img src="assets/pannel/20201201_191358.jpg" ></li>
      <li><img src="assets/pannel/20201201_191327.jpg" ></li>
      <li><img src="assets/pannel/20201201_191212.jpg" ></li>
      <li><img src="assets/pannel/20201201_191151.jpg" ></li>
      <li><img src="assets/pannel/20201201_191054.jpg" ></li>
   </ul>
   <!-- end Basic jQuery Slider --> 
</div>