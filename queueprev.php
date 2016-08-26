<?php

	session_start();
	include 'database.php';

	$currentnum = $_POST['currentnum'];

	
	$sql= "SELECT * FROM queue WHERE Queue_ID < '$currentnum' ORDER BY Queue_ID DESC LIMIT 1 "; 
	$queue = mysql_query($sql);
	while($row = mysql_fetch_array($queue)){
				$ID = $row['Queue_ID'];
				$SID = $row['Student_ID'];	
						
			}
	
	$lqs = "SELECT * FROM assessment where Student_ID = '$SID'";	
	$view = mysql_query($lqs);	
	while($row = mysql_fetch_array($view)){
				$SID = $row['Student_ID'];
				$tbp = $row['ToBePaid'];	
						
			}
			
	$ass = "SELECT * FROM enrolled_subjects where Student_ID = '$SID'";
	
			$b = mysql_query($ass);
			
			echo '<div class="display">';
			echo '<table class="subjects">';
			
			echo '<tr> 	
					<th> SUBJ. CODE </th>		
					<th> DESCRIPTIVE TITLE </th>		
					<th> SECTION </th>		
					<th> DAY </th>		
					<th> / TIME </th>		
					<th> ROOM </th>				
					<th> UNITS HOURS </th>				
					<th> LAB TYPE </th>				
				</tr>';
				
			while($row = mysql_fetch_array($b)){
				echo	"<tr>		
								<td><div align='center'>" . $row['Subject_Code'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Description'] . "</td> 		
								<td><div align='center'>" . $row['Enrolled_Subjects_ID'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Day'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Time'] . "</td> 	
								<td><div align='center'>" . $row['Enrolled_Subjects_ID'] . "</td> 	
								<td><div align='center'>" . $row['Total_Units'] . "</td> 	
								<td><div align='center'>" . $row['Enrolled_Subjects_ID'] . "</td> 		
						</tr>";									
								
			}
?>

<html>
	<body>
	Current Number :
<?php
	echo $ID;
?> 
	<br>
		<form	action="queuenext1.php" method="POST">
		<input type="hidden" name="currentnum" id="currentnum" value=<?php echo $ID; ?>>
		<input type="submit" value="next" />
	</form>
	
	<form	action="queueprev1.php" method="POST">
		<input type="hidden" name="currentnum" id="currentnum" value=<?php echo $ID; ?>>
		<input type="submit" value="previous" />
	</form>
	
	</body>
</html>
