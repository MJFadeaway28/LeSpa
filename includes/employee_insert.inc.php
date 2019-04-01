<?php
require "../header.php";
include "dbh.inc.php";

$e_lastname  = $_POST['e_lastname'];
$e_firstname  = $_POST['e_firstname'];
$adminId = $_SESSION['adminId'];
$sql = "INSERT INTO employees (e_lastname, e_firstname, idAdmin) "
     . "VALUES ('$e_lastname', '$e_firstname', '$adminId')";
/* SQL query execution */
$res = mysqli_query($conn, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($conn);

/* 
close MySQL connection */
mysqli_close($conn);
header('location: ../employee.php');
?>