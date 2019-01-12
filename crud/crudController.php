<?php
include '../Brains/db.php';

$dtbs = new Database();

if (isset($_POST['firstname']) || isset($_POST['middlename']) || isset($_POST['lastname']) || isset($_POST['address']) || isset($_POST['latitude']) || isset($_POST['longitude'])){
	echo "string";
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

if (isset($_POST['_firstname']) || isset($_POST['_middlename']) || isset($_POST['_lastname']) || isset($_POST['brgy']) || isset($_POST['_latitude']) || isset($_POST['_longitude'])){
	$create_firstname = $_POST['_firstname'];
	$create_middlename = $_POST['_middlename'];
	$crreate_lastname = $_POST['_lastname'];
	$create_address = $_POST['brgy'];
	$create_latitude = $_POST['_latitude'];
	$create_longitude = $_POST['_longitude'];

	$finalAddress = 0;

	if ($create_address == 'Ariman') {
		$finalAddress = 1;
	}if ($create_address == 'Bagacay') {
		$finalAddress = 2;
	}if ($create_address == 'Balud Del Norte (Pob.)') {
		$finalAddress = 3;
	}if ($create_address == 'Balud Del Sur (Pob.)') {
		$finalAddress = 4;
	}if ($create_address == 'Benguet') {
		$finalAddress = 5;
	}if ($create_address == 'Bentuco') {
		$finalAddress = 6;
	}if ($create_address == 'Beriran') {
		$finalAddress = 7;
	}if ($create_address == 'Buenavista') {
		$finalAddress = 8;
	}if ($create_address == 'Bulacao') {
		$finalAddress = 9;
	}if ($create_address == 'Cabigaan') {
		$finalAddress = 10;
	}if ($create_address == 'Cabiguhan') {
		$finalAddress = 11;
	}if ($create_address == 'Carriedo') {
		$finalAddress = 12;
	}if ($create_address == 'Casili') {
		$finalAddress = 13;
	}if ($create_address == 'Cogon') {
		$finalAddress = 14;
	}if ($create_address == 'Cota Na Daco (Pob.)') {
		$finalAddress = 15;
	}if ($create_address == 'Dita') {
		$finalAddress = 16;
	}if ($create_address == 'Jupi') {
		$finalAddress = 17;
	}if ($create_address == 'Lapinig') {
		$finalAddress = 18;
	}if ($create_address == 'Luna-Candol (Pob.)') {
		$finalAddress = 19;
	}if ($create_address == 'Manapao') {
		$finalAddress = 20;
	}if ($create_address == 'Manook (Pob.)') {
		$finalAddress = 21;
	}if ($create_address == 'Naagtan') {
		$finalAddress = 22;
	}if ($create_address == 'Nato') {
		$finalAddress = 23;
	}if ($create_address == 'Nazareno') {
		$finalAddress = 24;
	}if ($create_address == 'Ogao') {
		$finalAddress = 25;
	}if ($create_address == 'Paco') {
		$finalAddress = 26;
	}if ($create_address == 'Panganiban') {
		$finalAddress = 27;
	}if ($create_address == 'Paradijon (Pob.)') {
		$finalAddress = 28;
	}if ($create_address == 'Patag') {
		$finalAddress = 29;
	}if ($create_address == 'Payawin') {
		$finalAddress = 30;
	}if ($create_address == 'Pinontingan (Pob.)') {
		$finalAddress = 31;
	}if ($create_address == 'Rizal') {
		$finalAddress = 32;
	}if ($create_address == 'San Ignacio') {
		$finalAddress = 33;
	}if ($create_address == 'Sangat') {
		$finalAddress = 34;
	}if ($create_address == 'Santa Ana') {
		$finalAddress = 35;
	}if ($create_address == 'Tabi') {
		$finalAddress = 36;
	}if ($create_address == 'Tagaytay') {
		$finalAddress = 37;
	}if ($create_address == 'Tigkiw') {
		$finalAddress = 38;
	}if ($create_address == 'Tiris') {
		$finalAddress = 39;
	}if ($create_address == 'Togawe') {
		$finalAddress = 40;
	}if ($create_address == 'Union') {
		$finalAddress = 41;
	}if ($create_address == 'Villareal') {
		$finalAddress = 42;
	}
	echo $finalAddress;
	

	if ($create_firstname == NULL || $create_firstname == "" && $create_middlename == NULL || $create_middlename == "" && $crreate_lastname == NULL || $crreate_lastname == "" && $create_address == NULL || $create_address == "" && $create_latitude == NULL || $create_latitude == "" && $create_longitude == NULL || $create_longitude == "" ) {
		echo "Fields require!";
	}else {
		$add = "INSERT INTO information_tbl (firstname, middlename, lastname, address, lat, longitude) VALUES ('{$create_firstname}', '{$create_middlename}', '{$crreate_lastname}', '{$finalAddress}', {$create_latitude}, {$create_longitude} )";
		$insertThis = $dtbs->connection()->query($add);
		var_dump($insertThis);
		header("location:informationPage.php");
	}
}



if (isset($_GET['student_id'])) {
	$delete = "DELETE FROM `information_tbl` WHERE `id` = {$_GET['student_id']}";
	$deleteThis = $dtbs->connection()->query($delete);
	header("location:informationPage.php");
}

?>