<?php

include "dbh.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM c_record WHERE t_id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../records.php');
exit;