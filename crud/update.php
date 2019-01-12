<?php 
include '../Brains/db.php';
$db = new Database();
echo $_GET['student_id'];
$query = $db->connection()->query('SELECT * FROM `information_tbl` WHERE `id` = '.$_GET['student_id'].' ' );

  while ($row = fetch_object($query));
  {
      $id = $row['id']; 
      $firstname = $row['firstname'];
      $middlename = $row['middlename'];
      $lastname = $row['lastname'];
      $address = $row['address'];
      $latitude = $row['latitude'];
      $longitude = $row['longitude'];

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>