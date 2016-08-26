<?php

	include 'database.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	
	$sql = "INSERT INTO other_fees (ID, Name, Price)
				VALUES(' ', '$name', '$price')";
	$add = mysql_query($sql);
	
	echo '<script type="text/javascript">'; 
			echo 'alert("Other Fee successfully added!");'; 
			echo 'window.location.href = "addotherfees.php";';
	echo '</script>';
?>