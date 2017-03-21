<html>
	<head>
		<title>Cocktail toevoegen</title>
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("pimspanjer_arte");
		
		
			$name_cocktail = mysql_real_escape_string($_POST["name"]);
			$ingredient1 = mysql_real_escape_string($_POST["ingredient1"]); 
			$ingredient2 = mysql_real_escape_string($_POST["ingredient2"]);
			$ingredient1 = mysql_real_escape_string($_POST["ingredient3"]);
						
			$sql = "

			INSERT INTO cocktailtable(Namecocktail, Ingredient1, Ingredient2, Ingredien3) 

			VALUE('".$name_cocktail."', '".$ingredient1."', '".$ingredient2."', '".$ingredient3."')
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
		
					echo $name_cocktail . "<br />";
					echo $ingredient1 . "<br />";
					echo $ingredient2 . " ";
					echo $ingredient3 . "<br />";
				?>
				<br><br><h4><a href="add_cocktail.php">Click here to add another cocktail</a></h4>
			</div>
	</div> 
	
	<?php include "POI_FOOTER.php"; ?>
	</body>
</html>
