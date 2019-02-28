<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Update Contact</h3>
	<form action="employee_update.php" method="POST">
	<?php
	
	include "connect.php";
	
	$id = $_GET['id'];
	
	$sql = "SELECT employee_lastname, employee_firstname, employee_middlename, employee_ext, employee_address, employee_number FROM employee WHERE employee_id = $id";
	$res = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($res);
	
	$employee_lastname = $row['employee_lastname'];
	$employee_firstname = $row['employee_firstname'];
	$employee_middlename = $row['employee_middlename'];
	$employee_ext = $row['employee_ext'];
	$employee_address = $row['employee_address'];
	$employee_number = $row['employee_number'];
	
	echo '<h4>Last Name: ';
	echo '<input type="text" name="employee_lastname" value="'.$employee_lastname.'" required></h4>';
	echo '<h4>First Name: ';
	echo '<input type="text" name="employee_firstname" value="'.$employee_firstname.'" required></h4>';
	echo '<h4>Middle Name: ';
	echo '<input type="text" name="employee_middlename" value="'.$employee_middlename.'"></h4>';
	echo '<h4>Name Extension: ';
	echo '<input type="text" name="employee_ext" value="'.$employee_ext.'"></h4>';
	echo '<h4>Address: ';
	echo '<input type="text" name="employee_address" value="'.$employee_address.'" required></h4>';
	echo '<h4>Contact Number: ';
	echo '<input type="text" name="employee_number" value="'.$employee_number.'"></h4>';
	echo '<input type="hidden" name="id" value="'. $id .'">';
	?>
	<button type="submit">Update</button>
	</form>
</body>
</html>