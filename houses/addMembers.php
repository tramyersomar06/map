<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../design/css/mydesign.css">
	
</head>
<body>

<?php
include '../Brains/db.php';
include '../crud/header.php';
include 'houseHoldController.php';


?>

	<form id="seacrh" style="margin-top: 5%;margin-left: 5%; padding-right:60%" action="addMembers.php" method = "POST">
    
		<tr>	
			<td><input type="text" class="form-control" name="ffirstname" placeholder="First name"></td>
        </tr>
        <tr>	
			<td><input type="text" class="form-control" name="mmiddlename" placeholder="Middle name"></td>
        </tr>
        <tr>	
			<td><input type="text" class="form-control" name="llastname" placeholder="Last name"></td>
        </tr>
     <form>
     <table cellspacing="0" cellpadding="0">
		<div class="form-row">
    		<div class="col">
				<?php
				$result = $db->connection()->query("SELECT * FROM  `family_position`");
					echo '<select name="relation" class="form-control">';
					while($row = $result->fetch_object()){
						echo '<option name="'.$row->fam_id.'">'.$row->position.'</option>';
					}
					echo '</select>';
				?>

        </table><br>
            <td><input type="submit" id="search" class="btn btn-primary" style="margin-right: 7%;margin-left: 0%" name="create_members" value="Save"></td>
			<td><a href="http://localhost/Map/houses/houseHoldList.php"><button type = "button" class="btn btn-secondary">Cancel</button></a></td>
	</form>
	</form>
</body>
</html>