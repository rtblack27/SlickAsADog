<?php
include 'Header.php'
?>
	<!DOCTYPE html>
	<html>
	<head lang="en">
		<link href="Styling/content.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title></title>
		<style>
			@media all and (min-width: 768px) {
				.article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
			}
			.article {
				margin-bottom: 250px;
				padding: 50px;
				text-align: left;
			}

			/* Slideshow container */
			.slideshow-container {
				max-width: 1000px;
				position: relative;
				margin: auto;
			}

			/* Next & previous buttons */
			.prev, .next {
				cursor: pointer;
				position: absolute;
				top: 50%;
				width: auto;
				margin-top: -22px;
				padding: 16px;
				color: white;
				font-weight: bold;
				font-size: 18px;
				transition: 0.6s ease;
				border-radius: 0 3px 3px 0;
			}

			/* Position the "next button" to the right */
			.next {
				right: 0;
				border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover, .next:hover {
				background-color: rgba(0,0,0,0.8);
			}

			/* Caption text */
			.text {
				color: #f2f2f2;
				font-size: 15px;
				padding: 8px 12px;
				position: absolute;
				bottom: 8px;
				width: 100%;
				text-align: center;
			}

			/* Number text (1/3 etc) */
			.numbertext {
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}

			/* The dots/bullets/indicators */
			.dot {
				cursor:pointer;
				height: 13px;
				width: 13px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}

			.active, .dot:hover {
				background-color: #717171;
			}

			/* Fading animation */
			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
				from {opacity: .4}
				to {opacity: 1}
			}

			@keyframes fade {
				from {opacity: .4}
				to {opacity: 1}
			}
		</style>
	</head>
	<body>
	<div class="article">
		<h1>Check out some of our latest work...</h1>
		<p>Here's some pics to show off some of are little furry friends</p>


		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="http://www.lifestyledoggroomers.co.uk/images/dog_grooming1.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
				<img src="/Images/Pixie.png" style="width:100%">
			</div>

			<div class="mySlides fade">
				<img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/13257151_1013244542064391_883289819_n.jpg?ig_cache_key=MTI1NTAzMzA2OTE0NDQyNjI1Mw%3D%3D.2" style="width:100%">
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>

		<script>

		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		showSlides(slideIndex = n);
		}

		function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		}
		</script>

	</body>
	</html>
<?php
include 'Footer.php'
?>