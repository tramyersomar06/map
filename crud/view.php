<?php

include '../Brains/db.php';
$db = new Database();
$people = $db->connection()->query('INSERT * FROM `information_tbl` WHERE `id` = '.$_GET['student_id'].' ');
$selected_person = $people->fetch_object();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../design/css/bootstrap.min.css">
</head>
<body>
	<?php 
	include 'header.php';
	?>
	<div class="container">
		<div>
			<h3><small>Name: </small><?php echo $selected_person->lastname.' '.$selected_person->firstname.' '.$selected_person->middlename; ?></h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990238.8367982757!2d121.63896341090494!3d14.18772237977101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sph!4v1545147495834" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</body>
</html>