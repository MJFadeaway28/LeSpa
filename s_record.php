<?php
	require "header.php";
?>	
	<style>
		body {
		  background-color: #ECF0F1;
		}
	</style>

<main>
<br>
	<div class="container">
		<hr>
		<table>
			<tr>
				<th><center>Transaction ID</center></th>
				<th><center>Service Name</center></th>
				<th><center>Employee ID</center></th>
				<th><center>Commission</center></th>
				<th><center>Delete</center></th>
			</tr>
			<?php  
			
			include "includes/dbh.inc.php";
			$adminId = $_SESSION['adminId'];
			$id = $_GET['id'];
			$sql = "SELECT * FROM s_record, services, employees JOIN admin WHERE admin.idAdmin = $adminId AND s_record.idAdmin = $adminId  AND services.idAdmin = $adminId AND employees.idAdmin = $adminId AND t_id = $id AND services.s_id = s_record.s_id AND employees.e_id = s_record.e_id";
			$res = mysqli_query($conn, $sql);
			while ($line = mysqli_fetch_array($res)) {
				
				$id1 = $line['t_id'];
				$comm = $line['price']*0.5;
				echo "<tr>";
				echo "<td>" .$id1. "</td>";
				echo "<td>" .$line['s_code']. " " .$line['description']. "</td>";
				echo "<td>" .$line['e_lastname']. ", " .$line['e_firstname']. "</td>";
				echo "<td> &#8369;$comm.00</td>";
				echo '<td><a href="includes/s_record_delete.php?id=' .$id. '">Delete</a></td>';
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
		</table>
		<h4>
			<b>
		<?php 
			$id = $_GET['id1'];
			include "includes/dbh.inc.php";
			$adminId = $_SESSION['adminId'];
			$sql = "SELECT SUM(Commission) FROM s_record, services, employees JOIN admin WHERE admin.idAdmin = $adminId AND s_record.idAdmin = $adminId  AND services.idAdmin = $adminId AND employees.idAdmin = $adminId AND t_id = $id AND services.s_id = s_record.s_id AND employees.e_id = s_record.e_id"; 
			$res = mysqli_query($conn, $sql);
			while ($line = mysqli_fetch_array($res)) {
				echo "Total: &#8369;".$line['SUM(Commission)']*2; echo".00"; 
			}
			mysqli_close($conn);
		 ?>
		 	</b>
		 </h4>
	</div>
</main>
<?php 
	require "footer.php";
 ?>
