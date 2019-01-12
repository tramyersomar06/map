<?php 
require_once'../Brains/db.php';
$db = new Database();

if(isset($_POST['Longitude']) && isset($_POST['Latitude']) && isset($_POST['brgy'])) {
	
}

if (isset($_POST['search_name'])) {
	$searchLike = $_POST['search_name'];
	$result = $db->connection()->query("SELECT * FROM `people` WHERE (`full_name` LIKE '%{$searchLike}%')");
	while ( $mainResult = $result->fetch_object() ) {
		echo $mainResult->full_name;
	}
}