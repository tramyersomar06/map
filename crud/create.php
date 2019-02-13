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
		include 'crudController.php';


?>

	<form id="myform" action="create.php" method = "POST"><br>
	<table cellspacing="0" cellpadding="0"><br><br>
			<tr>
				<div>
					<th>First Name:</th>
					<td><input type="text" class="form-control" name="_firstname" placeholder="First name"></td>
				</div>
			</tr>
			<tr>
				<th>Middle Name:</th>
				<td><input type="text" class="form-control" name="_middlename" placeholder="Middle name"></td>
			</tr>
			<tr>
				<th>Last Name:</th>
				<td><input type="text" class="form-control" name="_lastname" placeholder="Last name"></td>
			</tr>
			
			
		</table><br>
		<td><button type="submit" class="btn btn-primary" style="margin-right: 7%;margin-left: 9%">save</button></td>
				<td><a href="../crud/informationPage.php"><button type = "button" class="btn btn-secondary">Cancel</button></a></td>
	</form>
	</form>


</body>
</html>