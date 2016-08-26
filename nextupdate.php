<?php

	include 'database.php';
	
	$id = $_GET['tableHolder'];
	
	
	$sql = "SELECT * FROM queue where Queue_ID > '$id'";
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