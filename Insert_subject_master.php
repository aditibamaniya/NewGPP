<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
if(isset($_POST['Insert']))
	{
		$subject_code = $_POST['subject_code'];
		$subject_name = $_POST['subject_name'];
		$semester = $_POST['semester'];
		$branch = $_POST['branch'];
		
		$con = mysql_connect("localhost","root","")or die("Server Error :".mysql_error());
		mysql_select_db("college_ms")or die("Database Error :".mysql_error());
		
		$Query = "INSERT INTO `subject_master` (`subject_code`, `subject_name`, `semester`, `branch`) VALUES ('$subject_code', '$subject_name', '$semester', '$branch' );";
		
		mysql_query($Query)or die("<h2>$Query</h2> <br>Query Error :".mysql_error());
		mysql_close($con)or die("Close Error :".mysql_error());
		
		header("Location:Display_subject_master.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">subject_code</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="subject_code" placeholder="subject_code">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">subject_name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="subject_name" placeholder="subject_name">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">semester</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="semester" placeholder="semester">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">branch</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="branch" placeholder="branch">
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