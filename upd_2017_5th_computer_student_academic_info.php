<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from 2017_5th_computer_student_academic_info where enr_no=".$_GET['enr_no'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$enr_no = $_POST['enr_no'];
		$name = $_POST['name'];
		$stream = $_POST['stream'];
		$current_sem = $_POST['current_sem'];
		$current_year = $_POST['current_year'];
		$ssc = $_POST['ssc'];
		$hsc = $_POST['hsc'];
		
		$Query = "UPDATE `2017_5th_computer_student_academic_info` SET `enr_no`='$enr_no',`name`='$name',`stream`='$stream',`current_sem`='$current_sem',`current_year`='$current_year',`ssc`='$ssc ',`hsc`='$hsc' where `2017_5th_computer_student_academic_info`.`enr_no` = $enr_no;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		header("Location:Display_2017_5th_computer_student_academic_info.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update YOur Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">EnrollmentNo</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="enr_no" placeholder="EnrollmentNo" value="<?php echo $data[0] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $data[1] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream" placeholder="stream" value="<?php echo $data[2] ?>"> 
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">current_sem</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="current_sem" placeholder="current_sem"  value="<?php echo $data[3] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">current_year</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="current_year" placeholder="current_year"  value="<?php echo $data[4] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">ssc</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="ssc" placeholder="ssc" value="<?php echo $data[5] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">hsc</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="hsc" placeholder="hsc"  value="<?php echo $data[6] ?>">
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