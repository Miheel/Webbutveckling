<?php
	$page_title = "Login/Register";
	include "includes/header.php";
?>

	</head>

	<body>
		<?php include "includes/menu.php";?>
		<div class="mainContainer">


			<section>
				<h2 style="text-align: center;">Login/Register</h2>
				<form  action="<?php echo htmlspecialchars("session/login_process.php")?>" method="POST" id="loginForm">
				
					<label id="userlabel" for="username">Username</label>
					<input class="loginIn" type="text" name="username" id="username" placeholder="Username" required>
					<br>
					<label id="passlabel" for="password">Password</label>
					<input class="loginIn" type="password" name="password" id="password" placeholder="Password" required >
					<br>
					<input class="submitBtn" type="submit" value="Login" name="loginbtn">
					<input class="submitBtn" type="submit" value="Register" name="registerBtn">

				</form>
			</section>


		<?php include "includes/footer.php" ?>
		</div>
	</body>
</html>
