<!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment</title>
    <link href="bootstrap/assessment.css" rel="stylesheet">
	<style>
		#td_bold {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
	<h2>St. Michael's College</h2>
	<?php

	session_start();
	echo '<div class="panel panel-default">';
	echo '<div class="panel-heading">';
	echo "<strong>". $_SESSION['Session_ID'] . "</strong>";
	echo '</div>';
	include 'database.php';

	$id = $_GET['id'];
	
		$sub = "SELECT * FROM enrolled_subjects where Subject_ID = '$id' AND Student_ID = '$_SESSION[Session_ID]'";
			$sub1 = mysql_query($sub);
			
			if(mysql_num_rows($sub1) > 0){	
					echo '<script type="text/javascript">'; 
						echo 'alert("Subject Already Enrolled!!");'; 
						echo 'window.location.href = "enrollsubject.php";';
					echo '</script>';
				}
				
			else{
				
				$sql = "SELECT * FROM subjects
						where Subject_ID = '$id'";
							
							$a = mysql_query($sql);
								while($row = mysql_fetch_array($a)){
									$ID = $row['Subject_ID'];
									$scode = $row['Subject_Code'];
									$sdescription = $row['Subject_Description'];
									$section = $row['Section'];
									$day = $row['Day'];
									$time = $row['Time'];
									$room = $row['Room'];
									$units = $row['Units']; 
									$prerequisite = $row['Pre_Requisite']; 
									$price = $row['Price']; 		
								}
							}
		?>
	<div class="panel-body">
		<form action="enrolledprocess.php" method="POST"> 
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="table-responsive">
				<table class="table">
					<input type="hidden"  id="ID" name="ID" readonly value="<?php echo $ID; ?>" />
					<tr>
						<td id="td_bold">Subject Code</td>
						<td><input type="text" class="form-control" id="scode" name="scode" readonly value="<?php echo $scode; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Subject Description</td>
						<td><input type="text" class="form-control"  id="sdescription" name="sdescription" readonly value="<?php echo $sdescription; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Section</td>
						<td><input type="text" class="form-control"  id="section" name="section" readonly  value="<?php echo $section; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Day</td>
						<td><input type="text" class="form-control"  id="day" name="day" readonly  value="<?php echo $day; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Time</td>
						<td><input type="text" class="form-control"  id="time" name="time" readonly value="<?php echo $time; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Room</td>
						<td><input type="text" class="form-control"  id="room" name="room" readonly value="<?php echo $room; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Total Units:</td>
						<td><input  type="text" class="form-control" id="sunits" name="sunits" readonly value="<?php echo $units; ?>" /></td>
					</tr>
					<tr>
						<td id="td_bold">Total Price:</td>
						<td><input type="text" class="form-control"  id="tprice" name="tprice" readonly value="<?php echo $price; ?>" /></td>	
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Add"></td>	
					</tr>
									
				</table>
			</div>
		</form>
		</div>
		<div class="col-md-2"></div>
	</div>
	</div>
</div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>