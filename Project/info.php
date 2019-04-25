<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="Style/Style.css" rel="stylesheet" type="text/css">
	<link href="Style/infoStyle.css" rel="stylesheet" type="text/css">
	<script src="https://mcapi.us/scripts/minecraft.js"></script>
	<script src="js/MC_ServerStatus.js"></script>
	<link href="Resources/C_icon.ico" rel="shortcut icon" type="image/x-icon">
	<title>info</title>
</head>
<body>
	<div class="body">
		<?php include 'php/menu.php';?>
		
		<section>
			<div class="side">
				<div class="server-status">
					<img alt="server status mark" class="" id="status" src="Resources/Yellow_exclamation_point.png" style="height:20px;width:20px;"> The server is currently <span class="server-online" id="statusMsg"></span>!
				</div>
			</div>
			<div class="info_wrapper"></div>
		</section>
		
		<?php include 'php/footer.php';?>
		
	</div>
</body>
</html>