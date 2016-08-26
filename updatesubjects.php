<?php

	include 'database.php';

	$ID = $_POST['ID'];
	$scode = $_POST['scode'];
	$sdescription = $_POST['sdescription'];
	$section = $_POST['section'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$room = $_POST['room'];
	$units = $_POST['units'];
	$prerequisite = $_POST['prerequisite'];
	$price = $_POST['price'];

	$sql = "UPDATE subjects SET Subject_Code = '$scode', Subject_Description = '$sdescription' , Section = '$section',
				Day = '$day', Time = '$time', Room = '$room', Units = '$units' , Pre_Requisite = '$prerequisite', 
				Price = '$price' WHERE Subject_ID = '$ID' ";
	mysql_query($sql);
	
	require 'viewsubject.php';
?>