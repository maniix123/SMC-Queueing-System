<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Queue beta</title>
   <link href="bootstrap/bootstrap.css" rel="stylesheet">
   <style>
		#th-color {

		}
   </style>
</head>
<body>
<?php

	session_start();
	include 'database.php';

		
	
	$sql = "SELECT * FROM queue ORDER BY Queue_ID ASC LIMIT 1";
	$queue = mysql_query($sql);
	if(!$queue){echo mysql_error();}
	while($row = mysql_fetch_array($queue)){
				$ID = $row['Queue_ID'];
				$SID = $row['Student_ID'];	
						
			}
			
	$lqs = "SELECT * FROM assessment where Student_ID = '$SID'";	
	$view = mysql_query($lqs);
	if(!$view){echo mysql_error();}
	while($row = mysql_fetch_array($view)){
				$SID = $row['Student_ID'];
				$tbp = $row['Balance'];	
						
			}
	?>
	<div class = "container">
	<h1>St. Michael's College</h1>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Current Number : <?php echo $ID; ?></h2>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<form action="payment.php" method="POST" role="form" class="form-inline">
								<input type="hidden" id="sid" name="sid" value="<?php echo $SID; ?>"> 
								<input type="text" class="form-control" id="tbp" name="tbp" value="<?php echo $tbp; ?>"> &nbsp
								<input type="text" class="form-control" id="cash" name="cash" placeholder="Cash"> &nbsp
								<input type="submit" class="btn btn-primary" value="Submit">
							</form>
						</div>
						<div class="col-md-6">
							<form	action="queueprev.php" method="POST">
							<input type="hidden" name="currentnum" id="currentnum" value="<?php echo $ID; ?>">
							<input type="submit" value="previous" class="btn btn-primary btn-lg"/> 
							</form>
			
							<p><form	action="queuenext.php" method="POST">
								<input type="hidden" name="currentnum" id="currentnum" value=<?php echo $ID; ?>>
								<input type="submit" class="btn btn-primary btn-lg" value="next" /> 
							</form></p>
						</div>
					</div>
				</div><!--panel-body-->
		</div><!--panel panel-default-->
	</div><!--container-->
	
	<?php
	$a = "SELECT * FROM student where ID_Number = '$SID'";	
	$student = mysql_query($a);
	?>
	<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><strong>Student Information</strong></h4>
		</div><!--Panel heading-->
			<div class="panel-body">
				<div class="table-responsive">
				<table class="table" data-role = "table">
		<?php	
		while($row = mysql_fetch_array($student)){
					echo	"<tr>	<td style='font-weight:bold;width:100px;'>Name:</td>	
									<td style='width:250px;'>" . $row['Student_Name'] . "</td>
									<td style='font-weight:bold;width:100px;'>Course:</td> 		
									<td style='width:250px;'>" . $row['Student_Course'] . "</td>
									<td style='font-weight:bold;width:100px;'>Status:</td>
									<td></td>
							</tr>
							<tr>	
									<td style='font-weight:bold;'>ID Number:</td>			
									<td style='width:250px;'>" . $row['ID_Number'] . "</td>
									<td style='font-weight:bold;'>Standing:</td> 				
									<td style='width:250px;'>" . $row['Standing'] . "</td> 			
									<td></td>
									<td></td>
							</tr>";	
						
				}
		?>
				</table>
				</div>
			</div>
	</div>
	</div>	
	
	<div class="container">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h4><strong>Student assessment form</strong></h4>
		</div>
	<?php
	$ass = "SELECT * FROM enrolled_subjects where Student_ID = '$SID'";
	$b = mysql_query($ass);
	?>
			<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr> 	
						<th id="th-color"> SUBJECT CODE </th>		
						<th id="th-color"> DESCRIPTIVE TITLE </th>		
						<th id="th-color"> SECTION </th>		
						<th id="th-color"> DAY </th>		
						<th id="th-color"> TIME </th>		
						<th id="th-color"> ROOM </th>				
						<th id="th-color"> UNITS HOURS </th>				
						<th id="th-color"> LAB TYPE </th>				
					</tr>
				</thead>
	<?php		
			while($row = mysql_fetch_array($b)){
				echo	"<tr>		
								<td>" . $row['Subject_Code'] . "</td> 		
								<td>" . $row['Subject_Description'] . "</td> 		
								<td>" . $row['Enrolled_Subjects_ID'] . "</td> 		
								<td>" . $row['Subject_Day'] . "</td> 		
								<td>" . $row['Subject_Time'] . "</td> 	
								<td>" . $row['Enrolled_Subjects_ID'] . "</td> 	
								<td>" . $row['Total_Units'] . "</td> 	
								<td>" . $row['Enrolled_Subjects_ID'] . "</td> 		
						</tr>";									
								
			}

	?>
			</div><!--table-reponsive-->
		</div><!--panel panel-default-->
	</div><!--container-->
</body>
</html>