<?php
$serverName = "localhost";
$username = "root";
$password = "root";
$dbName = "SlickAsADog";

// Create connection
$conn = mysqli_connect($serverName, $username, $password, $dbName);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
include 'Header.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<link rel="stylesheet" href="/Libraries/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="Styling/content.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/Libraries/NexaFreeBoldwebfont/font.css">

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
			font-family: NexaFreeBoldwebfont, sans-serif;
		}
		.articleFact {
			padding-left: 50px;
			padding-right: 50px;
			padding-top: 30px;
			text-align: left;
			font-family: NexaFreeBoldwebfont, sans-serif;

		}
		h1, h3, p{
			font-family: NexaFreeBoldwebfont, sans-serif;
		}



	</style>
</head>
<body>
<div class="articleFact">
<?php
$sql = "Select Fact from tblFunFacts WHERE FactID > 0 ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql);

if(!$result )
{
	return"0 results found";
}
else
{
	while($row = $result->fetch_assoc())
	{
	print "<h3>"."Did you know......"."</h3>" . $row["Fact"];
	}
}
mysqli_close($conn);
?>
	</div>
	<div class="article">
		<h1>What we do..</h1>
		<p>Here at 'Slick as a dog' we do our utmost to make your pet feel comfortable. We take great pride in bringing out the best in <br>their appearance
			and we strive to give our customers peace of mind, knowing that their dog is in capable, caring hands.</p>
		<p>We provide this a number of service ranging from wash and nails to a full show clip and grooming service.</p>
	</div>

	<img class="index-image" src="https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/dog-puppy-landing-hero.ashx">

<h2>Where to find us</h2>

<p>18a Cloveneden Road</p>
<p>Loughgall</p>
<p>County Armagh</p>
<p>BT61 8JZ</p>

<a href="https://www.facebook.com/slickasadoggrooming/" style="color: #21a7d5" target="_blank"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"> Facebook</i></a> <br>
<ul>
	<li><i class="fa fa-envelope" aria-hidden="true"></i> Email</li>
	<li><i class="fa fa-phone" aria-hidden="true"></i> Phone</li>
</ul>

</body>
</html>
<?php
include 'Footer.php'
?>

