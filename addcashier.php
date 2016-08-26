
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Cashier</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
  </head>

<body>
	<?php
		include 'nav.php';
	?>
    <div class="container">
		<div class="jumbotron">
			<p>Add Cashier</p>
			<form action="addcashierprocess.php" method="POST">
				<div class="table-responsive">
				<table class="table">
					<tr>
						<td>Username</td>
						<td><input type="text" class="form-control" id="cusername" name="cusername" placeholder="Username" required/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password" required/></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" class="form-control" id="cfirstname" name="cfirstname" placeholder="First Name" required/></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" class="form-control" id="clastname" name="clastname" placeholder="Last Name" required/></td>
					</tr>
					<tr>
						<td>Window Number</td>
						<td><input type="text" class="form-control" id="wn" name="wn" placeholder="Window Number" required/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="ADD" /> <button type="button" onclick="Cancel()" class="btn btn-danger" />CANCEL</button></td>
					</tr>
				</table>
				</div>							
			</form>
		</div>
    </div>

<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<script>
	function Cancel() {
		var x = confirm("Cancel?")
		if(x) {
			window.location = "viewcashier.php";
		} else
			return false;
	}
</script>
</body>
</html>
