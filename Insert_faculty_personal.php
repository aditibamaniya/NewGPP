<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
if(isset($_POST['Insert']))
	{
		$faculty_id = $_POST['faculty_id'];
		$name = $_POST['name'];
		$qualification = $_POST['qualification'];
		$joining_year = $_POST['joining_year'];
		$experience = $_POST['experience'];
		$designation = $_POST['designation'];		
		$email = $_POST['email'];	
		$mobile_no = $_POST['mobile_no'];	
		
		$con = mysql_connect("localhost","root","")or die("Server Error :".mysql_error());
		mysql_select_db("college_ms")or die("Database Error :".mysql_error());
		
		$Query = "INSERT INTO `faculty_personal_master` (`faculty_id`, `name`, `qualification`, `joining_year`, `experience`,`designation`, `email`, `mobile_no`) VALUES ('$faculty_id', '$Name', '$qualification', '$BirthDate', '$experience', '$designation', '$email', '$mobile_no');";
		
		mysql_query($Query)or die("<h2>$Query</h2> <br>Query Error :".mysql_error());
		mysql_close($con)or die("Close Error :".mysql_error());
		
		header("Location:Display_faculty_personal.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">faculty_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="faculty_id" placeholder="faculty_id">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">qualification</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="qualification" placeholder="qualification">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">joining_year</label>
			<div class="col-sm-10">
			  <input type="Date" class="form-control" name="joining_year" placeholder="joining_year">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">experience</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="experience" placeholder="experience">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">designation</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="designation" placeholder="designation">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">email</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="email">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">mobile_no</label>
			<div class="col-sm-10">
			  <input type="tel" class="form-control" name="mobile_no" placeholder="mobile_no">
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