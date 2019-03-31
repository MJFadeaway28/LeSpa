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
 	<h3>Update Customer</h3>
 	<hr>
 	<form action="includes/customer_update.inc.php" method="POST">
 		<?php 
 			include "includes/dbh.inc.php";

 			$id = $_GET['id'];
	
		$sql = "SELECT c_lastname, c_firstname, c_mi, c_ext, c_address, c_phone FROM customer WHERE c_id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);
		
		$c_lastname = $row['c_lastname'];
		$c_firstname = $row['c_firstname'];
		$c_mi = $row['c_mi'];
		$c_ext = $row['c_ext'];
		$c_address = $row['c_address'];
		$c_phone = $row['c_phone'];
		
		echo '<h4>Last Name: ';
		echo '<input type="text" name="c_lastname" value="'.$c_lastname.'" required></h4>';
		echo '<h4>First Name: ';
		echo '<input type="text" name="c_firstname" value="'.$c_firstname.'" required></h4>';
		echo '<h4>Middle Name: ';
		echo '<input type="text" name="c_mi" value="'.$c_mi.'"></h4>';
		echo '<h4>Name Extension: ';
		echo '<input type="text" name="c_ext" value="'.$c_ext.'"></h4>';
		echo '<h4>Address: ';
		echo '<input type="text" name="c_address" value="'.$c_address.'"></h4>';
		echo '<h4>Contact Number: ';
		echo '<input type="text" name="c_phone" value="'.$c_phone.'"></h4>';
		echo '<input type="hidden" name="id" value="'. $id .'">';
 		 ?>
 		<button type="submit">Update</button>
 	</form>
 	</div>
 </body>
 </html>
 <?php 
	require "footer.php";
 ?>