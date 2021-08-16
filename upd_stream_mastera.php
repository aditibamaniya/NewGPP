<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from stream_master where stream_id=".$_GET['stream_id'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$stream_id = $_POST['stream_id'];
		$stream = $_POST['stream'];
		$stream_code = $_POST['stream_code'];
		
		$Query = "UPDATE `stream_master` SET `stream_id`='$stream_id', `stream`='$stream',`stream_code`='$stream_code' where `stream_master`.`stream_id` = $stream_id;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		header("Location:Display_stream_mastera.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update This Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream_id</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream_id" placeholder="stream_id" value="<?php echo $data[0]?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream" placeholder="stream" value="<?php echo $data[1]?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream_Code</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream_code" placeholder="stream_code" value="<?php echo $data[2]?>">
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