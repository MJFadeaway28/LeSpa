<?php 
	require "header.php"
 ?>
 <style>
	body {
		 background-color: #ECF0F1;
	}
</style>
<main>
	<br>
	<div class="container">
		<h4><b>Customer Records</b></h4>
		<hr>
		<table>
			<tr>
				<th><center>Transaction ID</center></th>
				<th><center>Customer Name</center></th>
				<th><center>Date</center></th>
				<th><center>Add</center></th>
				<th><center>View</center></th>
				<th><center>Edit</center></th>
				<th><center>Delete</center></th>
			</tr>

			<?php 

			include "includes/dbh.inc.php";
			$adminId = $_SESSION['adminId'];
			$sql = "SELECT * FROM c_record, customer JOIN admin WHERE admin.idAdmin = $adminId AND c_record.idAdmin = $adminId AND customer.idAdmin = $adminId AND customer.c_id = c_record.c_id ORDER BY t_date DESC";
			$res = mysqli_query($conn, $sql);
			while ($line = mysqli_fetch_array($res)) {
				$id = $line['t_id'];
				echo "<tr>";
				echo "<td>" .$id. "</td>";
				echo "<td>" .$line['c_lastname'].", " .$line['c_firstname'] . " ".$line['c_mi']." " .$line['c_ext']. "</td>";
				echo "<td>" .$line['t_date']. "</td>";
				echo '<td><a href="s_record_create.php?id=' .$id. '">Add</a></td>';
				echo '<td><a href="t_record.php?id=' .$id. '">View</a></td>';
				echo '<td><a href="records_edit.php?id=' .$id. '">Edit</a></td>';
				echo '<td><a href="includes/c_record_delete.php?id=' .$id. '">Delete</a></td>';
				echo '<div>';
                echo '<input type="hidden" name="adminId" value="'. $adminId .'" >';
	        	echo '</div>';

				echo "</tr>";
			}
			mysqli_close($conn);
			 ?>
		</table>
	</div>

</main>

<?php 
	require "footer.php";
 ?>