<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="Style/Style.css" rel="stylesheet" type="text/css">
	<link href="Style/infoStyle.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
			<div class="info_wrapper">
				<h1>Information</h1>			
				<div class="info_txt">
					<p> 
						StarMC is a multiverse server with a cuple of worlds and diffrent modes (more modes are to come).
						The right now active modes are survival and creative.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue risus a ullamcorper vulputate. In leo libero, rutrum vel dui non, posuere convallis eros. 
						Mauris rhoncus metus ut diam pulvinar, varius rhoncus arcu condimentum. Cras sem urna, convallis ut placerat sit amet, euismod eu dui. Aliquam semper arcu quis maximus suscipit. 
						Vestibulum eget neque dapibus, feugiat quam et, venenatis nulla. Integer porta vel libero eget venenatis. Nullam a quam id arcu vestibulum porta in condimentum mauris. 
						Vivamus imperdiet diam eros, eget egestas libero tempus quis. Maecenas vehicula elit orci, sed ullamcorper ante venenatis quis. Vestibulum vestibulum ac turpis et pulvinar.
						Maecenas et eros quam. Sed aliquet felis nisi, vitae sollicitudin diam sodales vitae. Donec dapibus pulvinar suscipit. Nam vestibulum laoreet ullamcorper.
					</p>
					
					<table class="tabell1">
						<caption>Plugin list</caption>
						<tbody>
							<tr>
								<td>All EssentialsX</td>
							</tr>
							<tr>
								<td>All Multiverse</td>
							</tr>
							<tr>
								<td>PermissionsEx</td>
							</tr>
							<tr>
								<td>worldedit</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
		
		<?php include 'php/footer.php';?>
		
	</div>
</body>
</html>