<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Members</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
    <script src="main.js"></script>

    

</head>
<body>
<?php
    include '../crud/header.php';
    include '../loginController.php';
    include 'houseHoldController.php';
?>

<?php 
    
   $query = "SELECT * FROM `{$_GET['slug']}` JOIN people ON `{$_GET['slug']}`.members = people.people_id WHERE id = {$_GET['id']}";
   $result = $db->connection()->query($query);
        if($MemUp =  $result->fetch_object()){
            
     }

?>
        <div class="container">
        <form class="form" style="margin-top: 5%" action="createHouses.php" method="POST">
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
                    $query = "SELECT * FROM `{$_SESSION['house_name']}` JOIN people ON `{$_SESSION['house_name']}`.members = people.people_id WHERE members = {$_GET['id']}";
                    $mem = $db->connection()->query($query);
                    if($up = $mem->fetch_object()){
                    var_dump($up);
                     }
    			}
    			?>
      			
    		</div>
    		<div class="col"><br>
      			<input type="submit" name="hahaha" class="btn btn-primary" value="Search">
				<input type="submit" id="search" class="btn btn-primary"   name="create" value="Save">	
		</div>
	</form>
</div>
    <?php 
    
         

    ?>

</body>
</html>