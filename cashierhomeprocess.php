<?php
	include 'database.php';
	
	$CS = $_POST['session'];
	
	$select = mysql_query("SELECT * FROM cashier where Cashier_ID = '$CS'");
		while($row = mysql_fetch_array($select)){
					$ID = $row['Cashier_ID'];
					$WN = $row['Window_Number'];	
			}
			
	$select1 = mysql_query("SELECT * from queue Where Cashier_Window = '$WN'");
		while($row = mysql_fetch_array($select1)){
					$SID = $row['Student_ID'];	
			}
			
	$update = mysql_query("UPDATE queue SET Cashier_Window = '0', Status = 'Pending' Where Cashier_Window = '$WN'");
		
	$update1 = mysql_query("UPDATE extra_pay SET Status = 'Pending' Where Student_ID = '$SID' AND Status = 'Current' AND Date >= date_sub(NOW(), interval 1 DAY) ");

	require 'cashierhome.php';
?>