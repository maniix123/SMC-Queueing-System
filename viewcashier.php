<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Student</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
    <link href="bootstrap/table.css" rel="stylesheet">
  </head>

<body>
	<?php
		include 'nav.php';
	?>
	<div class="container">
		<a href="addcashier.php"><input type="submit" class="btn btn-default" value="Add Cashier"></a>
	</div>
	<p></p>
    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Cashier</h4>
			</div>	
				<div class="panel-body">
        <?php
        	include 'database.php';
			$sql="select * from cashier";
			
			$result = mysql_query($sql); 
			echo "<div class='table-responsive'>";
			echo '<table class="table table-hover">';
				echo "<thead>";
					echo '<tr>
							<th> First Name </th>
							<th> Last Name </th>
							<th> Window Number </th>
							<th> Action </th><tr>';	
				echo "</thead>";
			while($row = mysql_fetch_array($result)) {
					$id = $row['Cashier_ID'];

			echo "<tr>
					<td>". $row['Cashier_FirstName'] ."</td>
					<td>". $row['Cashier_LastName'] ."</td>
					<td>". $row['Window_Number'] ."</td>
					<td><a href='editcashier.php?id=".$row['Cashier_ID']."'><input type='submit' class='btn btn-primary btn-xs' value='Update'></a> <a href='deletecashier.php?id=".$row['Cashier_ID']."'><input type='submit' class='btn btn-danger btn-xs' value='Delete'></a> </td></tr>";
			}
			echo '</table>';
			echo '</div>';
		?>		
				</div>
		</div>
    </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
