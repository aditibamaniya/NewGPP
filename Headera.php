<?php
	include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
?>
<div class="container">
	<h1>Welcome Admin </h1>
	

<?php
	include("Footer.php");
?>	