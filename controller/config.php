<?php

$servername = "localhost";
$username   = "id17319014_denzdemo";
$password   = "Password@123";
$dbname     = "id17319014_demodb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	
die("Connection failed: " . mysqli_connect_error());

}

?>