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
	<form action="services_create.php">
		<button type="submit">Add New Service</button>
	</form>
	<hr>
	<table>
		<tr>
			<th><center>Service Code</center></th>
			<th><center>Description</center></th>
			<th><center>Price</center></th>
			<th><center>Duration (minutes)</center></th>
			<th><center>Commission</center></th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php
		
		include "includes/dbh.inc.php";
		$adminId = $_SESSION['adminId'];
		$sql = "SELECT s_id, s_code, description, price, duration, commission FROM services JOIN admin WHERE admin.idAdmin = $adminId AND services.idAdmin = $adminId";
		$res = mysqli_query($conn, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['s_id'];
			echo "<tr>";
			echo "<td><center>" .$line['s_code']. "</center></td>";
			echo "<td><center>" .$line['description']. "</center></td>";
			echo "<td><center>" .$line['price']. "</center></td>";
			echo "<td><center>" .$line['duration']. "</center></td>";
			echo "<td><center>" .$line['commission']. "</center></td>";
			echo '<td><a href="services_edit.php?id=' .$id. '">Edit</a></td>';
			echo '<td><a href="includes/services_delete.inc.php?id=' .$id. '">Delete</a></td>';
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