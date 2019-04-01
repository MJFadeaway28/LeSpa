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
	<h3>Create New Service Record</h3>
	<hr>
	<form action="includes/s_record_insert.inc.php" method="POST">
		<h4>Transaction ID :
			<?php 
				$id = $_GET['id'];

				
				echo '<input type="text" name="t_id" value="'.$id.'" required>';
			?>
		</h4>
		
		<h4>Service Name:
		    <?php 
		        include "includes/dbh.inc.php";
		        $sql = "SELECT * FROM services";
		        $res = mysqli_query($conn, $sql);
		    ?>
		    <select name= "s_id" required>
		        <option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['s_id']; ?>"><?php echo $line[1]; echo " "; echo $line[2] ?></option>
		            <?php } ?>
		    </select>
	    </h4>
	    <h4>Employee Name:
		    <?php 
		        include "includes/dbh.inc.php";
		        $sql = "SELECT * FROM employees";
		        $res = mysqli_query($conn, $sql);
		    ?>
		    <select name= "e_id" required>
		        <option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['e_id']; ?>"><?php echo $line[1]; echo ", "; echo $line[2] ?></option>
		            <?php } ?>
		    </select>
	    </h4>

		
		<button type="submit">Submit</button>
	</form>
	</div>
	

</main>
<?php 
	require "footer.php";
 ?>