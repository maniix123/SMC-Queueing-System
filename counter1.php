<?php

	include 'database.php';
	
	
	$sql = "SELECT * FROM queue Where  Cashier_Window = '1' and Status = 'Current' LIMIT 1";
	$queue = mysql_query($sql);
	if(mysql_num_rows($queue) > 0) {
	while($row = mysql_fetch_array($queue)){
				$ID = $row['Queue_ID'];
				$SID = $row['Student_ID'];	
						
			}
			
		echo $ID;
		}
		
		else
			
		echo '0';
?>