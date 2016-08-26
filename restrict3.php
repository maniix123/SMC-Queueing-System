<?php

	include 'database.php';
	
	$sql = "INSERT INTO getnum (ID, Status) Values ('', 'Restricted')";
		mysql_query($sql);

	require 'queuenext1.php';
?>