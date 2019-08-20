<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="Style/Style.css" rel="stylesheet" type="text/css">
	<link href="Style/formS.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">	
	<link href="Resources/C_icon.ico" rel="shortcut icon" type="image/x-icon">
	<script>
		function soon() {
			alert("Comming soon");
		}
	</script>
	<title>Contact</title>
</head>
<body>
	<div class="body">
		<?php include 'php/menu.php';?>
		
		<section>
			<form action="parse_form.php" method="post">
				<div class="row">
					<div class="col">
						<label for="name"><span class="req_aster">*</span> Name:</label> 
						<input autofocus="" class="txt_in" id="name" name="namn" placeholder="Name" required="" type="text"><br>
						
						<label for="tel"><span class="req_aster">*</span> Mail:</label> 
						<input class="txt_in" id="tel" name="telefon" placeholder="example@axample.com" required="" type="tel"><br>	
					</div>
					
					<div class="col">
						<label for="kat">Category:</label> 
						<select class="s_list" id="kat" name="kategori">
							<option value="fakt">
								Bug
							</option>
							<option value="net">
								Feedback
							</option>
							<option value="tel">
								Griefer
							</option>
							<option value="epost">
								Mod
							</option>
						</select><br>
						
						<label for="rub"><span class="req_aster">*</span> Subject:</label> 
						<input class="txt_in" id="rub" name="rubrik" placeholder="Subject" required="" type="text"><br>
					</div>
				</div>
				
				<div class="bot">
					<label for="besk"><span class="req_aster">*</span> Text:</label> 
					<textarea class="txt_in" cols="50" id="besk" name="beskrivning" placeholder="Beskriv ärendet" required="" rows="10"></textarea><br>

					<!--<input name="send" type="submit" value="Submit">-->
					<button onclick="soon()">Submit</button>
					<input type="reset" value="Reset">
				</div>				
				
				<p> fields with <span class="req_aster">*</span> are required to be filled in</p>		
			</form>
		
		</section>
		
		<?php include 'php/footer.php';?>
		
	</div>
</body>
</html>