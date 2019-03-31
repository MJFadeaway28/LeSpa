<?php
//fetch.php
include "header.php";
include "includes/dbh.inc.php";
$adminId = $_SESSION['adminId'];
$output = '';
$query = "SELECT t_id, s_id, e_id FROM s_record, c_record, services, employees JOIN admin WHERE admin.idAdmin = $adminId AND c_record.idAdmin = $adminId AND services.idAdmin = $adminId AND employees.idAdmin = $adminId AND c_record.t_id = s_record.t_id AND s_record.s_id = services.s_id AND s_record.e_id = employees.e_id ORDER BY t_id DESC";
$result = mysqli_query($conn, $query);
$output = '
<br />
<h3 align="center">Item Data</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="30%">Item Name</th>
  <th width="10%">Item Code</th>
  <th width="50%">Description</th>
 
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["t_id"].'</td>
  <td>'.$row["s_id"].'</td>
  <td>'.$row["e_id"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
