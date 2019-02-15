<?php 
session_start();
include '../Brains/db.php'; 
$db = new Database();

$people = $db->connection()->query('SELECT * FROM `people` LIMIT 10');


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
    body{

background-image:url("../HTML/city.jpg");
background-size: cover;
background-attachment: fixed;
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
		<div style="text-align: center;"><h2></h2></div><br>
		<a class="btn btn-primary" id="" href="http://localhost/Map/crud/create.php" style="margin-bottom: 1%">insert</a>
		
	</div>

		<thead bgcolor = "#BCD6F2">
			<th style = " width: 15%">First Name</th>
			<th style = " width: 20%">Middle Name</th>
			<th style = " width: 15%">Last Name</th>
			<th style = " width: 10%"></th>
			<th style = " width: 10%"></th>
			<th style = " width: 10%"></th>

			
			
		</thead>
		<tbody style="text-align: center;">
			<?php
			
			while ($rows = $people->fetch_object()) {
				
				echo "<td>". $rows->f_name ."</td>";
				echo "<td>". $rows->m_name ."</td>";
				echo "<td>". $rows->l_name ."</td>";
				
				echo "<td><a class=\"btn btn-success\" href=\"view.php?student_id={$rows->people_id}\">View</a></td>";
				echo "<td><a class=\"btn btn-info\" href=\"update.php?student_id={$rows->people_id}\">Edit</a></td>";
				echo "<td><a class=\"btn btn-danger\" href=\"crudController.php?student_id={$rows->people_id}\">Delete</a></td>";
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