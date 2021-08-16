<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['lab_id']!="")
	{
		$Query = "Delete From lab_information where lab_id=".$_GET['lab_id'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record  Deleted..";
	}
	$Query = "Select * from lab_information";
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
?>

<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>lab_id</th>
		<th>pc_number</th>
		<th>company</th>
		<th>lab_number</th>
		<th>status</th>
		<th>lab_incharge</th>
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
		
		<td>
			<a href="?lab_id=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete Your Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_lab_informationa.php ?lab_id=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
<?php
include("Footer.php");
?>