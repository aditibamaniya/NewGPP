<?php
	include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("location:index.php");
	}
?>	
	

<div class="container">
	<h1 align="center"> Welcome Admin</h1>
</div>
<?php
	include("Footer.php");
?>