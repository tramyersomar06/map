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
	<form class="form" style="margin-top: 5%" action="familyMem.php" method="POST">
		<br>

		<div class="form-row">
    		<div class="col">
    			<?php
    			if (count($suggestedPeople) > 0) {
    				echo '<select class="form-control" name="fam_member">';
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
				<label>Position: </label>
				<?php
				$result = $db->connection()->query("SELECT * FROM  `family_position` LIMIT 42");
					echo '<select name="brgy" class="form-control">';
					while($row = $result->fetch_object()){
						echo '<option name="'.$row->fam_id.'">'.$row->position.'</option>';
					}
					echo '</select>';
				?>
						
    		</div>
    		<div class="col"><br>
      			<input type="submit" name="hahaha" class="btn btn-primary" value="Search">
    		</div>
  		</div>
		  <div>
				<input type="submit" id="search" class="btn btn-primary" style="margin-top: 3%" name="create_member" value="Save">
		</div>
	</form>
</div>
</body>

</html>