<?php
	
	session_start();
	include 'database.php';
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	
	
	// Generate Guid 
	$idnum = clean($_POST['id']);
	
	
	//Create query
	$qry="SELECT * FROM student WHERE ID_Number='$idnum'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$student = mysql_fetch_assoc($result);
			$_SESSION['Session_ID'] = $student['ID_Number'];
			session_write_close();
			header("location: studenthome.php");
			exit();
		}else {
			echo '<script type="text/javascript">'; 
					echo 'alert("WARNING: Invalid ID Number");'; 
					echo 'window.location.href = "student.php";';
				echo '</script>';
		}
	}else {
		die("Query failed");
	}
?>