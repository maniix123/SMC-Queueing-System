<?php
	
	include 'database.php';
	
	$allow = "DELETE FROM getnum where Status = 'Restricted'";
		mysql_query($allow);
		
	require'queuenext1.php';	

?>