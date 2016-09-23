<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>


<?php 
include 'mysqlconnect.php';
?>


<title>The Webworld-v2 Website Template | Blog :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	
	<style>
b { 
    font-weight: bold;
}
</style>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo2.png" alt=""/> </a>
		</div>
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="index.html">Home</a></li>				
				<li><a href="service.html">Services</a></li>
				<li><a href="projects.php">Projects</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="contact.html">Contact us</a></li>
			</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="" placeholder="search something...">
    			<input type="submit" value="">
    		</form>
		</div>
        <div class="menu">
        	<ul>
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="service.html">Service</a></li>
				<li><a href="projects.php">Pages</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
        <div class="search">
            <form action="/iphone/search.html">
                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text">
            </form>
        </div>
        <div class="sub-head">
        	<ul>
            	<li><a href="#" id="menu">Menu  <span></span></a></li>
            	<li><a href="#" id="search">Search <span></span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
	   <script type="text/javascript">
		$(".menu,.search").hide();
		$("#menu").click(function(){
			$(".menu").toggle();
			$(".search").hide();
			$("#search").removeClass("active");
			$("#menu").toggleClass("active");
		});
		$("#search").click(function(){
			$(".search").toggle();
			$(".menu").hide();
			$("#menu").removeClass("active");
			$("#search").toggleClass("active");
			$(".text").focus();
		});
	</script>
	<script type="text/javascript" src="js/script.js"></script>
	<div class="clear"></div>

		<div class="clear"></div>
</div>
</div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
	<div class="top">
		<h2>Our Team</h2>
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
<div class="main">
		<div class="blog">
			<div class="blog_list">
				<h2>Mr.Manit Rastogi</h2>
				<h5>CEO <a href="#"></a></h5>
				<div class="blog_para">
					<p class="para"><a  href="#"><img src="photo/POOL-30-1061473_222x280.jpg" alt=""></a> <b></b><br>
					Graduated from the School of Planning and Architecture (New Delhi) and the Architectural Association (London) with Honours (Diploma school) and Distinction (Graduate school) in Energy and Environmental Studies,
					Manit is the Founder Partner of The Happy Design, one of India leading award-winning Architecture and Urban Design practices based out of New Delhi, India. The Happy Design has been ranked yet again among the Top 100 Architectural Design Firms worldwide by Building Design Magazine, UK in WA100, 2013. The Happy Design works with some of the best names in the industry such as Tata Housing, Reliance, Piramal Indiareit, L&T, Punj Lloyd, Ambuja Realty, Mahindra Lifespaces and the Intercontinental Hotel Group to name a few.
					Manit is a Fellow of the IIA (Indian Institute of Architects) and the RSA (Royal Society of Arts, UK). Manit has taught at various universities and been a director of the Sushant School of Art and Architecture as well as the Sushant School of Design. He has been a juror on several design and award juries. Manit is a founder member, Association for Development and Research of Sustainable Habitats (ADaRSH). As a member of the Technical Advisory Committee of GRIHA, India own Green rating system, and as member, Resource Persons Group on Environment and Ecology- Lt. Governor Secretariat, New Delhi, Manit works with urban policymakers to spearhead initiatives with an emphasis on environmental sensibility and social welfare.

</p>
					
					<div class="clear"></div>
				</div>
			 </div>



		<div class="wrap">
<div class="main">
		<!-- start span_of_3 -->
							<h2><p style="font-size:30px">Employees</p></h2>

		<div class="span_of_3" style="width:100%;">
        <style>
		
		</style>
<?php

$result = mysql_query("select * from employee_table");
 
while($raw = mysql_fetch_array($result))
{
$a = $raw['emp_name'];
$desig = $raw['designation'];
$mobile = $raw['contact_no'];
$img = $raw['profile_photo'];
$joini = $raw['joining_date'];
$add = $raw['address'];
$email=$raw['email'];
?>

			<div class="span1_of_3">
				<div class="span1_of_3_text">
				
				<p class="para"><a  href="#"><img src="photo/<?php echo $img;?>" width = "100"></a>Name : <?php echo $a;?><br>Designation : <?php echo $desig;?><br>Email : <?php echo $email;?><br> City:    <?php echo $add;?><br></p>
				
			</div>
			
		</div>
	
			 <?php
}
			 ?>
								<div class="clear"></div>

			</div>
		</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start span_of_4 -->
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>a little about us</h4>
				<p class="btm">We design your Dream, We Build your dream with our experienced engineers and creative Architects.</p>
				<p></p>
			</div>
			<div class="span1_of_4">
				<h4>get in touch</h4>
				<p class="btm">The Happy Design</p>
				<p class="btm1 pin">Ahmedabad, India</p>
				<p class="btm1 mail"><a href="mailto:info@mycompany.com">info@mycompany.com </a></p>
				<p class="call">01234 444 777</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer1">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->		
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
			</ul>
		</div>
		<div class="copy">
			<p class="link"><span>&copy; 2014 All rights reserved <a href="http://w3layouts.com/"> </a></span></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>