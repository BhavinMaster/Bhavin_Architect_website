<html>
	
<Head></Head>

<body>
<?php
error_reporting(0);

// Connect to server and select databse.
include 'connect.php';

$address = mysql_real_escape_string($_POST['address']);
$city = mysql_real_escape_string($_POST['city']);
$mobile = mysql_real_escape_string($_POST['mobile']);
$description = mysql_real_escape_string($_POST['description']);


if($address && $description && $city && mobile)
{
		mysql_query("INSERT INTO about_us values ( '' , '$address' ,'$city' , '$mobile' ,'$description')"); 
		header("location:message.html");

}
else
{
		header("location:error_message.html");
}

?>
</body>
</html>