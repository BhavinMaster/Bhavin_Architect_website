
<?php

error_reporting(0);
include('connect.php');

$strid = mysql_real_escape_string($_POST['id']);
$viewid=$_GET['imgid'];
if($strid)
{
	mysql_query("DELETE from admin WHERE ID='$strid'");
}
if($viewid)
{
	mysql_query("DELETE from admin WHERE ID='$viewid'");
}
$result= $_POST['Delete'];

if(isset($result))	
{
	$checkbox = $_POST['checkbox'];	
	foreach ($checkbox as $key => $id)
	{
	
		mysql_query("DELETE FROM admin WHERE id=".$id);

	}
	
	
}

header('location:Message_del.html');
?>