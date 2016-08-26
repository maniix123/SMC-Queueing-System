
<?php
		
		include 'database.php';
		$id = $_GET['id'];

		$sql = "Delete from Cashier where Cashier_ID = '$id'";
		$choose = mysql_query($sql);	
		
		require 'viewcashier.php';
			
?>
