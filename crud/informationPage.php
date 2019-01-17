<?php 
session_start();
include '../Brains/db.php'; 
$db = new Database();

$people = $db->connection()->query('SELECT * FROM `information_tbl` JOIN `barangay` ON `barangay`.`barangay_id` = `information_tbl`.`address`');


// echo "<pre>";
// var_dump($rows);
// echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
	

<style type="text/css">
	.manageData {
		width: 50%;
		margin: auto;
	}

	table{
		width: 100%;
		margin:top:auto;
		
	}
	th{
		text-align: center;

	}

</style>
</head>
<body>

	<?php 
	require_once 'header.php';
	?>
<form >

</div>
<div>
	
	<div class="container-fluid" style="width: 90%">
	
	<div class="table-responsive">
	<table  class="table table-bordered"><br>
		<div style="text-align: center;"><h2> Data Information </h2></div>
		<a class="btn btn-primary" id="" href="http://localhost/Map/crud/create.php" style="margin-bottom: 1%">Add Data</a>
		<a class="btn btn-primary" href="../houses/createHouses.php" style="margin-bottom: 1%;margin-left: 1%">Household</a>
		    	</div>

		<thead bgcolor = "#BCD6F2">
			<th style = " width: 15%">First Name</th>
			<th style = " width: 20%">Middle Name</th>
			<th style = " width: 15%">Last Name</th>
			<th style = " width: 15%">Place</th>
			<th style = " width: 10%"></th>
			<th style = " width: 10%"></th>
			<th style = " width: 10%"></th>
			
		</thead>
		<tbody style="text-align: center;">
			<?php
			// echo "<pre>";
			// var_dump($rows = $people->fetch_object());
			// echo "</pre>";
			while ($rows = $people->fetch_object()) {
				
				echo "<td>". $rows->firstname ."</td>";
				echo "<td>". $rows->middlename ."</td>";
				echo "<td>". $rows->lastname ."</td>";
				echo "<td>". $rows->barangay ."</td>";
				echo "<td><a class=\"btn btn-success\" href=\"view.php?student_id={$rows->id}\">View</a></td>";
				echo "<td><a class=\"btn btn-info\" href=\"update.php?student_id={$rows->id}\">Edit</a></td>";
				echo "<td><a class=\"btn btn-danger\" href=\"crudController.php?student_id={$rows->id}\">Delete</a></td>";
				echo "</tr>";
			}
			?>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit ">Search</button> 
 		<input class="form-control mr-sm-2" type="search" placeholder="Search Place" style="width: 30%;margin-left: 70%" aria-label="Search ">
      	

		</tbody>
	</table>
 	</div>
	</div>	
</div>
</form>
</body>
</html>