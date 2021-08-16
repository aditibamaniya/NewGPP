<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['comp_faculty_id']!="")
	{
		$Query = "Delete From 2017_3rd_computer_faculty_info where comp_faculty_id=".$_GET['comp_faculty_id'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record  Deleted..";
	}
	$Query = "Select * from 2017_3rd_computer_faculty_info" or die("Query Error : ".mysql_error());
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
?>

<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>comp_faculty_id</th>
		<th>Subject</th>
		<th>Semester_Incharge</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
	
<?php
	while($data = mysql_fetch_array($res))
	{
?>
	<tr>
		<td><?php echo $data[0] ?></td>
		<td><?php echo $data[1] ?></td>
		<td><?php echo $data[2] ?></td>
		<td>
			<a href="?comp_faculty_id=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete YOur Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_Faculty_2017_3rd_computer.php ?comp_faculty_id=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
</table>
<?php
include("Footer.php");
?>