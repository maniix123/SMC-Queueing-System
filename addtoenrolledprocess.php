<?php

	include 'database.php';
	
	$ID = $_POST['ID'];
	$scode = $_POST['scode'];
	$sdescription = $_POST['sdescription'];
	$tprice = $_POST['tprice'];
	$time = $_POST['time'];
	$day = $_POST['day'];
	$sunits = $_POST['sunits'];
	
	$sql = "INSERT INTO enrolled_subjects (Enrolled_Subjects_ID, Subject_ID, Subject_Code, Subject_Description, Total_Price, Subject_Time, Subject_Day,  Total_Units)
				VALUES('', '$ID','$scode','$sdescription', '$tprice', '$time', '$day', '$sunits')";
	$add = mysql_query($sql);
	                  
	echo '<script type="text/javascript">'; 
			echo 'alert("Enrolled subject added successfully!");'; 
			echo 'window.location.href = "viewenrolledsubject.php";';
	echo '</script>';
?>

