<?php
	function makePost($author, $message, $timeStamp, $id){
		return '<div class="post">
			<span class="author">' . $author .  " (" . $id . ")" . '</span>
			<br>
			<span class="message">' . $message . '</span>
			<textarea  class="editmsg id' . $id . '">' . $message . '</textarea>
			<br>
			<div class="timeStamp">' . $timeStamp . 
				'<form class="guestForm" method="POST" action=' . htmlspecialchars($_SERVER["PHP_SELF"]) . ' style="display:inline;">
					<input type="hidden" name="id" value="' . $id . '">

					<input class="removebtn" style="display:inline;" type="submit" name="delPost" value="Remove">
				</form>
			</div>
		</div>';
	}
?>