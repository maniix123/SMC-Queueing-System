<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Enrolled Subject</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
  </head>

<body>
	<?php
		include 'nav.php';
	?>
	<div class="container">
		<a href="viewsubject.php"><input type="submit" class="btn btn-default" value="Add Enrolled Subject"></a>
	</div>
	<p></p>
    <div class="container">
      <div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Enrolled Subject</h4>
			</div>
				<div class="panel-body">
        <?php
        	include 'database.php';
			$sql="select * from enrolled_subjects";
			
			$result = mysql_query($sql); 
			echo '<div class="table-responsive">';
			echo '<table class="table table-hover">';

			echo '<thead><tr>
				  	<th> Code </th>
				  	<th> Description </th>
				  	<th> Price </th>
				  	<th> Time </th>
				  	<th> Day </th>
				  	<th> Units </th>
				  	<th> Action </th><tr></thead>';
					
			while($row = mysql_fetch_array($result)) {
					$id = $row['Enrolled_Subjects_ID'];
			echo "<tr>
					<td>". $row['Subject_Code'] ."</td>
					<td>". $row['Subject_Description'] ."</td>
					<td>". $row['Total_Price'] ."</td>
					<td>". $row['Subject_Time'] ."</td>
					<td>". $row['Subject_Day'] ."</td>
					<td>". $row['Total_Units'] ."</td>
					<td><a href='editesubject.php?id=".$row['Enrolled_Subjects_ID']."'><input type='submit' class='btn btn-primary btn-xs' value='Update'></a> <a href='edeletesubject.php?id=".$row['Enrolled_Subjects_ID']."'><input type='submit' class='btn btn-danger btn-xs' value='Delete'></a> </td></tr>";
			}

			echo '</table>';
			echo '</div>'
			
		?>
			</div>
		<div>
    </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
