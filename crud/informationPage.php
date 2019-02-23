<?php 
session_start();
include '../Brains/db.php'; 
$db = new Database();

$people = $db->connection()->query('SELECT * FROM `people` LIMIT 20');


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

	a{
		text-decoration: none;
		display: inline-block;
		padding: 8px 16px;

		}

	a:hover {
		
		color: black;
	}
	.next {
		background-color: #4CAF50;
		color: white;
}

	

</style>
</head>
<body>

	<?php 
		include 'header.php';
	?>

	
<form >

</div>
<div>
	
	<div class="container-fluid" style="width: 80%">
	<div class="table-responsive">
	<table  class="table table-bordered">
		<div style="text-align: center;"></div><br>
		<a href = "http://localhost/Map/index.php" class = "btn btn-secondary" style = "margin-bottom: 1%;margin-right: 1%" >Back </a>
		<a class="btn btn-primary" id="" href="http://localhost/Map/crud/create.php" style="margin-bottom: 1%;margin-right: 1%">Create</a>
		<a title = "print screen" alt = "print screen " class = "btn btn-success" onclick = "window.print();"target="_blank" style ="cursor:pointer;margin-bottom: 1%;" >Print</a>
		
	

		<thead bgcolor = "#BCD6F2" autocomplete="off">
			<th style = " width: 15%">First Name</th>
			<th style = " width: 20%">Middle Name</th>
			<th style = " width: 15%">Last Name</th>
			<th style = " width: 10%"></th>
			<th style = " width: 10%"></th>
			<!-- <th style = " width: 10%"></th> -->
			
			
		</thead>
		</div>
		<tbody style="text-align: center;">
			<?php
			
			while ($rows = $people->fetch_object()) {
				
				echo "<td>". $rows->f_name ."</td>";
				echo "<td>". $rows->m_name ."</td>";
				echo "<td>". $rows->l_name ."</td>";
				
				// echo "<td><a class=\"btn btn-success\" href=\"view.php?student_id={$rows->people_id}\">View</a></td>";
				echo "<td><a class=\"btn btn-info\" href=\"update.php?student_id={$rows->people_id}\">Edit</a></td>";
				echo "<td><a class=\"btn btn-danger\" href=\"crudController.php?student_id={$rows->people_id}\">Delete</a></td>";
				echo "</tr>";
			}
			?>
			
		</tbody>
	</table>
			<center><div >
					<a href="#" style = "margin-right: 3%" class="previous">&laquo; Previous</a>
					<a href="#" class="next">Next &raquo;</a>
		</div></center><br><br>
 	</div>
	</div>	
</div>
</form>
</body>
</html>