<style>
/* Three aboutus-columns side by side */
.aboutus-column {
  float: left;
  width: 24%;
  margin-bottom: 16px;
  padding-left: 8px;
  adding-right: 8px;
}

/* Display the aboutus-columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .aboutus-column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.aboutus-card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.aboutus-container {
  padding: 0 16px;
}

/* Clear floats */
.aboutus-container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.aboutus-title {
  color: grey;
}

.aboutus-button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.aboutus-button:hover {
  background-color: #555;
}
.aboutus-row {
	position: absolute;
	margin: auto;
   width: 90%;
   border: 3px solid #73AD21;
   padding: 10px;
   height: 100%;
}
</style>
<div class="swal2a-container swal2a-center swal2-backdrop-show" style="display: none;" id="aboutus">
   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show aboutus-row" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="width: 1200px; display: flex;">
		  <div class="aboutus-column">
			<div class="aboutus-card">
			  <img src="about/person1.png" alt="Jane" style="width:100%">
			  <div class="aboutus-container">
				<h2>Gia Bảo Nguyễn</h2>
				<p class="aboutus-title">Founder</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>example@example.com</p>
				<p><button class="aboutus-button">Contact</button></p>
			  </div>
			</div>
		  </div>

		  <div class="aboutus-column">
			<div class="aboutus-card">
			  <img src="about/person2.png" alt="Mike" style="width:100%">
			  <div class="aboutus-container">
				<h2>Duy Trần</h2>
				<p class="aboutus-title">Co-Founder</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>example@example.com</p>
				<p><button class="aboutus-button">Contact</button></p>
			  </div>
			</div>
		  </div>

		  <div class="aboutus-column">
			<div class="aboutus-card">
			  <img src="about/person3.png" alt="John" style="width:100%">
			  <div class="aboutus-container">
				<h2>Rich Pham</h2>
				<p class="aboutus-title">Co-Founder</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>example@example.com</p>
				<p><button class="aboutus-button">Contact</button></p>
			  </div>
			</div>
		  </div>
		  <div class="aboutus-column">
			<div class="aboutus-card">
			  <img src="about/person4.png" alt="John" style="width:100%">
			  <div class="aboutus-container">
				<h2>Vinh Nguyễn</h2>
				<p class="aboutus-title">Co-Founder</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>example@example.com</p>
				<p><button class="aboutus-button">Contact</button></p>
			  </div>
			</div>
		  </div>
		  <div class="swal2-actions">
			 <div class="swal2-loader"></div>
			 <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;" onclick="CloseAboutUs();">Đóng</button>
		  </div>
	</div>
</div>