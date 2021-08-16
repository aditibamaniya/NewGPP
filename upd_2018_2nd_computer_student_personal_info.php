<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	$Query = "Select * from 2018_2nd_computer_student_personal_info where enr_no=".$_GET['enr_no'];
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	
	$data = mysql_fetch_array($res);
	
	if(isset($_POST['Update']))
	{
		$enr_no = $_POST['enr_no'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$birth_date = $_POST['birth_date'];
		$email = $_POST['email'];
		$category = $_POST['category'];
		$tel_self = $_POST['tel_self'];
		$tel_home = $_POST['tel_home'];
		$district = $_POST['district'];
		$gender = $_POST['gender'];
		
		$Query = "UPDATE `2018_2nd_computer_student_personal_info` SET `enr_no`='$enr_no',`name`='$name',`address`='$address',`birth_date`='$birth_date',`email`='$email',`category`='$category ',`mobile(self)`='$tel_self',`mobile(home)`='$tel_home',`district`='$district',`gender`='$gender' where `2018_2nd_computer_student_personal_info`.`enr_no` = $enr_no;";
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());;
		
		header("Location:Display_2018_2nd_computer_student_personal_info.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST" onsubmit="return confirm('Do You Really Want To Update YOur Record?')">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">EnrollmentNo</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="enr_no" placeholder="EnrollmentNo" value="<?php echo $data[0] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $data[1] ?>">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">address</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $data[2] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">birth_date</label>
			<div class="col-sm-10">
			  <input type="Date" class="form-control" name="birth_date" placeholder="birth_date" value="<?php echo $data[3] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">email</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $data[4] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">category</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="category" placeholder="category" value="<?php echo $data[5] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">Mobile(Self)</label>
			<div class="col-sm-10">
			  <input type="tel" class="form-control" name="tel_self" placeholder="mobile(self)" value="<?php echo $data[6] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">Mobile(Home)</label>
			<div class="col-sm-10">
			  <input type="tel" class="form-control" name="tel_home" placeholder="mobile(home)" value="<?php echo $data[7] ?>"> 
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">district</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="district" placeholder="district" value="<?php echo $data[8] ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">gender</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="gender" placeholder="gender" value="<?php echo $data[9] ?>">
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