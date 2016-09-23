<?php
error_reporting(0);

// Connect to server and select databse.
include("mysqlconnect.php");


$employename = $_POST['userName'];
$designation = $_POST['userEmail'];
$salary = $_POST['userPhone'];
$join_date = $_POST['userMsg'];
	
		mysql_query("INSERT INTO contact_us values ( '' , '$employename' , '$designation', '$salary' , '$join_date')"); 
		header("location:index.html");





?>