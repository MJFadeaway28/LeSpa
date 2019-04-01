<?php

include "dbh.inc.php";

$id = $_POST['id'];
$e_lastname = $_POST['e_lastname'];
$e_firstname = $_POST['e_firstname'];


$sql = "UPDATE employees SET e_lastname = '$e_lastname', e_firstname = '$e_firstname' WHERE e_id = $id ";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../employee.php');
exit;