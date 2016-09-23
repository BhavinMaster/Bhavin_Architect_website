<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Webworld-v2 Website Template | About :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start top_js_button -->
<script type="text/javascript" src="js/jquery.min.js"></script>
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
				<li><a href="index.html">Pages</a></li>
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
		<h2>about us</h2>
 	</div>
</div>
</div>


<!-- start main -->
<div class="wrap">
<div class="main">
		<div class="about">
	       <div class="cont-grid">
	       <div class="abt-para">
				       	<span>The Happy Design</span> 	

			<p class="para">                
		
		   The Happy Design is one of the world's most popular and influential architecture and design magazines, and the winner of numerous awards for journalism and publishing.

Our mission is simple: to bring you a carefully edited selection of the best architecture, design and interiors projects from around the world.</p>

<p class="para">The Happy Design was launched at the end of November 2006 and has grown rapidly ever since, attracting over 1.75 million unique visitors every month.</p>
	       	<p class="para">
	      <!-- start span_of_3 -->
							<div class="span_of_3">	
		  
	       		<?php
					$host='localhost'; // Host name 
					$username='root'; // Mysql username 
					$password=''; // Mysql password 
					$db_name="project2"; // Database name 
					$tbl_name="about_us"; // Table name 

					// Connect to server and select databse.
					mysql_connect('localhost','root','');
					mysql_select_db($db_name)or die("cannot select DB");

					$query = "select * from about_us";
					$result = mysql_query($query);
					
									 


					while($row = mysql_fetch_array($result)) {
 						
						$a = $row['address'] ;
  						$city=$row['city'] . "</h2> <br>";
						$mobile=$row['mobile'] . "</h2> <br>";
  						$desc=$row['description'] . "</h2> <br>";
				?><div class="span1_of_3_text">
				<span>The Happy Design</span>
				
		
				<p class="para"> 
					<br><b>City</b> : <?php echo $city;?> 
						<b>Address</b> : <?php echo $a;?> 
					 <br><b>Mobile</b> : <?php echo $mobile;?>
						<b>Description</b> : <?php echo $desc;?>
				
				</p>
				
				</div>
				
				</div>
								<div class="clear"></div>
	
			 <?php
}
			 ?>

			</div>
		</div>
</div>
  						
  						
			       		
	       		
	       	</p>
	       	
		
	       
	     	</div>	     
 <div class="cont-grid-img img_style">
	     		<a href="details.html"><img src="images/about_pic.jpg" alt=""></a>
	     	</div>			
	      	<div class="clear"></div>
	    	
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start span_of_4 -->
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>popular post</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<ul class="f_nav1">
					<li class="timer"><a href="#">25-september 2013 </a></li>
				</ul>
				<p class="top">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<ul class="f_nav1">
					<li class="timer"><a href="#">25-september 2013 </a></li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h4>tags</h4>
				<p>It is a long established fact that a reader will be distracted by the<big>readable</big> content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal <big>blog</big> Many desktop publishing packages and web page editors now use Lorem.</p>
			</div>
			<div class="span1_of_4">
				<h4>a little about us</h4>
				<p class="btm">We design your Dream, We Build your dream with our experienced engineers and creative Architects.</p>
				<p></p>

			</div>
			<div class="span1_of_4">
				<h4>get in touch</h4>
				<p class="btm">The Happy Design</p>
				<p class="btm1 pin">Ahmedabad, India</p>
				<p class="btm1 mail"><a href="mailto:info@mycompany.com">info@happydesign.com </a></p>
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