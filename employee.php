<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="employee_create.html">
		<button type="submit">Add New Employee</button>
	</form>
	<table>
		<tr>
			<th>Employee ID</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Extension</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php
		
		include "connect.php";
		$sql = "SELECT * FROM employee";
		$res = mysqli_query($link, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['employee_id'];
			echo "<tr>";
			echo "<td>" .$id. "</td>";
			echo "<td>" .$line['employee_lastname']. "</td>";
			echo "<td>" .$line['employee_firstname']. "</td>";
			echo "<td>" .$line['employee_middlename']. "</td>";
			echo "<td>" .$line['employee_ext']. "</td>";
			echo "<td>" .$line['employee_address']. "</td>";
			echo "<td>" .$line['employee_number']. "</td>";
			echo '<td><a href="employee_edit.php?id=' .$id. '">Edit</a></td>';
			echo '<td><a href="employee_delete.php?id=' .$id. '">Delete</a></td>';
			echo "</tr>";
		}
		mysqli_close($link);
		?>
	</table>
</body>
</html>