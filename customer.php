<?php 
	require "header.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
		  background-color: #ECF0F1;
		}
	</style>
</head>
<body>
	<br>
	<div class="container">
		<div class="col-md-1 col-sm-1"></div>
			
	<div class="well well-lg col-md-10 col-sm-10" id="box1">
		<div class="row">
			<div class="col-md-1 col-sm-1">
	<form action="customer_create.php">
		<button type="submit" class="btn btn-success">Add New Customer</button>
	</form>
</div>
</div>
	<hr>
	<table id="bt">
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
		
		include "includes/dbh.inc.php";
		$adminId = $_SESSION['adminId'];
		$sql = "SELECT c_id, c_lastname, c_firstname, c_mi, c_ext, c_address, c_phone FROM customer JOIN admin WHERE admin.idAdmin = $adminId AND customer.idAdmin = $adminId ORDER BY c_lastname ASC";
		$res = mysqli_query($conn, $sql);
		while ($line = mysqli_fetch_array($res)) {
			$id = $line['c_id'];
			echo "<tr>";
			echo "<td>" .$id. "</td>";
			echo "<td>" .$line['c_lastname']. "</td>";
			echo "<td>" .$line['c_firstname']. "</td>";
			echo "<td>" .$line['c_mi']. "</td>";
			echo "<td>" .$line['c_ext']. "</td>";
			echo "<td>" .$line['c_address']. "</td>";
			echo "<td>" .$line['c_phone']. "</td>";
			echo '<td><center><a href="customer_edit.php?id=' .$id. '"><span class="glyphicon glyphicon-pencil"></span></a></center></td>';
			echo '<td><center><a href="includes/customer_delete.inc.php?id=' .$id. '"><span class="glyphicon glyphicon-trash"></span></a></center></td>';
			echo '<div>';
                echo '<input type="hidden" name="adminId" value="'. $adminId .'" >';
        	echo '</div>';
			echo "</tr>";
		}
		mysqli_close($conn);
		?>
	</table>
	</div>
</body>
</html>
<?php 
	require "footer.php";
 ?>