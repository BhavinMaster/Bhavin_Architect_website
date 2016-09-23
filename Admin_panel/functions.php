<?php
session_start();

function loggdin(){
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
}else{
		return false;
}
}
?>