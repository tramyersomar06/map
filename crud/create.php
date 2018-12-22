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
	<p align="right">
#1 Ariman
#2 Bagacay
#3 Balud Del Norte (Pob.)
#4 Balud Del Sur (Pob.)
#5 Benguet
#6 Bentuco
#7 Beriran
#8 Buenavista
#9 Bulacao
#10 Cabigaan
#11 Cabiguhan
#12 Carriedo
#13 Casili
#14 Cogon
#15Cota Na Daco (Pob.)
#16 Dita
#17 Jupi
#18 Lapinig
#19 Luna-Candol (Pob.)
#20 Manapao
#21 Manook (Pob.)
#22 Naagtan
#23 Nato
#24 Nazareno
#25 Ogao
#26 Paco
#27 Panganiban (Pob.)
#28 Paradijon (Pob.)
#29 Patag
#30 Payawin
#31 inontingan (Pob.)
#32 Rizal
#33 San Ignacio
#34 Sangat
#35 Santa Ana
#36 Tabi
#37 Tagaytay
#38 Tigkiw
#39 Tiris
#40 Togawe
#41 Union
#42 Villareal

</p>

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