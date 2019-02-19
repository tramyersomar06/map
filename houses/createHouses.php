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
// include '../Brains/db.php';
include '../crud/header.php';
include 'houseHoldController.php';

?>

<div class="container" style = "margin-left:28%">
	<form class="jumbotron" style="margin-top: 5%; width: 50%; padding:2%" action="createHouses.php"  method="POST">
		<br>

		<div class="form-row">
    		<div class="col">
    			<?php
    			if (count($suggestedPeople) > 0) {
    				echo '<select class="form-control" name="respondent">';
    				$count = 0;
    				while ($count < count($suggestedPeople)) {
    					echo $count;
    					echo '<option name="{$suggestedPeople->id}">';
    					echo $suggestedPeople[$count];
    					echo "</option>";
    					$count++;
    				}
    				echo "</select>";
    			}else{
    				echo '<input autocomplete="off" type="text" class="form-control" name="search_name" placeholder="Search Name">';
    			}
    			?>

		

    			<?php
				$result = $db->connection()->query("SELECT * FROM  `barangay` LIMIT 42");
					echo '<select name="brgy" class="form-control">';
					while($row = $result->fetch_object()){
						echo '<option name="'.$row->barangay_id.'">'.$row->barangay.'</option>';
					}
					echo '</select>';
				?>
			<input autocomplete="off" class="form-control" type="text" name="Longitude" placeholder="Longitude">
			<input autocomplete="off" class="form-control" type="text" name="Latitude" placeholder="Latitude"><br>
			<input type="submit" style = "margin-right: 3%" name="hahaha" class="btn btn-primary" value="SEARCH">
			<input type="submit" id="search" class="btn btn-primary"   name="create" value="Save">
			<a href = "houseHoldList.php" class = "btn btn-secondary" style = "margin-left: 50%" >Back </a>

    		</div>
    		
	</form>
</div>
</div>
</body>

</html>