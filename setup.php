<?php 

	//header("Content-Type: text/html; charset=utf-8");

	$dbc = mysqli_connect('localhost','admin','password','anal___2');

	$q = "SELECT * FROM beugro ORDER BY RAND() LIMIT 15";
	$r = mysqli_query($dbc, $q);
	
	$q = "SELECT * FROM tetelek ORDER BY RAND() LIMIT 1";
	$r2 = mysqli_query($dbc, $q);

echo iconv("ISO-8859-2", "UTF-8", "This is a test.");

?>