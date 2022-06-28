<?php

$conn= new mysqli('localhost','root','','wrms');

if (mysqli_connect_error()) {
	# code...
	die('CONNECTION ERROR:'.mysqli_connect_error());
}

?>