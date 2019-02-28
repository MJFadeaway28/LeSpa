<?php

include "connect.php";

$service_id = $_POST['id'];
$service_code = $_POST['service_code'];
$description = $_POST['description'];
$price = $_POST['price'];
$duration = $_POST['duration'];
$commission = $_POST['commission'];


$sql = "UPDATE services SET service_code = '$service_code', description = '$description', price = '$price', duration = '$duration', commission = '$commission' WHERE service_id = $service_id ";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: services.php');
exit;