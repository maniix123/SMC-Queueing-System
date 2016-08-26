<?php

	include 'database.php';

	$ID = $_POST['ID'];
	$idnum = $_POST['idnum'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$course = $_POST['course'];
	$department = $_POST['department'];
	$standing = $_POST['standing'];
	$status = $_POST['status'];
	
	$sql = "UPDATE student SET ID_Number = '$idnum', Student_Name = '$name' , Student_Address = '$address' , Student_Course = '$course',
		 College_Department = '$department', Standing = '$standing', Status = '$status' WHERE ID = '$ID' ";
	mysql_query($sql);
	
	require 'viewstudent.php';
?>