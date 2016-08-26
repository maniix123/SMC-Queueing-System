
<?php
		
		include 'database.php';
		$id = $_GET['id'];

		$sql = "Delete from enrolled_subjects where Enrolled_Subjects_ID = '$id'";
		$choose = mysql_query($sql);	
		
		require 'viewenrolledsubject.php';
			
?>
