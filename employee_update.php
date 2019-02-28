<?php

include "connect.php";

$id = $_POST['id'];
$employee_lastname = $_POST['employee_lastname'];
$employee_firstname = $_POST['employee_firstname'];
$employee_middlename = $_POST['employee_middlename'];
$employee_ext = $_POST['employee_ext'];
$employee_address = $_POST['employee_address'];
$employee_number = $_POST['employee_number'];


$sql = "UPDATE employee SET employee_lastname = '$employee_lastname', employee_firstname = '$employee_firstname', employee_middlename = '$employee_middlename', employee_ext = '$employee_ext', employee_address = '$employee_address', employee_number = '$employee_number' WHERE employee_id = $id ";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: employee.php');
exit;