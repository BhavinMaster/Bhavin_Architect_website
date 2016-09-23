
<?php

error_reporting(0);
include('connect.php');

$viewid=$_GET['imgid'];

if($viewid)
{
	mysql_query("DELETE from employee_table WHERE ID='$viewid'");
}
$result= $_POST['Delete'];

if(isset($result))	
{
	$checkbox = $_POST['checkbox'];	
	foreach ($checkbox as $key => $id)
	{
	
		mysql_query("DELETE FROM employee_table WHERE id=".$id);

	}
	
	
}

header('location:Message_del.html');
?>