<?php
	session_start();
	include 'database.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login= mysql_query("SELECT * FROM cashier WHERE Username ='$username' and Password = '$password'");
	
	if($login) {
		if(mysql_num_rows($login) > 0) {
			//Login Successful
			session_regenerate_id();
			$cashier = mysql_fetch_assoc($login);
			$_SESSION['cashier'] = $cashier['Cashier_ID'];
			session_write_close();
			header("location: cashierhome.php");

		}else {
			echo '<script type="text/javascript">'; 
					echo 'alert("WARNING: Invalid Username or Password");'; 
					echo 'window.location.href = "cashier.php";';
				echo '</script>';
		}
	}else {
		die("Query failed");
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashier</title>
    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
  </head>
<body>

<script src="Bootstrap/jquery.min.js"></script>
<script src="Bootstrap/bootstrap.min.js"></script>
</body>
</html>
