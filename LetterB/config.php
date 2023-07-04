<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die('Conexiunea nu a putut fi realizata!' .mysqli_error());
	}
	mysqli_select_db($con,"baza_de_date");
?>