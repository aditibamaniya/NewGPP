<?php
	include("Header_Clerk.php");
	if(!isset($_SESSION['ClerkLogin']))
	{
		header("Location:index.php");
	}
?>
<div class="container">
	<h1>Welcome clerk </h1>
	

<?php
	include("Footer.php");
?>	