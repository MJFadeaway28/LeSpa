<?php

include "dbh.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE e_id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../employee.php');
exit;