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
		.contact-button {
			background-color: deepskyblue; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		.contact-button:hover{
			background-color: darkcyan ;
		}

	</style>
</head>
<body>
<div class="article">
	<h1>Get in touch...</h1>
	<p>Just fill in our contact form and we will get back to you as soon as we can</p>

<div class="contact-form"
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
		<div class="row">
			<h2>Send us a message: </h2>
			<label for="name">Name:</label>
			<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
		</div><br>
		<div class="row">
			<label for="email">Email:</label>
			<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
		</div><br>
		<div class="row">
			<label for="message">Your message:</label>
			<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
		</div><br>
		<input id="submit_button" class="contact-button" type="submit" value="Send email" />
	</form><br>
</div>

</body>
</html>
<?php
include 'Footer.php'
?>
