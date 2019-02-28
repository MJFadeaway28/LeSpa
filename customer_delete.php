<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM customer WHERE customer_id = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: customer.php');
exit;