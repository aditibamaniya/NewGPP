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
	if(isset($_SESSION['FacultyLogin']))
	{
  ?>
	
    <ul class="nav navbar-nav">
	<img src="gpp.jpg"  align="left"  height="50px" width="50px">
      <li><a href="Faculty.php">Home</a></li> 	  
		<li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Insert<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Personal_Viewf.php">Personal Info..</a></li>
				 <li><a href="Academic_Viewf.php">Academic Info..</a></li>
			 </ul>
	  </li>	
	
			 <ul class="dropdown-menu">
			  <li><a href="Insert_student_personal_info.php">Student Personal Info..</a></li>	  
			  <li><a href="Insert_student_academic_info.php">Student Academic Info..</a></li> 
			  <li><a href="SInsert_2017_1st_computer_info.php">Student 2017 1st Computer Info..</a></li>
			  <li><a href="SInsert_2017_3rd_computer_info.php">Student 2017 3rd Computer Info..</a></li>
			  <li><a href="SInsert_2017_5th_computer_info.php">Student 2017 5th Computer Info..</a></li>
			 </ul>
	  </li>	
	  <li><a href="Insert_subject_master.php">Subject info..</a></li>  
	  <li><a href="Insert_stream_master.php">Stream info..</a></li> 
	
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty<span class="caret"></span></a>
			 <ul class="dropdown-menu">
			  <li><a href="Insert_faculty_personal.php">Faculty Info..</a></li>
			  <li><a href="FInsert_2017_1st_computer_info.php">Faculty 2017 1st Computer Info..</a></li>
			  <li><a href="FInsert_2017_3rd_computer_info.php">Faculty 2017 3rd Computer Info..</a></li>
			  <li><a href="FInsert_2017_5th_computer_info.php">Faculty 2017 5th Computer Info..</a></li>
		     </ul>
	  </li>
	  <li><a href="Insert_lab_information.php">Lab Info..</a></li>
	  <li><a href="Logout.php">Logout</a></li>
	    
	  <li><a href=""> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Welcome Faculty...</a></li>
    </ul>
  <?php
	}
  ?>
  </div>
</nav> 