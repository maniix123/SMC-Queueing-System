<?php

	if (!is_numeric($spayment))
{
    echo '<script type="text/javascript">'; 
			echo 'alert("Please Enter Numbers");'; 
			echo 'window.location.href = "studenthome.php";';
	echo '</script>';
} else
{
		$ass = "SELECT * FROM assessment where Student_ID = '$_SESSION[Session_ID]'";
		$res = mysql_query($ass);
		
		if(mysql_num_rows($res) > 0){			  
						
			$sql = "UPDATE assessment SET ToBePaid = '$spayment' WHERE Student_ID = '$_SESSION[Session_ID]' ";
			mysql_query($sql);
			
			$lqs = "INSERT INTO queue (Queue_ID, Student_ID,  Cashier_Window, Status)
						 VALUE ('', '$_SESSION[Session_ID]' , ' ', 'Pending' )";
			mysql_query($lqs);
			
			
			require 'priority.php';
							}
		else{
			 echo '<script type="text/javascript">'; 
					echo 'alert("You are not officially enrolled!!");'; 
					echo 'window.location.href = "studenthome.php";';
			 echo '</script>';
			   }
		 }

?>