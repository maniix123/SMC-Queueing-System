<?php
  session_start();
  include 'database.php';

	$sql = "SELECT * FROM student
				WHERE ID_Number = '$_SESSION[Session_ID]'";
				
		$a = mysql_query($sql);
			
			while($row = mysql_fetch_array($a))
			{
				$id = $row['ID'];
				$idnum = $row['ID_Number'];
				$sname = $row['Student_Name']; 
				$saddress = $row['Student_Address'];
				$scourse = $row['Student_Course'];
				$cd = $row['College_Department'];
				$standing = $row['Standing'];
				$status = $row['Status'];
			}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student home</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
	<link href="slideanim.css" rel="stylesheet">
</head>
<style>
	#td-bold {
		font-weight: bold;
	}
	#summary_bold {
		font-weight: bold;
	}
</style>
<body>
	
    <div class="container">
		<h2 style='font-family:Old English Text MT;'>St. Michael's College</h2>
		
		<p><a href="accounts_inquiry.php">Sign out</a></p>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Student Information</h4>
			</div><!--panel-heading-->
				<div class="panel-body">
					<div class="table-responsive">
					  <table class="table">
							<tr>
								<td id="td-bold">Name:</td> 
								<td><?php echo $sname; ?></td>
								<td id="td-bold">Course:</td> 
								<td><?php echo $scourse; echo ' '; echo $standing;  ?></td>
							</tr>
						<tr>
							<td id="td-bold">ID Number:</td> 
							<td><?php echo $_SESSION['Session_ID'];?></td>
							<td id="td-bold">Status: </td> 
							<td><?php echo $status; ?></td>
						</tr>
					  </table>
					</div><!--table-reponsive-->
			</div><!--pane-body-->
		</div><!--panel panel-default-->
	</div><!--container-->
	
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Account inquiry information</h4>
			</div>
			<div class="panel-body">
				<?php
					
				?>
			</div>
		</div>
	</div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
