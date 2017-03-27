<div class="container">
	<form name="form" method="post" action="add_cocktail_post.php" class = "form-horizontal"> 
			<h1 class="text-center">Add a cocktail</h1>
			<hr>
			<div> &nbsp </div>
			<div> &nbsp </div>
						<div class="form-group row">
							<div class="col-md-8">
								<label for="text1" class="col-2 col-form-label">Cocktail name:</label>
								<input type="text" size="20" name="name_cocktail" class="form-control" id="text1" placeholder="Choose">
							</div>
						</div>	
						
						
						<div class="form-group row">
							<div class = "col-md-8">
								<label for="ingredient1" class="col-2 col-form-label">Ingredient</label>
								<div class="col-10">
									<select class="form-control" name="ingredient1" id="ingredient1" placeholder="Choose">
										<option value=" " disabled selected>Choose...</option>
											<?php
											$query = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
											$result = mysql_query($query);
													while($row = mysql_fetch_array($result))
												{	
													echo "<option>" . $row['Namedrink'] . "</option>";
												}
												
											?>
									</select>
								</div>
							</div>		
						
							<div class = "col-md-4">
								<label for="text2" class="col-2 col-form-label">amount in ml</label>
								<input type="number" size="20" name="amount_1" class="form-control" id="text2" placeholder="Choose">
							</div>
						</div>
								
						<div class="form-group row">
							<div class = "col-md-8">
								<label for="ingredient2">Ingredient</label>	
								<select class="form-control" name="ingredient2" placeholder="Choose">
									<option value=" " disabled selected>Choose...</option>
										<?php
											$query = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
											$result = mysql_query($query);
											while($row = mysql_fetch_array($result))
											{
												echo "<option>" . $row['Namedrink'] . "</option>";
											}
											
										?>
								</select>
							</div>
							
							<div class = "col-md-4">
								<label for="text3" class="col-2 col-form-label" >amount in ml</label>
								<input type="number" size="20" name="amount_2" class="form-control" id="text3" placeholder="Choose">
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-md-8">
								<label for="ingredient3">Ingredient</label>
								<select class="form-control" name="ingredient3" placeholder="Choose">
									<option value=" " disabled selected>Choose...</option>
										<?php
											$query = "SELECT * FROM drinkstable"; //You don't need a ; like you do in SQL
											$result = mysql_query($query);
											while($row = mysql_fetch_array($result))
											{
												
												echo "<option>" . $row['Namedrink'] . "</option>";
											}
											
										?>
								</select>
							</div>
							<div class = "col-md-4">
								<label for="text4" class="col-2 col-form-label">amount in ml</label>
								<input type="number" size="20" name="amount_3" class="form-control" id="text4" placeholder="Choose">
							</div>
						</div>
						
						<div class="form-group center"> 
							<div>
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>
			<!-- <a href="cocktail_list.php">Click here to see cocktail list</a><br>
			<a href="add_drink.php">Click here to add drinks</a> -->
</div>