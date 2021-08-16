<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from faculty_personal_master where faculty_id=".$_GET['faculty_id'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Updated']))
	{
		$faculty_id = $_POST['faculty_id'];
		$name = $_POST['name'];
		$qualification = $_POST['qualification'];
		$joining_year = $_POST['joining_year'];
		$experience = $_POST['experience'];
		$designation = $_POST['designation'];
		$email = $_POST['email'];
		$mobile_no = $_POST['mobile_no'];
		
		$Query = "UPDATE `faculty_personal_master` SET `faculty_id`='$faculty_id',`name`='$name',`qualification`='$qualification',`joining_year`='$joining_year',`experience`='$experience',`designation`='$designation ',`email`='$email',`mobile_no`='$mobile_no' where `faculty_personal_master`.`faculty_id` = $faculty_id;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());;
		
		header("Location:Display_faculty_personala.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update This Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">faculty_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="faculty_id" placeholder="faculty_id" value="<?php echo $data[0] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $data[1] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">qualification</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="qualification" placeholder="qualification" value="<?php echo $data[2] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">joining_year</label>
			<div class="col-sm-10">
			  <input type="Date" class="form-control" name="joining_year" placeholder="joining_year" value="<?php echo $data[3] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">experience</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="experience" placeholder="experience" value="<?php echo $data[4] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">designation</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="designation" placeholder="designation" value="<?php echo $data[5] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">email</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $data[6] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">mobile_no</label>
			<div class="col-sm-10">
			  <input type="tel" class="form-control" name="mobile_no" placeholder="mobile_no" value="<?php echo $data[7] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" name="Updated" class="btn btn-default" value="Update">Submit</button>
			</div>
		  </div>
		</form> 
</div>
<?php
include("Footer.php");
?>