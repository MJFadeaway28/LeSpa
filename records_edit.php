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
 	<h3>Update Customer Record</h3>
 	<hr>
 	<form action="includes/c_record_update.inc.php" method="POST">
 		<?php 
 			include "includes/dbh.inc.php";

 			$id = $_GET['id'];
	
		$sql = "SELECT * FROM c_record WHERE t_id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($res);
		
		$c_id = $row['c_id'];
		$t_date = $row['t_date'];
		?>
		<h4>Customer Name:
		    <?php 
		        include "includes/dbh.inc.php";
		        $sql = "SELECT * FROM customer";
		        $res = mysqli_query($conn, $sql);
		    ?>
		    <select name= "c_id" required>
		        <option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['c_id']; ?>"><?php echo $line['c_lastname']; echo ", "; echo $line['c_firstname']; echo " "; echo $line['c_mi']; echo " "; echo $line['c_ext'] ?></option>
		            <?php } ?>
		    </select>
	    </h4>
	     <h4>Date:
	    	<input type="date" name="t_date">
	   	</h4>
		<?php
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