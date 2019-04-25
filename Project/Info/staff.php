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
	<title>Staff</title>
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
		
		<section class="staff">
			<div class="side">
				<div class="server-status">
					<img alt="server status mark" class="" id="status" src="../Resources/Yellow_exclamation_point.png" style="height:20px;width:20px;"> 
					The server is currently <span class="server-online" id="statusMsg"></span>!
				</div>
			</div>
			<div class="staff_wrapper">
				<div class="staff_outer">
					<a><img alt="MC head icon" src='https://minotar.net/helm/2c306e9b022f4057abcf5ff9c9dd718f/100.png'></a>
					<div class="staff_inner">
						Corgack<br>
						Egenskaper:<br>
						+ ?<br>
						+ ?<br>
						- ?<br>
						- ?<br>
						Favoritfilmer: ?
					</div>
				</div>
				<div class="staff_outer">
					<a><img alt="MC head icon" src='https://minotar.net/helm/bfacf60b69a147f685d59ffa8f7d03b7/100.png'></a>
					<div class="staff_inner">
						ifrostes<br>
						Egenskaper:<br>
						+ ?<br>
						+ ?<br>
						- ?<br>
						- ?<br>
						Favoritfilmer: ?
					</div>
				</div>
				<div class="staff_outer">
					<a><img alt="MC head icon" src='https://minotar.net/helm/2effa8188da94aaaaa57ba1a13392fa1/100.png'></a>
					<div class="staff_inner">
						Adamhil<br>
						Egenskaper:<br>
						+ ?<br>
						+ ?<br>
						- ?<br>
						- ?<br>
						Favoritfilmer: ?
					</div>
				</div>
				<div class="staff_outer">
					<a><img alt="MC head icon" src='https://minotar.net/helm/267964870c4445c29681650e9482a293/100.png'></a>
					<div class="staff_inner">
						“Nånting nånting” Adam Temmel<br>
						Egenskaper:<br>
						+ Föddes i en kompilator<br>
						+ Teoretiker<br>
						- Sover aldrig<br>
						- Sover alltid<br>
						Favoritfilmer: Star Wars ep 3
					</div>
				</div>
			</div>
		</section>
		
		<?php include '../php/footer.php';?>
	</div>
</body>
</html>