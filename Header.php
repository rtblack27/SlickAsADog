<?php
/**
 * Created by PhpStorm.
 * User: richardblack
 * Date: 04/11/16
 * Time: 19:40
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<link href="Styling/header.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<title></title>
	<style>
		.flex-container {
			display: -webkit-flex;
			display: flex;
			-webkit-flex-flow: row wrap;
			flex-flow: row wrap;
			text-align: center;
		}

		.flex-container > * {
			padding: 15px;
			-webkit-flex: 1 100%;
			flex: 1 100%;
		}


		header {background: white ;color:deepskyblue;font-family: sans-serif}


		@media all and (min-width: 768px) {
			.nav {text-align:center;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}

		}
		button {
			background-color: grey;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			font-size: 16px;
		}
		button:hover{
			background-color: slategrey ;
		}

	</style>
</head>
<body>

<div class="flex-container">
	<header>

		<img src="/Images/SlickCroppedLogo.png" style="width: auto; height: auto;max-width: 600px;max-height: 300px">

		<nav class="nav">

			<a href="Index.php"><button>Home</button></a>
			<a href="AboutUs.php"><button>About Us</button></a>
			<a href="Services.php"><button>Services</button></a>
			<a href="Gallery.php"><button>Gallery</button></a>
			<a href="ContactUs.php"><button>Contact Us</button></a>
		</nav>
	</header>

</div>

</body>
</html>