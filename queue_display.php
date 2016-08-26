<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashier Home</title>
    <link href="bootstrap/bootstrap.css" rel="stylesheet">
	<link href="background.css" rel="stylesheet">
	<style>
		body {
			background-color:#5992b4;
			
		}
		.col-md-4, .col-md-12 {
			text-align: center;
		}
		h1 {
			font-family: Old English Text Mt;
			font-size: 70px;
			color:#fff;
			text-shadow: 1px 1px 1px  #000;
		}
	</style>
  </head>
<body>
    <div class="container">
	<br></br>
		<div class="row">
			<div class="col-md-12">
				<h1>St. Michael's College</h1>
			</div>			
		</div>
		
	<br></br>
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h4>Window 1</h4>
					</div>
						<div class="panel- body" style="padding:10px;">
							<h3><em>Priority Number:</em></h3>	
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Window 2</h4>
					</div>
						<div class="panel- body" style="padding:10px;">
							<h3><em>Priority Number:</em></h3>	
						</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>Window 3</h4>
					</div>
						<div class="panel- body" style="padding:10px;">
							<h3><em>Priority Number:</em></h3>	
						</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Pending Queues</h4>
						</div>
							<div class="panel-body">
								<h4>Priority number: 4</h4>
							</div>
					</div>
			</div>
		</div>
    </div>
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
