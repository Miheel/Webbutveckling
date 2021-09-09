<?php
	session_start();

	function isLoggedIn(){
		if ($_SESSION["loggedIn"] == false){
			header("location:login.php");
		}
	}

	function loggedInOutBtn(){
		
		if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] == false){
			$loginURL = "login.php";
			if(!file_exists("login.php")){
				$loginURL = "../login.php";
			}
			$button = "<a class='menuOpt dropOpt' href='". $loginURL ."'>Login/Register</a>";
		}
		elseif($_SESSION["loggedIn"] == true){
			$logoutURL = "session/logout.php";
			if(!file_exists("session/logout.php")){
				$logoutURL = "../session/logout.php";
			}
			$button = "<a class='menuOpt dropOpt' href='" . $logoutURL . "'>Logout</a>";
		}
		return $button;
	}
?>
