<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['subject_code']!="")
	{
		$Query = "Delete From subject_master where subject_code=".$_GET['subject_code'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record  Deleted..";
	}
	$Query = "Select * from subject_master" or die("Database Error : ".mysql_error());
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
?>

<table border=1  class="table table-striped table-condensed">
	<tr>
		<th>subject_code</th>
		<th>Subject_Name</th>
		<th>Semester</th>
		<th>Branch</th>
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
		<td><?php echo $data[3] ?></td>
		<td>
			<a href="?subject_code=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete YOur Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_subject_mastera.php ?subject_code=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
</table>
<?php
include("Footer.php");
?>