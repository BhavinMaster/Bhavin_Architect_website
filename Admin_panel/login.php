<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>

<?php
$usernameErr = $passErr = $upErr = "";
if(isset($_POST['submit'])){

		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["username"])) {
				$usernameErr = "*Username is required";
			} else {
				if (empty($_POST["password"])) {
				$passErr = "*Password is required";
			} else {

		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
		if(empty($username) or empty($password)){
				echo "<p>Field Empty!</p>";
		}		else{
					$check_login = mysql_query("SELECT id,type FROM admin WHERE username='$username' AND password='$password'");
					if(mysql_num_rows($check_login)==1){
							$run=mysql_fetch_array($check_login);
							$user_id=$run['id'];
							$type=$run['type'];
							
							if($type=='d'){
								echo "<p>Your account is deactivated!</p>";
							}else{
								$_SESSION['user_id']=$user_id;
								header('location:index.php');
								}
						}else{
							$upErr ="*Check Username And Password";
						}
		}
		}
		}
}
}
?>
<script type="text/javascript">
function checkCapsLock( e )
{
var fKeyCode=0;
var myShiftKey=true;var msg='You are pressing shift key or attempting to type in caps';
var myMsg='Caps Lock is On.';
if ( document.all )

{
fKeyCode=e.keyCode;
myShiftKey=e.shiftKey;
}
else if ( document.layers )
{
fKeyCode=e.which;
myShiftKey=( fKeyCode == 16 ) ? true : false;
}
else if ( document.getElementById )
{
fKeyCode=e.which;
myShiftKey=( fKeyCode == 16 ) ? true : false;
}
if ( ( fKeyCode >= 65 && fKeyCode <= 90 ) && !myShiftKey )
{
alert( myMsg );
}
}

</script>
<body>



<div id="main_container">


	<div class="header_login">
    <div class="logo"><a href="#"><img src="images/logo2.png" alt="" title="" border="0" /></a></div>
    
    </div>

     
         <div class="login_form">
         
         <h3>Admin Panel Login</h3>
         
       
         <form name="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="niceform">
         
                <fieldset>		
                    
						<span class="error"><font color="red"><?php echo $upErr; echo $usernameErr;  echo $passErr;?></font></span>
						<dl>	
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="username" id="username" size="54" /></dd>
						
				

				</dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="password" id="password" size="54"  onKeyPress="checkCapsLock( event )"/></dd>

                    </dl>
					
					
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	
    
    <div class="footer_login">
    
    	<div class="left_footer_login">The Happy Design | Ahmedabad </div>
    	<div class="right_footer_login"></a></div>
    
    </div>

</div>		
</body>
</html>	


