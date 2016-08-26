<?php

	include 'database.php';

	$ID = $_POST['ID'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$WN = $_POST['WN'];
	
	$sql = "UPDATE cashier SET Cashier_FirstName = '$FirstName' , Cashier_LastName = '$LastName' , Window_Number = '$WN' WHERE Cashier_ID = '$ID' ";
	mysql_query($sql);
	
	require 'viewcashier.php';
?>