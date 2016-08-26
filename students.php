<!DOCTYPE>
<html>
<head>	
	<title> </title>
</head>
<body>
	<?php
		include 'admin.php';
	?>
	
	<a href="addstudent.php" > Add A Student </a>

<?php
		
		include 'database.php';
			$sql="select * from student";
			
			$result = mysql_query($sql); 
			echo '<div class="display">';
			echo '<table class="student">';
			
			echo '<tr> 	
					<th> ID Number </th>		
					<th> Name </th>		
					<th> Address </th>		
					<th> Course </th>				
					<th> Year </th>		
					<th> Department </th>		
				</tr>';
				
				
				while($row = mysql_fetch_array($result)){
					
					echo	"<tr>		
								<td><div align='center'>" . $row['ID_Number'] . "</td> 		
								<td><div align='center'>" . $row['Student_Name'] . "</td> 		
								<td><div align='center'>" . $row['Student_Address'] . "</td> 	
								<td><div align='center'>" . $row['Student_Course'] . "</td> 	
								<td><div align='center'>" . $row['Standing'] . "</td> 	
								<td><div align='center'>" . $row['College_Department'] . "</td> 	
							<td><div align='center'> <a target = '_blank' href='editstudent.php?id=".$row['Student_ID']."'>Edit</a> |								
									 <a href='deletestudent.php?id=".$row['Student_ID']."'>Delete</a></td></tr>								
							</tr>";									
								
				}
			echo '</table>';
			
	
		?>
</body>
</html>