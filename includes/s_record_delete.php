<?php

include "dbh.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM s_record WHERE id = '$id'";

$res = mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../records.php');
exit;