
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
	$sql = "SELECT * FROM student
			where ID_Number = '$id'";
			
			$a = mysql_query($sql);
			while($row = mysql_fetch_array($a)){
				$ID = $row['ID'];
				$idnum = $row['ID_Number'];
				$name = $row['Student_Name'];
				$address = $row['Student_Address']; 
				$course = $row['Student_Course']; 
				$department = $row['College_Department']; 
				$standing = $row['Standing'];			
				$status = $row['Status'];			
			}
			
		
	?>
	<?php
		include 'nav.php'
	?>
    <div class="container">
		<div class="jumbotron">
			<p>Update Student</p>
			<form action="updatestudent.php" method="POST">
				<div class="table-responsive">
				<table class="table">
						<input type="hidden" id="ID" name="ID" required value="<?php echo $ID; ?>" />
					<tr>
						<td>ID Number</td>
						<td><input type="text"  class="form-control"id="idnum" name="idnum" required value="<?php echo $idnum; ?>" /></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type="text"  class="form-control" id="name" name="name" required value="<?php echo $name; ?>" /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text"  class="form-control" id="address" name="address" required  value="<?php echo $address; ?>" /></td>
					</tr>
					<tr>
						<td>Course</td>
						<td><input  type="text" class="form-control" id="course" name="course" required value="<?php echo $course; ?>" /></td>
					</tr>
					<tr>
						<td>Department</td>
						<td><input  type="text" class="form-control" id="department" name="department" required value="<?php echo $department; ?>" /></td>
					</tr>
					<tr>
						<td>Year</td>
						<td><input  type="text" class="form-control" id="standing" name="standing" required value="<?php echo $standing; ?>" /></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><input  type="text" class="form-control" id="status" name="status" required value="<?php echo $status; ?>" /></td>
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
