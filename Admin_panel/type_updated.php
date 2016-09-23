<html>
	
<Head></Head>

<body>
<?php

error_reporting(0);

// Connect to server and select databse.
include 'connect.php';

$strid=$_POST['id'];


$projectype = mysql_real_escape_string($_POST['project_type']);
 
mysql_query("UPDATE project_type SET type = '$projectype' WHERE ID= '$strid' ");	
 
header("location:message_update.html");

?>
</body>
</html>