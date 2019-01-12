<?php 

include '../Brains/db.php';
$db = new Database();
echo $_GET['student_id'];
$people = $db->connection()->query('SELECT * FROM `information_tbl` WHERE `id` = '.$_GET['student_id'].' ' );
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
		<div><br><br>
			<h3><small>Head: </small><?php echo $selected_person->lastname.' '.$selected_person->firstname.' '.$selected_person->middlename; ?></h3>
		</div>
	</div>

</body>
</html>
