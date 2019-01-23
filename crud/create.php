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

	<form id="myform" action="create.php" method = "POST"  enctype = "multipart/form-data"><br>
	<input type = "file" name = "file" style = "margin-left: 50%">

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
			<tr>
				<th>Barangay:</th>
				<td>
					<select class = "form-control" name="brgy">
						<option>Ariman</option>
						<option>Bagacay</option>
						<option>Balud Del Norte (Pob.)</option>
						<option>Balud Del Sur (Pob.)</option>
						<option>Benguet</option>
						<option>Bentuco</option>
						<option>Beriran</option>
						<option>Buenavista</option>
						<option>Bulacao</option>
						<option>Cabigaan</option>
						<option>Cabiguhan</option>
						<option>Carriedo</option>
						<option>Casili</option>
						<option>Cogon</option>
						<option>Cota Na Daco (Pob.)</option>
						<option>Dita</option>
						<option>Jupi</option>
						<option>Lapinig</option>
						<option>Luna-Candol (Pob.)</option>
						<option>Manapao</option>
						<option>Manook (Pob.)</option>
						<option>Naagtan</option>
						<option>Nato</option>
						<option>Nazareno</option>
						<option>Ogao</option>
						<option>Paco</option>
						<option>Panganiban (Pob.)</option>
						<option>Paradijon (Pob.)</option>
						<option>Patag</option>
						<option>Payawin</option>
						<option>Pinontingan (Pob.)</option>
						<option>Rizal</option>
						<option>San Ignacio</option>
						<option>Sangat</option>
						<option>Santa Ana</option>
						<option>Tabi</option>
						<option>Tagaytay</option>
						<option>Tigkiw</option>
						<option>Tiris</option>
						<option>Togawe</option>
						<option>Union</option>
						<option>Villareal</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<th>Latitude:</th>
				<td><input type="text" class="form-control" name="_latitude" placeholder="Latitude"></td>
			</tr>
			<tr>
				<th>Longitude:</th>
				<td><input type="text" class="form-control" name="_longitude" placeholder="Longitude"></td>
			</tr>
			
		</table><br>
		<td><button type="submit" class="btn btn-primary" style="margin-right: 7%;margin-left: 9%">save</button></td>
				<td><a href="../crud/informationPage.php"><button type = "button" class="btn btn-secondary">Cancel</button></a></td>
	</form>
	</form>


</body>
</html>