<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Update Contact</h3>
	<form action="customer_update.php" method="POST">
	<?php
	
	include "connect.php";
	
	$id = $_GET['id'];
	
	$sql = "SELECT customer_lastname, customer_firstname, customer_middlename, customer_ext, address, contact_number FROM customer WHERE customer_id = $id";
	$res = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($res);
	
	$customer_lastname = $row['customer_lastname'];
	$customer_firstname = $row['customer_firstname'];
	$customer_middlename = $row['customer_middlename'];
	$customer_ext = $row['customer_ext'];
	$address = $row['address'];
	$contact_number = $row['contact_number'];
	
	echo '<h4>Last Name: ';
	echo '<input type="text" name="customer_lastname" value="'.$customer_lastname.'" required></h4>';
	echo '<h4>First Name: ';
	echo '<input type="text" name="customer_firstname" value="'.$customer_firstname.'" required></h4>';
	echo '<h4>Middle Name: ';
	echo '<input type="text" name="customer_middlename" value="'.$customer_middlename.'"></h4>';
	echo '<h4>Name Extension: ';
	echo '<input type="text" name="customer_ext" value="'.$customer_ext.'"></h4>';
	echo '<h4>Address: ';
	echo '<input type="text" name="address" value="'.$address.'" required></h4>';
	echo '<h4>Contact Number: ';
	echo '<input type="text" name="contact_number" value="'.$contact_number.'"></h4>';
	echo '<input type="hidden" name="id" value="'. $id .'">';
	?>
	<button type="submit">Update</button>
	</form>
</body>
</html>