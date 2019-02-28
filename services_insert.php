<?php

include "connect.php";

$service_code = $_POST['service_code'];
$description = $_POST['description'];
$price = $_POST['price'];
$duration = $_POST['duration'];
$commission = $_POST['commission'];

$sql = "INSERT INTO services (service_code, description, price, duration, commission) "
	 . "VALUES ('$service_code', '$description', '$price', '$duration', '$commission')";

$res = mysqli_query($link, $sql);
if($res) echo "Data saved successfully.";
else echo mysqli_error($link);

mysqli_close($link);
header('location: services.php');
?>