<?php

	include 'database.php';
	$id = $_POST['idnumber'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$course = $_POST['course'];
	$department = $_POST['department'];
	$year = $_POST['year'];
	$status = $_POST['status'];
	
	$sql = "INSERT INTO student (ID, ID_Number, Student_Name, Student_Address, Student_Course, College_Department, Standing, Status)
				VALUES(' ', '$id', '$name', '$address', '$course', '$department', '$year', '$status')";
	$add = mysql_query($sql);
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Student successfully added!");'; 
			echo 'window.location.href = "student1.php";';
	echo '</script>';
?>