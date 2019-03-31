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
	<form action="employee_create.php">
		<button type="submit">Add New Employee</button>
	</form>
	<hr>
	<table>
		<tr>
			<th>Employee ID</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php
		
		include "includes/dbh.inc.php";
		$adminId = $_SESSION['adminId'];
		$sql = "SELECT e_id, e_lastname, e_firstname FROM employees JOIN admin WHERE admin.idAdmin = $adminId AND employees.idAdmin = $adminId";
		$res = mysqli_query($conn, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['e_id'];
			echo "<tr>";
			echo "<td>" .$id. "</td>";
			echo "<td>" .$line['e_lastname']. "</td>";
			echo "<td>" .$line['e_firstname']. "</td>";
			echo '<td><a href="employee_edit.php?id=' .$id. '">Edit</a></td>';
			echo '<td><a href="includes/employee_delete.inc.php?id=' .$id. '">Delete</a></td>';
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