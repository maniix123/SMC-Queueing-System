
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
  </head>

<body>
	<?php
	session_start();
	include 'database.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM cashier
			where Cashier_ID = '$id'";
			
			$a = mysql_query($sql);
			while($row = mysql_fetch_array($a)){
				$ID = $row['Cashier_ID'];
				$FirstName = $row['Cashier_FirstName'];
				$LastName = $row['Cashier_LastName']; 
				$WN = $row['Window_Number'];			
			}
	?>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php">Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cashier<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">View Cashier</a></li>
						<li><a href="addcashier.php">Add Cashier</a></li>
						<li><a href="editcashier.php">Update Cashier Info</a></li>
						<li><a href="#">Delete Cashier</a></li>
						</ul>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">View Student</a></li>
						<li><a href="addstudent.php">Add Student</a></li>
						<li><a href="editstudent.php">Update Student Info</a></li>
						<li><a href="#">Delete Student</a></li>
						</ul>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Subject<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">View Subject</a></li>
						<li><a href="addsubject.php">Add Subject</a></li>
						<li><a href="editsubject.php">Update Subject Info</a></li>
						<li><a href="#">Delete Subject</a></li>
						<li><a href="#">Add Subject to Enrolled Subject</a></li>
						</ul>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enrolled Subject<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">View Cashier</a></li>
						<li><a href="#">Add Cashier</a></li>
						<li><a href="#">Update Cashier Info</a></li>
						<li><a href="#">Delete Cashier</a></li>
						</ul>
			  </li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="#">Logout</a></li>
			</ul>
        </div>
      </div>
    </nav>

    <div class="container">
		<div class="jumbotron">
			<p>Update Cashier</p>
			<form action="updatecashier.php" method="POST">
				<div class="table-responsive">
				<table class="table">
						<input type="hidden"  id="ID" name="ID" required value="<?php echo $ID; ?>" />
					<tr>
						<td>First Name</td>
						<td><input type="text"  class="form-control" id="FirstName" name="FirstName" required value="<?php echo $FirstName; ?>" /></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text"  class="form-control" id="LastName" name="LastName" required  value="<?php echo $LastName; ?>" /></td>
					</tr>
					<tr>
						<td>Window Number</td>
						<td><input  type="text" class="form-control" id="WN" name="WN" required value="<?php echo $WN; ?>" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary btn-m" value="ADD" /></td>
					</tr>
				</table>
				</div>							
			</form>
		</div>
    </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
