<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Subject</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
    <link href="bootstrap/table.css" rel="stylesheet">
  </head>

<body>
	<?php
		include 'nav.php';
	?>
	<div class="container">
		<a href="addsubject.php"><input type="submit" class="btn btn-default" value="Add Subject"></a>
	</div>
	<p></p>
    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Subject</h4>
			</div>
				<div class="panel-body">
        <?php
        	include 'database.php';
			$sql="select * from subjects";
			
			$result = mysql_query($sql); 
			echo '<div class="table-responsive">';
			echo '<table class="table table-hover">';
			echo '<thead><tr>
				  	<th> Code </th>
				  	<th> Description </th>
				  	<th> Section </th>
				  	<th> Day </th>
				  	<th> Time </th>
				  	<th> Room </th>
				  	<th> Units </th>
				  	<th> Pre-requisite </th>
				  	<th> Price </th>
				  	<th> Action </th></thead>';
			while($row = mysql_fetch_array($result)) {
					$id = $row['Subject_ID'];
			echo "<tr>
					<td>". $row['Subject_Code'] ."</td>
					<td>". $row['Subject_Description'] ."</td>
					<td>". $row['Section'] ."</td>
					<td>". $row['Day'] ."</td>
					<td>". $row['Time'] ."</td>
					<td>". $row['Room'] ."</td>
					<td>". $row['Units'] ."</td>
					<td>". $row['Pre_Requisite'] ."</td>
					<td>". $row['Price'] ."</td>
					<td><a href='editsubject.php?id=".$row['Subject_ID']."'><input type='submit' class='btn btn-primary btn-xs' value='Update'></a> <a href='deletesubject.php?id=".$row['Subject_ID']."'><input type='submit' class='btn btn-danger btn-xs' value='Delete'></a></tr>";
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
