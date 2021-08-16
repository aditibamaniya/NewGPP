<?php
include("Header.php");
if(isset($_POST['submit']))
{
	$selected_val1 = $_POST['year_select'];
	$selected_val2 = $_POST['sem_select'];
	$selected_val3 = $_POST['branch_select'];
	
	$table_name = "Location:Display_" . $selected_val1 . "_" . $selected_val2 . "_" . $selected_val3 ."_student_academic_info.php";
	header($table_name);
}
?>
<html>
<head>	
		
</head>
<body>
<form action="" method="post">
<h3 align="center"><b> Update Student Academic Information...</b></h3>
<br/>
<br/>

<div class="col-sm-2">
	<label for="year_select"> Select Year:</label>
	<select name="year_select">
		<option value="2017">2017</option>
		<option value="2018">2018</option>
	</select>
	
</div>
<div class="col-sm-2">
	<label for="sem_select">Select Semester:</label> 
	<select name="sem_select">
		<option value="1st">1st</option>
		<option value="2nd">2nd</option>
		<option value="3rd">3rd</option>
		<option value="4th">4th</option>
		<option value="5th">5th</option>
		<option value="6th">6th</option>
	</select>	
</div>
<div class="col-sm-2">	
	<label for="branch_select"> Select Branch:</label> 
	<select name="branch_select">
		<option value="computer">computer</option>
	</select>
</div>
<div class="col-sm-2">
	<input type="submit" name="submit" value="submit"/>	
</div>
</form>
</body>
</html>

<?php
include("Footer.php");
?>