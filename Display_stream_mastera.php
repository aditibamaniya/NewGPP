<?php
include("Header_Admin.php");
	if(!isset($_SESSION['AdminLogin']))
	{
		header("Location:index.php");
	}
	$con = mysql_connect("localhost","root","") or die("Server Error : ".mysql_error());
	mysql_select_db("college_ms") or die("Database Error : ".mysql_error());
	
	if(@$_GET['stream_id']!="")
	{
		$Query = "Delete From stream_master where stream_id=".$_GET['stream_id'];
		
		mysql_query($Query) or die("<h2>$Query</h2> Query Error : ".mysql_error());
		
		echo "Record  Deleted..";
	}
	$Query = "Select * from stream_master" or die("Query Error : ".mysql_error());
	
	$res = mysql_query($Query) or die("<h2>$Query</h2> Query Error :".mysql_error());
?>

<table border=1 class="table table-striped table-condensed">
	<tr>
		<th>stream_id</th>
		<th>Stream</th>
		<th>Stream_Code</th>
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
			<a href="?stream_id=<?php echo $data[0]?>" onclick="return confirm('Do You Really Want To Delete This Record?')">Delete</a>
		</td>
		<td>
			<a href="upd_stream_mastera.php ?stream_id=<?php echo $data[0]?>">Update</a>
		</td>
	</tr>
	
	
<?php
	}
?>
</table>
<?php
include("Footer.php");
?>