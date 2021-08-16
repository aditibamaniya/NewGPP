<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
if(isset($_POST['Insert']))
	{
		$lab_id = $_POST['lab_id'];
		$pc_number = $_POST['pc_number'];
		$company = $_POST['company'];
		$lab_number = $_POST['lab_number'];
		$status = $_POST['status'];
		$lab_incharge = $_POST['lab_incharge'];
		
		$con = mysql_connect("localhost","root","")or die("Server Error :".mysql_error());
		mysql_select_db("college_ms")or die("Database Error :".mysql_error());
		
		$Query = "INSERT INTO `lab_information` (`lab_id`, `pc_number`, `company`, `lab_number`, `status`,`lab_incharge`) VALUES ('$lab_id', '$pc_number', '$company', '$lab_number', '$status','$lab_incharge');";
		
		mysql_query($Query)or die("<h2>$Query</h2> <br>Query Error :".mysql_error());
		mysql_close($con)or die("Close Error :".mysql_error());
		
		header("Location:Display_lab_informationa.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">lab_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lab_id" placeholder="lab_id">
			</div>
		  </div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="song-name">pc_number</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="pc_number" placeholder="pc_number">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">company</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="company" placeholder="company">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">lab_number</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lab_number" placeholder="lab_number">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">status</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="status" placeholder="status">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">lab_incharge</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lab_incharge" placeholder="lab_incharge">
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