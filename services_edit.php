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
 	<h3>Update Service</h3>
 	<hr>
 	<form action="includes/services_update.inc.php" method="POST">
 		<?php 
 			include "includes/dbh.inc.php";
 			
 			$id = $_GET['id'];
	
		$sql = "SELECT s_code, description, price, duration, commission FROM services WHERE s_id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);
		
		$s_code = $row['s_code'];
		$description = $row['description'];
		$price = $row['price'];
		$duration = $row['duration'];
		$commission = $row['commission'];

		
		echo '<h4>Service Code: ';
		echo '<input type="text" name="s_code" value="'.$s_code.'" required></h4>';
		echo '<h4>Description: ';
		echo '<input type="text" name="description" value="'.$description.'" required></h4>';
		echo '<h4>Price: ';
		echo '<input type="text" name="price" value="'.$price.'" required></h4>';
		echo '<h4>Duration: ';
		echo '<input type="text" name="duration" value="'.$duration.'" required></h4>';
		echo '<h4>Commission: ';
		echo '<input type="text" name="commission" value="'.$commission.'" required></h4>';
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