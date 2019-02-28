<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="customer_create.html">
		<button type="submit">Add New Customer</button>
	</form>
	<table>
		<tr>
			<th>Customer ID</th>
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
		$sql = "SELECT * FROM customer";
		$res = mysqli_query($link, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['customer_id'];
			echo "<tr>";
			echo "<td>" .$id. "</td>";
			echo "<td>" .$line['customer_lastname']. "</td>";
			echo "<td>" .$line['customer_firstname']. "</td>";
			echo "<td>" .$line['customer_middlename']. "</td>";
			echo "<td>" .$line['customer_ext']. "</td>";
			echo "<td>" .$line['address']. "</td>";
			echo "<td>" .$line['contact_number']. "</td>";
			echo '<td><a href="customer_edit.php?id=' .$id. '">Edit</a></td>';
			echo '<td><a href="customer_delete.php?id=' .$id. '">Delete</a></td>';
			echo "</tr>";
		}
		mysqli_close($link);
		?>
	</table>
</body>
</html>