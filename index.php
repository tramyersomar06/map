<?php
include 'loginController.php';
if (!isset($_SESSION['hash'])) {
	header('location:loginPage.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
 
	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
	<script type="text/javascript" src="design/js/bootstrap.js"></script>
	<script type="text/javascript" src="design/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
    <style type = "text/css">
    </style>

<style type = "text/css">

body{

background-image:url("HTML/team.png");
background-size: cover;
background-attachment: fixed;
}

</style>

</head>
<body>
	<?php include 'header.php'; ?>

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>