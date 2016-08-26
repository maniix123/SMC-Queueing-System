<?php

	include 'database.php';
	
	
	$sql = "SELECT * FROM queue Where  Cashier_Window = '0' LIMIT 5";
	$queue = mysql_query($sql);
	if(mysql_num_rows($queue) > 0) {
	while($row = mysql_fetch_array($queue)){
				$ID = $row['Queue_ID'];
				$SID = $row['Student_ID'];	
						
			}
			
		echo $ID;
		echo $SID;
		}
		
		else
			
		echo '0';
?>