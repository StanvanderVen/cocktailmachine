<html> 
	<head> 
		<title>Order Cocktail</title> 
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
		
		$sql = "
		SELECT * FROM cocktailtable
		";
		
	
			

		?>
	</head> 
	
	<body> 
	
	
		<div class="page-wrap">	
			<div id="left">
			
			
	
				<div class="drink_list">
				
					<?php	
						$result = mysql_query($sql);
					
					?><ul><?php
					while($row = mysql_fetch_array($result))
					{
						?><form name="form" method="post" action="order_cocktail_post.php" class = "form-horizontal"> <?php
						?> <li> <img src="/img/<?php echo $row['Photo'] ;?>" alt="<?php echo $row['Namecocktail']; ?>" class="cocktail_image"> </li>
							
							<input type="hidden" name="ingredient1" value="<?php echo $row['Ingredient1'];?>">
							<input type="hidden" name="ingredient2" value="<?php echo $row['Ingredient2'];?>">
							<input type="hidden" name="ingredient3" value="<?php echo $row['Ingredient3'];?>">
							<input type="hidden" name="ingredient4" value="<?php echo $row['Ingredient4'];?>">
							<input type="hidden" name="ingredient5" value="<?php echo $row['Ingredient5'];?>">
							<input type="hidden" name="ingredient6" value="<?php echo $row['Ingredient6'];?>">
							<input type="hidden" name="ingredient7" value="<?php echo $row['Ingredient7'];?>">
							<input type="hidden" name="ingredient8" value="<?php echo $row['Ingredient8'];?>">
							<input type="hidden" name="ingredient9" value="<?php echo $row['Ingredient9'];?>">
							<input type="hidden" name="ingredient10" value="<?php echo $row['Ingredient10'];?>">

							<input type="hidden" name="amount1" value="<?php echo $row['Amount1'];?>">
							<input type="hidden" name="amount2" value="<?php echo $row['Amount2'];?>">
							<input type="hidden" name="amount3" value="<?php echo $row['Amount3'];?>">
							<input type="hidden" name="amount4" value="<?php echo $row['Amount4'];?>">
							<input type="hidden" name="amount5" value="<?php echo $row['Amount5'];?>">
							<input type="hidden" name="amount6" value="<?php echo $row['Amount6'];?>">
							<input type="hidden" name="amount7" value="<?php echo $row['Amount7'];?>">
							<input type="hidden" name="amount8" value="<?php echo $row['Amount8'];?>">
							<input type="hidden" name="amount9" value="<?php echo $row['Amount9'];?>">
							<input type="hidden" name="amount10" value="<?php echo $row['Amount10'];?>">

							
							
							
							<li><input type="submit" name="order_cocktail" value=" <?php echo $row['Namecocktail'];?>">						
								</input>
							</li></form><?php
							
							
					}
					echo "</ul>";
					
					
					
					 ?>
				</div>
			</div>
		</div>		
	</body> 
</html>
