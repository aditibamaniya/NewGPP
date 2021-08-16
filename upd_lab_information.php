<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from lab_information where lab_id=".$_GET['lab_id'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$lab_id = $_POST['lab_id'];
		$pc_number = $_POST['pc_number'];
		$company = $_POST['company'];
		$lab_number = $_POST['lab_number'];
		$status = $_POST['status'];
		$lab_incharge = $_POST['lab_incharge'];
		
		$Query = "UPDATE `lab_information` SET `lab_id`='$lab_id',`pc_number`='$pc_number',`company`='$company',`lab_number`='$lab_number',`status`='$status',`lab_incharge`='$lab_incharge' where `lab_information`.`lab_id` = $lab_id;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		header("Location:Display_lab_information.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update YOur Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">lab_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lab_id" placeholder="lab_id" value="<?php echo $data[0] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">pc_number</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="pc_number" placeholder="pc_number" value="<?php echo $data[1] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">company</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="company" placeholder="company" value="<?php echo $data[2] ?>"> 
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">lab_number</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lab_number" placeholder="lab_number"  value="<?php echo $data[3] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">status</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="status" placeholder="status"  value="<?php echo $data[4] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">lab_incharge</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lab_incharge" placeholder="lab_incharge"  value="<?php echo $data[4] ?>">
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