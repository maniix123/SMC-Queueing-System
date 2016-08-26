<?php
  session_start();
  unset($_SESSION['Session_ID']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="icon.jpg" rel="icon">
    <link href="Bootstrap/bootstrap.css" rel="stylesheet">
	<script src="Bootstrap/bootstrap.min.js"></script>
	<script src="Bootstrap/jquery.min.js"></script>	
	<style>
		body {
			  background: url('image/gate.jpg') no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
		h1 {
			text-align:center;
			font-family:Old english text mt;
		}
		h5 {
			text-align:center;
		}
	</style>
</head>
<body>
<div class="container">
	<br></br>
	<h1>SMC Express Payment</h1>
	<h5>Iligan City</h5>
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="cashierlogin.php" method="POST" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input  type="text" class="form-control" name="username" id="username" placeholder="Username">
			    		</div>
			    		<div class="form-group">
			    			<input  type="password" class="form-control" name="password" id="password" placeholder="Password">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>