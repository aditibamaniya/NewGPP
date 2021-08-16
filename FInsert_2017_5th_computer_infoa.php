<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	if(isset($_POST['Insert']))
	{
		$comp_faculty_id = $_POST['comp_faculty_id'];
		$subject = $_POST['subject'];
		$semester_incharge = $_POST['semester_incharge'];
	
		$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
		mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
		
		$Query = "INSERT INTO `2017_5th_computer_faculty_info`(`comp_faculty_id`, `subject`, `semester_incharge`) VALUES ('$comp_faculty_id','$subject','$semester_incharge');";
		
		mysql_query($Query) or die("Query Error : ".mysql_error());
		
		mysql_close($con);
		echo "Record Inserted!..";
		
		header("Location:FDisplay_2017_5th_computer_infoa.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">comp_faculty_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="comp_faculty_id" placeholder="comp_faculty_id">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">subject</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="subject" placeholder="subject">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">semester_incharge</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="semester_incharge" placeholder="semester_incharge">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" name="Insert" class="btn btn-default">Submit</button>
			</div>
		  </div>
		</form> 
</div>
<?php
include("Footer.php");
?>