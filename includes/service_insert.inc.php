<?php
require "../header.php";
include "dbh.inc.php";

$s_code  = $_POST['s_code'];
$description  = $_POST['description'];
$price  = $_POST['price'];
$duration  = $_POST['duration'];
$commission  = $_POST['commission'];
$adminId = $_SESSION['adminId'];
$sql = "INSERT INTO services (s_code, description, price, duration, commission, idAdmin) "
     . "VALUES ('$s_code', '$description',  '$price', '$duration', '$commission', '$adminId')";
/* SQL query execution */
$res = mysqli_query($conn, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($conn);

/* 
close MySQL connection */
mysqli_close($conn);
header('location: ../services.php');
?>