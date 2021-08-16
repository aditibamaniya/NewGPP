<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
	if(isset($_POST['Insert']))
	{
		$stream_id = $_POST['stream_id'];
		$stream = $_POST['stream'];
		$stream_code = $_POST['stream_code'];
	
		$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
		mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
		
		$Query = "INSERT INTO `stream_master`(`stream_id`,`stream`, `stream_code`) VALUES ('$stream_id','$stream','$stream_code');";
		
		mysql_query($Query) or die("Query Error : ".mysql_error());
		
		mysql_close($con);
		echo "Record Inserted!..";
		
		header("Location:Display_stream_master.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream_id" placeholder="stream_id">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream" placeholder="stream">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream_Code</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream_code" placeholder="stream_code">
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