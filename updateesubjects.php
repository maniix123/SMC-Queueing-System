<?php

	include 'database.php';

	$ID = $_POST['ID'];
	$scode = $_POST['scode'];
	$sdescription = $_POST['sdescription'];
	$tprice = $_POST['tprice'];
	$stime = $_POST['stime'];
	$sday = $_POST['sday'];
	$tunits = $_POST['tunits'];

	$sql = "UPDATE enrolled_subjects SET Subject_Code = '$scode', Subject_Description = '$sdescription' , Total_Price = '$tprice' , Subject_Time = '$tprice',
		 Subject_Day = '$sday', Total_Units = '$tunits' WHERE Enrolled_Subjects_ID = '$ID' ";
	mysql_query($sql);
	
	require 'viewenrolledsubject.php'; 
?>