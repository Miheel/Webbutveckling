<?php
	$prefix = file_exists("index.php") ? "" : "../";
?>
<script src="<?php echo $prefix . "js/menu.js"?>"></script>
<header id="menuContainer">
		<nav id="mainnav">
			<ul class="menu" id="menuID">
				<li class="menuI"><a class="menuOpt" href=<?php echo $prefix . "home.php"?>>Home</a></li>
				<li class="menuI"><a class="menuOpt" href=<?php echo $prefix . "game-gallery.php"?>>Games</a></li>
				<li class="profileico menuI">
					<a class="menuOpt">
						<span class="fa fa-user-circle"></span>
					</a>
					<div id="droppdown-menu">
						<a class="menuOpt dropOpt" href=<?php echo $prefix . "account.php"?>>My page</a>
						<?php
							echo loggedInOutBtn(); 
						?>
					</div>			
				</li>

				<li class="navbtn"><span class="fa fa-bars" id="btn"></span></li>
			</ul>
		</nav>			
</header>
