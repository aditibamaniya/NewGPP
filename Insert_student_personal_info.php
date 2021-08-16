<?php
include("Header.php");
	
if(isset($_POST['Insert']))
	{
		$enr_no = $_POST['enr_no'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$birth_date = $_POST['birth_date'];
		$email = $_POST['email'];
		$category = $_POST['category'];		
		$tel = $_POST['tel'];	
		$tel1 = $_POST['tel1'];	
		$District = $_POST['District'];	
		$Gender = $_POST['Gender'];	
		
		$con = mysql_connect("localhost","root","")or die("Server Error :".mysql_error());
		mysql_select_db("college_ms")or die("Database Error :".mysql_error());
		
		$Query = "INSERT INTO `student_personal_info_master` (`enr_no`, `name`, `address`, `birth_date`, `email`,`category`, `mobile(self)`, `mobile(home)`, `district`, `gender`) VALUES ('$enr_no', '$name', '$address', '$birth_date', '$email', '$category', '$tel', '$tel1', '$district', '$gender' );";
		
		mysql_query($Query)or die("<h2>$Query</h2> <br>Query Error :".mysql_error());
		mysql_close($con)or die("Close Error :".mysql_error());
		
		header("Location:Display_student_personal_info.php");
	}
?>
<div class="container">
	 <form class="form-horizontal" action="" method="POST">
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">EnrollmentNo</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control" name="enr_no" placeholder="EnrollmentNo">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">name</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="name" placeholder="name">
			</div>
		  </div>
		   <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">address</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="address" placeholder="address">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">birth_date</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="birth_date" placeholder="birth_date">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">email</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="email">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">category</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="category" placeholder="category">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">mobile(self)</label>
			<div class="col-sm-10">
			  <input type="tel" class="form-control" name="tel" placeholder="mobile(self)">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">mobile(home)</label>
			<div class="col-sm-10">
			  <input type="tel" class="form-control" name="tel1" placeholder="mobile(home)">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">district</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="district" placeholder="District">
			</div>
		  </div>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="song-name">gender</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="gender" placeholder="Gender">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" name="Insert" value="Insert" class="btn btn-default">Submit</button>
			</div>
		  </div>
		</form> 
</div>
<?php
include("Footer.php");
?>