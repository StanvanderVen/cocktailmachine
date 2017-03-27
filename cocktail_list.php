<html> 
	<head> 
		<title>List of drinks</title> 
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
			
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Namecocktail'] ."</li>";
			echo  "<li>". $row['id'] ."<li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Ingredient1'] ." ml</li>";
			echo  "<li>". $row['Amount1'] ."<li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Ingredient2'] ."</li>";
			echo  "<li>". $row['Amount2'] ."<li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Ingredient3'] ."</li>";
			echo  "<li>". $row['Amount3'] ."<li>";
			}
			echo "</ul>";
			
			
			 ?>
			
			
				
				</form> 
			</div>
			</div>
		</div>
		
		
	</body> 
</html>
