<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
    <title>Document</title>

    <style type = "text/css">
        body{

background-image:url("../HTML/city.jpg");
background-size: cover;
background-attachment: fixed;
}
    </style>
</head>
<body>
<?php
    include '../Brains/db.php';
    include '../crud/header.php';
?>
    <div class="container" style="padding-top: 2%">
        <table class="table table-bordered">
        <thead bgcolor = "#BCD6F2">
            <th>Household No.</th>
            <th>Respondent</th>
            <th>Place</th>
            <th></th>
           
            <a href = "http://localhost/Map/index.php" class = "btn btn-secondary" style = "margin-bottom: 1%;margin-right: 1%" >Back </a>
            <a class="btn btn-primary" id="" href="createHouses.php" style="margin-bottom: 1%; margin-right: 1%">Add</a>
            <a title = "print screen" alt = "print screen " class = "btn btn-success" onclick = "window.print();"target="_blank" style ="cursor:pointer;margin-bottom: 1%">Print</a>
        
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
                echo "<td><a href=\"houseHoldLocation.php?slug={$result->slug}&id={$result->id}\" class=\"btn btn-secondary\">Details</a></td>";
                echo "<td><a href=\"houseHoldController.php?delete={$result->slug}\" class=\"btn btn-danger\">Delete</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>