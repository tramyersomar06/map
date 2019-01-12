<?php

if (isset($_POST['Longitude']) || (isset($_POST['Latitude']) || (isset($_POST['brgy']) || (isset($_POST['full_name']) || (isset($_POST['search_name']) || (isset($_POST['hahaha'])){
}

	$Longitude = $_POST['Longitude'];
	$Latitude = $_POST['Latitude'];
	$brgy = $_POST['brgy'];
	$full_name = $_POST['full_name'];
	$search_name = $_POST['search_name'];
	$hahaha = $_POST['hahaha'];

	if ($Longitude == ""){
		echo "require Longitude!";
	}
	if ($Latitude == ""){
		echo "require Latitude!";
	}
	if ($brgy == ""){
		echo "require brgy!";
	}
	if ($full_name == ""){
		echo "require name!";
	}
	if ($search_name == ""){
		echo "require field";
	}
	if ($hahaha == ""){
		echo "search name!";
	}
}

?>