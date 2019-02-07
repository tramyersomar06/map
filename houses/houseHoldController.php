<?php 
require_once'../Brains/db.php';
include '../Brains/numComplete.php';
$db = new Database();
$comp = new NumComp();

if(isset($_GET['delete'])){
	$deleteThis = $_GET['delete'];
	$query = "DELETE FROM `house` WHERE `slug` = '{$deleteThis}'";
	$smallerDelete = strtolower($deleteThis);
	$query2 = "DROP TABLE `{$smallerDelete}`";
	if($db->connection()->query($query) && $db->connection()->query($query2)) {
		header('location:houseHoldList.php');
	}
}

if(isset($_POST['Longitude']) && isset($_POST['Latitude']) && isset($_POST['brgy'])) {
	
}

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

if(isset($_POST['create'])){
	if(!isset($_POST['respondent'])){
		echo "respondent require!";
	}if(!isset($_POST['brgy'])){
		echo "barangay require!";
	}if(!isset($_POST['Longitude'])){
		echo "Longitude require!";
	}if(!isset($_POST['Latitude'])){
		echo "latitude require!";
	}
	if(isset($_POST['respondent']) && isset($_POST['brgy']) && isset($_POST['Longitude']) && isset($_POST['Latitude'])){
		echo "hahahaha!";
		$create_address = $_POST['brgy'];
		$respondent = $_POST['respondent'];
		$longitude = $_POST['Longitude'];
		$latitude = $_POST['Latitude'];

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

		$peopleNum = 0;

		$select_person = "SELECT * FROM `people` WHERE `full_name` = '{$respondent}'";
		$result = $db->connection()->query($select_person);
		if($person = $result->fetch_object()){
			$peopleNum = $person->people_id;
		}

		$query = "INSERT INTO `house` (`longitude`, `latitude`, `brgy`, `respondent`) VALUES ('{$longitude}', '{$latitude}', '{$finalAddress}', {$peopleNum})";
		echo $query;
		$db->connection()->query($query);

		$aaa = 0;
		$select_person = "SELECT * FROM `house` WHERE `respondent` = {$peopleNum}";
		echo '<br>'. $select_person;
			$result = $db->connection()->query($select_person);
			if($person = $result->fetch_object()){
				$aaa = $person->id;
			}
			//if($db->connection()->query("UPDATE `house` SET `slug` = '0000' WHERE `id`={$aaa} "));
			echo '<br>'. $aaa .'</br>';

	$createHouseHoldTable = "CREATE TABLE `{$comp->recode($aaa)}` (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, members INT(11) NOT NULL )";
	$db->connection()->query("UPDATE `house` SET `slug` = '{$comp->recode($aaa)}' WHERE `id`={$aaa} ");
	echo $createHouseHoldTable;
	$db->connection()->query($createHouseHoldTable);
	}



	// if(isset()){
	// 	echo "aaa";
	// }
}