<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
	<style type="text/css">
		.form-control{
			margin-top: 3%;
		}
	</style>
</head>
<body>

<?php
include '../Brains/db.php';
include '../crud/header.php';
include 'houseHoldController.php';

?>

<div class="container">
	<form class="form" style="margin-top: 5%" action="createHouses.php" method="POST">
		<br><br><br>
	<!-- 	<input class="form-control" type="text" name="Longitude" placeholder="Longitude">
		<input class="form-control" type="text" name="Latitude" placeholder="Latitude"> -->
		<!-- <?php
		$result = $db->connection()->query("SELECT * FROM  `barangay` LIMIT 42");
			echo '<select name="brgy" class="form-control">';
			while($row = $result->fetch_object()){
				echo '<option name="'.$row->barangay_id.'">'.$row->barangay.'</option>';
			}
			echo '</select>';
		?> -->
		<!-- $result = $db->connection()->query("SELECT * FROM  `people` WHERE (`full_name` LIKE `'%{}%'`)");
			echo '<select name="respondent" class="form-control">';
			while($row = $result->fetch_object()){
				echo '<option name="'.$row->barangay_id.'">'.$row->barangay.'</option>';
			}
			echo '</select>';
		?> -->
		<!-- <div class="form-row">
    		<div class="col">
      			<input type="text" class="form-control" name="full_name" placeholder="NAME">
    		</div> -->
    		<div class="col">
      			<input autocomplete="off" type="text" class="form-control" name="search_name" placeholder="Input Here!">
    		</div>
    		<div class="col"><br>
      			<center><input type="submit" name="hahaha" class="btn btn-primary" value="ENTER"></center>
    		</div>
  		</div>
		<!-- <input type="submit" id="search" class="btn btn-primary" style="margin-top: 3%" value="CREATE"> -->
	</form>
</div>
	<script type="text/javascript" src="../Brains/jquery-3.3.1.slim.min"></script>
	<script type="text/javascript">
		var sss = document.getElementById('search').value();
		alert(sss);
	</script>
</body>

</html>