<html>
	
<Head></Head>

<body>
<?php
error_reporting(0);

// Connect to server and select databse.
include 'connect.php';

$employename = $_POST['employee_name'];
$designation = mysql_real_escape_string($_POST['designation']);
$salary = mysql_real_escape_string($_POST['salary']);
$email=mysql_real_escape_string($_POST['email']);
$join_date = mysql_real_escape_string($_POST['join_date']);
$birth_date = mysql_real_escape_string($_POST['birth_date']);
$address = mysql_real_escape_string($_POST['address']);	
$contact_no = mysql_real_escape_string($_POST['contact_no']);	

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

	if($employename && $designation && $email && $salary && $join_date && $birth_date && $address && $contact_no)
{
	
		mysql_query("INSERT INTO employee_table values ( '' , '$employename' , '$designation' , '$email' , '$salary' , '$photo' ,'$join_date' , '$birth_date' , '$address' , '$contact_no' )"); 
		header("location:message.html");

}
else
{
		header("location:error_message.html");
}

?>
</body>
</html>