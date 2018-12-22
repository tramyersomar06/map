<?php

if (isset($_POST['firstname']) || isset($_POST['middlename']) || isset($_POST['lastname']) || isset($_POST['address']) || isset($_POST['latitude']) || isset($_POST['longitude'])){
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	if ($firstname == ""){
		echo "require first name!";
	}
	if ($middlename == ""){
		echo "require middle name!";
	}
	if ($lastname == ""){
		echo "require last name!";
	}
	if ($address == ""){
		echo "require address!";
	}
	if ($latitude == ""){
		echo "require latitude!";
	}
	if ($longitude == ""){
		echo "require longitude!";
	}


}