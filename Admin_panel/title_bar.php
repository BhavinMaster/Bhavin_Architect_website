<div>
<?php

if(loggdin()){


	header('location:index.html');


}
else{

	header('location:login.php');
}

?>

</div>