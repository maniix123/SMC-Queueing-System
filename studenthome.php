<?php   session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset = "UTF-8">
    <title>Student home</title>
    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="icon" href="icon.jpg">
	<link href="slideanim.css" rel="stylesheet">	
	
	<script src="Bootstrap/jquery.min.js"></script>

</head>
<style>
	#td-bold {
		font-weight: bold;
	}
	#summary_bold {
		font-weight: bold;
	}
	#pad {
		padding:4px;
		width: 150px;
		font-weight:bold;
	}
</style>
<body>
<?php
  include 'database.php';

  $session = $_SESSION['Session_ID'];
  
	$student = mysql_query("SELECT * FROM student WHERE ID_Number = '$session'");
		while($row = mysql_fetch_array($student)){
				
				$id = $row['ID'];
				$idnum = $row['ID_Number'];
				$sname = $row['Student_Name']; 
				$saddress = $row['Student_Address'];
				$scourse = $row['Student_Course'];
				$cd = $row['College_Department'];
				$standing = $row['Standing'];
				$status = $row['Status'];
			
			}
	  
	  
	$assessment = mysql_query("SELECT * From Assessment Where Student_ID = '$session'");
		//checking balance	
			if(mysql_num_rows($assessment) > 0){	
				while($row = mysql_fetch_array($assessment)){
		 
					$rbalance = $row['Balance'];
				}	
			}
			
			else{
		  
				$rbalance = '0';
				
			}
			
			
    $number =  mysql_query("SELECT * FROM queue where Student_ID = '$session'");
		//checking priority number
			if(mysql_num_rows($number) > 0){			  
				while($row = mysql_fetch_array($number)){
						
					$queue = $row['Queue_ID'];
						
				}
			}
						
			else {
					$queue = 'No Priority Number';
							
			}
		
		
	$extra = mysql_query("SELECT * FROM extra");
		while($row = mysql_fetch_array($extra)){
			
				$ecode = $row['Code'];
				$ename = $row['Name'];
				$eprice = $row['Price'];
			
		}

?>

    <div class="container">
		<div class = "row">
			<div class = "col-lg-12">
				<center><h2 style='font-family:Old English Text MT;'>St. Michael's College</h2></center>
			</div>
		</div>
		<div class = "row" style = "padding-bottom: 10px;">
			<div class = "col-lg-6">
				<a href="studentlog.php"><button type = "button" class = "btn btn-primary"><span class="glyphicon glyphicon-share-alt"></span> View Payment History</button> </a>				
			</div>
			<div class = "col-lg-6">
				<a href="student.php"><button type="button" class="btn btn-default pull-right"> <span class="glyphicon glyphicon-log-out"></span> Sign out</button></a>
			</div>
		</div>
	<div class="well">
			<div class="row">
				<div class="col-lg-5">
				<form action="getnum.php" method="POST" role="form" class="form-horizontal">
						<div class="form-group">
							<label style="font-size:15px;" class="control-label col-lg-4" for="spayment">Payment Here: </label>
							<div class="col-lg-8">
								<input type="number" step="0.01" min = "1" max = "<?php echo $rbalance; ?>" class="form-control" id="spayment"  data-toggle="tooltip" data-placement="top" title="Place your payment here" name="spayment" placeholder=" Input Payment Amount" />
							</div>
						</div>						
						
						<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Get Priority Number</button>	
					
				</div>
				
				<div class="col-lg-1"></div>
				
				<div class="col-lg-3">
					<p style="font-size:15px;"><strong>Select from the list:</strong></p>
					<?php
						$extra = mysql_query("SELECT * FROM extra");
						while($row = mysql_fetch_array($extra))
							{
							echo 
							'<div class="checkbox">
								<label><input type="checkbox" name="check_list[]" value="'.$row['Name'].'"><strong>'.$row['Name']. '</strong>&nbsp&nbsp - &nbsp&nbsp' .$row['Price'].'
							</div>';
							}
					?>
				</form>
				</div>

			</div>
	</div>
		<div class="panel panel-default slideanim1">
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
								<td id="td-bold">Priority Number: </td> 
								<td><?php	echo $queue; ?></td>
							</tr>
						<tr>
							<td id="td-bold">ID Number:</td> 
							<td><?php echo $_SESSION['Session_ID'];?></td>
							<td id="td-bold">Status: </td> 
							<td><?php echo $status; ?></td>
							<td id="td-bold">BALANCE : </td> 
							<td><?php	echo $rbalance; ?></td>
						</tr>
					  </table>
					</div><!--table-reponsive-->
			</div><!--pane-body-->
		</div><!--panel panel-default-->
	</div><!--container-->
	<div class="container slideanim">
		<?php
			$exist = mysql_query("SELECT * From Assessment Where Student_ID = '$session'");
			if(mysql_num_rows($exist) > 0) 
		{
		?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Student Assessment Form</h4>
			</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">

			<thead>
				<tr>
					<th> SUBJ. CODE </th>   
					<th> DESCRIPTIVE TITLE </th>    
					<th> SECTION </th>    
					<th> DAY </th>    
					<th> TIME </th>   
					<th> ROOM </th>       
					<th> UNITS HOURS </th>        
					<th> LAB TYPE </th>       
				</tr>
			</thead>	  
	<?php
			$lqs = "SELECT * FROM enrolled_subjects where Student_ID = '$session'";
			$b = mysql_query($lqs);										
			while($row = mysql_fetch_array($b))
			{				
			echo  	
			"<tr>   
				<td>" . $row['Subject_Code'] . "</td>     
				<td>" . $row['Subject_Description'] . "</td>    
				<td>" . $row['Section'] . "</td>     
				<td>" . $row['Subject_Day'] . "</td>    
				<td>" . $row['Subject_Time'] . "</td>   
				<td>" . $row['Room'] . "</td>   
				<td>" . $row['Total_Units'] . "</td>  
				<td>" . $row['LabType'] . "</td>     
			</tr>";                 
		}
	?>
				</table>	
			</div>
		</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 slideanim">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>Summary</h4>
					</div>
		<div class="table-reponsive">
			<table class="table table-hover">
			<?php		
			$wizard = mysql_query("SELECT Total From assessment where Student_ID = '$session'");			
			while($row = mysql_fetch_array($wizard)){
	//total tuition 				
				$total = $row['Total'];
				  
				  echo  "<tr>   
							<td id='summary_bold'>	Tuition Fee </td>     
							<td>" . $total	 . "</td>      
						</tr>";  
			}
		  
			$barb = mysql_query("SELECT ROUND(SUM(Price), 2) FROM other_fees");	
			while($row = mysql_fetch_array($barb)){
	//other fees total
				$sumother = $row['ROUND(SUM(Price), 2)'];
			
					echo  	"<tr>   
								<td id='summary_bold'>	OTHER FEES </td>     
								<td>" . $row['ROUND(SUM(Price), 2)'] . "</td>      
							</tr>";  
			}
			
			$coc = mysql_query("SELECT SUM(Price) FROM miscellaneous");
			while($row = mysql_fetch_array($coc)){
	//miscellaneous total	 
				$summisc = $row['SUM(Price)'];
			 
					echo  "<tr>   
								<td id='summary_bold'>	MISC. FEES </td>     
								<td>" . $row['SUM(Price)'] . "</td>      
							</tr>";  
			}
			 $totalamount = $total + $sumother +  $summisc;
			 $down = $totalamount - 500;
			 $term = $down / 4;
			?>
				<tr>   
					<td id='summary_bold'>	Total Amount Due: </td>     
					<td style='text-decoration:underline;font-weight:bold;'  data-toggle='tooltip' data-placement='top' title='This is your total amount due'><?php echo  $totalamount ?></td>      
				</tr>
				<tr>   
					<td id='summary_bold'> 	INSTALLMENT BASIS	 </td>
					<td></td>
				</tr> 
				<tr>   
					<td id='summary_bold'>	DOWN PAYMENT 	</td>           
					<td>500.00</td>           
				</tr>
				<tr>   
					<td id='summary_bold'>	PRELIMS 	</td>           
					<td><?php echo  $term ?>	</td>                 
				</tr>
				<tr>   
					<td id='summary_bold'>	MIDTERM 	</td>           
					<td><?php echo  $term ?>	</td>                 
				</tr>
				<tr>   
					<td id='summary_bold'>	PRE-FINALS	 </td>           
					<td><?php echo  $term ?> </td>                 
				</tr>
				<tr>   
					<td id='summary_bold'>	FINALS 		</td>           
					<td><?php echo $term ?></td>                 
				</tr>
			</table>
		</div>
				 </div>
			</div>
		<div class="col-md-4 slideanim">
			 <div class="panel panel-warning">
				 <div class="panel-heading">
					 <h4>DETAILS - Other fees</h4>
				 </div>
				<div class="pane-body">
				<?php
					$tech = mysql_query("SELECT * FROM other_fees");
				
							echo
							'<div class="table-responsive">
								<table class="table table-hover">';
						  
											while($row = mysql_fetch_array($tech)){
											 
												echo  "<tr>  
															<td id='summary_bold'>" . $row['Name'] . "</td> 
															<td>" . $row['Price'] . "</td> 
														</tr>";					  
									   
											}
				?>
								 </table>
							 </div>
				 </div>
			</div>
		</div>
		<div class="col-md-4 slideanim">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4>Other - Misc. fees</h4>
				</div>
			<div class="pane-body">
			<?php 
			$invo = mysql_query("SELECT * FROM miscellaneous");

			echo 
					'<div class="table-responsive">
						<table class="table table-hover">';

					while($row = mysql_fetch_array($invo)){

					echo 	 
					"<tr>  
						<td id='summary_bold'>" . $row['Name'] . "</td> 
						<td>" . $row['Price'] . "</td> 
					</tr>";					  

					}

					}
					else 
					{
						echo 'YOU DONT HAVE Assessment YET!';
					}
					?>
						</table>
					</div>
			</div>
			</div>
		</div>
		</div>
	<br/><br/>
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<br>
				<p style="color:#f2f2f2;text-align:center;">&copy; Manarondong , Malig - on and Razo</p>	
			</div>
		</div>		  
	</div>
<script src="Bootstrap/jquery.min.js"></script>
<script src="Bootstrap/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		refreshTotal();
	});

	function refreshTotal(){
		$('#total').load('total.php', function(){
			setTimeout(refreshTotal, 2000);
		});
	}
	  $(window).scroll(function() {
		$(".slideanim").each(function()
		{
		  var pos = $(this).offset().top;
		  var winTop = $(window).scrollTop();
        if (pos < winTop + 600) 
		{
          $(this).addClass("slide");
        }
    });
  });
 	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
</script>
<script>
	  $(document).ready(function() {
		$(".slideanim1").each(function()
		{
		  var pos = $(this).offset().top;
		  var winTop = $(window).scrollTop();
        if (pos < winTop + 600) 
		{
          $(this).addClass("slide");
        }
    });
  });
</script>
</body>
</html>
