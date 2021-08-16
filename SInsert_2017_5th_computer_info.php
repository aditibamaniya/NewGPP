<?php

include("Header_Clerk.php");
	if(!isset($_SESSION['ClerkLogin']))
	{
		header("Location:index.php");
	}
	$enr_data = null;
	if(isset($_POST['check']))
	{
		$enr_no = $_POST['enr_no'];
		$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
		mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
		
		$Query = "Select * from 2017_5th_computer_student_info where enr_no='$enr_no'";
		
		$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		$enr_data = mysql_fetch_array($res);
	}
	if(isset($_POST['Insert']))
	{
		$enr_no = $_POST['enr_no'];
		$library_fees = $_POST['library_fees'];
		$mid_sem_fees = $_POST['mid_sem_fees'];
		$external_exam_fees = $_POST['external_exam_fees'];
		
		$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
		mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
		
		$Query = "INSERT INTO `2017_5th_computer_student_info`(`enr_no`,`library_fees`,`mid_sem_fees`,`external_exam_fees`) VALUES ('$enr_no','$library_fees','$mid_sem_fees','$external_exam_fees');";
		
		mysql_query($Query) or die("Query Error : ".mysql_error());
		
		mysql_close($con);
		echo "Record Inserted!..";
		
		header("Location:SDisplay_2017_5th_computer_info.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
	 <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">enr_no</label>
			<div class="col-xs-6 col-sm-3">
				<input type="text" class="form-control" name="enr_no" placeholder="enr_no" value="<?php echo $enr_data[0];?>">
			</div>
			<div class="col-xs-6 col-sm-3">
				<button type="submit" name="check" value="check">Check</button>
		  </div>
		 </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">library_fees</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="library_fees" value="<?php echo $enr_data[1]; ?>" placeholder="library_fees" >
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">mid_sem_fees</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="mid_sem_fees" value="<?php echo $enr_data[2]; ?>" placeholder="mid_sem_fees">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">external_exam_fees</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="external_exam_fees" value="<?php echo $enr_data[3]; ?>" placeholder="external_exam_fees">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" name="Insert" class="btn btn-default">Submit</button>
			</div>
		  </div>
		</form> 
</div>