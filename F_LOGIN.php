<?php
include("Header.php");

if(isset($_POST['Login']))
{
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$con= mysql_connect("localhost","root","")or die ("Server error :". mysql_error());
	mysql_select_db("college_ms")or die ("Database error :". mysql_error());
	$Query = "select * from admin where user_name='$user_name' and password='$password'";
	$Res = mysql_query($Query) or die("Query Error :".mysql_error());
	
	if(mysql_num_rows($Res))
	{
		$_SESSION['FacultyLogin']= mysql_fetch_array($Res);
		
		header("location:Faculty.php");
	}
	else
	{
		echo "<h3>Invalid username and password</h3>";
	}
}
?>
<div class="container">
		<h1 align="center"> Faculty Login </h1>
		<form action="" method="post">
		  <div class="form-group">
			<label for="User-name">User Name:</label>
			<input type="text" class="form-control" id="uname" name="user_name">	
		  </div>
		  <div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="password">			
		  </div>
		
		  <button type="submit" class="btn btn-default" name="Login">Submit</button>
		  <a href="" style="text-decoration:none;"> Forget password </a>
		</form> <br>
			
			
</div>

	
<?php
include("Footer.php");
?>