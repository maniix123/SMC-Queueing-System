
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
		include 'nav.php';
	?>
    <div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Add Student</h4>			
			</div>
			<div class="panel-body">
			<form action="addstudentprocess.php" method="POST">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<div class="table-responsive">
				<table class="table">
					<tr>
						<td>ID Number</td>
						<td><input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="ID Number" /></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" class="form-control" id="name" name="name" placeholder="Name" /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" class="form-control" id="address" name="address" placeholder="Address" /></td>
					</tr>
					<tr>
						<td>Course</td>
						<td>
							<select class="form-control" id="course" name="course">
								<option value="" disabled selected>Course</option>
								<option value="BSCS">BSCS</option>
								<option value="BSIT">BSIT</option>
								<option value="BSIS">BSIS</option>
								<option value="BSCpe">BSCpe</option>
								<option value="BSBA">BSBA</option>
								<option value="BSN">BSN</option>
								<option value="BSED">BSED</option>
								<option value="BSCrim">BSCrim</option>
								<option value="BSBIO">BSBIO</option>
								<option value="BSPysch">BSPysch</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Department</td>
						<td>
							<select class="form-control" id="department" name="department">
								<option value="" disabled selected>Department</option>
								<option value="College of Nursing">College of Nursing</option>
								<option value="College of Accountancy">College of Accountancy</option>
								<option value="College of Arts and Sciences">College of Arts and Sciences</option>
								<option value="College of Education">College of Education</option>
								<option value="College of Criminology">College of Criminology</option>
								<option value="College of Engineering and Computer Studies">College of Engineering and Computer Studies</option>
								<option value="College of Hotel and Restaurant Management">College of Hotel and Restaurant Management</option>
								<option value="College of Business Administration">College of Business Administration</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Year</td>
						<td>
							<select class="form-control" id="year" name="year">
								<option value="" disabled selected>Year</option>
								<option value="1st Year">1st Year</option>
								<option value="2nd Year">2nd Year</option>
								<option value="3rd Year">3rd Year</option>
								<option value="4th Year">4th Year</option>
								<option value="5th Year">5th Year</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Status</td>
						<td>
							<select class="form-control" id="status" name="status">
								<option value="" disabled selected>Status</option>
								<option value="New Student">New Student</option>
								<option value="Old Student">Old Student</option>
								<option value="Returnees">Returnees</option>
								<option value="Transferee">Transferee</option>
								<option value="Shiftee">Shiftee</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="ADD" /> <button type="button" onclick="Cancel()" class="btn btn-danger">CANCEL</button></td>
					</tr>
				</table>
				</div>
				</div>
				<div class="col-md-3"></div>
			</form>
			</div>
		</div>
 </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<script>
	function Cancel() {
		var x = confirm("Cancel?")
		if(x) {
			window.location = "viewstudent.php";
		} else 
			return false;
	}
</script>
</body>
</html>
