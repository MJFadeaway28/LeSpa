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
	<h3>Create New Customer</h3>
	<hr>
	<form action="includes/employee_insert.inc.php" method="POST">
		<h4>Last Name: <input type="text" name="e_lastname" required></h4>
		<h4>First Name: <input type="text" name="e_firstname" required></h4>
		<button type="submit">Submit</button>
	</form>
	</div>
</body>
</html>
 <?php 
	require "footer.php";
 ?>