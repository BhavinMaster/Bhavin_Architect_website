<html>
	
<Head></Head>

<body>
<?php
error_reporting(0);

// Connect to server and select databse.
include 'connect.php';
$projectname = mysql_real_escape_string($_POST['project_name']);
$description = mysql_real_escape_string($_POST['desc']);
$start_date = mysql_real_escape_string($_POST['start_date']);
$end_date = mysql_real_escape_string($_POST['end_date']);
$review = mysql_real_escape_string($_POST['review']);	

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
		$photo="";
               }
	} 
 
	else
	{
		$photo="";
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
		$photo2="";
               }
	} 
 
	else
	{
		$photo2="";
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
		$photo3="";
               }
	} 
 
	else
	{
		$photo3="";
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
		$photo4="";
               }
	} 
 
	else
	{
		$photo4="";
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
		$photo5="";
               }
	} 
 
	else
	{
		$photo5="";
	}
if($projectname && $description  && $start_date && $end_date && $review)
{

		mysql_query("INSERT INTO project_table values ( '' , '$projectname' ,'$description' , '$photo' , '$photo2', '$photo3', '$photo4', '$photo5' , '$start_date' , '$end_date' , '$review' )"); 
		header("location:message.html");

}
else
{
		header("location:error_message.html");
}

?>
</body>
</html>