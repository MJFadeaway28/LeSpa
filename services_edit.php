<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Update Contact</h3>
	<form action="services_update.php" method="POST">
	<?php
	
	include "connect.php";
	
	$id = $_GET['id'];
	
	$sql = "SELECT service_code, description, price, duration, commission FROM services WHERE service_id = $id";
	$res = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($res);
	
	$service_code = $row['service_code'];
	$description = $row['description'];
	$price = $row['price'];
	$duration = $row['duration'];
	$commission = $row['commission'];
	
	
	echo '<h4>Service Code: ';
	echo '<input type="text" name="service_code" value="'.$service_code.'" required></h4>';
	echo '<h4>Description: ';
	echo '<input type="text" name="description" value="'.$description.'" required></h4>';
	echo '<h4>Price: ';
	echo '<input type="text" name="price" value="'.$price.'"></h4>';
	echo '<h4>Duration: ';
	echo '<input type="text" name="duration" value="'.$duration.'"></h4>';
	echo '<h4>Commission: ';
	echo '<input type="text" name="commission" value="'.$commission.'" required></h4>';
	echo '<input type="hidden" name="id" value="'. $id .'">';
	?>
	<button type="submit">Update</button>
	</form>
</body>
</html>