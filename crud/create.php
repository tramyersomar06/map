<?php include 'createController.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../design/css/mydesign.css">
</head>
<body>
<?php
include 'header.php';

?>
<fieldset>
	

	<form id="myform" action="create.php" method = "post">
		<table cellspacing="0" cellpadding="0"><br><br>
			<tr>
				<th>First Name</th>
				<td><input type="text" class="form-control" name="firstname" placeholder="First name"></td>
			</tr>
			<tr>
				<th>Middle Name</th>
				<td><input type="text" class="form-control" name="middlename" placeholder="middle name"></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td><input type="text" class="form-control" name="lastname" placeholder="last name"></td>
			</tr>
			<tr>
				<th>Address no.</th>
				<td><input type="text" class="form-control" name="address" placeholder="Address no. "></td>
			</tr>
			<tr>
				<th>latitude</th>
				<td><input type="text" class="form-control" name="latitude" placeholder="latitude"></td>
			</tr>
			<tr>
				<th>longitude</th>
				<td><input type="text" class="form-control" name="longitude" placeholder="longitude"></td>
			</tr>
			<tr>
				
			
				<td><button type="submit">save</button></td>
				<td><a href="../index.php"><button type = "button">Back</button></a></td>
			</tr>
		</table>

</fieldset>

</body>
</html>