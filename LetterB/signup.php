<?php
include "config.php";
  // Verificare dacă adresa de e-mail există deja
  $email = $_POST['email'];
  $result = mysqli_query($con, "SELECT COUNT(*) FROM utilizatori WHERE email='$email'");
  $count = mysqli_fetch_array($result)[0];

  if ($count > 0) {
    // Adresa de e-mail exista deja, afisam un mesaj de eroare
    $message = "Adresa de e-mail '$email' exista deja in baza de date.";
  } else {
    // Adaugam inregistrarea in baza de date
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $sql = "INSERT INTO utilizatori (first_name, last_name, email, password, conf_password) VALUES ('$fname', '$lname', '$email', '$password', '$cpassword')";
  }

  if(!mysqli_query($con, $sql)){
		die('Eroare inserare' .mysqli_error($con));
	}
	session_start();
	$_SESSION['user'] = $user;
	header("Location: signin.html");
?>
