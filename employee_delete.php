<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM employee WHERE employee_id = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: employee.php');
exit;