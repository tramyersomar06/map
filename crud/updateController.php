<?php
include '../Brains/db.php';
$db = new Database();

$id = $_POST['student_id'];

$firstname = $_POST['_firstname'];
$middlename = $_POST['_middlename'];
$lastname = $_POST['_lastname'];


    
    $query = "UPDATE `people` SET `f_name`='{$firstname}',`m_name`='{$middlename}',`l_name`='{$lastname}' WHERE `people_id`={$id}";

if ($db->connection()->query($query)) {
    echo '<script> alert("record updated!") </script>';
    header('location:informationPage.php');
}