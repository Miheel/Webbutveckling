<?php
	$page_title = "Cookie clicker";
	include "../includes/header.php";

	include "../database/Comment.php";
	include "../database/gameStat.php";

	$comment = new Comment($page_title);
	$stats = new Stats($page_title);	

	$data = $comment->commentUtil();
	$saveState = $stats->gameStatUtil();
?>
	<link type="text/css" rel="stylesheet" href="../css/commentStyle.css">
	<link type="text/css" rel="stylesheet" href="../css/gameStyle.css">
	<script src="../js/cookie.js" defer></script>		
	</head>

	<body class="gameBody">
		<?php include "../includes/menu.php"; ?>
		<div class="mainContainer">

        	<div class="game_board">
				<div id="clickArea">
					<img src="../resources/cookie.png" alt="Cookie" usemap="#cookieMap" id="cookie">

					<map name="cookieMap">
						<area coords="131,132,130" shape="circle" id="cookieArea">
					</map>
					<p class="score">
						<span>Clicks </span>
						<span id="cookies">0</span>
					</p>				
				</div>


				<div id="upgrades">
				</div>
			</div>
		
			<section>
				<?php
					if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
						echo $stats->saveStats();
						echo $comment->commentBox();
					}

					foreach($data as $row){
						echo $comment->makePost(htmlspecialchars($row[5]), htmlspecialchars($row[2]), $row[3], $row[0]);
					}
				?>
			</section>

			<?php include "../includes/footer.php" ?>
		</div>
	</body>
</html>
