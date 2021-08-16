<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['faculty_id']!="")
	{
		$Query = "Delete From faculty_personal_master where faculty_id=".$_GET['faculty_id'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record Deleted..";
	}
	$Query = "Select * from faculty_personal_master" or die("Query Error : ".mysql_error());
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
?>

<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>faculty_id</th>
		<th>name</th>
		<th>qualification</th>
		<th>joining_year</th>
		<th>experience</th>
		<th>designation</th>
		<th>email</th>
		<th>mobile_no</th>
		<th>delete</th>
		<th>edit</th>
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
		<td>
			<a href="?faculty_id=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete This Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_faculty_personal_info.php ?faculty_id=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
</table>
<?php
include("Footer.php");
?>