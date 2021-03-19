<?php
	$page_title = "Info";
	include "includes/header.php";
	include "includes/infoIncl.php";
	isLoggedIn()
?>

	</head>

	<body>
		<?php include "includes/menu.php"; ?>
		<div class="mainContainer">

		<section>
			<h2>Information</h2>
			<?php echo info(); ?>
		</section>

		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html>