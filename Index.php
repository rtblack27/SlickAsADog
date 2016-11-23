<?php
$serverName = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "SlickAsADog";

// Create connection
$conn = mysqli_connect($serverName, $username, $password, $dbName);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "Select Fact from tblFunFacts Where FactID = 1";
$result = mysqli_query($conn, $sql);

if(!$result) {
	print "0 results found";
} else {
	echo "yeo";
}

mysqli_close($conn);
include 'Header.php';
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

	</style>
</head>
<body>
<?php
$query=mysql_query("SELECT Fact FROM tblFunFacts WHERE FactID = 1");
if($query > 0)
{
	print "Fun Fact: " . mysql_query($query);
}
else{
	print "nothing to print";
}

?>
	<div class="article">
		<h1>What we do..</h1>
		<p>Here at 'Slick as a dog' we do our utmost to make your pet feel comfortable. We take great pride in bringing out the best in <br>their appearance
			and we strive to give our customers peace of mind, knowing that their dog is in capable, caring hands.</p>
		<p>We provide this a number of service ranging from wash and nails to a full show clip and grooming service.</p>

	</div>

	<img class="index-image" src="https://www.royalcanin.com/~/media/Royal-Canin/Product-Categories/dog-puppy-landing-hero.ashx">

</body>
</html>
<?php
include 'Footer.php'
?>

