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
	<h3>Create New Customer Record</h3>
	<hr>
	<form action="includes/c_record_insert.inc.php" method="POST">
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
		
		<button type="submit">Submit</button>
	</form>
	</div>
</main>
<?php 
	require "footer.php";
 ?>