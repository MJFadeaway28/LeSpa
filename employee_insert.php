<?php

include "connect.php";

$employee_lastname = $_POST['employee_lastname'];
$employee_firstname = $_POST['employee_firstname'];
$employee_middlename = $_POST['employee_middlename'];
$employee_ext = $_POST['employee_ext'];
$employee_address = $_POST['employee_address'];
$employee_number = $_POST['employee_number'];

$sql = "INSERT INTO employee (employee_lastname, employee_firstname, employee_middlename, employee_ext, employee_address, employee_number) "
	 . "VALUES ('$employee_lastname', '$employee_firstname', '$employee_middlename', '$employee_ext', '$employee_address', '$employee_number')";

$res = mysqli_query($link, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($link);

mysqli_close($link);
header('location: employee.php');
?>