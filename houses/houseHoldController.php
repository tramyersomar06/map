<?php 
require_once'../Brains/db.php';
$db = new Database();

if(isset($_POST['Longitude']) && isset($_POST['Latitude']) && isset($_POST['brgy'])) {
	
}

$suggestedPeople = array();

if (isset($_POST['search_name'])) {
	$searchLike = $_POST['search_name'];
	if ($searchLike == "") {
		# code...
	}else{
		$result = $db->connection()->query("SELECT * FROM `people` WHERE (`full_name` LIKE '%{$searchLike}%')");
		while ( $mainResult = $result->fetch_object() ) {
			array_push($suggestedPeople, $mainResult->full_name);
		}
	}
	
}