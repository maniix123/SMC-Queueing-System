<?php

	include 'database.php';
	
	
	$sql = mysql_query("SELECT * FROM queue Where Status = 'Pending'");
	$len = mysql_num_rows($sql);
	while($row = mysql_fetch_array($sql))
	{
			  echo 
			  '<tr>
				  <td><h4>' . $row['Queue_ID']. '</h4></td>
				  <td><h4>' . $row['Student_ID'] . '</h4></td>
			   </tr>';		

	}
			
			
			?>
			
