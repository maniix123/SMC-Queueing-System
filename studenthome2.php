<?php
	session_start();
	include 'database.php';

	$sql = "SELECT * FROM student
			where ID_Number = '$_SESSION[Session_ID]'";
			
			$a = mysql_query($sql);
			while($row = mysql_fetch_array($a)){
				$id = $row['ID'];
				$idnum = $row['ID_Number'];
				$sname = $row['Student_Name']; 
				$saddress = $row['Student_Address'];
				$scourse = $row['Student_Course'];
				$cd = $row['College_Department'];
				$standing = $row['Standing'];
			}
			
	
?>

<!DOCTYPE html>
<html>

<body>
<center>

	<a href="student.php"> Sign Out </a>

	Name : <?php echo $sname; ?> 
	Student # : <?php echo $_SESSION['Session_ID'];?> <br>
	Course : <?php echo $scourse; echo ' '; echo $standing;  ?>
	Status : to be added like new student, old student, transferee <br> <br>
	
	<?php
		$lqs = "SELECT * FROM enrolled_subjects where Student_ID = '$_SESSION[Session_ID]'";
	
			$b = mysql_query($lqs);
			
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

	<form action="getnum.php" method="POST">
		Amount 	<input type="text" id="spayment" name="spayment" placeholder="" />
				<input type="submit" value="Get Priority Number" />
	</form>
	<a href="enrollsubject.php"> Enroll A Subjects </a>	
</body>
</html>