
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
			<form action="addotherfeeprocess.php" method="POST">
				<div class="table-responsive">
				<table class="table">
					<tr>
						<td>Name</td>
						<td><input type="text" class="form-control" id="name" name="name" placeholder="Name" /></td>
					</tr>
					<tr>
						<td>Price</td>
						<td><input type="text" class="form-control" id="price" name="price" placeholder="Cost" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary btn-m" value="ADD" /> <button type="button" onclick="Cancel()" class="btn btn-danger">CANCEL</button></td>
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
			window.location = "viewotherfees.php";
		} else
			return false;
	}
</script>
</body>
</html>
