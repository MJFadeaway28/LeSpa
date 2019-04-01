<?php
	require "header.php";
?>	
	<style>
		body {
		  background-color: #ECF0F1;
		}
		#box1{
          margin-top: 1%;
	      }
	      #title1{
	          text-align: center;
	      }
	      #bt1{
	          color: white;
	      }
	</style>

<main>
	
	<div class="container">
		 <div class="col-md-3 col-sm-2"></div>
		 <div class="well well-lg col-md-6 col-sm-8" id="box1">
	<h3 id="title1"><b>Create New Customer</b></h3>
	
	<form action="includes/customer_insert.inc.php" method="POST">
		<div class="input-group">
			<span class="input-group-addon"><h4>Last Name: <input type="text" name="c_lastname" required></h4>
			</span>
		</div>
		<div class="input-group">
			<span class="input-group-addon">
		<h4>First Name: <input type="text" name="c_firstname" required></h4>
	</span>
		</div>
		<div class="input-group">
			<span class="input-group-addon">
		<h4>Middle Initial: <input type="text" name="c_mi" ></h4></span>
	</div>
	<div class="input-group">
		<span class="input-group-addon">
		<h4>Name Extension: <input type="text" name="c_ext"></h4></span>
	</div>
	<div class="input-group">
		<span class="input-group-addon">
		<h4>Address: <input type="text" name="c_address"></h4></span>
	</div>
	<div class="input-group">
		<span class="input-group-addon">
		<h4>Contact Number: <input type="text" name="c_phone"></h4></span>
	</div>
	<br>
		<center><button id="bt1" type="submit" class="btn btn-success"><b>Submit</b></button></center>
	</form>
	</div>
</div>
</main>
<?php 
	require "footer.php";
 ?>