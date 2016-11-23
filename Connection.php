<?php
// Connect to MySQL
$link = mysql_connect('127.0.0.1', 'root');
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
else{
	print "Connection successful";
}

// Make my_db the current database
$db_selected = mysql_select_db('SlickAsADog', $link);

if (!$db_selected) {
	// If we couldn't, then it either doesn't exist, or we can't see it.
	$sql = 'CREATE DATABASE SlickAsADog';

	if (mysql_query($sql, $link)) {
		echo "Database SlickAsADog created successfully\n";
	} else {
		echo 'Error creating database: ' . mysql_error() . "\n";
	}
}

mysql_close($link);
?>