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
  
	<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990238.8367982757!2d121.63896341090494!3d14.18772237977101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sph!4v1545147495834" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></center><br><br>



	<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="HTML/carow/pic 1.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="HTML/carow/pic 2.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="HTML/carow/pic 3.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div> -->

</body>
</html>