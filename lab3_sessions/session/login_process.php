<?php
	session_start();

	include "user.php";

	if ($_POST["username"] == $userName && $_POST["password"] == $passWord){
		$_SESSION["loggedIn"] = true;
		header("location:../index.php");
	}
	else{
		$_SESSION["loggedIn"] = false;
		header("location:../login.php");
	}
?>