<?php 

include '../Brains/db.php'; 
$db = new Database();

$people = $db->connection()->query('SELECT * FROM `information_tbl` JOIN `table 5` ON `table 5`.`barangay_id` = `information_tbl`.`address`');


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
	include 'header.php';
	?>
<form style="margin-top: auto;"><br>

</div><br>
<div>
	<div class="container">
	<div class="table-responsive text-center">
	<table class="table table-bordered">
		<thead>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php
			// echo "<pre>";
			// var_dump($rows = $people->fetch_object());
			// echo "</pre>";
			while ($rows = $people->fetch_object()) {
				echo "<tr>";
				echo "<td>". $rows->firstname ."</td>";
				echo "<td>". $rows->middlename ."</td>";
				echo "<td>". $rows->lastname ."</td>";
				echo "<td>". $rows->barangay ."</td>";
				echo "<td><a class=\"btn btn-primary\" href=\"view.php?student_id={$rows->id}\">View</a></td>";
				echo "<td><a class=\"btn btn-secondary\">Edit</a></td>";
				echo "<td><a class=\"btn btn-secondary\">Update</a></td>";
				echo "<td><a class=\"btn btn-danger\">Delete</a></td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
 	</div>
	</div>	
</div>
</form>
</body>
</html>