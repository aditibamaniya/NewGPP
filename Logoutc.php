<?php
	session_start();
	unset($_SESSION['ClerkLogin']);
	header("Location:index.php");
	if(!isset($_SESSION['ClerkLogin']))
	{
		header("Location:index.php");
	}
?>