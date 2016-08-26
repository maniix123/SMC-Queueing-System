<?php 	session_start();
	session_set_cookie_params(3600 * 24 * 7);?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Queue</title>
	<link href="icon.jpg" rel="icon">
    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
    <style>
		#td_bold {
			font-weight:bold;
		}
   </style>
 </head>
<body>
<?php
	include 'database.php';

	$currentnum = $_POST['currentnum'];
	$CS = $_POST['session'];
	
	// update the current queue and the payment
	$done = mysql_query("UPDATE queue SET Status = 'Done' where Queue_ID = '$currentnum'");
	
	$klent = mysql_query("SELECT * FROM queue where Queue_ID = '$currentnum'");
		if(mysql_num_rows($klent) > 0){	
			while ($row = mysql_fetch_array($klent)){
				$csid = $row['Student_ID'];
			}
		
		$checkpaid = mysql_query("DELETE FROM extra_pay where Student_ID = '$csid' AND Status = 'Current'");
		}

	$top = mysql_query("SELECT * FROM queue where Cashier_Window = '0' AND Status = 'Pending'  ORDER BY Queue_ID ASC LIMIT 1");		
		if(mysql_num_rows($top) >= 1){
				while($row = mysql_fetch_array($top)){
							$ID = $row['Queue_ID'];
							$SID = $row['Student_ID'];				
						}
		
			$cur = mysql_query("UPDATE queue SET Status = 'Current' Where Cashier_Window = '0'  ORDER BY Queue_ID ASC LIMIT 1 ");
			$curr = mysql_query("UPDATE extra_pay SET Status = 'Current' Where Student_ID = '$SID' AND Status = 'Pending' AND Date >= date_sub(NOW(), interval 1 DAY)");
		
			$rescash = mysql_query("SELECT * FROM cashier where Cashier_ID = '$CS'");
						while($row = mysql_fetch_array($rescash)){
							$CID = $row['Cashier_ID'];
							$WN = $row['Window_Number'];
						}
			
			$resucash = mysql_query("UPDATE queue SET Cashier_Window = '$WN' where Queue_ID = '$ID'");
				
			$del = "Delete from queue where Status = 'Done'";
			mysql_query($del);
		
		$total = 0;	
		$extra = mysql_query("select * from extra_pay where Student_ID = '$SID' and Status = 'Current' and Date >= date_sub(NOW(), interval 1 DAY)");
			while($row = mysql_fetch_array($extra)){
						
				$code = $row['Code'];
				$name = $row['Name'];	
				$price = $row['Price'];	

			$total += $row['Price'];
		}
	
	
	$extra1 = mysql_query("select * from extra_pay where Student_ID = '$SID' and Name = 'Tuition Fee' and Status = 'Current' and Date >= date_sub(NOW(), interval 1 DAY)");
		if(mysql_num_rows($extra1) > 0) {
			while($row = mysql_fetch_array($extra1)){
						
				$tuitionprice = $row['Price'];	
			}
		}
			else{
				$tuitionprice = 0 ;
			}		
	
				
?>
<div class="container">
	<h2 style="font-family:Old English Text Mt;">St. Michael's College</h2>
			
			<form action="cashierhomeprocess.php" method="POST">
				<input type="hidden" id="session" name="session" value="<?php echo $CS; ?>">
				<p class="pull-right"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Logout</button></p>
			</form>
				
			<br></br>
			
			<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Current Number : <?php echo "<span style='font-size:40px;color:red;'>". $ID ."</span>"; ?></h4>
			</div>
			<div class="panel-body">
			<div class="col-md-6">
			<form action="payment.php" method="POST">
				<input type="hidden" name="session" id="session" value=<?php echo $CS; ?>>
				<input type="hidden" id="sid" name="sid" value="<?php echo $SID; ?>"> 
				<input type="hidden" id="qid" name="qid" value="<?php echo $ID; ?>"> 
				<input type="hidden" id="tuitionprice" name="tuitionprice" value="<?php echo $tuitionprice; ?>"> 
				
				<div class="input-group"> 
					 <span class="input-group-addon">₱</span>
						<p><input type="text" step="0.01" class="form-control" id="tbp" name="tbp" readonly value="<?php echo $total; ?>"></p>
				 </div>	
				 
				<div class="input-group"> 
					 <span class="input-group-addon">₱</span>
						<p><input type="number" step="0.01" class="form-control" min = "<?php echo $total?>" id="cash" name="cash" autofocus required placeholder="Cash"></p>
				 </div>
				<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Submit</button>
			</form>
			</div>
			
			<form	action="queuenext1.php" method="POST">
				<input type="hidden" name="session" id="session" value=<?php echo $CS; ?>>
				<input type="hidden" name="currentnum" id="currentnum" value=<?php echo $ID; ?>>
				<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-chevron-right"></span> Next</button>
		</form>
		</div>
		
		<?php
				
			echo 'List of Payment: <br>';			
			
			$student = mysql_query("SELECT * FROM queue where Status = 'Current' AND Queue_ID = '$ID' AND Cashier_Window = '$WN' ");
				while ($row = mysql_fetch_array($student)){						
					$curstudent = $row['Student_ID'];		
				}
						
			$curpayment = mysql_query("SELECT * FROM extra_pay WHERE Student_ID = '$curstudent' AND Status = 'Current'");
				while($row = mysql_fetch_array($curpayment)){	
					$curname = $row['Name'];
					$curprice = $row['Price'];
									
					echo $curname . ' ';
					echo $curprice . '<br>';
			}
					
						
					
		?>
		
		</div>
</div>
<?php
	echo '<div class="container">';
	echo '<div class="panel panel-default">';
	echo '<div class="panel-heading">';
	echo '<h4>Student Information<h4>';
	echo '</div>';
		echo '<div class="panel-body">';
	echo '<div class="table-responsive">';
	echo "<table class='table'>";
	$student1 = mysql_query("SELECT * FROM student where ID_Number = '$SID'");	
	while($row = mysql_fetch_array($student1)){
				echo	"<tr>	
							<td id='td_bold'>Name:</td>	
							<td>" . $row['Student_Name'] . "</td>
							<td id='td_bold'>Course/Year Level:</td> 		
							<td>" . $row['Student_Course'] . ' '. $row['Standing'] . "</td> 				
						</tr>
						<tr>	
							<td id='td_bold'>ID Number:</td>			
							<td>" . $row['ID_Number'] . "</td>
							<td id='td_bold'>Status:</td> 				
							<td>" . $row['Status'] . "</td> 			
						</tr>";	
			}
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
					
			
	$ass = "SELECT * FROM enrolled_subjects where Student_ID = '$SID'";
	
			$b = mysql_query($ass);
//Start here - Student Assessment Form
			echo '<div class="container">';
			echo '<div class="panel panel-primary">';
			echo '<div class="panel-heading">';
				echo '<h4>Student Assessment Form</h4>';
			echo '</div>';
			echo '<div class="panel-body">';
			echo '<div class="table-responsive">';
			echo '<table class="table">';
			
			echo '<thead><tr> 	
					<th> SUBJ. CODE </th>		
					<th> DESCRIPTIVE TITLE </th>		
					<th> SECTION </th>		
					<th> DAY </th>		
					<th> / TIME </th>		
					<th> ROOM </td>				
					<th> UNITS HOURS </th>				
					<th> LAB TYPE </th>				
				</tr></thead>';
				
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
			echo '</table>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
//End here - Student Assessment Form
		
		}
	
	else{
				echo '<script type="text/javascript">'; 
					echo 'alert("End of Queue!!");'; 
					echo 'window.location.href = "cashierhome.php";';
				echo '</script>';
			}	
		
?>	
</body>
</html>
