<style>
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
<?php 
	require "header.php"
?>
 	<main>
 		 <form action="includes/signup.inc.php" method="post">
			<div class="container">
				<h1>Admin Setup</h1>

				<?php 
					if (isset($_GET["signuperror"])) {
						if ($_GET["signuperror"] == "emptyfields") {
							echo '<p><font color="red">Fill in all fields!</font></p>';
						}
						else if ($_GET["signuperror"] == "invalidmailuid") {
							echo '<p><font color="red">Invalid username and e-mail!</font></p>';
						}
						else if ($_GET["signuperror"] == "invaliduid") {
							echo '<p><font color="red">Invalid username!</font></p>';
						}
						else if ($_GET["signuperror"] == "invalidmail") {
							echo '<p><font color="red">Invalid e-mail!</font></p>';
						}
						else if ($_GET["signuperror"] == "passwordcheck") {
							echo '<p><font color="red">Your passwords do not match!</font></p>';
						}
						else if ($_GET["signuperror"] == "usertaken") {
							echo '<p><font color="red">Username is already taken!</font></p>';
						}
					}
					else if (isset($_GET["signup"])) {
						if ($_GET["signup"] == "success") {
							echo '<p><font color="green">Signup Succesful!</font></p>';
						}
					}
				?>

				<hr>
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<button id="signupbtn" type="submit" name="signup-submit"><font color="white">Signup</font></button>
			</div>
		</form>
 	</main>
 	<?php 
 		require "footer.php"
 	 ?>