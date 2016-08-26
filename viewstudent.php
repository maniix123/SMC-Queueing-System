<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Student</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
  </head>

<body>
	<?php
		include 'nav.php';
	?>
	<div class="container">
		<a href="addstudent.php"><input type="submit" class="btn btn-default" value="Add Student"></a>
	</div>
	<p></p>
    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Student</h4>
			</div>
				<div class="panel-body">
        <?php
        	include 'database.php';
			$sql="select * from student";
			
			$result = mysql_query($sql); 
			echo '<div class="table-responsive">';
			echo '<table class="table table-hover">';
			echo '<thead>';
			echo '<tr>
				  	<th> ID Number </th>
				  	<th> Name </th>
				  	<th> Address </th>
				  	<th> Course </th>
				  	<th> Year </th>
				  	<th> Department </th>
				  	<th> Status </th>
				  	<th> Action</th></tr></thead>';
			while($row = mysql_fetch_array($result)) {
					$id = $row['ID'];
			echo "<tr>
					<td>". $row['ID_Number'] ."</td>
					<td>". $row['Student_Name'] ."</td>
					<td>". $row['Student_Address'] ."</td>
					<td>". $row['Student_Course'] ."</td>
					<td>". $row['Standing'] ."</td>
					<td>". $row['College_Department'] ."</td>
					<td>". $row['Status'] ."</td>
					<td><p><a href='editstudent.php?id=".$row['ID_Number']."'><input type='submit' class='btn btn-primary btn-xs' value='Update'></a></p> 
						<p><a href='deletestudent.php?id=".$row['ID_Number']."'><input type='submit' class='btn btn-danger btn-xs' value='Delete'></a></p> 
					</td>
				</tr>";
			}

			echo '</table>';
			echo '</div>'
			
		?>
			</div>
		</div>
    </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
