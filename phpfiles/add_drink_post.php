<html>
	<head>
		<title>Add drink</title>
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
		
		
			$name_drink = mysql_real_escape_string($_POST["name_drink"]);
			$bottle_size = mysql_real_escape_string($_POST["bottle_size"]); 
			$alcohol_percentage = mysql_real_escape_string($_POST["alcohol_percentage"]);
			$bottle_price = mysql_real_escape_string($_POST["bottle_price"]);
			$drink_color = mysql_real_escape_string($_POST["drink_color"]);
			
			
			$sql = "

			INSERT INTO drinkstable(Namedrink, Bottlesize, Alcoholpercentage, Bottleprice, Drinkcolor) 

			VALUE('".$name_drink."', '".$bottle_size."', '".$alcohol_percentage."', '".$bottle_price."', '".$drink_color."')
			";


			mysql_query($sql);
		?>
		
	</head>
	<body>
	<div class="page-wrap">	
			<div id="left">
				<h2>Adding this drink was succesfull:</h2><br><br>
				<h4></h4><br>
				<?php 
		
					echo $name_drink . "<br />";
					echo $bottle_size . "<br />";
					echo $alcohol_percentage . "<br />";
					echo $bottle_price . "<br />";
					echo $drink_color . "<br />";
				?>
				<br><br><h4><a href="add_drink.php">Click here to add another drink</a></h4>
			</div>
	</div> 
	

	</body>
</html>
