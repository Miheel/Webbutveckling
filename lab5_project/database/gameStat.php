<?php
	include_once "../database/DBIO.php";

	class Stats{

		private $title;
		
		function __construct($title){
			$this->title = $title;
		}

		/**
		 * Utility function saves game stat
		 */
		function gameStatUtil(){
			$db = new DBIO();

			if($_SERVER["REQUEST_METHOD"] == 'POST'){
				if(isset($_POST["saveGame"])){

                   $db->setScore($this->title, $_SESSION['user'], $_POST["cookieScore"],$_POST["RPSWin"],$_POST["RPSLoss"]);
				}	
				header("Location:" . $_SERVER["PHP_SELF"]); 
			}

		}

		function saveStats($cookieScore = -1, $RPSWin = -1, $RPSLoss = -1){
			return '<form id="gameStats" method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">

					<input id="saveGameStats" type="submit" name="saveGame" value="Save game">
                    <input type="hidden" id="cookieScore" name="cookieScore" value="'. $cookieScore. '">
                    <input type="hidden" id="RPSWin" name="RPSWin" value="'. $RPSWin. '">
                    <input type="hidden" id="RPSLoss" name="RPSLoss" value="'. $RPSLoss. '">
				</form>';
		}
		function printStats($author, $message, $timeStamp, $id){
			return '<div class="post">
				<span class="author">' . $author .  " (" . $id . ")" . '</span>
				<br>
				<span class="message">' . $message . '</span>
				<label for="' . $id . '"></label>
				<textarea id="' . $id . '" class="editmsg id' . $id . '">' . $message . '</textarea>
				<br>
				<div class="timeStamp">' . $timeStamp . 
					'<form class="guestForm" method="POST" action=' . htmlspecialchars($_SERVER["PHP_SELF"]) . ' style="display:inline;">
						<input type="hidden" name="id" value="' . $id . '">

						<input class="removebtn" style="display:inline;" type="submit" name="delPost" value="Remove">
					</form>
				</div>
			</div>';
		}		
	}
?>
