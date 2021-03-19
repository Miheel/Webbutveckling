<?php
	$page_title = "Forum";
	include "includes/header.php";
	include_once "guestbook/GuestBook.php";
	include "guestbook/createPost.php";
	
	$guestbook = new GuestBook("../writeable/test.ser");

	if ($_SERVER["REQUEST_METHOD"] == 'POST' && empty($_POST["guestMessageIN"]) == false){
		
		if (isset($_POST["submitPost"])){
			if (!empty($_POST["guestNameIN"])){
				$guest = $_POST["guestNameIN"];
			}
			else{
				$guest = "Anon";
			}
			$guestbook->addPost($guest, $_POST["guestMessageIN"], Date("Y-m-d h:i:s"));
		}
		
		header('Location:forum.php');
	}

	if($_SERVER["REQUEST_METHOD"] == 'POST'){
		if(isset($_POST["delPost"])){
			echo "delpost";
			$guestbook->removePost($_POST["id"]);
			echo $_POST["id"];
		}
		
		if(isset($_POST["updPost"])){
			echo "updatepost";
			$guestbook->updatePost($_POST["id"], $_POST["message"]);
			echo $_POST["id"];
		}
		
		header('Location:forum.php');		
	}

	$posts = $guestbook->getGuestBook();

?>

	</head>
	
	<body>
		<?php include "includes/menu.php"; ?>
		<div class="mainContainer">

		<section>
			<h1 style="text-align: center;"> Forum </h1>
			<div class="GuestFormContainer">
			
				<form id="guestForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
					<label id="guestName" for="guestNameIN">Name:</label>
					<input id="guestNameIN" type="text" name="guestNameIN">
					<br>
					
					<label id="guestMessage" for="guestMessageIN">Message:</label>
					<textarea id="guestMessageIN" cols=40 rows=2 name="guestMessageIN" required></textarea>
					<br>
					
					<input id="sendMsg" type="submit" name="submitPost">
					
				</form>
			</div>
			
			<?php
				$i = 0;
				foreach($posts as $post){
					echo makePost(htmlspecialchars($post->getAuthor()), htmlspecialchars($post->getMessage()), $post->getTimeStamp(), $i++);
				}
			?>

		</section>

		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html> 