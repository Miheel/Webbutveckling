<?php
	include "config.php";
	$checkLoggedIn = file_exists("session/checkLoggedIn.php") ? "session/checkLoggedIn.php" : "../session/checkLoggedIn.php";
	$css = file_exists("css/Style.css") ? "css/Style.css" : "../css/Style.css";
	include_once $checkLoggedIn;
?>

<!DOCTYPE html>
<html lang="sv">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		<?= $site_title . $divider . $page_title; ?>
		</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link  type="text/css" rel="stylesheet" href=<?php echo $css ?>>
