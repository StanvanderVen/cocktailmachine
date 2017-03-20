<html>
	<head>
		<title>Add cocktail</title>
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
		
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");

			
			
			$sql = "
			SELECT name_drink FROM drinks;
			";
			
			$result = ($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				echo ?>
				<select name="rows_drinks">
				<option> <?php $row["name_drink"]. "<br>" ?></option>
				</select>
				<?php;
				}
			} 
			
			else {
			echo "No results";


			mysql_query($sql);
		?>
			
	</head> 
	
	<body> 
	
	
		<div class="page-wrap">	
			<div id="left">
	
			<div class="add_cocktail_main">
			<form name="form" method="post" action="add_cocktail_post.php"> 
				<h1>Add a drink</h1>
				<ul class="table">
				<li class="table_line">Name: </li>
				<li class="table_line">Ingredient 1</li>
				<li class="table_line">Ingredient 2 </li>
				<li class="table_line">Ingredient 3 </li>
				
				</ul>
				
				<ul class="table2">
				<li class="table_line"><input type="text" size="20" name="name_cocktail"></li>
				<li class="table_line"><input type="text" size="20" name="bottle_size"></li>
				<li class="table_line"><input type="text" size="20" name="alcohol_percentage"></li>
				<li class="table_line"><input type="text" size="20" name="bottle_price"></li>
				<li class="table_line"><input type="submit" value="Add"></li>
				<ul>
				
				<ul class="table">
				<li><li>
				</ul>

				</form> 
			</div>
			</div>
		</div>
		
		<?php include "POI_FOOTER.php"; ?>
	</body> 
</html>
