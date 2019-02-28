<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="services_create.html">
		<button type="submit">Add New Service</button>
	</form>
	<table>
		<tr>
			<th>Service Code</th>
			<th>Description</th>
			<th>Price</th>
			<th>Duration</th>
			<th>Commission</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php
		
		include "connect.php";
		$sql = "SELECT * FROM services";
		$res = mysqli_query($link, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['service_id'];
			echo "<tr>";
			echo "<td>" .$line['service_code']. "</td>";
			echo "<td>" .$line['description']. "</td>";
			echo "<td>" .$line['price']. "</td>";
			echo "<td>" .$line['duration']. "</td>";
			echo "<td>" .$line['commission']. "</td>";
			echo '<td><a href="services_edit.php?id=' .$id. '">Edit</a></td>';
			echo '<td><a href="services_delete.php?id=' .$id. '">Delete</a></td>';
			echo "</tr>";
		}
		mysqli_close($link);
		?>
	</table>
</body>
</html>