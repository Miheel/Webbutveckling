<?php
	//include "user.php";
	include "../database/DBIO.php";
	session_start();


	if (isset($_POST["username"], $_POST["password"])) {

		$db = new DBIO();
		$userName = $_POST["username"];
		$passWord = $_POST["password"];

		if (isset($_POST["loginbtn"])) {

			$exists = $db->checkUser($userName, $passWord);

			if ($exists){
			$_SESSION["user"] = $userName;
			$_SESSION["loggedIn"] = true;
			header("location:../home.php");
			}
			else{
				$_SESSION["loggedIn"] = false;
				header("location:../login.php");
			}
		}
		if (isset($_POST["registerBtn"])) {

			$exists = $db->checkUsername($userName);
			
			if (!$exists) {
				$db->addUser($userName, $passWord);				
			}
			else {
				echo '<script>alert("Username already taken")</script>';
				header("location:../login.php");
			}

		}
	}

?>
