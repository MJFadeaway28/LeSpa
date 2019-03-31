<?php 
	require "header.php"
 ?>
<style>
	body {
		background-color: #ECF0F1;
	}
	body {font-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box}

	/* Full-width input fields */
	input[type=text], input[type=password] {
	  width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  display: inline-block;
	  border: none;
	  background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus {
	  background-color: #ddd;
	  outline: none;
	}

	hr {
	  border: 1px solid #f1f1f1;
	  margin-bottom: 25px;
	}

	/* Set a style for all buttons */
	button {
	  background-color: #DC0F0F;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 100%;
	  opacity: 0.9;
	}

	button:hover {
		background: #2D2D2D;
	}


	/* Extra styles for the cancel button */
	.cancelbtn {
	  padding: 14px 20px;
	  background-color: #f44336;
	}

	/* Float cancel and signup buttons and add an equal width */
	.cancelbtn, .signupbtn {
	  float: left;
	  width: 50%;
	}

	/* Add padding to container elements */
	.container {
	  padding: 16px;
	}

	/* Clear floats */
	.clearfix::after {
	  content: "";
	  clear: both;
	  display: table;
	}

	/* Change styles for cancel button and signup button on extra small screens */
	@media screen and (max-width: 300px) {
	  .cancelbtn, .signupbtn {
	     width: 100%;
	  }
</style>
 <main>
 	<form action="includes/pwdchange.inc.php" method="post">
 		<div class="container">
 			<h1>Change Password</h1>

 			<hr>
 			<input type="password" name="pwd" placeholder="Old Password">
 			<input type="password" name="newpwd" placeholder="New Password"
 			>
 			<input type="password" name="newpwd-repeat" placeholder="Repeat New Password">
 			<button id="changepwdbtn" type="submit" name="changepwd-submit">Submit</button>

 		</div>
 	</form>
 </main>
 <?php 
 	require "footer.php"
  ?>