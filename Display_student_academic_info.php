<?php
include("Header.php");
	if(!isset($_SESSION['FacultyLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['enr_no']!="")
	{
		$Query = "Delete From student_academic_info_master where enr_no=".$_GET['enr_no'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record  Deleted..";
	}
	$Query = "Select * from student_academic_info_master";
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
?>

<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>enr_no</th>
		<th>name</th>
		<th>stream</th>
		<th>current_sem</th>
		<th>current_year</th>
		<th>ssc</th>
		<th>hsc</th>
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
		<td>
			<a href="?enr_no=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete Your Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_student_academic_info.php ?enr_no=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
<?php
include("Footer.php");
?>