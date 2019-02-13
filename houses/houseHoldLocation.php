<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
    <title>map system</title>
   
    <style>

      #map {
        height: 55%;
        width: 45%;
        margin: auto;
        margin-top: 3%;
        margin-left: 45%;
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
    include '../Brains/db.php';
$db = new Database();

?>
    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
        </div>
    </div>

    <div id="map"></div>
    
        <?php
            $query = "SELECT * FROM house WHERE id = {$_GET['id']}";
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
            
       
        <div class="float-left">
            <h3 class="h3">Family Members</h3>
            <?php
            $query2 = "SELECT * FROM `{$house}` JOIN `people` ON `{$house}`.`members` = `people`.`people_id`";
            $result2 = $db->connection()->query($query2);
                while($members = $result2->fetch_object()){
                    echo $members->full_name,'<br>';
                }
            }
            ?>
        </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVwmJw-KmDmkNjYNuAfBheDGDZuLwA1HY
    &callback=initMap"
    async defer></script>
</body>
</html>