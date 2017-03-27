<html>
	<head>
		<title>Place added</title>
		
		<?php 
		@mysql_connect("localhost", "root", "debollevanplus")
		or die (mysql_error());

		mysql_select_db("drinks");
		
		
		}	
			
			

			
			$result1 = mysql_query("SELECT * FROM drinkstable WHERE Namedrink = '$ingredient1'");
			$row1 = mysql_fetch_array($result1);
			$place1 =  $row1['Place'];
			
		?>
		
	</head>
	<body>
	<div class="page-wrap">	
			<div id="left">
				<h2>The following bottles were placed:</h2><br><br>
				
			</div>
	</div> 
	

	</body>
</html>
