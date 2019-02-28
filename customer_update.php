<?php

include "connect.php";

$id = $_POST['id'];
$customer_lastname = $_POST['customer_lastname'];
$customer_firstname = $_POST['customer_firstname'];
$customer_middlename = $_POST['customer_middlename'];
$customer_ext = $_POST['customer_ext'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];


$sql = "UPDATE customer SET customer_lastname = '$customer_lastname', customer_firstname = '$customer_firstname', customer_middlename = '$customer_middlename', customer_ext = '$customer_ext', address = '$address', contact_number = '$contact_number' WHERE customer_id = $id ";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: customer.php');
exit;