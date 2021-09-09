<?php
	$page_title = "Rock paper scissors";
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
	<script src="../js/RPS.js" defer></script>
	</head>

	<body class="gameBody">
		<?php include "../includes/menu.php"; ?>
		<div class="mainContainer">

        	<div class="game_board">
				<div class="clickarea">
        			<img src="../resources/rock.png" alt="Rrock" id="rock">
					<img src="../resources/paper.png" alt="Paper" id="paper">
					<img src="../resources/scissors.png" alt="Scissors" id="scissor">
				</div>

				<div class="gameStats">
					<div class="userstats">
						User Wins: <span id="userWin">0</span>
					</div>
					<div class="round">
						<span id="roundNr">0</span>
					</div>				
					<div class="botStats">
						Bot Wins: <span id="botWin">0</span>
					</div>
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
