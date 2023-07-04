<?php
	include "config.php";
	session_start();
	$sql = "UPDATE books SET InCart = 0";
	if(!mysqli_query($con,$sql)){
		die('Eroare inserare' .mysqli_error($con));
	}
	
	header("Location:mycart.php");
	exit();
	mysqli_close($con);
?>