<?php
	session_start();
	echo $_SESSION['Session_ID'];
	include 'database.php';
	
	
	$sql = "select * from queue WHERE Queue_ID > 1 ORDER BY Queue_ID LIMIT 1";
	$queue = mysql_query($sql);
	while($row = mysql_fetch_array($queue)){
				$ID = $row['Queue_ID'];
				$SID = $row['Student_ID'];	
						
			}
			
			
?>

<?php echo $ID;
			echo $SID;	?>