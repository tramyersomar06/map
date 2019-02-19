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
// include '../loginController.php';
include '../crud/header.php';
include 'houseHoldController.php';

?>

<div class="container">
	<form class="jumbotron" style="margin-top: 5%; width: 50%; padding-top: 3%" action="familyMem.php" method="POST">
		<br>

		<div class="form-row">
    		<div class="col">
			<label>Family Name:</label>
    			<?php
    			if (count($suggestedPeople) > 0) {
    				echo '<select class="form-control" name="people_name">';
    				$count = 0;
    				while ($count < count($suggestedPeople)) {
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
				
				<!-- <?php
				$result = $db->connection()->query("SELECT * FROM  `family_position`");
					echo '<select name="relation" class="form-control">';
					while($row = $result->fetch_object()){
						echo '<option name="'.$row->fam_id.'">'.$row->position.'</option>';
					}
					echo '</select>';
				?> -->
					<br>	
					<input type="submit" style = "margin-right: 5%" name="hahaha" class="btn btn-primary" value="Search">
					<input type="submit" id="search" class="btn btn-primary"  name="create_member" value="Save">
					<a href = "houseHoldLocation.php" class = "btn btn-secondary" style = "margin-left: 50%" >Back </a>
    		</div>
    		
  		</div>
		  
	</form>
</div>
</body>

</html>

