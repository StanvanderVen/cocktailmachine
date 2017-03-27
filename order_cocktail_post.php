<html>
	<head>
		<title>Order Cocktail</title>
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
			
			$ingredient1 = $_POST["ingredient1"];
			$ingredient2 = $_POST["ingredient2"];
			$ingredient3 = $_POST["ingredient3"];
			$ingredient4 = $_POST["ingredient4"];
			$ingredient5 = $_POST["ingredient5"];
			$ingredient6 = $_POST["ingredient6"];
			$ingredient7 = $_POST["ingredient7"];
			$ingredient8 = $_POST["ingredient8"];
			$ingredient9 = $_POST["ingredient9"];
			$ingredient10 = $_POST["ingredient10"];

			$amount1 = $_POST["amount1"];
			$amount2 = $_POST["amount2"];
			$amount3 = $_POST["amount3"];
			$amount4 = $_POST["amount4"];
			$amount5 = $_POST["amount5"];
			$amount6 = $_POST["amount6"];
			$amount7 = $_POST["amount7"];
			$amount8 = $_POST["amount8"];
			$amount9 = $_POST["amount9"];
			$amount10 = $_POST["amount10"];


			
			
			

			
			$result1 = mysql_query("SELECT * FROM drinkstable WHERE Namedrink = '$ingredient1'");
			$row1 = mysql_fetch_array($result1);
			$place1 =  $row1['Place'];
			
		?>
		
	</head>
	<body>
	<div class="page-wrap">	
			<div id="left">
				<h2>The following order was placed:</h2><br><br>
				<br>
				<?php 
		
					echo $ingredient1, "<br />";
					echo $ingredient2,  "<br />";
					echo $ingredient3,  "<br />";
					echo $ingredient4,  "<br />";
					echo $ingredient5,  "<br />";
					echo $ingredient6,  "<br />";
					echo $ingredient7,  "<br />";
					echo $ingredient8,  "<br />";
					echo $ingredient9,  "<br />";
					echo $ingredient10,  "<br />";
					echo $place1, "<br />";

					
				?>
				
			</div>
	</div> 
	

	</body>
</html>
