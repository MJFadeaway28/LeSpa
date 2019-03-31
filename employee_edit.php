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
 	<h3>Update Employee</h3>
 	<hr>
 	<form action="includes/employee_update.inc.php" method="POST">
 		<?php 
 			include "includes/dbh.inc.php";
 			
 			$id = $_GET['id'];
	
		$sql = "SELECT e_lastname, e_firstname FROM employees WHERE e_id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);
		
		$e_lastname = $row['e_lastname'];
		$e_firstname = $row['e_firstname'];

		
		echo '<h4>Last Name: ';
		echo '<input type="text" name="e_lastname" value="'.$e_lastname.'" required></h4>';
		echo '<h4>First Name: ';
		echo '<input type="text" name="e_firstname" value="'.$e_firstname.'" required></h4>';
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