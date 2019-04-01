<?php

include "dbh.inc.php";

$id = $_POST['id'];
$c_id = $_POST['c_id'];
$t_date = $_POST['t_date'];


$sql = "UPDATE c_record SET c_id = '$c_id', t_date = '$t_date' WHERE t_id = $id ";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../records.php');
exit;