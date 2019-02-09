<?php
include '../Brains/db.php';

$dtbs = new Database();

if (isset($_POST['firstname']) || isset($_POST['middlename']) || isset($_POST['lastname'])){
	echo "string";
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];

	if ($firstname == ""){
		echo "require first name!";
	}
	if ($middlename == ""){
		echo "require middle name!";
	}
	if ($lastname == ""){
		echo "require last name!";
	}

	
}
if (isset($_POST['_firstname']) || isset($_POST['_middlename']) || isset($_POST['_lastname']) || isset($_POST['brgy']) || isset($_POST['_latitude']) || isset($_POST['_longitude'])){
	$create_firstname = $_POST['_firstname'];
	$create_middlename = $_POST['_middlename'];
	$crreate_lastname = $_POST['_lastname'];
	
	if ($create_firstname == NULL || $create_firstname == "" && $create_middlename == NULL || $create_middlename == "" && $crreate_lastname == NULL || $crreate_lastname == "" ) {
		echo "Fields require!";
	}else {
		$fullname = $create_firstname.' '.$create_middlename.' '.$crreate_lastname;
		$add = "INSERT INTO people (`f_name`, `m_name`, `l_name`, `full_name` ) VALUES ('{$create_firstname}', '{$create_middlename}', '{$crreate_lastname}', '{$fullname}')";
		$insertThis = $dtbs->connection()->query($add);
		header("location:informationPage.php");
	}
}
if (isset($_GET['student_id'])) {
	$delete = "DELETE FROM `people` WHERE `people_id` = {$_GET['student_id']}";
	$deleteThis = $dtbs->connection()->query($delete);
	header("location:informationPage.php");
}
?>