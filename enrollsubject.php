<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enrolled Subject</title>
    <link href="bootstrap/assessment.css" rel="stylesheet">
  </head>
<body>
    <div class="container">
	<h2 style="font-family:Old English Text Mt;">St. Michael's College</h2>
        <div class="panel panel-default">
			<?php
              session_start();
				echo "<div class='panel-heading'>";
				echo "<strong>".$_SESSION['Session_ID']."</strong>";
				echo "</div>";
				echo '<div class="panel-body">';
			 include 'database.php';
                $sql="select * from subjects";
                
					$result = mysql_query($sql); 
						echo '<div class="table-responsive">';
						echo '<table class="table">';
						
						echo '	<thead><tr>  
									<th> Code </th>   
									<th> Description </th>    
									<th> Section </th> 
									<th> Day </th>   						
									<th> Time </th>   
									<th> Room </th>    
									<th> Units </th>    
									<th> Pre-Requisite </th>        
									<th> Price </th>
									<th> Option </th>        
								</tr></thead>';
                  
                  
					while($row = mysql_fetch_array($result)){
                    
						echo  	"<tr>   
									  <td>" . $row['Subject_Code'] . "</td>     
									  <td>" . $row['Subject_Description'] . "</td>  
									  <td>" . $row['Section'] . "</td>  
									  <td>" . $row['Day'] . "</td> 
									  <td>" . $row['Time'] . "</td>     
									  <td>" . $row['Room'] . "</td>       
									  <td>" . $row['Units'] . "</td>  
									  <td>" . $row['Pre_Requisite'] . "</td>  
									  <td>" . $row['Price'] . "</td>    
									  <td><a href='enrolled.php?id=".$row['Subject_ID']."'><input type='submit' class='btn btn-warning btn-sm' value='Add to enrolled subject'></a></td>               
								</tr>";                 
                          
					}
						echo '</table>';
                
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
              ?>
			  </div>
        </div>
    </div>
	

      <a href="finishenrolled.php"> <input type="submit" class="btn btn-primary" value="Finish"> </a>
      <a href="student1.php"> <input type="submit" class="btn btn-primary" value="Sign Out"> </a>
	  
	  <br></br>
	  
    </div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>

</body>
</html>
