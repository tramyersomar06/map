<?php
require 'Brains/db.php';
session_start();
$db = new Database();

$errorMessage = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
	if ($_POST['username'] == "" && $_POST['password'] == "") {
		$errorMessage = "Username and Password required!";
	}elseif ($_POST['username'] == "" && $_POST['password'] != "") {
		$errorMessage = "Username required!";
	}elseif ($_POST['username'] != "" && $_POST['password'] == "") {
		$errorMessage = "Password required!";
	}else{
		$query = "SELECT * FROM admin_tbl";
		$result = $db->connection()->query($query);
		while ($row = $result->fetch_object()) {
			if ($_POST['username'] == $row->username && md5($_POST['password']) == $row->password) {
				header('location:index.php');
				$_SESSION['hash'] = rand(000000000000,999999999999);
				echo $_SESSION['hash'];
			}
		}
	}
}

if (isset($_GET['logout'])) {
	unset($_SESSION['hash']);
	session_destroy();
	header('location:loginPage.php');
}

?>
