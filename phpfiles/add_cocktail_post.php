<html>
	<head>
		<title>Cocktail toevoegen</title>
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
		
		
			$name_cocktail = mysql_real_escape_string($_POST["name_cocktail"]);
			$ingredient1 = mysql_real_escape_string($_POST["ingredient1"]); 
			$ingredient2 = mysql_real_escape_string($_POST["ingredient2"]);
			$ingredient3 = mysql_real_escape_string($_POST["ingredient3"]);
			$amount_1 = mysql_real_escape_string($_POST["amount_1"]);
			$amount_2 = mysql_real_escape_string($_POST["amount_2"]);
			$amount_3 = mysql_real_escape_string($_POST["amount_3"]);
						
			$sql = "

			INSERT INTO cocktailtable(Namecocktail, Ingredient1, Ingredient2, Ingredient3, Amount1, Amount2, Amount3) 

			VALUE('".$name_cocktail."', '".$ingredient1."', '".$ingredient2."', '".$ingredient3."', '".$amount_1."', '".$amount_2."', '".$amount_3."')
			";


			mysql_query($sql);
		?>
		
	</head>
	<body>
	<div class="page-wrap">	
			<div id="left">
				<h2>Aanmaken successvol</h2><br><br>
				<?php 
		
					echo $name_cocktail . "<br />";
					echo $ingredient1 . "<br />";
					echo $ingredient2 . "<br /> ";
					echo $ingredient3 . "<br />";
					echo $amount_1 . "<br />";
					echo $amount_2 . "<br />";
					echo $amount_3 . "<br />";
					
				?>
				<br><br><h4><a href="add_cocktail.php">Click here to add another cocktail</a></h4>
			</div>
	</div> 
	</body>
</html>
