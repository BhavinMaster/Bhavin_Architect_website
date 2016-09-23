<?php

error_reporting(0);
include('connect.php');
	

$ID = mysql_real_escape_string($_POST['id']);
$update=$_POST['btnsave'];

if($update)
{


	$newid=$_POST['id'];
	$newname=$_POST['project_name'];
	$newdes=$_POST['desc'];
	$newstd=$_POST['start_date'];
	$newend=$_POST['end_date'];
	//$newimg=$_POST['upload'];
	$newrev=$_POST['review'];
	$newpic=$_POST['img'];
	$newpic2=$_POST['img2'];
	$newpic3=$_POST['img3'];
	$newpic4=$_POST['img4'];
	$newpic5=$_POST['img5'];
//For Image1
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
//For Image2	
	if(!empty($_FILES["photo2"]))
	{ 
	
        $uploaddir = "../photo/"; // set this to wherever 
          if (copy($_FILES["photo2"]["tmp_name"], $uploaddir . $_FILES["photo2"]["name"])) 
	     {
	    $a=$_FILES["photo2"]["name"]; 

		$photo2=$a;         //prepares the file name to be stored in the database
             }
          else {
        	echo ("Image Not Uploaded!<br>");
		$photo2=$newpic2;
               }
	} 
 
	else
	{
		$photo2=$newpic2;
	}
//For Image3
	if(!empty($_FILES["photo3"]))
	{ 
	
        $uploaddir = "../photo/"; // set this to wherever 
          if (copy($_FILES["photo3"]["tmp_name"], $uploaddir . $_FILES["photo3"]["name"])) 
	     {
	    $a=$_FILES["photo3"]["name"]; 

		$photo3=$a;         //prepares the file name to be stored in the database
             }
          else {
        	echo ("Image Not Uploaded!<br>");
		$photo3=$newpic3;
               }
	} 
 
	else
	{
		$photo3=$newpic3;
	}
	//For Image4
	if(!empty($_FILES["photo4"]))
	{ 
	
        $uploaddir = "../photo/"; // set this to wherever 
          if (copy($_FILES["photo4"]["tmp_name"], $uploaddir . $_FILES["photo4"]["name"])) 
	     {
	    $a=$_FILES["photo4"]["name"]; 

		$photo4=$a;         //prepares the file name to be stored in the database
             }
          else {
        	echo ("Image Not Uploaded!<br>");
		$photo4=$newpic4;
               }
	} 
 
	else
	{
		$photo4=$newpic4;
	}
	//For Image5
	if(!empty($_FILES["photo5"]))
	{ 
	
        $uploaddir = "../photo/"; // set this to wherever 
          if (copy($_FILES["photo5"]["tmp_name"], $uploaddir . $_FILES["photo5"]["name"])) 
	     {
	    $a=$_FILES["photo5"]["name"]; 

		$photo5=$a;         //prepares the file name to be stored in the database
             }
          else {
        	echo ("Image Not Uploaded!<br>");
		$photo5=$newpic;
               }
	} 
 
	else
	{
		$photo5=$newpic;
	}

	$result=mysql_query("UPDATE project_table SET project_name='".$newname."',description='".$newdes."',path='".$photo."',path2='".$photo2."',path3='".$photo3."',path4='".$photo4."',path5='".$photo5."',start_date='".$newstd."',end_date='".$newend."',project_review='".$newrev."' WHERE id='".$newid."'");
	if($result==1)
	{
		header("location:message_update.html");
	}
}
	

?>