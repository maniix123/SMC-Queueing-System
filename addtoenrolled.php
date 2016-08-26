
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
	$sql = "SELECT * FROM subjects
			where Subject_ID = '$id'";
			
			$a = mysql_query($sql);
			while($row = mysql_fetch_array($a)){
				$ID = $row['Subject_ID'];
				$scode = $row['Subject_Code'];
				$sdescription = $row['Subject_Description'];
				$units = $row['Units']; 
				$prerequisite = $row['Pre_Requisite']; 
				$price = $row['Price']; 		
			}
	?>
	<?php
		include 'nav.php';
	?>
    <div class="container">
		<div class="jumbotron">
			<p>Add Subject</p>
			<form action="addtoenrolledprocess.php" method="POST">
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
						<td><input type="text"  class="form-control" id="tprice" name="tprice" required value="<?php echo $price; ?>" /></td>
					</tr>
					<tr>
						<td>Time</td>
						<td><input type="text"  class="form-control" id="time" name="time" required placeholder="Time Schedule" /></td>
					</tr>
					<tr>
						<td>Day</td>
						<td><input type="text"  class="form-control" id="day" name="day" required  placeholder="Day Schedule" /></td>
					</tr>
					<tr>
						<td>Total Units</td>
						<td><input  type="text" class="form-control" id="sunits" name="sunits" required value="<?php echo $units; ?>" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary btn-m" value="ADD" /></td>
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
