<!DOCTPYE html>
<html>
<head>
	<title>Receipt</title>
	<link rel="stylesheet" href="Bootstrap/receipt.css">
	<link rel="icon" href="image/icon.jpg">
	<script src="Bootstrap/jquery.min.js"></script>
	<script src="Bootstrap/bootstrap.min.js"></script>
	<style>
		h2 {
			text-align: center;
			font-family: Old English Text Mt;
		}
		p#center {
			text-align:center;
		}
		#indent {
			width: 140px;
			padding:3px;
		}
		#info {
			background: #337ab7;
			padding:4px;
			color:#f2f2f2;
			border-radius: 4px;
		}
		#style {
			margin-left: 10px;
		}
	</style>
</head>
<body>
<div class="container">
<?php
		
		include 'database.php';
		
		$studentinfo = mysql_query("SELECT * FROM student where ID_Number = '$SID'");
			while($row = mysql_fetch_array($studentinfo)){
				$course = $row['Student_Course'];
				$level = $row['Standing'];
			}
		
		if($tuitionprice > 0){
		
		$qnext1 = mysql_query("SELECT * from queue where Student_ID = '$SID'");
				while($row = mysql_fetch_array($qnext1)){
					$qID = $row['Queue_ID'];			
				}
		$bal = mysql_query("SELECT * FROM assessment where Student_ID = '$SID'");
				while($row = mysql_fetch_array($bal)){	
					$rembal = $row['Balance'];
				}
				
		$OR = mysql_query("SELECT * FROM receipt where Student_ID = '$SID' AND Date = '$dated'" );
				while($row = mysql_fetch_array($OR)){
					
					$ornumber = $row['OR_Number'];
				}
				
		echo '<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">';
		echo "<h2>St. Michael's College</h2>";
		echo '<p id="center">Iligan City</p>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><img src="image/smcbackground.png" width="80" height="80"> SMC Express Payment Receipt</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
					<table>
						<tr>
							<td id="indent">ID. NO: </td>
							<td>'.$SID.'</td>
							<td>  </td>
							<td> OR NO:  </td>
							<td> '.$ornumber. '</td>
						</tr>
						<tr>
							<td id="indent">FULL NAME: </td>
							<td>'.$sname.'</td>
						</tr>
						<tr>
							<td id="indent">COURSE/LEVEL : </td>
							<td>'.$course. ' - ' . $level. '</td>
						</tr>
					</table>';
		echo '<div id="info">
						<h4 id="style">Payment Information</h4>
					</div>
						<div  style="padding:4px;">
						<table class="table">
							<thead><tr>
								<th>Code</th>
								<th>Payment Type</th>
								<th>Amount</th>
								
							</tr></thead>';
		$payed = mysql_query("SELECT * FROM extra_pay where Student_ID = '$SID' AND Status = 'Current' AND Date >= date_sub(NOW(), interval 1 DAY)");
		while($row = mysql_fetch_array($payed)){
				
				$code = $row['Code'];
				$name = $row['Name'];
				$price = $row['Price'];
				
				echo '<tr>';
				echo '<td>'.$code.'</td>';
				echo '<td>'.$name.'</td>' ;
				echo '<td>'.number_format($price, 2).'</td>';
				
				echo '</tr>';
		}
		echo '<th>Remaining Balance</th>';
		echo '<td>'.number_format($rembal, 2).'</td>';
		
		
		$paid = mysql_query("UPDATE extra_pay SET Status = 'Paid' WHERE Student_ID = '$SID' AND Status = 'Current' AND Date >= date_sub(NOW(), interval 1 DAY)");
		
		echo '			<p></p>
					
						</table>
						</div>
					</div>
					
					<div class="col-md-6">
						<table class="table">
							<thead><tr>
								<th>Total Amount</th>
								<th>Cash</th>
								<th>Change</th>
							</tr></thead>
							<tr>
								<td>'.number_format($tbp, 2).'</td>
								<td>'.number_format($cash, 2).'</td>
								<td>'.number_format($change, 2).'</td>
							</tr>
						</table>
					</div>
					<div class="col-md-12">
						<div id="info">
							<h4 id="style">Cashier Information</h4>
						</div>
					</div>
					<div class="col-md-8">
							<div  style="padding:4px;">
							<table>
								<tr>
									<td id="indent"><strong>Cashier Name</strong></td>
									<td>'.$fname.'</td>
									<td style="visibility:hidden;">'.$qID.'</td>
								</tr>
								<tr>
									<td id="indent"><strong>Signature</strong></td>
									<td></td>
								</tr>
							</table>
							</div>
					</div>
					<div class="col-md-4">
							<div  style="padding:4px;">
							<table>
								<tr>
									<td id="indent"><strong>Time</strong></td>
									<td>'.$time.'</td>
								</tr>
								<tr>
									<td id="indent"><strong>Date</strong></td>
									<td>'.$date.'</td>
								</tr>
							</table>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>';
	
	}
	
	else{
		$qnext1 = mysql_query("SELECT * from queue where Student_ID = '$SID'");
				while($row = mysql_fetch_array($qnext1)){
					$qID = $row['Queue_ID'];			
				}
				
		$OR = mysql_query("SELECT * FROM receipt where Student_ID = '$SID' AND Date = '$dated'" );
				while($row = mysql_fetch_array($OR)){
					
					$ornumber = $row['OR_Number'];
				}
				
		echo '<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">';
		echo "<h2>St. Michael's College</h2>";
		echo '<p id="center">Iligan City</p>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><img src="image/smcbackground.png" width="80" height="80"> SMC Express Payment Receipt</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
					<table>
						<tr>
							<td id="indent">ID. NO: </td>
							<td>'.$SID.'</td>
							<td>  </td>
							<td> OR NO:  </td>
							<td> '.$ornumber. '</td>
						</tr>
						<tr>
							<td id="indent">FULL NAME: </td>
							<td>'.$sname.'</td>
						</tr>
						<tr>
							<td id="indent">COURSE/LEVEL : </td>
							<td>'.$course. ' - ' . $level. '</td>
						</tr>
					</table>';
		echo '<div id="info">
						<h4 id="style">Payment Information</h4>
					</div>
						<div  style="padding:4px;">
						<table class="table">
							<thead><tr>
								<th>Code</th>
								<th>Payment Type</th>
								<th>Amount</th>
							</tr></thead>';
		$payed = mysql_query("SELECT * FROM extra_pay where Student_ID = '$SID' AND Status = 'Current' AND Date >= date_sub(NOW(), interval 1 DAY)");
		while($row = mysql_fetch_array($payed)){
				
				$code = $row['Code'];
				$name = $row['Name'];
				$price = $row['Price'];
				
				echo '<tr>';
				echo '<td>'.$code.'</td>';
				echo '<td>'.$name.'</td>' ;
				echo '<td>'.number_format($price, 2).'</td>';
				echo '</tr>';
		}
		
		
		$paid = mysql_query("UPDATE extra_pay SET Status = 'Paid' WHERE Student_ID = '$SID' AND Status = 'Current' AND Date >= date_sub(NOW(), interval 1 DAY)");
		
		echo '			<p></p>
					
						</table>
						</div>
					</div>
					
					<div class="col-md-6">
						<table class="table">
							<thead><tr>
								<th>Total Amount</th>
								<th>Cash</th>
								<th>Change</th>
							</tr></thead>
							<tr>
								<td>'.number_format($tbp, 2).'</td>
								<td>'.number_format($cash, 2).'</td>
								<td>'.number_format($change, 2).'</td>
							</tr>
						</table>
					</div>
					<div class="col-md-12">
						<div id="info">
							<h4 id="style">Cashier Information</h4>
						</div>
					</div>
					<div class="col-md-8">
							<div  style="padding:4px;">
							<table>
								<tr>
									<td id="indent"><strong>Cashier Name</strong></td>
									<td>'.$fname.'</td>
									<td style="visibility:hidden;">'.$qID.'</td>
								</tr>
								<tr>
									<td id="indent"><strong>Signature</strong></td>
									<td></td>
								</tr>
							</table>
							</div>
					</div>
					<div class="col-md-4">
							<div  style="padding:4px;">
							<table>
								<tr>
									<td id="indent"><strong>Time</strong></td>
									<td>'.$time.'</td>
								</tr>
								<tr>
									<td id="indent"><strong>Date</strong></td>
									<td>'.$date.'</td>
								</tr>
							</table>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>';
		
	}
					
?>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<p>
				<button onclick="myFunction()" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-print"></span> Print</button>
			</p>
		</div>
		<div class="col-md-5">
			<form	action="queuenext.php" method="POST">
				<input type="hidden" name="session" id="session" value=<?php echo $ID; ?>>
				<input type="hidden" name="currentnum" id="currentnum" value=<?php echo $qID; ?>>
				<p style="text-align:right;"><button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-chevron-right"></span> Next</button></p>
			</form>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
<br><br>
<br><br>
<div class="navbar navbar-default navbar-fixed-bottom">
	<div class="container">
		<p></p>
		<p style="color:#f3f3f3;text-align:center;">&copy; Manarondong, Malig-on and Razo</p>
	</div>
</div>
<script>
	function myFunction() {
		window.print();
	}
</script>
</body>	
</html>