<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../design/css/mydesign.css">
</head>
<body>

<?php
		include '../header.php';
		require_once '../Brains/db.php'
?>

	<form id="myform" action=""  method = "POST"><br>
	<table cellspacing="0" cellpadding="0"><br><br>
			<tr>
				<div>
					<th>First Name:</th>
					<td><input type="text" class="form-control" name="fname" placeholder="First name"></td>
				</div>
			</tr>
			<tr>
				<th>Middle Name:</th>
				<td><input type="text" class="form-control" name="_mname" placeholder="Middle name"></td>
			</tr>
			<tr>
				<th>Last Name:</th>
				<td><input type="text" class="form-control" name="_lname" placeholder="Last name"></td>
			</tr>
			<tr>
				<th>full name:</th>
				<td><input type="text" class="form-control" name="fullname" placeholder="full name"></td>
			</tr>
			<tr>
				<th>sex:</th>
				<td><input type="text" class="form-control" name="sex" placeholder="sex"></td>
			</tr>
			<tr>
				<th>Relation:</th>
				<td><input type="text" class="form-control" name="relation" placeholder="Relation"></td>
			</tr>
		</table><br>

	</form>
</body>
</html>