<?php

	include 'database.php';
	
	
	$sql = mysql_query("SELECT count(Status) as noofpending FROM queue where Status = 'Pending'");
	$row = mysql_fetch_array($sql);
	if($row['noofpending'] == 0)
	{
		echo '0';
	}
	else{
		echo $row['noofpending'];		
	}
;
	
?>