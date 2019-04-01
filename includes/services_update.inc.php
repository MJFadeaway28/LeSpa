<?php

include "dbh.inc.php";

$id = $_POST['id'];
$s_code = $_POST['s_code'];
$description = $_POST['description'];
$price = $_POST['price'];
$duration = $_POST['duration'];
$commission = $_POST['commission'];


$sql = "UPDATE services SET s_code = '$s_code', description = '$description', price = '$price', duration = '$duration', commission = '$commission' WHERE s_id = $id ";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../services.php');
exit;