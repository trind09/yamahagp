<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
   <div id="content-slider">
      <div id="slider">  <!-- Slider container -->
         <div id="mask">  <!-- Mask -->

         <ul>
         <li id="first" class="firstanimation">  <!-- ID for tooltip and class for animation -->
         <a href="#"> <img src="assets/images/slider01.jpg" alt="Cougar"/> </a>
         <div class="tooltip"> <h1>Cougar</h1> </div>
         </li>

         <li id="second" class="secondanimation">
         <a href="#"> <img src="assets/images/slider04.jpg" alt="Lions"/> </a>
         <div class="tooltip"> <h1>Lions</h1> </div>
         </li>

         <li id="third" class="thirdanimation">
         <a href="#"> <img src="assets/images/slider03.jpg" alt="Snowalker"/> </a>
         <div class="tooltip"> <h1>Snowalker</h1> </div>
         </li>

         <li id="fourth" class="fourthanimation">
         <a href="#"> <img src="assets/images/slider02.jpg" alt="Howling"/> </a>
         <div class="tooltip"> <h1>Howling</h1> </div>
         </li>

         <li id="fifth" class="fifthanimation">
         <a href="#"> <img src="assets/images/slider05.jpg" alt="Sunbathing"/> </a>
         <div class="tooltip"> <h1>Sunbathing</h1> </div>
         </li>
         </ul>

         </div>  <!-- End Mask -->
         <div class="progress-bar"></div>  <!-- Progress Bar -->
      </div>  <!-- End Slider Container -->
   </div>
</div>
<style>
/* SLIDER STRUCTURE */
img{
   width:100%;
   height:100%
}
#slider {
   /* background: #000;
   border: 5px solid #eaeaea;
   box-shadow: 1px 1px 5px rgba(0,0,0,0.7);
   height: 320px;
   width: 680px;
   margin: 40px auto 0; */
   overflow: visible;
   position: relative;
}
#mask {
   overflow: hidden;
   height: 320px;
}
/* IMAGE LIST */

#slider ul {
   margin: 0;
   padding: 0;
   position: relative;
}

#slider li {
   width: 1300px;  /* Width Image */
   height: 500px; /* Height Image */
   position: absolute;
   top: -325px; /* Original Position - Outside of the Slider */
   list-style: none;
}
#slider li.firstanimation {
   animation: cycle 25s linear infinite;
}

#slider li.secondanimation {
   animation: cycletwo 25s linear infinite;
}

#slider li.thirdanimation {
   animation: cyclethree 25s linear infinite;
}

#slider li.fourthanimation {
   animation: cyclefour 25s linear infinite;
}

#slider li.fifthanimation {
   animation: cyclefive 25s linear infinite;
}
/* PROGRESS BAR */

.progress-bar {
   position: relative;
   top: -5px;
   width: 680px;
   height: 5px;
   background: #000;
   animation: fullexpand 25s ease-out infinite;
}
#slider .tooltip {
   background: rgba(0,0,0,0.7);
   width: 300px;
   height: 60px;
   position: relative;
   bottom: 75px;
   left: -320px;
}

#slider .tooltip h1 {
   color: #fff;
   font-size: 24px;
   font-weight: 300;
   line-height: 60px;
   padding: 0 0 0 10px;
}
#slider .tooltip {
…
   transition: all 0.3s ease-in-out;
}

#slider li#first: hover .tooltip,
#slider li#second: hover .tooltip,
#slider li#third: hover .tooltip,
#slider li#fourth: hover .tooltip,
#slider li#fifth: hover .tooltip {
   left: 0px;
}
#slider: hover li,
#slider: hover .progress-bar {
   animation-play-state: paused;
}
/* ANIMATION */
/* ANIMATION BAR */

@keyframes cycle {
   0%  { top: 0px; } /* When you start the slide, the first image is already visible */
   4%  { top: 0px; } /* Original Position */
   16% { top: 0px; opacity:1; z-index:0; } /* From 4% to 16 % = for 3 seconds the image is visible */
   20% { top: 325px; opacity: 0; z-index: 0; } /* From 16% to 20% = for 1 second exit image */
   21% { top: -325px; opacity: 0; z-index: -1; } /* Return to Original Position */
   92% { top: -325px; opacity: 0; z-index: 0; }
   96% { top: -325px; opacity: 0; } /* From 96% to 100% = for 1 second enter image*/
   100%{ top: 0px; opacity: 1; }
}

@keyframes cycletwo {
   0%  { top: -325px; opacity: 0; } /* Original Position */
   16% { top: -325px; opacity: 0; }/* Starts moving after 16% to this position */
   20% { top: 0px; opacity: 1; }
   24% { top: 0px; opacity: 1; }  /* From 20% to 24% = for 1 second enter image*/
   36% { top: 0px; opacity: 1; z-index: 0; }   /* From 24% to 36 % = for 3 seconds the image is visible */
   40% { top: 325px; opacity: 0; z-index: 0; } /* From 36% to 40% = for 1 second exit image */
   41% { top: -325px; opacity: 0; z-index: -1; }   /* Return to Original Position */
   100%{ top: -325px; opacity: 0; z-index: -1; }
}

@keyframes cyclethree {
   0%  { top: -325px; opacity: 0; }
   36% { top: -325px; opacity: 0; }
   40% { top: 0px; opacity: 1; }
   44% { top: 0px; opacity: 1; }
   56% { top: 0px; opacity: 1; }
   60% { top: 325px; opacity: 0; z-index: 0; }
   61% { top: -325px; opacity: 0; z-index: -1; }
   100%{ top: -325px; opacity: 0; z-index: -1; }
}

@keyframes cyclefour {
   0%  { top: -325px; opacity: 0; }
   56% { top: -325px; opacity: 0; }
   60% { top: 0px; opacity: 1; }
   64% { top: 0px; opacity: 1; }
   76% { top: 0px; opacity: 1; z-index: 0; }
   80% { top: 325px; opacity: 0; z-index: 0; }
   81% { top: -325px; opacity: 0; z-index: -1; }
   100%{ top: -325px; opacity: 0; z-index: -1; }
}
@keyframes cyclefive {
   0%  { top: -325px; opacity: 0; }
   76% { top: -325px; opacity: 0; }
   80% { top: 0px; opacity: 1; }
   84% { top: 0px; opacity: 1; }
   96% { top: 0px; opacity: 1; z-index: 0; }
   100%{ top: 325px; opacity: 0; z-index: 0; }
}
/* ANIMATION BAR */

@keyframes fullexpand {
   /* In these keyframes, the progress-bar is stationary */
   0%, 20%, 40%, 60%, 80%, 100% { width: 0%; opacity: 0; }

   /* In these keyframes, the progress-bar starts to come alive */
   4%, 24%, 44%, 64%, 84% { width: 0%; opacity: 0.3; }

   /* In these keyframes, the progress-bar moves forward for 3 seconds */
   16%, 36%, 56%, 76%, 96% { width: 100%; opacity: 0.7; }

   /* In these keyframes, the progress-bar has finished his path */
   17%, 37%, 57%, 77%, 97% { width: 100%; opacity: 0.3; }

   /* In these keyframes, the progress-bar will disappear and then resume the cycle */
   18%, 38%, 58%, 78%, 98% { width: 100%; opacity: 0; }
}
</style>
</body>
</html>