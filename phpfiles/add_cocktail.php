<html>
	<head>
		<title>Add cocktail</title>
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
		
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
	
		?>
			
	</head> 
	
	<body> 

	
	
		<div class="page-wrap">	
			<div id="left">
	
				<div class="add_cocktail_main">
				<form name="form" method="post" action="add_cocktail_post.php"> 
					<h1>Add a cocktail</h1>
					<ul class="table">
						<li class="table_line">Name: </li>
						<li class="table_line">Ingredient 1</li>
						<li class="table_line">Ingredient 2 </li>
						<li class="table_line">Ingredient 3 </li>
					</ul>
					
					<ul class="table2">
						<li class="table_line"><input type="text" size="20" name="name_cocktail"></li>
						<li class="table_line">
							<select name="ingredient1">
								<option selected>Choose</option>
								<?php
									$query = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
									$result = mysql_query($query);
									while($row = mysql_fetch_array($result))
									{
										
										echo "<option>" . $row['Namedrink'] . "</option>";
									}
									
								?>
								<option>Empty</option>
								
							</select>
							
							
						</li>
						<li class="table_line">
							<select name="ingredient2">
								<option selected>Choose</option>
								<?php
									$query = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
									$result = mysql_query($query);
									while($row = mysql_fetch_array($result))
									{
										
										echo "<option>" . $row['Namedrink'] . "</option>";
									}
									
								?>
								<option>Empty</option>
							</select>
						</li>
						<li class="table_line">
							<select name="ingredient3">
								<option selected>Choose</option>
								<?php
									$query = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
									$result = mysql_query($query);
									while($row = mysql_fetch_array($result))
									{
										
										echo "<option>" . $row['Namedrink'] . "</option>";
									}
									
								?>
								<option>Empty</option>
							</select>
						</li>
						
					</ul>
					
					<ul class="table3">
						<li class="table_line">&nbsp</li>
						<li class="table_line"><input type="text" size="20" name="amount_1"> ml</li>
						<li class="table_line"><input type="text" size="20" name="amount_2"> ml</li>
						<li class="table_line"><input type="text" size="20" name="amount_3"> ml</li>	
						<li class="table_line"><input type="submit" value="Add"></li>
					</ul>
					</form>
					
					<a href="cocktail_list.php">Click here to see cocktail list</a><br>
					<a href="add_drink.php">Click here to add drinks</a>
					
				</div>
			</div>
		</div>
	</body> 
</html>
