<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Priority Number</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
	<style>
		body {
			background-color: #337ab7;
			color: #fff;
		}
	</style>
  </head>
<body>
    <div class="container">
    <h2 style="font-family:Old English Text MT;">St. Michael's College</h2>	
    	<?php

			session_start();
			include 'database.php';
			
			$pget = "SELECT * FROM getnum";
				$pgetres = mysql_query($pget);
				
				if(mysql_num_rows($pgetres) > 0) {
					
					echo '<script type="text/javascript">'; 
						echo 'alert("Priority Number is Temporary Not Available Please Try Again Later.");'; 
						echo 'window.location.href = "studenthome.php";';
					echo '</script>';
				}
				
				else{
			
			$spayment = $_POST['spayment'];
			
			$check ="SELECT * FROM queue where Student_ID = '$_SESSION[Session_ID]'";
			$result = mysql_query($check);
			
			if($result) {
				if(mysql_num_rows($result) > 0) {
						echo '<script type="text/javascript">'; 
							echo 'alert("You Cant Get 2 Priority Number");'; 
							echo 'window.location.href = "studenthome.php";';
						echo '</script>';
				}
				
			
			else {
				require 'numprio.php';
			}
			}
			
				}

		?>
    </div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
