<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="../Style/Style.css" rel="stylesheet" type="text/css">
	<link href="../Style/infoStyle.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
						<a class="dropbtn" href="../info.php">Info</a>
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
					<img alt="SURVIVAL" class="survival" src="../Resources/modes/SURVIVAL.png">
				<div class="modes">

					<p>
						The survival world are vanilla minecraft with added cuality of life like tp and warp.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue risus a ullamcorper vulputate. In leo libero, rutrum vel dui non, posuere convallis eros. 
						Mauris rhoncus metus ut diam pulvinar, varius rhoncus arcu condimentum. Cras sem urna, convallis ut placerat sit amet, euismod eu dui. Aliquam semper arcu quis maximus suscipit. 
						Vestibulum eget neque dapibus, feugiat quam et, venenatis nulla. Integer porta vel libero eget venenatis. Nullam a quam id arcu vestibulum porta in condimentum mauris. 
						Vivamus imperdiet diam eros, eget egestas libero tempus quis. Maecenas vehicula elit orci, sed ullamcorper ante venenatis quis. Vestibulum vestibulum ac turpis et pulvinar.
						Maecenas et eros quam. Sed aliquet felis nisi, vitae sollicitudin diam sodales vitae. Donec dapibus pulvinar suscipit. Nam vestibulum laoreet ullamcorper.
					</p>
				</div>
					<img alt="CREATIVE" class="creative" src="../Resources/modes/CREATIVE.png">				
				<div class="modes">
					<p>
						The creative world are sandbox minecraft with evrything creative has to offer.
					</p>
					<p>
						Integer lobortis mi ut leo dictum, ac aliquam nulla venenatis. Donec et erat placerat, vestibulum erat eu, maximus nibh. Praesent placerat vel libero vitae efficitur. 
						Vivamus non felis tortor. Morbi semper dui vel venenatis tempus. Donec non mattis est, vel tempor libero. Sed sollicitudin pharetra arcu, nec luctus sem egestas mollis. 
						Praesent eros mi, laoreet sed faucibus in, commodo in nulla. Donec a tortor erat. Integer fermentum ipsum ipsum, in hendrerit orci venenatis non. Sed quis nulla eu lectus convallis laoreet vitae in mauris. 
						Vivamus eu tristique enim. Vestibulum egestas lorem sit amet tellus blandit dapibus. Curabitur bibendum venenatis felis, at mollis nulla porta eget. Quisque condimentum augue porttitor est aliquet sodales vel et ex.
					</p>
				</div>
			</div>
		</section>
		
		<?php include '../php/footer.php';?>
	</div>
</body>
</html>