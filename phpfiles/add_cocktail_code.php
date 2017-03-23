<div class="container">
	<form name="form" method="post" action="add_cocktail_post.php" class = "form-horizontal"> 
			<h1 class="text-center">Add a cocktail</h1>
			<hr>
			<div> &nbsp </div>
			<div> &nbsp </div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="text1" class="col-2 col-form-label">Cocktail name:</label>
							</div>
							<div class="col-md-8">
								<input type="text" size="20" name="name_cocktail" class="form-control" id="text1">
							</div>
						</div>	
						
						<div class="form-group row">
							<label for="ingredient1" class="col-2 col-form-label">-----------</label>
							<div class="col-10">
								<select class="form-control" name="ingredient1" id="ingredient1">
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
							</div>
						</div>		
							
						<div class="form-group row">
							<label for="ingredient2">-----------</label>	
							<select class="form-control" name="ingredient2">
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
						</div>
						
						<div class="form-group row">
							<label for="ingredient3">-----------</label>
							<select class="form-control" name="ingredient3">
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
						</div>						
						
						<!-- <ul class="table3">
						<li class="table_line">&nbsp</li>
						<li class="table_line"><input type="text" size="20" name="amount_1"> ml</li>
						<li class="table_line"><input type="text" size="20" name="amount_2"> ml</li>
						<li class="table_line"><input type="text" size="20" name="amount_3"> ml</li>	
						<li class="table_line"></li>
						</ul>
						-->
						
						<div class="form-group center"> 
							<div>
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>
			<!-- <a href="cocktail_list.php">Click here to see cocktail list</a><br>
			<a href="add_drink.php">Click here to add drinks</a> -->
</div>