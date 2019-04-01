<<?php

include "dbh.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM services WHERE s_id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../services.php');
exit;