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
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />


</head>

<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images/logo2.png" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin,  <a href="../index.html">Visit site</a> | <!-- <a href="#" class="messages">(3) Messages</a> | --> <a href="logout.php" class="logout">Logout</a></div>
    <div class="jclock"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="index.php">Admin Home</a></li>
                    
                    <li><a href="index.html">Manage Project Type</a>
                    
                       <ul>
                        <li><a href="View_project_type.php" title="">View Project Types</a></li>
                        <li><a href="add_project_type.html" title="">Add Project Type</a></li>
                        <li><a href="update_type.php" title="">Update project Type</a></li>
                        <li><a href="delete_project_type.php" title="">Remove project Type</a></li> 
                     	</ul>
                   
                    </li>
                    
                    <li><a href="index.html">Manage Projects Content<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="view_projects.php" title="">View Projects</a></li>
                        <li><a href="Add_new_Project.html" title="">Add new Project</a></li>
                        <li><a href="update_project.php" title="">Update existing project</a></li>
                        <li><a href="delete_project.php" title="">Remove existing project</a></li>
                        <!-- <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li> -->
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="index.html">Manage Team members<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
						<li><a href="view_team.php" title="">View Team Member</a></li>
						<li><a href="add_team.php" title="">Add Team Member</a></li>
                        <li><a href="update_team.php" title="">Update Member Profile</a></li>
                        <li><a href="delete_team.php" title="">Remove Member</a></li>
                      
                    
                         <!--<li><a href="" title="">Lorem ipsum dolor sit amet</a></li> -->
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="index.html">Manage About-Us <!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="view_about_us.php" title="">View About_us</a></li>
                        <li><a href="add_about_us.php" title="">Add About_us</a></li>
                        <li><a href="update_about_us.php" title="">Update About_us</a></li>
						<li><a href="remove_about_us.php" title="">Remove About_us</a></li>
                         </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="index.html">Settings<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="add_admin.php" title="">Register new Admin Login</a></li>
                        <li><a href="remove_admin.php" title="">Remove Existing Admin </a></li>
                        
                       <!-- <li><a class="sub1" href="" title="">sublevel2</a> -->
                        
                            
                        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </li>
                    
                        
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <!-- <li><a href="">Templates</a></li> -->
                    <!-- <li><a href="">Custom details</a></li> -->
                    <li><a href="contact_us.php">Contact</a></li>
                    </ul>
                    </div> 
                    
                    
                    
             
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    
    </div>  
    <div class="right_content" >            
    <h1>Fill the Project details</h1> 
	
	
	              	<script type="text/javascript">
function validate()
{ 
	if( document.myForm.emp.value == "" )
   {
     alert( "Please provide Employee name!" );
     document.myForm.emp.focus() ;
     return false;
   }
    if( document.myForm.des.value == "" )
   {
     alert( "Please provide your Designation!" );
     document.myForm.des.focus() ;
     return false;
   }
   
	 var x = document.myForm.ema.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	if( document.myForm.sal.value == "" )
   {
     alert( "Please provide your salary!" );
     document.myForm.sal.focus() ;
     return false;
   }
 
	var x=document.myForm.sal.value;
	if (isNaN(x)) 
	{
		alert("Must input numbers");
		return false;
	}
   
   if( document.myForm.joi.value == "" )
   {
     alert( "Please provide Joining Date!" );
     document.myForm.joi.focus() ;
     return false;
   }
   if( document.myForm.bir.value == "" )
   {
     alert( "Please provide Birth Date!" );
     document.myForm.bir.focus() ;
     return false;
   }
     if( document.myForm.add.value == "" )
   {
     alert( "Please provide Address" );
     document.myForm.add.focus() ;
     return false;
   }
    if( document.myForm.con.value == "" )
   {
     alert( "Please provide your contact!" );
     document.myForm.con.focus() ;
     return false;
   }
 
	var y=document.myForm.con.value;
	if (isNaN(y)) 
	{
		alert("Must input numbers");
		return false;
	}
  }
  </SCRIPT>

<?php

error_reporting(0);
include('connect.php');
	
$ID = mysql_real_escape_string($_POST['id']);


$result=mysql_query("select * from employee_table where id='".$ID."'");
while($oldvalue=mysql_fetch_array($result)){
	
	$oldname=$oldvalue['emp_name'];
	$olddes=$oldvalue['designation'];
	$oldsal=$oldvalue['salary'];
	$oldpic=$oldvalue['profile_photo'];
	$oldjd=$oldvalue['joining_date'];
	$oldbod=$oldvalue['dob'];
	$oldadd=$oldvalue['address'];
	$oldcon=$oldvalue['contact_no'];
	
	$oldrev=$oldvalue['project_review'];
}
?>

	           
     <h2>Update Member Id is ::><?php echo $ID;?></h2>
         <div class="form">
         

				
				<form action="Update_Team_fully.php" method="post" enctype="multipart/form-data" class="niceform" name="myForm" onsubmit="return(validate())" >

                <fieldset>
					<dl>
                                    	<!--     <dt><label for="">Project id:</label></dt>--> 
                       <dd><input type="hidden" name="id" id="" size="54" value="<?php echo $ID;?>" /></dd>
					   
                 	</dl>
					<dl>
                        <dd><input type="hidden" name="img" value="<?php echo $oldpic;?>"  /></dd>
					</dl>					
					<dl>
					<font color="red">*REQUIRED FIELD</font>
					</dl>
                    <dl>
                        <dt><label for=""><font color="red">*</font>Employee Name:</label></dt>
                        <dd><input type="text" name="emp" id="" size="54" value="<?php echo $oldname;?>" /></dd>
                    </dl>
                    <dl>
                        <dt><label for=""><font color="red">*</font>Designation:</label></dt>
                        <dd><input type="text" name="des" size="54" value="<?php echo $olddes;?>"/></dd>
                    </dl>
					 <dl>
                        <dt><label for=""><font color="red">*</font>Email:</label></dt>
                        <dd><input type="text" name="ema" size="54" value="<?php echo $oldemail;?>"/></dd>
                    </dl>
					<dl>
                        <dt><label for=""><font color="red">*</font>Salary</label></dt>
                        <dd><input type="text" name="sal" size="54" value="<?php echo $oldsal;?>"/></dd>
                    </dl>
                    
					 <dl>
					
					
                        <dt><label for="">Profile Pic:</label>
						<img src="../photo/<?php echo $oldpic; ?>" width="50"></dt><dd>
                        <input name="photo" type="file"  /></dd></dt>
						</dl>
					<dl>
                    <dl>
                    	<dt><label for="start_date"><font color="red">*</font>Joining Date</label></dt>
                    	<dd><input class="infusion-field-input" type="date" name="joi" size="54" value="<?php echo $oldjd;?>"></dd>
                    </dl>
                    
                    <dl>
                    	<dt><label for=""><font color="red">*</font>Birth Date</label></dt>
                    	<dd><input type="date" name="bir" size="54" value="<?php echo $oldbod;?>"/></dd>
                    </dl>
                     <dl>
                        <dt><label for=""><font color="red">*</font>Address</label></dt>
                        <dd><input type="text" name="add" size="54" value="<?php echo $oldadd;?>"/></dd>
                    </dl>

                     <dl>
                        <dt><label for=""><font color="red">*</font>Contact No</label></dt>
                        <dd><input type="text" name="con" size="54" value="<?php echo $oldcon;?>"/></dd>
                    </dl>
                    
             
                     <dl class="submit">
                    <input type="submit" name="btnsave" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset> 
          
          
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<!-- <div class="left_footer">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div> -->
    	<!-- <div class="right_footer"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div> -->
    
    </div>

</div>		
</body>
</html>