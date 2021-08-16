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
	if(isset($_SESSION['AdminLogin']))
	{
  ?>
	
    <ul class="nav navbar-nav">
	<img src="gpp.jpg"  align="left"  height="50px" width="50px">
	
      <li><a href="admin.php">Home</a></li> 
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Insert<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Personal_View.php">Personal Info..</a></li>
				 <li><a href="Academic_View.php">Academic Info..</a></li>
			 </ul>
	  </li>	
	 
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Update<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Personal_Update.php">Personal Info..</a></li>
				 <li><a href="Academic_Update.php">Academic Info..</a></li>
		     </ul>
	  </li>
	
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Subject Info...<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Insert_subject_mastera.php">Add </a></li>
				 <li><a href="Display_subject_mastera.php">View</a></li>
		     </ul>
	  </li>
	
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Stream Info...<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Insert_stream_mastera.php">Add </a></li>
				 <li><a href="Display_stream_mastera.php">View</a></li>
		     </ul>
	  </li>
	
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty Info...<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Insert_faculty_personala.php">Add </a></li>
				 <li><a href="Display_faculty_personala.php">View</a></li>
		     </ul>
	  </li>
	
	   <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Lab Info...<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Insert_lab_informationa.php">Add </a></li>
				 <li><a href="Display_lab_informationa.php">View</a></li>
		     </ul>
	  </li>
	 <li><a href="Logout.php">Logout</a></li>
	    
	  <li><a href=""> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Welcome Admin...</a></li>
    </ul>
  <?php
	}
  ?>
  </div>
</nav> 