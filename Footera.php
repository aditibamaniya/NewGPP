<div>
<div>
<nav class="navbar navbar-default navbar-fixed-bottom">
  <?php
	if(isset($_SESSION['AdminLogin']))
	{
  ?>
    <ul class="nav navbar-nav">
      <li><a href="admin.php">Home</a></li>
	  <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Student<span class="caret"></span></a>
			 <ul class="dropdown-menu">
			  <li><a href="Display_student_personal_info.php">Student Personal Info..</a></li>
			  <li><a href="Display_student_academic_info.php">Student Academic Info..</a></li>
			  <li><a href="SDisplay_2017_1st_computer_info.php">Student 2017 1st Computer Info..</a></li>  	  
			  <li><a href="SDisplay_2017_3rd_computer_info.php">Student 2017 3rd Computer Info..</a></li>  	  
			  <li><a href="SDisplay_2017_5th_computer_info.php">Student 2017 5th Computer Info..</a></li>  	  
			</ul>
	  </li>	
      <li><a href="Display_subject_master.php">Subject info..</a></li>		  
      <li><a href="Display_stream_master.php">Stream info..</a></li>
		<li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty<span class="caret"></span></a>
			 <ul class="dropdown-menu">
			  <li><a href="Display_faculty_personal.php">Faculty Info..</a></li>
			  <li><a href="FDisplay_2017_1st_computer_info.php">Faculty 2017 1st Computer Info..</a></li>  
			  <li><a href="FDisplay_2017_3rd_computer_info.php">Faculty 2017 3rd Computer Info..</a></li>  	  
			  <li><a href="FDisplay_2017_5th_computer_info.php">Faculty 2017 5th Computer Info..</a></li> 
			</ul>
	  </li>
	  	  <li><a href="Display_lab_information.php">Lab info..</a></li>  	  
    </ul>
  <?php
	}
  ?>
</div>
</nav> 
</div>
</body>
</html>