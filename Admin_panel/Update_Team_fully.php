<?php

error_reporting(0);
include('connect.php');
	

$ID = mysql_real_escape_string($_POST['id']);

$update=$_POST['btnsave'];
if($update)
{
	
$newemp=$_POST['emp'];
$newdes=$_POST['des']; 
$newemail=$_POST['ema'];
$newsal=$_POST['sal'];
//$newpath=$_POST['upload'];	
$newjoi=$_POST['joi'];
$newbir=$_POST['bir'];
$newadd=$_POST['add'];	
$newcont=$_POST['con'];	
$newid=$_POST['id'];
$newpic=$_POST['img'];

if(!empty($_FILES["photo"]))
	{ 
	
        $uploaddir = "../photo/"; // set this to wherever 
          if (copy($_FILES["photo"]["tmp_name"], $uploaddir . $_FILES["photo"]["name"])) 
	     {
	    $a=$_FILES["photo"]["name"]; 

		$photo=$a;         //prepares the file name to be stored in the database
             }
          else {
        	echo ("Image Not Uploaded!<br>");
		$photo=$newpic;
               }
	} 
 
	else
	{
		$photo=$newpic;
	}

	$result = mysql_query("UPDATE employee_table SET 
				emp_name='".$newemp."',
				designation='".$newdes."',
				email='".$newemail."',
				salary='".$newsal."',
				profile_photo='".$photo."',
				joining_date='".$newjoi."',
				dob='".$newbir."',
				address='".$newadd."',
				contact_no='".$newcont."' 
				WHERE id='".$newid."'"); 
	

}	
		if($result==1)
		{
			header("location:message_update.html");
		}
?>