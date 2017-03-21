<html> 
	<head> 
		<title>Add drink</title> 
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
	</head> 
	
	<body> 
	
	
		<div class="page-wrap">	
			<div id="left">
	
			<div class="add_drink_main">
				<form name="form" method="post" action="add_drink_post.php"> 
				<h1>Add a drink</h1>
				<ul class="table">
				<li class="table_line">Name: </li>
				<li class="table_line">Bottle size: </li>
				<li class="table_line">Alcohol percentage: </li>
				<li class="table_line">Bottle price: </li>
				<li class="table_line">Drink color: </li>
				</ul>
				
				<ul class="table2">
				<li class="table_line"><input type="text" size="20" name="name_drink"></li>
				<li class="table_line"><input type="text" size="20" name="bottle_size"> ml</li>
				<li class="table_line"><input type="text" size="20" name="alcohol_percentage"> %</li>
				<li class="table_line"><input type="text" size="20" name="bottle_price"> euro</li>
				<li class="table_line"><input type="text" size="20" name="drink_color"></li>
				<li class="table_line"><input type="submit" value="Add"></li>
				<ul>
				
				<ul class="table">
				<li><li>
				</ul>
				</form>

<a href="drink_list.php">Click here to see the drinks list</a>				
			</div>
			</div>
		</div>
		
	</body> 
</html>
