<?php 
require "../header.php";
include "dbh.inc.php";

$t_id = $_POST['t_id'];
$s_id = $_POST['s_id'];
$e_id = $_POST['e_id'];
$adminId = $_SESSION['adminId'];



$sql = "INSERT INTO s_record (t_id, s_id, e_id, idAdmin)"
	. "VALUES ('$t_id', '$s_id', '$e_id', $adminId)";

$res = mysqli_query($conn, $sql);
if($res) echo "Data saved succesfully.";
else echo mysqli_error($conn);



mysqli_close($conn);
header('Location: ../records.php');

 ?>