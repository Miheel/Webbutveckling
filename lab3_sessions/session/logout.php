<?php
	function logOut(){
		session_start();
		session_unset();
		session_destroy();
		header("location:../index.php");
	}
	logOut()
?>