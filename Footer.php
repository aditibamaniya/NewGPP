<div>
<div>
<nav class="navbar navbar-default navbar-fixed-bottom">
  <?php
	if(isset($_SESSION['FacultyLogin']))
	{
  ?>
    <ul class="nav navbar-nav">
      <li><a href="Home.php">Home</a></li>
	 <li class="dropdown">	  
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Update<span class="caret"></span></a>
			 <ul class="dropdown-menu">
				 <li><a href="Personal_Updatef.php">Personal Info..</a></li>
				 <li><a href="Academic_Updatef.php">Academic Info..</a></li>
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