<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</head>
<body>	
</div>
	
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <?php
	if(isset($_SESSION['ClerkLogin']))
	{
  ?>
	
    <ul class="nav navbar-nav">
	<img src="gpp.jpg"  align="left"  height="50px" width="50px">
	
      <li><a href="Clerk.php">Home</a></li> 
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Insert<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="SInsert_2017_1st_computer_info.php">Insert 1 Semester Student Info...</a></li>
				 <li><a href="SInsert_2017_2nd_computer_info.php">Insert 2 Semester Student Info...</a></li>
				 <li><a href="SInsert_2017_3rd_computer_info.php">Insert 3 Semester Student Info...</a></li>
				 <li><a href="SInsert_2017_4th_computer_info.php">Insert 4 Semester Student Info...</a></li>
				 <li><a href="SInsert_2017_5th_computer_info.php">Insert 5 Semester Student Info...</a></li>
				 <li><a href="SInsert_2017_6th_computer_info.php">Insert 6 Semester Student Info...</a></li>
			 </ul>
	  </li>	
	 
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="SDisplay_2017_1st_computer_info.php">1 Semester Student Info...</a></li>
				 <li><a href="SDisplay_2017_2nd_computer_info.php">2 Semester Student Info...</a></li>
				 <li><a href="SDisplay_2017_3rd_computer_info.php">3 Semester Student Info...</a></li>
				 <li><a href="SDisplay_2017_4th_computer_info.php">4 Semester Student Info...</a></li>
				 <li><a href="SDisplay_2017_5th_computer_info.php">5 Semester Student Info...</a></li>
				 <li><a href="SDisplay_2017_6th_computer_info.php">6 Semester Student Info...</a></li>
		     </ul>
	  </li>
	 <li><a href="Logout.php">Logout</a></li>
	    
	  <li><a href=""> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Welcome Clerk...</a></li>
    </ul>
  <?php
	}
  ?>
  </div>
</nav> 