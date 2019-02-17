<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
    <title>map system</title>
   
    <style type="text/css">

      #map {
        height: 55%;
        width: 55%;
        margin: auto;
        margin-top: 3%;
        margin-left: 22%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      

    </style>
</head>
<body>
<?php
    include '../crud/header.php';
    include '../loginController.php';
    if(isset($_GET['id'])){
        $_SESSION['home_id'] = $_GET['id'];
        $_SESSION['house_name'] = $_GET['slug'];
    }
   

$db = new Database();

?>
    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
        </div>
    </div>

    <div id="map"></div>
    
        <?php
            $query = "SELECT * FROM house WHERE id = {$_SESSION['home_id']}";
            $result = $db->connection()->query($query);
            if($map = $result->fetch_object()){
                $long = $map->longitude;
                $lat = $map->latitude;
                $house = $map->slug;
                
                echo "<script>
                var map;
                function initMap() {
                  var option = {
                      zoom:15,
                      center:{lat:{$lat}, lng:{$long}}
                  }
                  var map = new google.maps.Map(document.getElementById('map'), option);
                  var marker = new google.maps.Marker({
                      position:{lat:{$lat}, lng:{$long}},
                      map:map
                  });
                }
              </script>";
                
        ?>
            
        

            <!-- Table start -->
            
                   <div class="container"><br><br>
                   <a class="btn btn-primary" href="http://localhost/Map/houses/familyMem.php" style="margin-bottom: 1%">Add</a>
                   <table  class="table">
                        <thead bgcolor = "#BCD6F2" styele = "margin-left:10%">
                            <th style = " width: 15%">Family Members:</th>
                            <th style = " width: 10%"></th>
                            <th style = " width: 10%"></th>
                            <th style = " width: 10%"></th>
                        </thead>
                        <tbody>
        
                   
                   </div>

            <?php
            $query2 = "SELECT * FROM `{$house}` JOIN `people` ON `{$house}`.`members` = `people`.`people_id`";
            $result2 = $db->connection()->query($query2);
                while($members = $result2->fetch_object()){
            ?>
                            <tr>
                                <td><?php echo $members->full_name; ?></td>
                                <td><a href = "updateMember.php?id=<?php echo $members->members ?>&slug=<?php echo $_GET['slug'] ?>" class = "btn btn-secondary">Edit</a></td>
                                <td><a href = "houseHoldController.php?id=<?php echo $members->members ?>" class = "btn btn-danger" name = "DeleteMe">Delete</a></td>
                            </tr>

                           
                </div>
            <?php
             }
            }
            ?>
                    <!-- table continuation -->
                        </tbody>
                    </table>


        </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVwmJw-KmDmkNjYNuAfBheDGDZuLwA1HY
    &callback=initMap"
    async defer></script>

    <form >

</div>
<div>
	
	<div class="container-fluid" style="width: 90%">
	<div class="table-responsive">
	

</body>
</html>