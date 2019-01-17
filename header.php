<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1">
	<title></title>
	<style>
		* {box-sizing: border-box;}

		/* Style the navbar */
		.topnav {
		  overflow: hidden;
		  background-color: #e9e9e9;
		}

		/* Navbar links */
		.topnav a {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		/* Navbar links on mouse-over */
		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		/* Active/current link */
		.topnav a.active {
		  background-color: #2196F3;
		  color: white;
		}

		/* Style the input container */
		.topnav .login-container {
		  float: right;
		}

		/* Style the input field inside the navbar */
		.topnav input[type=text] {
		  padding: 6px;
		  margin-top: 8px;
		  font-size: 17px;
		  border: none;
		  width: 150px; /* adjust as needed (as long as it doesn't break the topnav) */
		}

		.topnav input[type=password] {
		  padding: 6px;
		  margin-top: 8px;
		  font-size: 17px;
		  border: none;
		  width:120px;
		}

		/* Style the button inside the input container */
		.topnav .login-container button {
		  float: right;
		  padding: 6px;
		  margin-top: 8px;
		  margin-right: 16px;
		  background: #ddd;
		  font-size: 17px;
		  border: none;
		  cursor: pointer;
		}

		.topnav .login-container button:hover {
		  background: #ccc;
		}

		/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
		@media screen and (max-width: 600px) {
		  .topnav .login-container {
		    float: none;
		}
		.topnav a, .topnav input[type=text], .topnav input[type=password], .topnav .login-container button {
		    float: none;
		    display: block;
		    text-align: left;
		    width: 100%;
		    margin: 0;
		    padding: 14px;
		}
		.topnav input[type=text] {
		    border: 1px solid #ccc; 
		}
		.topnav input[type=password] {
		    border: 1px solid #ccc;  
		}
	}
	</style>
</head>
<body>
	
		<div class="topnav">
			<a href="index.php" id="header-logo"><img src="beard.png" width="25" height="20"></a>
			<a href="index.php">Home</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
			<div class="login-container">
				<?php 
					if (isset($_SESSION['userId'])) {
						echo '<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>';
					}
					else {
						echo '<form action="includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/Email">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php"><small>Signup</small></a>';
					}
				?>
			</div>
		</div>
	

</body>
</html>