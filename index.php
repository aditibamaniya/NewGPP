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
		header("location:home.php");
	}
	else
	{
		echo "Invalid username and password";
	}
}
?>
<html>
<head>
<style>

#footer{padding:20px 0;}
#footer h2{margin-bottom:15px; padding-bottom:8px; border-bottom:1px dashed #999999;}
#footer p, #footer ul, #footer a{margin:0; padding:0; font-weight:normal; list-style:none; line-height:normal;}
#footer .footbox{display:block; float:left; width:300px; margin:0 0 0 30px; padding:0;}
#footer li{margin-bottom:3px;}
#footer .last{margin:0;}
#newsletter{display:block; float:left; width:300px;}
</style>
</head>
<body>
	<div class="container">
		<form action="" method="post">
		<img align="center" src="gpp1.jpg" height="130px" width="450px">
		<img align="right" src="1.png" height="600px" width="650px">
			<h4>Login As...</h4>
			<div class="dropdown">
				<button class="button" type="button" data-toggle="dropdown"> Select User... <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="A_LOGIN.php"> Admin </a></li>
						<li><a href="F_LOGIN.php"> Faculty </a></li>
						<li><a href="C_LOGIN.php"> Clerk </a></li>
						<li><a href="index - Copy.php"> Student </a></li>
					</ul>
			</div>
			<br/>
			<br/>
			<br/>
			<br/>
			<img src="2.png" align="center" height="320px" width="450px">
			
		</form>			
	</div>

<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2 class="well">Locate Us</h2>
      <a href="http://www.gppr.cteguj.in/"> http://www.gppr.cteguj.in/ </a>
    </div>
    <div id="newsletter">
      <h2 class="well">Site Links</h2>
      <ul>
        <li><a href="http://www.gppr.cteguj.in/">Home</a></li>
        <li><a href="http://www.gppr.cteguj.in/about/">About</a></li>
        <li><a href="http://www.gppr.cteguj.in/gallery/">Gallery</a></li>
        <li><a href="http://www.gppr.cteguj.in/contact/">Contact Us</a></li>
      </ul>
    </div>
      <h2 class="well">Contact Info</h2>
      <ul>
		  <h4>
			<li>Government Polytechnic Porbandar Old Air-Port, NH-8B,Chhaya, Porbandar</li>
			<li>2862220553</li>
			<li>gpporbandar@hotmail.com</li>
		  </h4>
	  </ul>
  </div>
</div>	
</body>
</html>
<?php

?>
