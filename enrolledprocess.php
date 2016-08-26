<?php
	session_start();
	echo $_SESSION['Session_ID'];
	include 'database.php';
	
	$ID = $_POST['ID'];
	$gid = $_SESSION['Session_ID'];
	$scode = $_POST['scode'];
	$sdescription = $_POST['sdescription'];
	$section = $_POST['section'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$room = $_POST['room'];
	$tprice = $_POST['tprice'];
	$sunits = $_POST['sunits'];
	
	$sql = "INSERT INTO enrolled_subjects (Enrolled_Subjects_ID,Student_ID, Subject_ID, Subject_Code, Subject_Description, Section, Subject_Day, Subject_Time, Room, Total_Units, Total_Price )
				VALUES('', '$gid','$ID','$scode','$sdescription', '$section', '$day', '$time', '$room', '$sunits','$tprice')";
	$add = mysql_query($sql);
	                  
	echo '<script type="text/javascript">'; 
			echo 'alert("Successfully Added A Subject to Enrolled Subjects");'; 
			echo 'window.location.href = "enrollsubject.php";';
	echo '</script>';
?>

