<?php 

include '../Brains/db.php';
$db = new Database();
echo $_GET['student_id'];
$people = $db->connection()->query('SELECT * FROM `people` WHERE `people_id` = '.$_GET['student_id'].' ' );
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
	<br>
	<center><div style="text-align: center;"><h2>  </h2></div></center>
	<div class="container-fluid" style="width: 90%">

		<div><br>
			<h3><small>Respondent: </small><?php echo $selected_person->l_name.' '.$selected_person->f_name.' '.$selected_person->m_name; ?></h3>
		</div>

	</div>
</div>
</body>
</html>
