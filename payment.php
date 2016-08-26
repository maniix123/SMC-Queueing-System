<?php

	session_start();
	include 'database.php';
	$cashier_name = $_SESSION['cashier_id'];
	$tbp = $_POST['tbp'];
	$cash = $_POST['cash'];
	$sid = $_POST['sid'];
	$date = date("m/d/Y");
	$time = date("h:i:sa");
	$change = $cash - $tbp;
	
	$sql = mysql_query("SELECT * FROM cashier where Username = '".$cashier_name."'");
	if(!$sql){die(mysql_error() . 'Query Failed');}
		while($row = mysql_fetch_array($sql))
		{
			$ID = $row['Cashier_ID'];
			$user = $row['Username'];	
			$fname = $row['Cashier_FirstName'];	
			$wn = $row['Window_Number'];			
		}	
			
	$sqla = mysql_query("SELECT * FROM assessment where Student_ID = '".$sid."'");
	if(!$sqla){die(mysql_error() . 'Query Failed');}
		while($row = mysql_fetch_array($sqla)){
			$AID = $row['Assessment_ID'];
			$tbd = $row['ToBePaid'];				
			$remaining = $row['Balance'];				
		}
			
	$a = mysql_query("SELECT * FROM student where ID_Number = '".$sid."' ");	
	if(!$a){die(mysql_error(). 'Query Failed');}
		while($row = mysql_fetch_array($a))
		{
			$IDN = $row['ID_Number'];
			$sname = $row['Student_Name'];				
		}
			
	$query = mysql_query("INSERT INTO queuelog VALUES (' ', ' ', '".$IDN."', '".$sname."', NOW() , NOW(), ' ',
											  '".$cash."', '".$change."')");
	if(!$query){die(mysql_error() . 'Query Failed');}
									
	
	$anotherquery =  mysql_query("INSERT INTO payment VALUES ('', '".$ID."', '".$AID."', NOW(), NOW() , '".$cash."','".$change."', '')");
	if(!$anotherquery){die(mysql_error() . 'Query Failed po');}
	
	$sqlaa = mysql_query("SELECT * FROM payment where Assesment_ID = '".$AID."'");
		while($row = mysql_fetch_array($sqlaa))
		{
			$PID = $row['Payment_ID'];				
		}
	
	$againwithquery = mysql_query("INSERT INTO receipt VALUES('', '".$sid."' , '".$PID."','".$tbp."', '".$cash."','".$change."')");
	if(!$againwithquery){die(mysql_error() . 'Sayop imong query dong');}
	
	$newbal = $remaining - $tbp;
	
	$frozen = mysql_query("UPDATE assessment SET Balance = '$newbal' Where Student_ID = '".$sid."'");
	if(!$frozen){die(mysql_error() . 'Query Failed');}
	
	require 'receipt.php';
	
?>