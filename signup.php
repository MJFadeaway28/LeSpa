<!DOCTYPE html>
<html>
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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
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
}
</style>
<body>
<?php 
	require "header.php";
?>

		<form action="includes/signup.inc.php" method="post">
			<div class="container">
				<h1>Signup</h1>

				<?php 
					if (isset($_GET['error'])) {
						if ($_GET["error"] == "emptyfields") {
							echo '<p class="signuperror">Fill in all fields!</p>';
						}
						else if ($_GET["error"] == "invalidmailuid") {
							echo '<p class="signuperror">Invalid username and e-mail!</p>';
						}
						else if ($_GET["error"] == "invaliduid") {
							echo '<p class="signuperror">Invalid username!</p>';
						}
						else if ($_GET["error"] == "invalidmail") {
							echo '<p class="signuperror">Invalid e-mail!</p>';
						}
						else if ($_GET["error"] == "passwordcheck") {
							echo '<p class="signuperror">Your passwords do not match!</p>';
						}
						else if ($_GET["error"] == "usertaken") {
							echo '<p class="signuperror">Username is already taken!</p>';
						}
					else if ($_GET["signup"] == "success") {
						echo '<p class="signupsuccess">Signup Succesful!</p>';
					}
				}
				?>

				<hr>
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<button type="submit" name="signup-submit">Signup</button>
			</div>
		</form>
</body>
</html>