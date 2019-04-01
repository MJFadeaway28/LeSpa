<?php

include "dbh.inc.php";

$id = $_POST['id'];
$c_lastname = $_POST['c_lastname'];
$c_firstname = $_POST['c_firstname'];
$c_mi = $_POST['c_mi'];
$c_ext = $_POST['c_ext'];
$c_address = $_POST['c_address'];
$c_phone = $_POST['c_phone'];


$sql = "UPDATE customer SET c_lastname = '$c_lastname', c_firstname = '$c_firstname', c_mi = '$c_mi', c_ext = '$c_ext', c_address = '$c_address', c_phone = '$c_phone' WHERE c_id = $id ";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../customer.php');
exit;