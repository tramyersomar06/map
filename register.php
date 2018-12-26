<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Map/design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Map/design/css/mydesign.css">
</head>
<body>
	<?php 
	include 'header.php';
	?>
<fieldset>


	<form id="myform" action="register.php" method = "post">
		<table cellspacing="0" cellpadding="0"><br><br>

			<h3>Create Account</h3><br>
			<tr>
				<th>User name</th>
				<td><input type="text" class="form-control" name="Username" placeholder="User name"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="text" class="form-control" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<th>confirm Password</th>
				<td><input type="text" class="form-control" name="password" placeholder="Comfirm Password"></td>
			</tr>

			<td><button type="submit">save</button></td>
				<td><a href="../Map/index.php"><button type = "button">cancel</button></a></td>
			</tr>
		</table>

</fieldset>

</body>
</html>