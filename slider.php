<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
#slider {
    width: 70%;
	overflow: hidden;
}
#slider figure {
	display:flex;
	position: relative;
	width: 500%;
	margin: 0;
	padding: 0;
	font-size: 0;
	text-align: left;
}
div#slider figure img {
	width: 20%;
	height: auto;
	float: left;
}
@keyframes slidy { 
	0%  { left: 0%; }
	20% { left: 0%; }
	25% { left: -100%; }
	45% { left: -100%; }
	50% { left: -200%; }
	70% { left: -200%; } 
	75% { left: -300%; }
	95% { left: -300%; }
    100% { left: -400%; } 
}
div#slider figure {
	position: relative;
	width: 500%;
	margin: 0;
	padding: 0;
	font-size: 0;
	left: 0;
	text-align: left;
    animation: 10s slidy infinite;  
}
</style>
<div id="slider">
	<figure>
    <img src="assets/images/slider01.jpg" alt>
		<img src="assets/images/slider02.jpg" alt>
		<img src="assets/images/slider03.jpg" alt>
		<img src="assets/images/slider04.jpg" alt>
		<img src="assets/images/slider05.jpg" alt>
		<img src="assets/images/slider04.jpg" alt>
		<img src="assets/images/slider05.jpg" alt>
	</figure>
</div>

<!-- slider2 -->
<!-- <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
<div id="slidercontainer">
  <div id="css3slider">
    <img src="square-tailed-kite.jpg" alt="Square-tailed kite">
	<img src="white-tailed-kite.jpg" alt="White-tailed kite">
	<img src="hawk.jpg" alt="Hawk"><img src="osprey.jpg" alt="Osprey">
	<img src="square-tailed-kite.jpg" alt="Square-tailed kite">
  </div>
</div> -->
</body>
</html>