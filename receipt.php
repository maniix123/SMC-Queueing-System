<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link href="bootstrap/assessment.css" rel="stylesheet">
	<style>
		#td_bold {
			font-weight: bold;
		}
		body{
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>

<?php		
		$qnext = "SELECT * from queue where Student_ID = '".$sid."'";
		$qnext1 = mysql_query($qnext);
		while($row = mysql_fetch_array($qnext1)){
				$qID = $row['Queue_ID'];			
			}
?>
		<div class='container' style = "padding: 20px 20px; : 1px solid">
		<div id = "printArea">
		 <center>
		 <h3 style='font-family:Old English Text Mt;'>
		 <img src='image/smcbackground.png' width='60' height='60'> &nbsp; St. Michael's College</h3>
		 <h5>Iligan City</h5>
		 </center>
		
		 <div class='col-md-3'></div>
		 <div class='col-md-6'>
					 
			 <table class='table'>
				 <tr>
					 <td id='td_bold'>ID Number: </td>
					 <td><?php echo $sid ?></td>
				 </tr>
				 <tr>
					 <td id='td_bold'>Student Name: </td>
					 <td><?php echo $sname ?></td>
				 </tr>
			 </table>
			
			 <table class='table'>
				 <tr>
					 <td id='td_bold'>TOTAL AMOUNT</td>
					 <td id='td_bold'>Cash</td>
					 <td id='td_bold'>Change</td>
				 </tr>
				 <tr>
					 <td><?php echo  $tbp ?></td>
					 <td><?php echo $cash ?></td>
					 <td><?php echo $change ?></td>
				 </tr>
				 <tr><td></td><td></td>
				 </tr>
				 <tr><td></td><td></td>
				 </tr>
				<tr>
					<td id='td_bold'>Cashier</td>
					<td><?php echo $fname ?></td>
				</tr>
				<tr>
					<td id='td_bold'>Time</td>
					<td><?php echo$time ?></td>
				</tr>
				<tr>
					<td id='td_bold'>Date</td>
					<td><?php echo $date ?></td>
				</tr>	
			 </table>
		
		 <center>
		 <div style='margin-top:-310px;'>
			 <img style='opacity: 0.2;' src='image/smcbackground.png' width='280' height='280'>
		 </div>
		 <center>
		 </div>
		 <div class='col-md-3'></div>
		</div>
 </div>	


<script>
	function printDiv(divName) {
	// var divName = document.getElementById('')
	var printContents = document.getElementById(divName).innerHTML;
	var originalContents = document.body.innerHTML;

	document.body.innerHTML = printContents;

	window.print();

	document.body.innerHTML = originalContents;
	}
</script>
<div class="container" style = ": 1px solid; padding: 20px 20px; width: 480px;">

		<div class = "row">
			<div class = "col-lg-6">
				<button onclick="printDiv('printArea')" class="btn btn-warning btn-lg">Print Receipt</button>
			</div>
			<div class = "col-lg-6">
				<form action="queuenext.php" method="POST">
					<input type="hidden" name="currentnum" id="currentnum" value=<?php echo $qID; ?>>
					<input type="submit" class="btn btn-primary btn-lg" value="Next Queue" />
				</form>		
			</div>
		</div>

</div>
</body>
</html>