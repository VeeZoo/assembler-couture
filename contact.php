<?php
session_start();
$cartNum = '0';
if(isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		$cartNum += $v;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assembler Couture | Contact</title>
<meta name="description" content="Best fashion designs" />
<link rel="icon" type="image/png" href="favicon.png">
<!--css-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="css/lessframework.css"/>
<link rel="stylesheet" media="all" href="css/ddsmoothmenu.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="css/comments.css">
<!--js--> 
    

<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

 
  
 <!---menu-->

<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV box
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<!---prettyPhoto-->
 <script type="text/javascript" src="js/jquery_004.js"></script>
 
<script type="text/javascript">
	$(function(){
		$("a[class^='prettyPhoto']").prettyPhoto({theme:'pp_default'});
	});
	</script>         


 
</head>

<body>
<div style="position:fixed; top: 0; clear:both; width:100%; z-index:10000;">




	<div id="templatemo_header"></div>
     <div class="wrapper cf">
    	<div id="site_title"><h1><a href="index.php"><img src='images/aclogo.png'></a></h1></div>
       
        <div class="cleaner"></div>
    
</div>


   
   
    <!-- END of header -->
       <div id="nav">
    	 <div class="ddsmoothmenu1">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" >Home</a>
                </li>
                <li><a href="category.php?cat=1&gen=Mens" id="category1">Mens</a>
                    <ul>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Shirt" >Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Pants" >Pants</a></li>                        
                  </ul>
                <li><a href="category.php?cat=1&gen=Womens" id="category2">Womens</a>
                	<ul>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Shirt">Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Pants">Pants</a></li>                        
                  </ul>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" >Contact Us</a></li>
                <li style="float:right;"><a href="cart.php" style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
				</ul>
            </div>
            </div>
         </div>
</div> 
     <!-- start of ddsmoothmenu -->
    
    <div class="wrapper cf" style="margin-top:127px;">
	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/CaffeFantastico160x600.png" /><br>Advertisement.</a>
	<a href="index.php" style="border: solid black 1px; position:fixed; right: 0;"><img src="images/AssemblerCouture160x600.png" /><br>Advertisement.</a>  
          
            <div id="combo-holder">
<select id="comboNav">
<option value="" selected="selected">Navigation</option>
<option value="index.php">HOME</option>
<option value="category.php?cat=1&gen=Mens">WOMENS</option>
<option value="category.php?cat=1&gen=Womens">MENS</option>
<option value="about.php">ABOUT</option>
<option value="contact.php">CONTACT</option></select>
</div>
        
       </div>
<div class="wrapper cf">
    <div id="templatemo_main">
   <!-- page content-->
        	<div id="page-content" class="cf">
            
	<!-- Map 
				<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" /></script>
				<script type="text/javascript">
					function initialize() {
						var latlng = new google.maps.LatLng(x,x)
						;
						var myOptions = {
						  zoom: 8,
						  center: latlng,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("map_canvas"),
					    myOptions);
					}
				</script> -->
				
	<div id="map-holder">
		<div id="map_canvas" style="margin: 0 auto; padding: 2px;" >
			<iframe src="https://maps.google.ca/maps?q=4461+Interurban+Road,+Victoria,+BC,+V9E+2C1&amp;ie=UTF8&amp;hl=en&amp;hq=&amp;hnear=4461+Interurban+Rd,+Victoria,+British+Columbia+V9E+2C1&amp;ll=48.491725,-123.416412&amp;spn=0.016639,0.042272&amp;t=m&amp;z=14&amp;output=embed" frameborder="0" height="295" width="1000"></iframe>
		</div>
		<div id="map-content">
			<p><h3>LOCATION</h3></p>
	        	
			<p>We are currently a digital business located out of Victoria throwing the best clothing on your backs. It is a delight when we see our logo because every piece of clothing sold donates $3 to the PlantTree Foundation.</p>
		</div>
	</div>
	<!-- Ends the map -->
				
				
				<p><h3>CONTACT FORM</h3></p>
				<p>Use this contact form to get in touch with us.</p>
				<!-- form -->
				<script type="text/javascript" src="js/form-validation.js"></script>
				<form id="contactForm" action="#" method="post">
					<fieldset>
														
						<p>
							<label for="name" >Name</label>
							<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
						</p>
						
						<p>
							<label for="email" >Email</label>
							<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
						</p>
						
						<p>
							<label for="web">Website</label>
							<input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
						</p>
						
						<p>
							<label for="comments">Message</label>
							<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
						</p>
						
						<!-- send mail configuration -->
						<input type="hidden" value="imon.theme@gmail.com" name="to" id="to" />
						<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
						<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
						<!-- ENDS send mail configuration -->
						
						<p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
					</fieldset>
					
				</form>
				<!-- Ends the form -->				
				
    	
										
				</div>
				<!-- Ends the entry-content -->	
    		</div>
    		<!-- Ends the page content-->
			
			</div>
			
			</div><!-- Ends the Wrapper-->
		</div>
		<!-- Ends the main -->
	
       <div id="templatemo_footer100">  
      <div class="wrapper cf"> 
      
      <a id="gotop" href="#top"><img src="images/backtotop.png" alt=""></a>
     <!--footer start -->

  
 <div id="social">

   <div class="social-networks"> 
 <ul class="social-networks">
          <li class="icon-facebook"><a href="https://www.facebook.com/pages/Assembler-Couture/280640215431007">Facebook</a></li>
          <li class="icon-twitter"><a href="https://twitter.com/AssemblrCouture">Twitter</a></li>
          <li class="icon-dribbble"><a href="http://www.pinterest.com/assemblerc/">Pinterest</a></li>
          <li class="icon-linkedin"><a href="http://www.linkedin.com/pub/assembler-couture/95/846/350">LinkedIn</a></li>
          <li class="icon-flickr"><a href="https://plus.google.com/u/0/117112216953014306929">Google+</a></li>
         
        </ul>
        </div>
        </div>
        <div id="footer">

			<p ><a href="index.php"> Home</a> / 
				<a href="category.php?cat=1&gen=Mens">Mens</a> / 
				<a href="category.php?cat=1&gen=Womens">Womens</a> / 
				<a href="contact.php">Contact</a> / 
				<a href="about.php">About</a> /
				<a href="staff.php">Staff Login</a>
			<a style="padding-left:40px"></a></p>

        </div>
        </div>
 </div>
</body>
</html> 