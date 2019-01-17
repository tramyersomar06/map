<?php
include '../Brains/db.php';
$db = new Database();

$id = $_POST['student_id'];

$firstname = $_POST['_firstname'];
$middlename = $_POST['_middlename'];
$lastname = $_POST['_lastname'];
$create_address = $_POST['brgy'];

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
    
    $query = "UPDATE `information_tbl` SET `firstname`='{$firstname}',`middlename`='{$middlename}',`lastname`='{$lastname}', `address`='{$finalAddress}' WHERE `id`={$id}";

if ($db->connection()->query($query)) {
    echo '<script> alert("record updated!") </script>';
    header('location:informationPage.php');
}