<?php 	session_start();
	session_set_cookie_params(3600 * 24 * 7);
	include 'database.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashier Home</title>
	<link href="icon.jpg" rel="icon">
    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="javascript/sweetalert.css">	
	
	<script src="javascript/sweetalert-dev.js"></script>
  
	<style>
		body {
			  background: url('image/gate.jpg') no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
		.col-md-12 {
			text-align: center;
		}
		#background {
			background:#337ab7;
			color:#fff;
		}
	</style>
  </head>
<body>

<?php
	$session = $_SESSION['cashier'];
	
	$az = mysql_query("DELETE FROM queue where Status = 'Done'");
	
	$cashierlog = mysql_query("SELECT * FROM cashier where Cashier_ID = '$session'");
			while($row = mysql_fetch_array($cashierlog)){
					$CS = $row['Cashier_ID'];
					$fname = $row['Cashier_FirstName'];
					$WN = $row['Window_Number'];	
			}
			
?>
<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">SMC Express Payment System</a>
			</div>
		</div>
</div>

<br></br>
<br></br>
<div class="container">
<div class="row">
	<div class="col-lg-12">
		<p class="pull-right"><a href="cashier_login.php" style="color:#fff;"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a></p>
		<br></br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Hello <?php echo $fname ;?>! </h3>
			</div>
			<!-- .panel-heading -->
			<div class="panel-body">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration:none;">Transaction</a>
							</h3>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="showcase sweet">
									<form action="queue.php" method="POST">
										<input type="hidden"  id="session" name="session" value=<?php echo $CS; ?>>
										<p><button style="width:150px;" type='submit' class='btn btn-warning btn-lg'>Start</button></p>
									</form>
								</div> 	
			
								<p><a href="queuelog.php"><button style="width:150px;" type="button" class="btn btn-default btn-lg"> Queue History </button></a></p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="text-decoration:none;">Option</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
							<ul class="examples">

								<li style="list-style-type:none;" class="warning restrict">
									<div class="ui">
										<button style="width: 290px;" onClick="return confirm('Are You Sure?')" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-ban-circle"></span> Restrict to get priority number</button>
									</div>

								</li>
									<br>
								<li style="list-style-type:none;" class="warning allow">
									<div class="ui">
										<button style="width: 290px;" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-ok-sign"></span> Allow to get priority number</button>
									</div>
								</li>

							</ul>
							<script>
							
								document.querySelector('ul.examples li.warning.restrict button').onclick = function(){
									swal({
										title: "Are you sure?",
										text: "Students cant get priority number!",
										type: "warning",
										showCancelButton: true,
										showConfirmButton: true,
										confirmButtonColor: '#DD6B55',
										confirmButtonText: 'Yes, Restrict it!',
										closeOnConfirm: true
									},
									function(){
										swal("Restricted!", "Priority Number now is not Available!", "success");
										swal(window.location='restrict.php');
									});
								};
								
								document.querySelector('ul.examples li.warning.allow button').onclick = function(){
									swal({
										title: "Are you sure?",
										text: "Students can get priority number!",
										type: "warning",
										showCancelButton: true,
										showConfirmButton: true,
										confirmButtonColor: '#00FF26',
										confirmButtonText: 'Yes, Allow it!',
										closeOnConfirm: true
									},
									function(){
										swal("Allowed!", "Priority Number now is Available!", "success");	
										swal(window.location='allow.php');
									}
									
									);
								};
							
							</script>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="text-decoration:none;">Cashier Information</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
</div>



<div class="navbar navbar-default navbar-fixed-bottom" style="background;#337ab7;">
	<div class="container">
		<p></p>
		<p style="text-align:center;color:#f2f2f2;">&copy; Manarondong, Malig-on and Razo</p>
	</div>
</div>
<script src="Bootstrap/jquery.min.js"></script>
<script src="Bootstrap/bootstrap.min.js"></script>
</body>
</html>
