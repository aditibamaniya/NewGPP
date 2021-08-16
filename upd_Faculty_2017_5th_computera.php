<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from 2017_5th_computer_faculty_info where comp_faculty_id=".$_GET['comp_faculty_id'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$comp_faculty_id = $_POST['comp_faculty_id'];
		$subject = $_POST['subject'];
		$semester_incharge = $_POST['semester_incharge'];
		
		$Query = "UPDATE `2017_5th_computer_faculty_info` SET `comp_faculty_id`='$comp_faculty_id', `subject`='$subject',`semester_incharge`='$semester_incharge' where `2017_5th_computer_faculty_info`.`comp_faculty_id` = $comp_faculty_id;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		header("Location:FDisplay_2017_5th_computer_infoa.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update YOur Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">comp_faculty_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="comp_faculty_id" placeholder="comp_faculty_id" value="<?php echo $data[0]?>"
>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">subject</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="subject" placeholder="subject" value="<?php echo $data[1]?>"
>
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">semester_incharge</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="semester_incharge" placeholder="semester_incharge" value="<?php echo $data[2]?>"
>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" name="Update" class="btn btn-default" value="Update">Submit</button>
			</div>
		  </div>
		</form> 
</div>
<?php
include("Footer.php");
?>