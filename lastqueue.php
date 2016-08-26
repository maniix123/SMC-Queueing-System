<?php

	include 'database.php';
	
	$az = "DELETE FROM queue where Status = 'Done'";
		mysql_query($az);
			
	require 'cashierhome.php';
?>