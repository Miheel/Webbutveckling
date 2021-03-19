<?php
	include "config.php";
	include_once "session/checkLoggedIn.php";
?>

<!DOCTYPE html>
<html lang="sv">
	<head> 
		<title>
		<?= $site_title . $divider . $page_title; ?>
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/indexStyle.css">