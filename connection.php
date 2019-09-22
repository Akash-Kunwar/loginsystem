<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "LoginSystem";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
else
{
	header("Location:../index.php?connection=Succes");
}
*/
?>