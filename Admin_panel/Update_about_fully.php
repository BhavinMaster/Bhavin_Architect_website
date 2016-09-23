<?php

error_reporting(0);
include('connect.php');
	

$ID = mysql_real_escape_string($_POST['id']);
$update=$_POST['btnsave'];

if($update)
{
	$newid=$_POST['id'];
	$newadd=$_POST['address'];
	$newcity=$_POST['city'];
	$newmob=$_POST['mobile'];
	$newdesc=$_POST['description'];
	


	$result=mysql_query("UPDATE about_us SET address='".$newadd."',city='".$newcity."',mobile='".$newmob."',description='".$newdesc."' WHERE id='".$newid."'");
	if($result==1)
	{
		header("location:message_update.html");
	}
}
	

?>