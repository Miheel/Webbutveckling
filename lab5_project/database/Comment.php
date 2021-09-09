<?php
	include_once "../database/DBIO.php";

	class Comment{

		private $title;
		
		function __construct($title){
			$this->title = $title;
		}

		/**
		 * Utility function that handels removal and submition of commentss
		 */
		function commentUtil(){
			$db = new DBIO();

			if($_SERVER["REQUEST_METHOD"] == 'POST' && empty($_POST["guestMessageIN"]) == false){

				if(isset($_POST["submitPost"])){
					$db->insertComment($_SESSION['user'], $_POST['guestMessageIN'], $this->title);
				}		
				header("Location:" . $_SERVER["PHP_SELF"]);
			}

			if($_SERVER["REQUEST_METHOD"] == 'POST' ){
				if(isset($_POST["delPost"])){
					$db->deleteComment($_POST["id"]);
				}
				header("Location:" . $_SERVER["PHP_SELF"]);	
			}

			return $db->fetchComments($this->title);
		}

		/**
		 * Text box to write and submit comments 
		 */
		function commentBox(){
			return '<h1 style="text-align: center;"> Comment</h1>
			<div class="GuestFormContainer">

				<form id="guestForm" method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">

					<label id="guestMessage" for="guestMessageIN">Message:</label>
					<textarea id="guestMessageIN" cols="40" rows="2" name="guestMessageIN" required></textarea>

					<input type="hidden" value="' . $this->title . '" >
					<br>

					<input id="sendMsg" type="submit" name="submitPost">

				</form>
			</div>';
		}

		/**
		 * 
		 */
		function makePost($author, $message, $timeStamp, $id){
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
