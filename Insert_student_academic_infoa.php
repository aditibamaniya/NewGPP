<?php
include("Header_Admin.php");
	
if(isset($_POST['Insert']))
	{
		$enr_no = $_POST['enr_no'];
		$name = $_POST['name'];
		$stream = $_POST['stream'];
		$current_sem = $_POST['current_sem'];
		$current_year = $_POST['current_year'];
		$ssc = $_POST['ssc'];		
		$hsc = $_POST['hsc'];	
		
		$con = mysql_connect("localhost","root","")or die("Server Error :".mysql_error());
		mysql_select_db("college_ms")or die("Database Error :".mysql_error());
		
		$Query = "INSERT INTO `student_academic_info_master` (`enr_no`, `name`, `stream`, `current_sem`, `current_year`,`ssc`, `hsc`) VALUES ('$enr_no', '$name', '$stream', '$current_sem', '$current_year','$ssc', '$hsc' );";
		
		mysql_query($Query)or die("<h2>$Query</h2> <br>Query Error :".mysql_error());
		mysql_close($con)or die("Close Error :".mysql_error());
		
		header("Location:Display_student_academic_infoa.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">EnrollmentNo</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="enr_no" placeholder="EnrollmentNo">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream" placeholder="stream">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">current_sem</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="current_sem" placeholder="current_sem">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">current_year</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="current_year" placeholder="current_year">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">ssc</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="ssc" placeholder="ssc">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">hsc</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="hsc" placeholder="hsc">
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