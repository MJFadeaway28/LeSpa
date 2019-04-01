<?php 
require "../header.php";
include "dbh.inc.php";

$c_id = $_POST['c_id'];
$t_date = $_POST['t_date'];
$adminId = $_SESSION['adminId'];

$sql = "INSERT INTO c_record (c_id, t_date, idAdmin)"
	. "VALUES ('$c_id', '$t_date', $adminId)";

$res = mysqli_query($conn, $sql);
if($res) echo "Data saved succesfully.";
else echo mysqli_error($conn);

mysqli_close($conn);
header('Location: ../records.php')

 ?>