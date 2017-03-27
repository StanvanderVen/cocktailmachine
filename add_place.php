<html>
	<head>
		<link rel="stylesheet"type="text/css" href="cocktailmachine.css">
		<link rel="stylesheet"type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<title>Add places</title>
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
			
		
			?>
			<div class="container">
				<div class="row">
					<div class="form-group">
<div class="col-md-2">

			<select class="form-control" name="bottle1">
				<option disabled selected>Choose</option>
				<?php
				$query1 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result1 = mysql_query($query1);
				
				while($row1 = mysql_fetch_array($result1))
					{
					echo "<option>" . $row1['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle2">
				<option disabled selected>Choose</option>
				<?php
				$query2 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result2 = mysql_query($query2);
				
				while($row2 = mysql_fetch_array($result2))
					{
					echo "<option>" . $row2['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle3">
				<option disabled selected>Choose</option>
				<?php
				$query3 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result3 = mysql_query($query3);
				
				while($row3 = mysql_fetch_array($result3))
					{
					echo "<option>" . $row3['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle4">
				<option disabled selected>Choose</option>
				<?php
				$query4 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result4 = mysql_query($query4);
				
				while($row4 = mysql_fetch_array($result4))
					{
					echo "<option>" . $row4['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle5">
				<option disabled selected>Choose</option>
				<?php
				$query5 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result5 = mysql_query($query5);
				
				while($row5 = mysql_fetch_array($result5))
					{
					echo "<option>" . $row5['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle6">
				<option disabled selected>Choose</option>
				<?php
				$query6 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result6 = mysql_query($query6);
				
				while($row6 = mysql_fetch_array($result6))
					{
					echo "<option>" . $row6['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle7">
				<option disabled selected>Choose</option>
				<?php
				$query7 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result7 = mysql_query($query7);
				
				while($row7 = mysql_fetch_array($result7))
					{
					echo "<option>" . $row7['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle8">
				<option disabled selected>Choose</option>
				<?php
				$query8 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result8 = mysql_query($query8);
				
				while($row8 = mysql_fetch_array($result8))
					{
					echo "<option>" . $row8['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle9">
				<option disabled selected>Choose</option>
				<?php
				$query9 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result9 = mysql_query($query9);
				
				while($row9 = mysql_fetch_array($result9))
					{
					echo "<option>" . $row9['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>

<div class="col-md-2">

			<select class="form-control" name="bottle10">
				<option disabled selected>Choose</option>
				<?php
				$query10 = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
				$result10 = mysql_query($query10);
				
				while($row10 = mysql_fetch_array($result10))
					{
					echo "<option>" . $row10['Namedrink'] . "</option>";
					}
				?>
</select>
			</div>







					</div>
				</div>
			</div>
				
		
		<?php

			
			
			

			
			$result1 = mysql_query("SELECT * FROM drinkstable WHERE Namedrink = '$ingredient1'");
			$row1 = mysql_fetch_array($result1);
			$place1 =  $row1['Place'];
			
		?>
		
	</head>
	<body>
	<div class="page-wrap">	
			<div id="left">
				<h2>Place bottles:</h2><br><br>
				
			</div>
	</div> 
	

	</body>
</html>
