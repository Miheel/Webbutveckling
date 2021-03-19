<script src="js/menu.js"></script>
<script src="js/editbutton.js"></script>
<header id="menuContainer">
	<div id="menuBar">
		<nav id="mainnav">
			<ul class="menu" id="menuID">
				<li class="menuI"><a href="index.php">QnA</a></li>
				<li class="menuI"><a href="info.php">Info</a></li>
				<?php
					echo loggedInOutBtn(); 
				?>
				<li class="navbtn"><span class="fa fa-bars" id="btn"></span></li>
			</ul>
		</nav>			
	</div>
</header>