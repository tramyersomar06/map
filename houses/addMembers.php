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
    <?php echo $_GET['id'] ?>
    <?php 
    
    ?>
    <div class="container">
        <form action="" class="form" method="POST">
            <div class="form-group">
                <label for="">Person</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="ADD">
            </div>
        </form>
    </div>
</body>
</html>