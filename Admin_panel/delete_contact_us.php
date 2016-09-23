
<?php

error_reporting(0);
include('connect.php');

$viewid=$_GET['id'];

if($viewid)
{
	mysql_query("DELETE from contact_us WHERE ID='$viewid'");
}

header('location:Message_del.html');
?>