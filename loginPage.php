<?php include 'loginController.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Map System</title>
	<link rel="stylesheet" type="text/css"  href="design/css/bootstrap.min.css">
</head>

<body>
	
	<style type="text/css">
		body{
			background: url(HTML/map.jpeg);
			height: 100vh;
			background-size: cover;
			background-position: center;
			margin-top: 5%;
		}
		form{
			width: 30%;
			margin: auto;, auto, auto, auto;
			border-color: 
		}

	</style>
	<form autocomplete="off" action="loginPage.php" class="jumbotron" method="POST">
		<p><?php echo $errorMessage; ?></p>
		<label>Username:</label><input type="text" class="form-control" name="username" placeholder="Enter Username">
		<br>
		<label>Password:</label><input type="password" class="form-control" name="password" placeholder="Enter Password">
		<br>
		<input type="submit" class="btn btn-primary" name="login" value="Login">
        <a align="right" class="nav-link" href="http://localhost/map/crud/signup.php">Create Account?<span class="sr-only">(current)</span></a>
	</form>
</body>
</html>