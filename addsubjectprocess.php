<?php

	include 'database.php';
	
	$scode = $_POST['scode'];
	$sdescription = $_POST['sdescription'];
	$section = $_POST['section'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$room = $_POST['room'];
	$units = $_POST['units'];
	$prerequisite = $_POST['prerequisite'];
	$price = $_POST['price'];
	
	$sql = "INSERT INTO subjects (Subject_ID, Subject_Code, Subject_Description, Section, Day, Time, Room, Units, Pre_Requisite,  Price)
				VALUES('', '$scode', '$sdescription', '$section', '$day', '$time', '$room', '$units', '$prerequisite', '$price')";
	$add = mysql_query($sql);
	                  
	echo '<script type="text/javascript">'; 
			echo 'alert("Subject added successfully!");'; 
			echo 'window.location.href = "viewsubject.php";';
	echo '</script>';
?>

