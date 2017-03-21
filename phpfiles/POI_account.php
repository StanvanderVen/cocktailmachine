<html> 
	<head> 
		<title>Account registratie</title> 
		<link rel="stylesheet"type="text/css" href="POI_main_css.css">
	</head> 
	
	<body> 
	<?php include "POI_NAV.html"; ?>
	
		<div class="page-wrap">	
			<div id="left">
	
			<div class="registratie">
				<form name="form1" method="post" action="POI_registratie.php"> 
			<!-- klant of werknemer -->
					<select name="soort"> 
						<option selected> Klant </option>		
						<option> Werknemer </option> 
					</select><br><br>
			<!-- geslacht -->
					Geslacht <select name="geslacht">
						<option selected> Man </option> 
						<option> Vrouw </option> 
					</select> <br><Br>
			<!-- gegevens -->
					Voornaam <input type="text" size="20" name="voornaam">
					Achternaam <input type="text" size="20" name="achternaam"><br><br>
					Adres <input type="text" size="20" name="adres">
					<br><br><br>
					Username <input type="text" size="20" name="username"><br><br><br>
					Email-adres <input type="text" size="20" name="email"><br><br><br>
			<!-- wachtwoord -->
					Wachtwoord <input type="password" size="20" name="wachtwoord">
					Nog een keer <input type="password" size="20" name="check">
					<br><br><br>
			<!-- gegevens versturen -->
					<input type="submit" value="Registreren"> 
				</form> 
			</div>
			</div>
		</div>
		
		<?php include "POI_FOOTER.php"; ?>
	</body> 
</html>
