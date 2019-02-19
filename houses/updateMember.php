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
    //include '../Brains/db.php';
    include '../crud/header.php';
    include 'houseHoldController.php';
?>

<?php 
    
   if(isset($_GET['slug'])){
    $_SESSION['human_id'] = $_GET['id'];
    $query = "SELECT * FROM `{$_GET['slug']}` JOIN people ON `{$_GET['slug']}`.members = people.people_id WHERE id = {$_GET['id']}";
    $result = $db->connection()->query($query);
         if($MemUp =  $result->fetch_object()){
             
             
      }
   }
?>
        <div class="container">
        <form class="jumbotron" style="margin-top: 5%; width: 60%" action="updateMember.php" method="POST">
		<br>

		<div class="form-row">
    		<div class="col">
    			<?php
    			if (count($suggestedPeople) > 0) {
    				echo '<select class="form-control" name="people_name">';
    				$count = 0;
    				while ($count < count($suggestedPeople)) {
    					echo $count;
    					echo '<option name="people">';
    					echo $suggestedPeople[$count];
    					echo "</option>";
    					$count++;
    				}
    				echo "</select>";
    			}else{
                   if(isset($_GET['id'])){
                    $query = "SELECT * FROM `{$_SESSION['house_name']}` JOIN people ON `{$_SESSION['house_name']}`.members = people.people_id WHERE members = {$_GET['id']}";
                    $mem = $db->connection()->query($query);
                    if($up = $mem->fetch_object()){
                        echo '<input autocomplete="off" type="text" class="form-control" name="search_name" value = "'.$up->full_name.'" placeholder="Search Name">';
                        }
                    }else{
                        echo '<input autocomplete="off" type="text" class="form-control" name="search_name" placeholder="Search Name">';
                    }
    			}
    			?>

                <div class="col"><br>
      			<input type="submit" name="hahaha" style = "margin-right: 5%" class="btn btn-primary" value="Search">
				<input type="submit" id="search" name = "create_member" class="btn btn-primary"   name="create" value="Save">
                <a href = "houseHoldLocation.php" class = "btn btn-secondary" style = "margin-left: 50%" >Back </a>	
		</div>
      			
    		</div>
    		
	</form>
</div>
    <?php 
    
         
    ?>

</body>
</html>