<?php
include("Header_Clerk.php");
	if(!isset($_SESSION['ClerkLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from 2017_1st_computer_student_info where enr_no=".$_GET['enr_no'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$enr_no = $_POST['enr_no'];
		$library_fees = $_POST['library_fees'];
		$mid_sem_fees = $_POST['mid_sem_fees'];
		$external_exam_fees = $_POST['external_exam_fees'];
		
		$Query = "UPDATE `2017_1st_computer_student_info` SET `enr_no`='$enr_no' ,`library_fees`='$library_fees', `mid_sem_fees`='$mid_sem_fees',`external_exam_fees`='$external_exam_fees' where `2017_1st_computer_student_info`.`enr_no` = $enr_no;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		header("Location:SDisplay_2017_1st_computer_info.php");
	}
?>
<div class="container">
	<form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update YOur Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">EnrollmentNo</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="enr_no" placeholder="EnrollmentNo" value="<?php echo $data[0]?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">library_fees</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="library_fees" placeholder="library_fees" value="<?php echo $data[1]?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">mid_sem_fees</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="mid_sem_fees" placeholder="mid_sem_fees" value="<?php echo $data[2]?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">external_exam_fees</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="external_exam_fees" placeholder="external_exam_fees" value="<?php echo $data[3]?>">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" name="Update" class="btn btn-default" value="Update">Update</button>
			</div>
		  </div>
		</form> 
</div>