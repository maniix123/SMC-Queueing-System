<?php
	include 'database.php';
	
	$sql = "SELECT * FROM queue where Student_ID = '$_SESSION[Session_ID]'";
	$a = mysql_query($sql);
	while($row = mysql_fetch_array($a)){
				$id = $row['Queue_ID'];
			}
?>
<!DOCTYPE html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Priority Number</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
 </head>
<body>
	<div class="well">
		<div class="row">
			<div class="col-md-6">
				<p style="font-size:45px;">YOUR PRIORITY NUMBER IS:</p>
			</div>
			<div class="col-md-6">
				<p style="font-size:100px;"> <?php echo $id; ?> </p>
			</div>
		</div>
	</div>
	
	<a href="studenthome.php"> <input type='submit' class='btn btn-default btn-lg' value='Go Back'> </a>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>