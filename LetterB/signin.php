<?php
	include "config.php";
	if (isset($_POST["signin"])){
		$email = $_POST['email'];
		$pass = $_POST['password'];
	echo($email);
		$sql = "SELECT email, password FROM utilizatori WHERE (email = '$email' AND password = '$pass')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die('Eroare! Parola sau email gresit' .mysqli_error($con));
		}

		$count = mysqli_num_rows($result);

		if ($count >0 ){
			session_start();
			$_SESSION['email'] = $email;
			header("Location: connect.php");
		}
	}
?>