<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM services WHERE service_id = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: services.php');
exit;