<?php
	include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
?>
<div class="container">
	<h1>Welcome Faculty </h1>
	<img src="IMG_1360.jpg" height="400px" width="600px">
	<img src="3.png" align="right" height="300px" width="500px">

</div>

<?php
	include("Footer.php");
?>	