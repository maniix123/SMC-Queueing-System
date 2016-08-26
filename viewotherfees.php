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
		<a href="addotherfees.php"><input type="submit" class="btn btn-default" value="Add Other Fees"></a>
	</div>
	<p></p>
    <div class="container">
      <div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Other fees</h4>
			</div>
			<div class="panel-body">
        <?php
        	include 'database.php';
			$sql="select * from other_fees";
			
			$result = mysql_query($sql); 
			echo '<div class="table-responsive">';
			echo '<table class="table table-hover">';
			echo '<thead><tr>
				  	<th> Name </th>
				  	<th> Cost </th>
				  	<th> Action </th></tr></thead>';
			while($row = mysql_fetch_array($result)) {
					$id = $row['ID'];
			echo "<tr>
					<td>". $row['Name'] ."</td>
					<td>". $row['Price'] ."</td>
					<td><a href='editmisfees.php?id=".$row['ID']."'><input type='submit' class='btn btn-primary btn-xs' value='Update'></a> 
						<a href='deletemisfees.php?id=".$row['ID']."'><input type='submit' class='btn btn-danger btn-xs' value='Delete'></a> </td></tr>";
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
