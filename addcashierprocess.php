<?php

	include 'database.php';
	$user = $_POST['cusername'];
	$pass = $_POST['cpassword'];
	$fn = $_POST['cfirstname'];
	$ln = $_POST['clastname'];
	$wn = $_POST['wn'];
	
	$sql = "INSERT INTO cashier (Cashier_ID, Username, Password, Cashier_FirstName, Cashier_LastName, Window_Number)
				VALUES(' ', '$user', '$pass','$fn', '$ln', '$wn')";
	$add = mysql_query($sql);
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Cashier successfully added!");'; 
			echo 'window.location.href = "addcashier.php";';
	echo '</script>';
?>