<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finish</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
  </head>
<body>
    <div class="container">
	<center>
	
	<?php
		session_start();
			echo "<h1 style='font-family:old english Text MT;'>Thank you!</h1>";
			echo "<h3>".$_SESSION['Session_ID']."</h3>";
		
		include 'database.php';
		
		$date = date("m/d/Y");
		$time = date("h:i:sa");
		
			$check1 = "SELECT * FROM assessment where Student_ID = '$_SESSION[Session_ID]'";
				$check2 = mysql_query($check1);
				
					if(mysql_num_rows($check2) > 0){	

						$golem = "SELECT SUM(Total_Price) FROM enrolled_subjects where Student_ID = '$_SESSION[Session_ID]'";
							$level = mysql_query($golem);
						
								while($row = mysql_fetch_array($level)){
								
									$tprice = $row['SUM(Total_Price)'] ;               
								}
			
						$a1 = "SELECT SUM(Total_Units) FROM enrolled_subjects where Student_ID = '$_SESSION[Session_ID]'";
							$a2 = mysql_query($a1);
								
								while($row = mysql_fetch_array($a2)){
							
									$tunits = $row['SUM(Total_Units)'];
								}
			
						$pekka = "UPDATE assessment SET Student_ID = '$_SESSION[Session_ID]', Time_Enrolled = '$time', Date_Enrolled = '$date',
												Total_Units = '$tunits', Total = '$tprice', Balance = '$tprice' where Student_ID = '$_SESSION[Session_ID]'";
							$breaker = mysql_query($pekka);
						}
			
			
					else{
				
						$golem = "SELECT SUM(Total_Price) FROM enrolled_subjects where Student_ID = '$_SESSION[Session_ID]'";
							$level = mysql_query($golem);
								
								while($row = mysql_fetch_array($level)){		
								
									$tprice = $row['SUM(Total_Price)'] ;               
								}
		
						$a1 = "SELECT SUM(Total_Units) FROM enrolled_subjects where Student_ID = '$_SESSION[Session_ID]'";
							$a2 = mysql_query($a1);
							
								while($row = mysql_fetch_array($a2)){
									
									$tunits = $row['SUM(Total_Units)'];
								}
		
						$sqli ="INSERT INTO assessment (Assessment_ID, Student_ID, Time_Enrolled, Date_Enrolled, Total_Units, Total, TotalAmountDue, ToBePaid, Balance) 
											Values(' ', '$_SESSION[Session_ID]', '$time' , '$date', '$tunits' , '$tprice', '', '' , '') ";
							$result1 = mysql_query($sqli); 
							
						$barb = "SELECT ROUND(SUM(Price), 2) FROM other_fees";
							$wall = mysql_query($barb);
					
								while($row = mysql_fetch_array($wall)){
										$sumother = $row['ROUND(SUM(Price), 2)'];
								}
								
						$archer = "SELECT SUM(Price) FROM miscellaneous";
							$coc = mysql_query($archer);
					
								while($row = mysql_fetch_array($coc)){
					 
									$summisc = $row['SUM(Price)'];

								}	

						$totalamount = $tprice + $sumother +  $summisc;								
			
						$pekka = "UPDATE assessment SET Balance = '$totalamount' , TotalAmountDue = '$totalamount' where Student_ID = '$_SESSION[Session_ID]'";
							$breaker = mysql_query($pekka);
			}
	?>
	
			<a href="student1.php"><button type="button" class="btn btn-default">logout</button></a>
			</center>
		</div>
	
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	
</body>
</html>