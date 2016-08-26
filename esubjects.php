<!DOCTYPE>
<html>
<head>	
	<title> </title>
</head>
<body>
	<?php
		include 'admin.php';
	?>
	
	<a href="subjects.php" > Add Enrolled Subjects </a>

<?php
		
		include 'database.php';
			$sql="select * from enrolled_subjects";
			
			$result = mysql_query($sql); 
			echo '<div class="display">';
			echo '<table class="esubjects">';
			
			echo '<tr> 	
					<th> Code </th>		
					<th> Description </th>	
					<th> Price </th>					
					<th> Time </th>					
					<th> Day </th>					
					<th> Units </th>					
									
				</tr>';
				
				
				while($row = mysql_fetch_array($result)){
					
					echo	"<tr>		
								<td><div align='center'>" . $row['Subject_Code'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Description'] . "</td> 		
								<td><div align='center'>" . $row['Total_Price'] . "</td> 	
								<td><div align='center'>" . $row['Subject_Time'] . "</td> 	
								<td><div align='center'>" . $row['Subject_Day'] . "</td> 		
								<td><div align='center'>" . $row['Total_Units'] . "</td> 		
							<td><div align='center'> <a target = '_blank' href='editesubject.php?id=".$row['Enrolled_Subjects_ID']."'>Edit</a> |								
									<a href='edeletesubject.php?id=".$row['Enrolled_Subjects_ID']."'>Remove</a></td></tr>								
							</tr>";									
								
				}
			echo '</table>';
			
	
		?>
</body>
</html>