<html>
	
<Head></Head>

<body>
<?php

error_reporting(0);

// Connect to server and select databse.
include 'connect.php';

$str = mysql_real_escape_string($_POST['pid']);;
$id = (int)$str; 
$projecttype = mysql_real_escape_string($_POST['ptype']);


mysql_query("INSERT INTO project_type values ('$pid',  '$projecttype') ");

header("location:message.html");

?>
</body>
</html>