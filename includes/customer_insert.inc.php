<?php
require "../header.php";
include "dbh.inc.php";

$c_lastname  = $_POST['c_lastname'];
$c_firstname  = $_POST['c_firstname'];
$c_mi  = $_POST['c_mi'];
$c_ext  = $_POST['c_ext'];
$c_address  = $_POST['c_address'];
$c_phone   = $_POST['c_phone'];
$adminId = $_SESSION['adminId'];
$sql = "INSERT INTO customer (c_lastname, c_firstname, c_mi, c_ext, c_address, c_phone, idAdmin) "
     . "VALUES ('$c_lastname', '$c_firstname', '$c_mi', '$c_ext', '$c_address', '$c_phone', '$adminId')";
/* SQL query execution */
$res = mysqli_query($conn, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($conn);

/* 
close MySQL connection */
mysqli_close($conn);
header('location: ../customer.php');
?>