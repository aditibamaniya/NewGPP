<?php
include("Header_Admin.php");
	
	$enr_data = null;
	if(isset($_POST['check']))
	{
		$enr_no = $_POST['enr_no'];
		$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
		mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
		
		$Query = "Select * from 2018_6th_computer_student_academic_info where enr_no='$enr_no'";
		
		$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
		
		$enr_data = mysql_fetch_array($res);
	}
	
	if(isset($_POST['Insert']))
	{
		$enr_no = $_POST['enr_no'];
		$name = $_POST['name'];
		$stream = $_POST['stream'];
		$current_sem = $_POST['current_sem'];
		$current_year = $_POST['current_year'];
		$ssc = $_POST['ssc'];		
		$hsc = $_POST['hsc'];	
		$cpi = $_POST['cpi'];	
		$spi = $_POST['spi'];	
		
		$con = mysql_connect("localhost","root","")or die("Server Error :".mysql_error());
		mysql_select_db("college_ms")or die("Database Error :".mysql_error());
		
		$Query = "INSERT INTO `2018_6th_computer_student_academic_info` (`enr_no`, `name`, `stream`, `current_sem`, `current_year`,`ssc`, `hsc`,`cpi`,`spi`) VALUES ('$enr_no', '$name', '$stream', '$current_sem', '$current_year','$ssc', '$hsc' , '$cpi', '$spi');";
		
		mysql_query($Query)or die("<h2>$Query</h2> <br>Query Error :".mysql_error());
		mysql_close($con)or die("Close Error :".mysql_error());
		
		header("Location:Display_2018_6th_computer_student_academic_info.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">EnrollmentNo</label>
			<div class="col-xs-6 col-sm-3">
			  <input type="text" class="form-control" name="enr_no" placeholder="EnrollmentNo" value="<?php echo $enr_data[0];?>">
			</div>
			<div class="col-xs-6 col-sm-3">
				<button type="submit" name="check" value="check">Check</button>
		  </div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $enr_data[1];?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">stream</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="stream" placeholder="stream" value="<?php echo $enr_data[2];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">current_sem</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="current_sem" placeholder="current_sem" value="<?php echo $enr_data[3];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">current_year</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="current_year" placeholder="current_year" value="<?php echo $enr_data[4];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">ssc</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="ssc" placeholder="ssc" value="<?php echo $enr_data[5];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">hsc</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="hsc" placeholder="hsc" value="<?php echo $enr_data[6];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">cpi</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="cpi" placeholder="cpi" value="<?php echo $enr_data[7];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">spi</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="spi" placeholder="spi" value="<?php echo $enr_data[8];?>">
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