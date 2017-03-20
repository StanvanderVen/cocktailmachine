<html>
	<head>
		<title>Cocktail toevoegen</title>
		
		<?php 
		@mysql_connect("localhost", "pimspanjer_arte", "3ayLkCTba")
		or die (mysql_error());

		mysql_select_db("pimspanjer_arte");
		
		
			$name = mysql_real_escape_string($_POST["name"]);
			$soort = mysql_real_escape_string($_POST["soort"]); 
			$geslacht = mysql_real_escape_string($_POST["geslacht"]);
			$voornaam = mysql_real_escape_string($_POST["voornaam"]);
			$achternaam = mysql_real_escape_string($_POST["achternaam"]);
			$adres = mysql_real_escape_string($_POST["adres"]);
			$wachtwoord = mysql_real_escape_string($_POST["wachtwoord"]);
			$wachtwoordcheck = mysql_real_escape_string($_POST["check"]);
			$email = mysql_real_escape_string($_POST["email"]);

			
			$sql = "

			INSERT INTO Accounts(Username, Password, First, Last, Adres, Email) 

			VALUE('".$username."', '".$wachtwoord."', '".$voornaam."', '".$achternaam."', '".$adres."', '".$email."')
			";


			mysql_query($sql);
		?>
		
	</head>
	<body>
	<div class="page-wrap">	
			<div id="left">
				<h2>Aanmaken successvol</h2><br><br>
				<h4>De account is aangemaakt. Je ingevulde registratie-gegevens zijn:</h4><br>
				<?php 
		
					echo $soort . "<br />";
					echo $geslacht . "<br />";
					echo $voornaam . " ";
					echo $achternaam . "<br />";
					echo $adres . "<br />";
				?>
				<br><br><h4>Klik <a href="POI_main.php">HIER</a> om terug te gaan naar de beginpagina</h4>
			</div>
	</div> 
	
	<?php include "POI_FOOTER.php"; ?>
	</body>
</html>
