<?php
	require "header.php";
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
	<h3>Create New Service</h3>
	<hr>
	<form action="includes/service_insert.inc.php" method="POST">
		<h4>Service Code: <input type="text" name="s_code" required></h4>
		<h4>Description: <input type="text" name="description" required></h4>
		<h4>Price: <input type="text" name="price" required></h4>
		<h4>Duration: <input type="text" name="duration" required></h4>
		<h4>Commission: <input type="text" name="commission" required></h4>
		<button type="submit">Submit</button>
	</form>
	</div>
</body>
</html>
  <?php 
	require "footer.php";
 ?>