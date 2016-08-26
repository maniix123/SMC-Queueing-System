<?php
  session_start();
  unset($_SESSION['Session_ID']);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Queue</title>

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
						<li><a href="accounts_inquiry.php">Accounts Inquiry</a></li>
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
				<h1>Inquire</h1>
					<form action="inquiry_login.php" method="POST">
						<p><input type="text" class="form-control" name="id" id="id" data-toggle="tooltip" data-placement="top" title="Student I.D" placeholder="Student I.D"></p>
						<p><input type="submit" class="btn btn-primary btn-block" value="Inquire">
					</form>
					<p class="text-muted" style="font-size:11px;">Note: Please fill the form provided before you can queue.</p>
					<p class="text-muted" style="font-size:11px;"> - <em>Thank you!</em></p>
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
			</div>
		</div>
	</div>
	
	<br></br>
	<br></br>
	<br></br>
	
	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<br>
			<p style="color:#3f3f3f;">&copy; Manarondong , Malig - on and Razo</p>	
		</div>
	</div>
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
</script>
</body>
</html>