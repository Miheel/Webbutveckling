<?php
	session_start();

	function isLoggedIn(){
		if ($_SESSION["loggedIn"] == false){
			header("location:login.php");
		}
	}

	function loggedInOutBtn(){
		
		if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] == false){
			$button = "<li class='menuI login'><a href='login.php'>Login</a></li>";
		}
		elseif($_SESSION["loggedIn"] == true){
			$button = "<li class='menuI logout'><a href='session/logout.php'>Logout</a></li>";
		}
		return $button;
	}
?>