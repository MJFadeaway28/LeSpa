<?php

include "dbh.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM customer WHERE c_id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../customer.php');
exit;