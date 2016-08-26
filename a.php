<?php
		session_start();
		include 'database.php';
			$sql="select * from enrolled_subjects where Student_ID = '$_SESSION[Session_ID]'";
			$result = mysql_query($sql); 
			echo '<div class="display">';
			echo '<table class="subjects">';
			
			echo '<tr> 	
					<th> Code </th>		
					<th> Description </th>		
					<th> Time </th>		
					<th> Day </th>		
					<th> Units </th>		
					<th> Pre-Requisite </th>				
					<th> Price </th>				
				</tr>';
				
				
				while($row = mysql_fetch_array($result)){
					
					echo	"<tr>		
								<td><div align='center'>" . $row['Student_ID'] . "</td> 		
								<td><div align='center'>" . $row['Subject_ID'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Code'] . "</td> 		
								<td><div align='center'>" . $row['Subject_Description'] . "</td> 		
								<td><div align='center'>" . $row['Total_Price'] . "</td> 	
								<td><div align='center'>" . $row['Subject_Time'] . "</td> 	
								<td><div align='center'>" . $row['Subject_Day'] . "</td> 		
								<td><div align='center'>" . $row['Total_Units'] . "</td> 		
							<td><div align='center'>
									<a href='enrolled.php?id=".$row['Subject_ID']."'>Add To Enrolled Subject</a> </td></tr>								
							</tr>";									
								
				}
			echo '</table>';
			
	
		?>