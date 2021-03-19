<?php
	$page_title = "Welcome";
	include "includes/header.php";
	include "guestbook/DBIO.php";
	include "guestbook/createPost.php";
	
	$db = new DBIO();

	if($_SERVER["REQUEST_METHOD"] == 'POST' && empty($_POST["guestMessageIN"]) == false){
		
		if(isset($_POST["submitPost"])){
			if (!empty($_POST["guestNameIN"])){
				$guest = $_POST["guestNameIN"];
			}
			else{
				$guest = "Anon";
			}
			$db->insert($guest, $_POST[guestMessageIN]);
		}		
		
		if(isset($_POST["delPost"])){
			$db->delete($_POST["id"]);
		}
		header('Location:db.php');		
	}
	
	if($_SERVER["REQUEST_METHOD"] == 'POST' ){
		if(isset($_POST["delPost"])){
			$db->delete($_POST["id"]);
		}
		header('Location:db.php');	
	}
	
	$fetchedData = $db->fetch();
?>

	</head>
	
	<body>
		<?php include "includes/menu.php"; ?>
		<div class="mainContainer">

		<section>
			<h1 style="text-align: center;"> Forum with database</h1>
			<div class="GuestFormContainer">
			
				<form id="guestForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
					<label id="guestName" for="guestNameIN">Name:</label>
					<input id="guestNameIN" type="text" name="guestNameIN">
					<br>
					
					<label id="guestMessage" for="guestMessageIN">Message:</label>
					<textarea id="guestMessageIN" cols="40" rows="2" name="guestMessageIN" required></textarea>
					<br>
					
					<input id="sendMsg" type="submit" name="submitPost">
					
				</form>
			</div>
			
			<?php 
				foreach($fetchedData as $row){
					echo makePost(htmlspecialchars($row[0]), htmlspecialchars($row[1]), $row[2], $row[3]);
				}
			?>
		</section>

		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html> 