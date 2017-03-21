<html>
	<head>
		<title>Add cocktail</title>
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
		
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");

			
			
			$sql = "
			SELECT Namedrink FROM drinktable;
			";
			
			$result = mysql_query($sql)
			echo "<ul>";
			
			while($row = mysqli_fetch_array($result))
			{
				echo"<li>".$row['Namedrink']."</li>";
			}
			echo "</ul>";
			
			while($row = mysqli_fetch_array($result))
			{
				echo"<option>".$row['Namedrink']."</option>";
			}
			

		
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
								<?php
									while($row = mysqli_fetch_array($result))
									{
										echo"<option>".$row['Namedrink']."</option>";
									}
								?>
							</select>
						</li>
						<li class="table_line">
							<select name="ingredient2">
								<?php
									while($row = mysqli_fetch_array($result))
									{
										echo"<option>".$row['Namedrink']."</option>";
									}
								?>
							</select>
						</li>
						<li class="table_line">
							<select name="ingredient3">
								<?php
									while($row = mysqli_fetch_array($result))
									{
										echo"<option>".$row['Namedrink']."</option>";
									}
								?>
							</select>
						</li>
						<!-- <li class="table_line"><input type="text" size="20" name="bottle_size"></li> 
						<li class="table_line"><input type="text" size="20" name="alcohol_percentage"></li>
						<li class="table_line"><input type="text" size="20" name="bottle_price"></li>
						<li class="table_line"><input type="submit" value="Add"></li> -->
					</ul>
					
					<ul class="table3">
						<li class="table_line">&nbsp</li>
						<li class="table_line"><input type="text" size="20" name="Amount1"> ml</li>
						<li class="table_line"><input type="text" size="20" name="Amount2"> ml</li>
						<li class="table_line"><input type="text" size="20" name="Amount3"> ml</li>				
					</ul>
			

					</form> 
				</div>
			</div>
		</div>
	</body> 
</html>
