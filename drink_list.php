<html> 
	<head> 
		<title>List of drinks</title> 
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
		
		$sql = "
		SELECT * FROM drinkstable
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
			echo  "<li>". $row['Namedrink'] ."</li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Bottlesize'] ." ml</li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Alcoholpercentage'] ."</li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Bottleprice'] ."</li>";
			}
			echo "</ul>";
			
			$result = mysql_query($sql);
			?><ul class = "table4"><?php
			while($row = mysql_fetch_array($result))
			{
			echo  "<li>". $row['Drinkcolor'] ."</li>";
			}
			echo "</ul>";
			 ?>
			
			
				
				</form> 
			</div>
			</div>
		</div>
		
		
	</body> 
</html>
