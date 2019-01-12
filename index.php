<?php
include 'loginController.php';
if (!isset($_SESSION['hash'])) {
	header('location:loginPage.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
	<script type="text/javascript" src="design/js/bootstrap.js"></script>
	<script type="text/javascript" src="design/js/bootstrap.min.js"></script>

</head>
<body>
	<?php include 'header.php'; ?>
  <center><a class="navbar-brand" href="#" style="margin:auto; padding-top: 20px;"><h4>Online Database for Disaster Response with Map Support</h4></a><br></center><br>
  

</body>
</html>