<?php
	$page_title = "Startsida";
	include "includes/header.php";
	isLoggedIn();
?>

	</head>

	<body>
		<?php include "includes/menu.php"; ?>	
		<div class="mainContainer">

			<section>

				<h3>Har du tidigare erfarenhet av utveckling med PHP?</h3>
				Så långt som att includera filer med php. annars ingen erfarenhet i php.

				<h3>Hur har du valt att strukturera upp dina filer och kataloger?</h3>
				En root katalog med separata kataloger för css, javascript, resourses och php includes.

				<h3>Har du följt guiden, eller skapat på egen hand?</h3>
				Jag läste guiden och såg att structuren som föreslogs i den är de jag har använt mig av i tidigare web project.

				<h3>Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</h3>
				Inte något märkvärdigt.

				<h3>Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver etcetera)?</h3>
				jag använde mig av Notepad++ so Editor och Apache som webserver.

				<h3>Har något varit svårt med denna uppgift?</h3>
				Nej.

			</section>

			<?php include "includes/footer.php" ?>
		</div>
	</body>
</html>