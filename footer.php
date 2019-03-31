<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
   padding:10px 10px; 

}
.footer a{
	float: left;
	margin-top: 8px;
	margin-bottom: 1px;
	font-size: 17px;
	font-weight: bold;
	color: white;
	text-decoration: none;
	display: block;
	text-align: center;
	float: center;
	padding:0px 95px 0px 95px;

}
.footer p{
	float: center;
	margin-top: 8px;
	margin-bottom: 1px;
	font-size: 17px;
	font-weight: bold;
	color: white;
	text-decoration: none;
	display: block;
	text-align: center;
	float: center;
	padding:0px 95px 0px 95px;
}
</style>
</head>
<body>



<div class="footer">
  <?php 
  /*
					if (isset($_SESSION['adminId'])) {
						echo '<a href="customer.php"><b>Customers</b></a>';
						echo '<a href="employee.php"><b>Employees</b></a>';
						echo '<a href="services.php"><b>Services</b></a>';
						echo '<a href="records.php"><b>Records</b></a>';
						echo '<a href="reports.php"><b>Reports</b></a>';
		 			}
		 			else {	
		 				*/
		 				echo '<div>';	 				
		 					echo '<p>LeSpa 2018&#8482;</p>';
						echo '</div>';
					//	}
				 ?>
</div>

</body>
</html> 