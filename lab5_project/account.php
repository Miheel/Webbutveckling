<?php
	$page_title = "My account";
	include "includes/header.php";
	isLoggedIn()
?>

	</head>

	<body>
		<?php include "includes/menu.php"; ?>

		<div class="mainContainer">
			<h1> My account </h1>

		<section>

			<h2><?php echo $_SESSION["user"];?>´s Game stats</h2>
			<h3>Cookie clicker</h3>
			<p>
				stats
			</p>

			<h3>Rock paper scissors</h3>
			<p>
				stats
			</p>

			<?php
				echo $_SESSION["user"];
			?>
		</section>

		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html>
