<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from subject_master where subject_code=".$_GET['subject_code'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$subject_code = $_POST['subject_code'];
		$subject_name = $_POST['subject_name'];
		$semester = $_POST['semester'];
		$branch = $_POST['branch'];
		
		$Query = "UPDATE `subject_master` SET `subject_code`='$subject_code',`subject_name`='$subject_name',`semester`='$semester',`branch`='$branch' where `subject_master`.`subject_code` = $subject_code;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		header("Location:Display_subject_master.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update YOur Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">subject_code</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="subject_code" placeholder="subject_code" value="<?php echo $data[0]?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">subject_name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="subject_name" placeholder="subject_name" value="<?php echo $data[1]?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">semester</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="semester" placeholder="semester" value="<?php echo $data[2]?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">branch</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="branch" placeholder="branch" value="<?php echo $data[3]?>">
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