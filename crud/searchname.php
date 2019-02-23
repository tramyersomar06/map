<?php
$suggestedPeople = array();

if (isset($_POST['search_name'])) {
	$searchLike = $_POST['search_name'];
	if ($searchLike == "") {
	}else{
		$result = $db->connection()->query("SELECT * FROM `people` WHERE (`full_name` LIKE '%{$searchLike}%')");
		while ( $mainResult = $result->fetch_object() ) {
			array_push($suggestedPeople, $mainResult->full_name);
		}
	}
}

var_dump($suggestedPeople);