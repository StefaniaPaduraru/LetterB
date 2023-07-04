<?php
	include "config.php";
	session_start();
	$id = $_GET['id'];
	$sql = "UPDATE books SET InCart = 1 WHERE id = $id";
	if(!mysqli_query($con,$sql)){
		die('Eroare inserare' .mysqli_error($con));
	}
	
	header("Location:mycart.php");
	exit();
	mysqli_close($con);
?>