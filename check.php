<?php 
session_start();
include('connection.php');
 

if (!$_SESSION['username']) {
	
	header('Location:index.php');
}

?>