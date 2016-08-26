
<?php
		
		include 'database.php';
		$id = $_GET['id'];

		$sql = "Delete from Student where ID_Number = '$id'";
		$choose = mysql_query($sql);	
		
		require 'viewstudent.php';
			
?>
