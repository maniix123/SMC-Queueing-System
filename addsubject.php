
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
	<style>
		#td_bold {
			font-weight:bold;
		}
	</style>
</head>
<body>
	<?php include 'nav.php' ?>
    <div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Add Subject</h4>
			</div>
			<div class="panel-body">
			<form action="addsubjectprocess.php" method="POST">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="table-responsive">
				<table class="table">
					<tr>
						<td id="td_bold">Subject Code</td>
						<td><input type="text" class="form-control" id="scode" name="scode" placeholder="Subject Code" /></td>
					</tr>
					<tr>
						<td id="td_bold">Subject Description</td>
						<td><input type="text" class="form-control" id="sdescription" name="sdescription" placeholder="Description" /></td>
					</tr>
					<tr>
						<td id="td_bold">Section</td>
						<td><input type="text"  class="form-control" id="section" name="section" required  placeholder="Section" /></td>
					</tr>
					<tr>
						<td id="td_bold">Day</td>
						<td><input type="text"  class="form-control" id="day" name="day" required  placeholder="Day" /></td>
					</tr>
					<tr>
						<td id="td_bold">Time</td>
						<td><input type="text"  class="form-control" id="time" name="time" required placeholder="Time"  /></td>
					</tr>
					<tr>
						<td id="td_bold">Room</td>
						<td><input type="text"  class="form-control" id="room" name="room" required  placeholder="Room" /></td>
					</tr>
					<tr>
						<td id="td_bold">Units</td>
						<td><input type="text" class="form-control" id="units" name="units" placeholder="Units" /></td>
					</tr>
					<tr>
						<td id="td_bold">Pre-Requisite</td>
						<td><input type="text" class="form-control" id="prerequisite" name="prerequisite" placeholder="Pre-Requisite" /></td>
					</tr>
					<tr>
						<td id="td_bold">Price</td>
						<td><input type="text" class="form-control" id="price" name="price" placeholder="Price" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary btn-m" value="ADD" /></td>
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
</body>
</html>
