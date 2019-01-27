<?php
include '../Brains/db.php';
$db = new Database();

$id = $_POST['student_id'];

$firstname = $_POST['_firstname'];
$middlename = $_POST['_middlename'];
$lastname = $_POST['_lastname'];

    
    $query = "UPDATE `information_tbl` SET `firstname`='{$firstname}',`middlename`='{$middlename}',`lastname`='{$lastname}' WHERE `id`={$id}";

if ($db->connection()->query($query)) {
    echo '<script> alert("record updated!") </script>';
    header('location:informationPage.php');
}