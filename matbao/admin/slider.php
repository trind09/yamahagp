<style>
.swal-inside-image {
  width: 100%;
  height: 100%;
}
.radio {
  /*display: none;*/
}
.swal-images {
  overflow: hidden;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
}
.swal-images-inner {
  width: 500%;
  transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
  transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
}
.swal-image-slide {
  width: 20%;
  float: left;
}
.swal-image-slide,
.fake-radio,
.radio-btn {
  transition: all 0.5s ease-out;
}
.fake-radio {
  float: right;
}




/* Move slides overflowed container */
#slide1:checked ~ .swal-images .swal-images-inner {
  margin-left: 0;
}
#slide2:checked ~ .swal-images .swal-images-inner {
  margin-left: -100%;
}
#slide3:checked ~ .swal-images .swal-images-inner {
  margin-left: -200%;
}




/* Color of bullets */
#slide1:checked ~ div .fake-radio .radio-btn:nth-child(1),
#slide2:checked ~ div .fake-radio .radio-btn:nth-child(2),
#slide3:checked ~ div .fake-radio .radio-btn:nth-child(3) {
  background: red;
}
.radio-btn {
  width: 9px;
  height: 9px;
  border-radius: 5px;
  background: gray;
  display: inline-block !important;
  margin: 0 1px;
  cursor: pointer;
}
/* Color of bullets - END */




/* Text of slides */
#slide1:checked ~ .labels .label:nth-child(1),
#slide2:checked ~ .labels .label:nth-child(2),
#slide3:checked ~ .labels .label:nth-child(3) {
  opacity: 1;
}

.label {
  opacity: 0;
  position: absolute;
}
/* Text of slides - END */



/* Calculate AUTOPLAY for BULLETS */
@keyframes bullet {
  0%, 33.32333333333334%	{
    background: red;
  }
  33.333333333333336%, 100% {
    background: gray;
  }
}


#play1:checked ~ div .fake-radio .radio-btn:nth-child(1) {
  animation: bullet 12300ms infinite -1000ms;
}

#play1:checked ~ div .fake-radio .radio-btn:nth-child(2) {
  animation: bullet 12300ms infinite 3100ms;	
}

#play1:checked ~ div .fake-radio .radio-btn:nth-child(3) {
  animation: bullet 12300ms infinite 7200ms;	
}
/* Calculate AUTOPLAY for BULLETS - END */




/* Calculate AUTOPLAY for SLIDES */
@keyframes slide {
  0%, 25.203252032520325%	{ margin-left: 0; }
  33.333333333333336%, 58.53658536585366%	{ margin-left: -100%; }
  66.66666666666667%, 91.869918699187%	{ margin-left: -200%; }
}


.swal-slider > #play1:checked ~ .swal-images .swal-swal-images-inner {
  animation: slide 12300ms infinite;	
}
/* Calculate AUTOPLAY for SLIDES - END */





/* Calculate AUTOPLAY for CAPTION */
@keyframes caption {
  0%, 33.32333333333334%	{
    opacity: 1;
  }
  33.333333333333336%, 100% {
    opacity: 0;
  }
}


#play1:checked ~ .labels .label:nth-child(1) {
  animation: caption 12300ms infinite -1000ms;
}

#play1:checked ~ .labels .label:nth-child(2) {
  animation: caption 12300ms infinite 3100ms;	
}

#play1:checked ~ .labels .label:nth-child(3) {
  animation: caption 12300ms infinite 7200ms;	
}
/* Calculate AUTOPLAY for CAPTION - END */
</style>
<h1>Pure CSS slider</h1><pre>(with Autoplay at the beginning)</pre><br>
<div id="swal-slider" class="swal-slider">

    <input type="radio" class="cs_anchor radio" name="slider" id="slide1"/>
    <input type="radio" class="cs_anchor radio" name="slider" id="slide2"/>
    <input type="radio" class="cs_anchor radio" name="slider" id="slide3"/>
    <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked=""/>

    <div class="swal-images">
       <div class="swal-images-inner">
        <div class="swal-image-slide">
          <div class="swal-inside-image bg-yellow" style="background-color:yellow;">image slide 1</div>
        </div>
        <div class="swal-image-slide">
          <div class="swal-inside-image bg-blue" style="background-color:pink;">imager slide 2</div>
        </div>
        <div class="swal-image-slide">
          <div class="swal-inside-image bg-red" style="background-color:orange;">image slide 3</div>
        </div>
      </div>
    </div>
  
    <div class="labels">
        <div class="fake-radio">
          <label for="slide1" class="radio-btn"></label>
          <label for="slide2" class="radio-btn"></label>
          <label for="slide3" class="radio-btn"></label>
        </div>
    </div>
</div>