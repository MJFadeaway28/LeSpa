<?php

include "connect.php";

$customer_lastname = $_POST['customer_lastname'];
$customer_firstname = $_POST['customer_firstname'];
$customer_middlename = $_POST['customer_middlename'];
$customer_ext = $_POST['customer_ext'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];

$sql = "INSERT INTO customer (customer_lastname, customer_firstname, customer_middlename, customer_ext, address, contact_number) "
	 . "VALUES ('$customer_lastname', '$customer_firstname', '$customer_middlename', '$customer_ext', '$address', '$contact_number')";

$res = mysqli_query($link, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($link);

mysqli_close($link);
header('location: customer.php');
?>