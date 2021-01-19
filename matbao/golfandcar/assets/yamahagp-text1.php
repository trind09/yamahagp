<!DOCTYPE html>
<html>
   <head>
   	<!-- thai -->
   	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<!-- enthai -->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   </head>
   <style type="text/css">
   	.content {
   		margin: 0 auto
   	}
   </style>
   <body>
   	<div class="slick-track">
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	  <div>your content</div>
	</div>
	  
	<!-- thai -->


      <script type="text/javascript">
		$('.slick-track').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 2,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
      </script>
      <!-- endthai -->
   </body>
</html>