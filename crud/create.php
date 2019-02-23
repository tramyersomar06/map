 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../design/css/mydesign.css">

	<style type = "text/css">
        body{

		background-image:url("../HTML/hehe.jpg");
		background-size: cover;
		background-attachment: fixed;
}
    </style>
	
</head>
<body>

<?php
		include 'header.php';
		include 'crudController.php';
?>

	<form autocomplete="off" id="myform" action="create.php" class = "jumbotron" method = "POST" style ="width: 30%; margin-top: 3%; padding-top:2%; padding-bottom:4%" ><br>
	
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
			
			
		<br>
		<td><button type="submit" class="btn btn-primary" style="margin-right: 7%">save</button></td>
		<td><a href="../crud/informationPage.php"><button type = "button" class="btn btn-secondary">Cancel</button></a></td>
	
	</form>


</body>
</html>