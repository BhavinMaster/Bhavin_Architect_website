<?php

error_reporting(0);
include('connect.php');

$viewid=$_GET['imgid'];

if($viewid)
{
	mysql_query("DELETE from project_type WHERE ID='$viewid'");
}
$result= $_POST['Delete'];

if(isset($result))	
{
	
	$checkbox = $_POST['checkbox'];	
	foreach ($checkbox as $key => $id)
	{
	
		mysql_query("DELETE FROM project_type WHERE id=".$id);

	}
	
	
}

header('location:Message_del.html');
?>