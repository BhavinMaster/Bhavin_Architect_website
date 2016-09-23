<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Webworld-v2 Website Template | Services :: w3layouts</title>
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
</head>
<body>

<?php
include("mysqlconnect.php");



$sql="select * from project_table";
$query=mysql_query($sql);


/*while($row=mysql_fetch_array($query))
{
 echo "<div><img src=".$row['images_path']." /></div>";
}*/

/*while($row=mysql_fetch_array($query))
{
$image=$row ['images_path'];

echo '<img src="'.$image.'" width="360" height="150">';

}*/

?>



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
				<li><a href="index.html">Projects</a></li>
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
		<h2>our Projects</h2>
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
<div class="main">
		<!-- start span_of_3 -->
		<div class="span_of_3" style="width:100%;">
        <style>
		
		</style>
        <?php
			$i= 1;
       		
			while($row=mysql_fetch_array($query))
			{
				// echo "<div><img src='.$row['images_path'].' /></div>";
				if(($i % 3) == 0){
				
					$class = "right";
				
				}else{
					$class = "";
				}
				$new = "photo/".$row['path']."";
				echo "<div class='span1_of_3 ".$class."' >
					<a href='details.php?id=". $row["id"] ."'>
					
						<img alt='project image' src='". $new."' height='400' width='200'>
					
					</a>
		
					<div class='span1_of_3_text'>
						<h3><a href='details.php?id=". $row["id"] ."'>".$row['project_name']."</a></h3>
					
					</div>
								
				<div class='ser_btn'>
					<a class='button  ser_btn1' href='details.php?id=". $row["id"] ."'>read more</a>
				</div>
			  
			</div>"; $i++;
			 }
			?>
        <div class="clear"></div>
		</div>
		<!--  -->
		<div class="span_of_3">
		  <div class="clear"></div>
	</div>
		<!-- end grids_of_3 -->
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
				<p class="btm1 pin">Ahmedabad,India</p>
				<p class="btm1 mail"><a href="mailto:info@mycompany.com">info@hcom </a></p>
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