<html>
	
<Head></Head>

<body>
<?php
error_reporting(0);

// Connect to server and select databse.
include 'connect.php';
 
$username = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));

mysql_query("INSERT INTO admin values ( '' , '$username' ,'$password' ,'1' , 'a') "); 
header("location:message.html");


?>
</body>
</html>