<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
    include '../Brains/db.php';
    include '../crud/header.php';
?>
    <div class="container" style="padding-top: 2%">
        <table class="table table-bordered">
        <center><h3>HOUSEHOLDS<h3></center>
        <thead>
            <th>Household No.</th>
            <th>Respondent</th>
            <th>Place</th>
           
            <a class="btn btn-primary" id="" href="http://localhost/Map/houses/createHouses.php" style="margin-bottom: 1%">Add Data</a>
            <th></th>
        </thead>
        <tbody>
        <?php
            $db = new Database();
            $query = $db->connection()->query("SELECT * FROM `house` JOIN `barangay` JOIN `people` ON `house`.`brgy` = `barangay`.`barangay_id` AND `house`.`respondent` = `people`.`people_id`");
            while($result = $query->fetch_object()){
                echo "<tr>";
                echo "<td>{$result->slug}</td>";
                echo "<td>{$result->full_name}</td>";
                echo "<td>{$result->barangay}</td>";
                echo "<td><a href=\"houseHoldLocation.php?id={$result->id}\" class=\"btn btn-secondary\">Details</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>