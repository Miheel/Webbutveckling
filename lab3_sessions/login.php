<?php
	$page_title = "Info";
	include "includes/header.php";
?>

	</head>

	<body>
		<?php include "includes/menu.php";?>
		<div class="mainContainer">


			<section>
				<h2 style="text-align: center;">Login</h2>
				<form  action="session/login_process.php" method="POST" id="loginForm">
				
					<label id="userlabel" for="username">Username</label>
					<input class="loginIn" type="text" name="username" id="username" placeholder="admin" required>
					<br>
					<label id="passlabel" for="password">Password</label>
					<input class="loginIn" type="password" name="password" id="password" placeholder="1234" required >
					<br>
					<input id="submitBtn" type="submit">

				</form>
			</section>


		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html>