<!DOCTYPE html>
<html>
	<head>
		<link href="bootstrap/bootstrap.css" rel="stylesheet">
		<script src = "bootstrap/jquery.js"></script>
	<style>
		body {
			background-color: #f1f1f1;
		}	
	</style>
	</head>
<body>							
					<script type="text/javascript">
						$(document).ready(function(){
							refreshTable();
							refreshTable1();
							refreshPending();
						});

						function refreshTable(){
							$('#counter1').load('counter1.php', function(){
							setTimeout(refreshTable, 2000);
							});
						}
						function refreshTable1(){
							$('#counter2').load('counter2.php', function(){
							setTimeout(refreshTable1, 2000);
							});
						}
						function refreshPending(){
							$('#pending').load('pending.php', function(){
							setTimeout(refreshPending, 2000);
							});
						}
					</script>
			<div class = "container" style = "padding: 30px 20px;">
				<div class="row">
					<div class="col-lg-12">
						<center><h1 style="font-family:Old English Text MT;">St. Michael's College</h1></center>
					</div>			
				</div>	
				<div class = "col-lg-6">
					<div class = "row">
						<div class = "col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>Cashier One</h2>
								</div>
								<div class="panel-body">
									<h3>Priority # : <span id="counter1"></span></h3>
								</div>
							</div>
						</div>
					</div>
					<div class = "row">
						<div class = "col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>Cashier Two</h2>
								</div>
								<div class="panel-body">
									<h3>Priority # : <span id="counter2"></span></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class = "col-lg-6">
					<div class = "row">
						<div class = "col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<center><h2>Pending Queues </h2></center>
								</div>
								<div class="panel-body">
									<!--<h3>Priority # :<span id="pending"></span></h3>-->
									<table class = "table">
										<tr>
											<th><h3>Priority Number</h3></th>
											<th><h3>Student Id</h3></th>
										</tr>
										<tbody id = "pending">
										
										</tbody>
									</table>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		<script src="Bootstrap/jquery.min.js"></script>
		<script src="Bootstrap/bootstrap.min.js"></script>				
</body>
</html>