<?php
include 'Header.php'
?>
	<!DOCTYPE html>
	<html>
	<head lang="en">
		<link href="Styling/content.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="/Libraries/font-awesome-4.7.0/css/font-awesome.min.css">
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
			ul{
				list-style: none;
			}
			li{
				padding: 10px;
			}

		</style>
	</head>
	<body>
	<div class="article">
		<h1>Check out some of our services...</h1>
		<ul>
			<li><i class="fa fa-scissors" aria-hidden="true"></i> Pet Clip</li>
			<li><i class="fa fa-bathtub" aria-hidden="true"></i> Bath</li>
			<li><i class="fa fa-eraser" aria-hidden="true"></i> Nails</li>
			<li><i class="fa fa-bed" aria-hidden="true"></i> Overnight stay</li>
			<li><i class="fa fa-car" aria-hidden="true"></i> Pick me up</li>
		</ul>

	</div>
	</body>
	</html>
<?php
include 'Footer.php'
?>