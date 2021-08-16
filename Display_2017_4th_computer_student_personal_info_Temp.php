<?php
include("Header_Temp.php");

$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(isset($_POST['search']))
	{
		$Query = "Select * from 2017_4th_computer_student_personal_info where enr_no='".$_POST['valueToSearch']."' or  name='".$_POST['valueToSearch']."'"  or die("Database Error : ".mysql_error());
	
		$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	}
	else
	{
		$Query = "Select * from 2017_4th_computer_student_personal_info"  or die("Database Error : ".mysql_error());
	
		$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	}
?>
<h3 align="center"><b> 2017 Personal Information of 4th semester Student...</b></h3>
<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>enr_no</th>
		<th>name</th>
		<th>address</th>
		<th>birth_date</th>
		<th>email</th>
		<th>category</th>
		<th>mobile(self)</th>
		<th>mobile(parent)</th>
		<th>district</th>
		<th>gender</th>
	</tr>
	
<?php
	while($data = mysql_fetch_array($res))
	{
?>
	<tr>
		<td><?php echo $data[0] ?></td>
		<td><?php echo $data[1] ?></td>
		<td><?php echo $data[2] ?></td>
		<td><?php echo $data[3] ?></td>
		<td><?php echo $data[4] ?></td>
		<td><?php echo $data[5] ?></td>
		<td><?php echo $data[6] ?></td>
		<td><?php echo $data[7] ?></td>
		<td><?php echo $data[8] ?></td>
		<td><?php echo $data[9] ?></td>
	</tr>
	
	
<?php
	}
?>
</table>
<?php
include("Footer_Temp.php");
?>