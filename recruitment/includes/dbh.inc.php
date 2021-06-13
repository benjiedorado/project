<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dBName = "recruitment_db";//I change the database name

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dBName );

if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
	# code...
}