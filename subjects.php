<!DOCTYPE>
<html>
<head>	
	<title> </title>
</head>
<body>
	<?php
		include 'admin.php';
	?>
	
	<a href="addsubject.php" > Add A Subject </a>

<?php
		
		include 'database.php';
			$sql="select * from subjects";
			
			$result = mysql_query($sql); 
			echo '<div class="display">';
			echo '<table class="subjects">';
			
			echo '<tr> 	
					<th> Code </th>		
					<th> Description </th>		
					<th> Units </th>		
					<th> Pre-Requisite </th>				
					<th> Price </th>				
				</tr>';
				
				
				while($row = mysql_fetch_array($result)){
					
					echo	"<tr>		
								<td><div align='center'>" . $row['Subject_Code'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Description'] . "</td> 		
								<td><div align='center'>" . $row['Units'] . "</td> 	
								<td><div align='center'>" . $row['Pre_Requisite'] . "</td> 	
								<td><div align='center'>" . $row['Price'] . "</td> 		
							<td><div align='center'> <a target = '_blank' href='editsubject.php?id=".$row['Subject_ID']."'>Edit</a> |								
									<a href='deletesubject.php?id=".$row['Subject_ID']."'>Delete</a> | 
									<a href='addtoenrolled.php?id=".$row['Subject_ID']."'>Add To Enrolled Subject</a> </td></tr>								
							</tr>";									
								
				}
			echo '</table>';
			
	
		?>
</body>
</html>