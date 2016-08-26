
<?php
		
		include 'database.php';
		$id = $_GET['id'];

		$sql = "Delete from Subjects where Subject_ID = '$id'";
		$choose = mysql_query($sql);	
		
		require 'viewsubject.php';
			
?>
