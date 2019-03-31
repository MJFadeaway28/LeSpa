<?php
//insert.php
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if(isset($_POST["s_id_record"]))
{
 $t_id_record = $_POST['t_id_record'];
 $s_id_record = $_POST["s_id_record"];
 $e_id_record = $_POST["e_id_record"];

 $query = '';
 for($count = 0; $count<count($s_id_record); $count++)
 {
  $t_id_record_clean = mysqli_real_escape_string($conn, $t_id_record[$count]);
  $s_id_record_clean = mysqli_real_escape_string($conn, $s_id_record[$count]);
  $e_id_record_clean = mysqli_real_escape_string($conn, $e_id_record[$count]);

  if($t_id_reccord != '' && $s_id_record_clean != '' && $e_id_record_clean != '' )
  {
   $query .= '
   INSERT INTO s_record(t_id_reccord, s_id_record, e_id_record) 
   VALUES("'.$t_id_record_clean.'", "'.$s_id_record_clean.'", "'.$e_id_record_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($conn, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>

