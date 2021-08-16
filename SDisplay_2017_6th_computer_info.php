<?php
include("Header_Clerk.php");
	if(!isset($_SESSION['ClerkLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['enr_no']!="")
	{
		$Query = "Delete From 2017_6th_computer_student_info where enr_no=".$_GET['enr_no'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record  Deleted..";
	}
	else if(isset($_POST['search']))
	{
		$Query = "Select * from 2017_6th_computer_student_info where enr_no='".$_POST['valueToSearch']."' " or die("Database Error : ".mysql_error());
	
		$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	}
	else
	{
		$Query = "Select * from 2017_6th_computer_student_info"  or die("Database Error : ".mysql_error());
	
		$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
	}
?>
<form action="" method="post">
	<input type="text" name="valueToSearch" placeHolder="Search...">
	<input type="submit" value="Search" name="search"><br><br>
</form>
<h3 align="center"><b> 2017 Computer Semester 6 Student Fees Status...</b></h3>
<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>enr_no</th>
		<th>library_fees</th>
		<th>mid_sem_fees</th>
		<th>external_exam_fees</th>
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
		<td>
			<a href="?enr_no=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete YOur Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_Student_2017_6th_computer.php ?enr_no=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
</table>