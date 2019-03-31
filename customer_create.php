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
	<h3>Create New Customer</h3>
	<hr>
	<form action="includes/customer_insert.inc.php" method="POST">
		<h4>Last Name: <input type="text" name="c_lastname" required></h4>
		<h4>First Name: <input type="text" name="c_firstname" required></h4>
		<h4>Middle Initial: <input type="text" name="c_mi"></h4>
		<h4>Name Extension: <input type="text" name="c_ext"></h4>
		<h4>Address: <input type="text" name="c_address"></h4>
		<h4>Contact Number: <input type="text" name="c_phone"></h4>
		<button type="submit">Submit</button>
	</form>
	</div>
</main>
<?php 
	require "footer.php";
 ?>