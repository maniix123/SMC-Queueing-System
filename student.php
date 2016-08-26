<?php
  session_start();
  unset($_SESSION['Session_ID']);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Queue</title>
		<link rel="icon" href="icon.jpg">
		<link rel="stylesheet" href="Bootstrap/bootstrap.css">
		<link rel="styleshhet" href="navbar-fixed-top.css">

		<script src="Bootstrap/jquery.min.js"></script>
		<script src="Bootstrap/bootstrap.min.js"></script>

		<link rel="stylesheet" href="slideshow.css">

		<style>
			body {
		  		background-color: #f1f1f1;
  			}	        
		</style>
	</head>
<body>

	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-exande="false" aria-controls="navbar">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">SMC Payment <em>Express</em></a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">	
						<li><a href="student.php">Queue</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

			</div>
		</nav>
	</div>

	<br></br>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1>Queue</h1>
					<form action="studentlogin.php" method="POST">
						<p><input type="text" class="form-control" name="id" id="id" data-toggle="tooltip" data-placement="top" title="Student I.D" required placeholder="Student I.D"></p>
						<p><input type="text" class="form-control" name="mfname" id="mfname" data-toggle="tooltip" data-placement="top" title="Mother/Fathers Name" required placeholder="Mother/Fathers Name"></p>
						<p><input type="submit" class="btn btn-primary btn-block" value="Login">
					</form>
					
					<p class="text-muted" style="font-size:11px;">Note: Please input your Student I.D Number before you can queue.</p>
					<p class="text-muted" style="font-size:11px;"> - <em>Thank you!</em></p>
					
					<div class="panel panel-primary">
						<div class="panel-heading">
					<h4>Counter 1</h4> 
						</div>
							<div class="panel-body">
								<table>
									<tr>
										<td style="width:180px;"><h4>Priority Number:</h4></td>
										<td><span style="color:red;font-size:45px;" id="counter1"></td>
									</tr>
								</table>
							</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4>Counter 2</h4>
						</div>
							<div class="panel-body">
								<table>
									<tr>
										<td style="width:180px;"><h4>Priority Number:</h4></td>
										<td><span style="color:red;font-size:45px;" id="counter2"></td>
									</tr>
								</table>
							</div>
					</div>
	
			</div>
			<div class="col-sm-8">
				<h1 style="font-family:Old English Text MT;">St. Michael's College</h1>
					<div id="slider">
						<figure>
							<img src="image/one.jpg" alt="">
							<img src="image/two.jpg" alt="">
							<img src="image/three.jpg" alt="">
							<img src="image/four.jpg" alt="">
							<img src="image/five.jpg" alt="">
						</figure>
					</div>
					
				<p style="font-family:Tahoma;text-indent:50px;text-align:justify;font-size:12px;margin-top:5px;">
					<strong>St. Michael's College of Iligan City</strong>, 
					a Catholic institution of higher learning in Iligan City, 
					administered by the Religious of the Virgin Mary (RVM), 
					offering four levels of education: elementary, 
					secondary, tertiary and graduate school. 

					Its programs are accredited by the Philippine Accrediting Association of Schools, 
					Colleges and Universities (PAASCU) for 25 years, a silver triumph indeed!</p>		
			</div>
		</div>
	</div>
	
	<br></br>
	<br></br>
	
	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<br>
			<p style="color:#f2f2f2;text-align:center;">&copy; Manarondong , Malig - on and Razo</p>	
		</div>
	</div>
<script>
	$(document).ready(function(){
	  refreshTable();
	  refreshTable1();
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
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
</script>
</body>
</html>