
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
  </head>

<body>
	<?php

	session_start();
	include 'database.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM enrolled_subjects
			where Enrolled_Subjects_ID = '$id'";
			
			$a = mysql_query($sql);
			while($row = mysql_fetch_array($a)){
				$ID = $row['Subject_ID'];
				$scode = $row['Subject_Code'];
				$sdescription = $row['Subject_Description'];
				$tprice = $row['Total_Price']; 
				$stime = $row['Subject_Time']; 
				$sday = $row['Subject_Day']; 
				$tunits = $row['Total_Units']; 		
			}
	?>
	<?php
		include 'nav.php';
	?>

    <div class="container">
		<div class="jumbotron">
			<p>Add Subject</p>
			<form action="updateesubjects.php" method="POST">
				<div class="table-responsive">
				<table class="table">
					<input type="hidden"  id="ID" name="ID" required value="<?php echo $ID; ?>" />
					<tr>
						<td>Subject Code</td>
						<td><input type="text"  class="form-control" id="scode" name="scode" required value="<?php echo $scode; ?>" /></td>
					</tr>
					<tr>
						<td>Subject Description</td>
						<td><input type="text"  class="form-control" id="sdescription" name="sdescription" required value="<?php echo $sdescription; ?>" /></td>
					</tr>
					<tr>
						<td>Total Price</td>
						<td><input type="text"  class="form-control" id="tprice" name="tprice" required  value="<?php echo $tprice; ?>" /></td>
					</tr>
					<tr>
						<td>Time</td>
						<td><input  type="text" class="form-control" id="stime" name="stime" required value="<?php echo $stime; ?>" /></td>
					</tr>
					<tr>
						<td>Day</td>
						<td><input  type="text" class="form-control" id="sday" name="sday" required value="<?php echo $sday; ?>" /></td>
					</tr>
					<tr>
						<td>Total Units</td>
						<td><input  type="text" class="form-control" id="tunits" name="tunits" required value="<?php echo $tunits; ?>" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary btn-m" value="UPDATE" /></td>
					</tr>
				</table>
				</div>							
			</form>
		</div>
    </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
