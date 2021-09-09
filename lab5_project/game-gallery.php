<?php
	$page_title = "Game gallery";
	include "includes/header.php";
?>
	<link type="text/css" rel="stylesheet" href="css/gameStyle.css">
	</head>

	<body class="gameBody">
		<?php include "includes/menu.php"; ?>
		<div class="mainContainer">
			<h1> Game gallery </h1>					
			<section>
				<div class="wrapper">
					<div class="imgWrapper">
						<a class="gameLink" href="games/cookie.php">
							<img src="resources/cookie.png" class="galleryImg" alt="cookie">
						</a>
					</div>
					<div class="textWrapper">
						<a class="gameLink" href="games/cookie.php">Cookie Clicker</a>
					</div>
				</div>


				<div class="wrapper">
					<div class="imgWrapper">
						<a class="gameLink" href="games/rock-paper-scissor.php">
							<img src="resources/RPSThumbNail.png" class="galleryImg" alt="Rock papper scissor">
						</a>
					</div>
					<div class="textWrapper">
						<a class="gameLink" href="games/rock-paper-scissor.php">Rock papper scissor</a>
					</div>
				</div>
			</section>

		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html>
