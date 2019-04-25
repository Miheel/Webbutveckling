<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="../Style/Style.css" rel="stylesheet" type="text/css">
	<link href="../Style/infoStyle.css" rel="stylesheet" type="text/css">
	<script src="https://mcapi.us/scripts/minecraft.js"></script>
	<script src="../js/MC_ServerStatus.js"></script>
	<link href="../Resources/C_icon.ico" rel="shortcut icon" type="image/x-icon">
	<title>Modes</title>
</head>
<body>
	<div class="body">
		<header>
			<img alt="LOGGO" class="loggo" src="../Resources/Coat_of_Arms.png">
			<nav>
				<ul class="menu">
					<li class="menuI">
						<a href="../home.php">Home</a>
					</li>
					<li class="menuI">
						<a href="../gallery.php">Gallery</a>
					</li>
					<li class="menuI">
						<a href="../contact.php">Contact</a>
					</li>
					<li class="dropdown menuI">
						<a class="dropbtn" href="info.php">Info</a>
						<div class="dropdown-content">
							<a href="modes.php">Modes</a> <a href="staff.php">Staff</a>
						</div>
					</li>
					<li class="menuI">
						<a href="https://discord.gg/ETVMdrS">Discord</a>
					</li>
					<li class="ip">IP: StarMC.ddns.net</li>
				</ul>
			</nav>
		</header>
		
		<section>
			<div class="side">
				<div class="server-status">
					<img alt="server status mark" class="" id="status" src="../Resources/Yellow_exclamation_point.png" style="height:20px;width:20px;"> 
					The server is currently <span class="server-online" id="statusMsg"></span>!
				</div>
			</div>
			<div class="mode_wrapper">
				<div class="modes">
					<img alt="SURVIVAL" class="survival" src="../Resources/modes/SURVIVAL.png">
					<p>Vanilla multiplayer Minecraft with some added quality of life</p>
				</div>
				<div class="modes">
					<img alt="CREATIVE" class="creative" src="../Resources/modes/CREATIVE.png">
					<p>Creative Minecraft one super flatt world to do anything in</p>
				</div>
			</div>
		</section>
		
		<?php include '../php/footer.php';?>
	</div>
</body>
</html>