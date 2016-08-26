<?php

	include 'database.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	
	$sql = "INSERT INTO miscellaneous (Miscellaneous_ID, Name, Price)
				VALUES(' ', '$name', '$price')";
	$add = mysql_query($sql);
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Miscellaneous Fee successfully added!");'; 
			echo 'window.location.href = "addmisfees.php";';
	echo '</script>';
?>