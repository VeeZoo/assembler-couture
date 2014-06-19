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
<title>Assembler Couture | About Us</title>
<link rel="icon" type="image/png" href="favicon.png">
<!--css-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="css/lessframework.css"/>
<link rel="stylesheet" media="all" href="css/ddsmoothmenu.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyphoto.css">

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
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<!---prettyPhoto... do you like????-->
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
<div id="nav">
    	 <div class="ddsmoothmenu1">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a>
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
                <li><a href="about.php" >About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li style="float:right;"><a href="cart.php" style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
				</ul>
            </div>
            </div>
         </div> 
</div> 
		 
    <div class="wrapper cf" style="margin-top:127px;">
  	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/TerribleTees160x600.png" /><br>Advertisement.</a>
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
	        		
	        	<!-- entry-content -->	
	        	<div class="entry-content cf">
	        	
					<!-- 2 Columns to change it up -->
					<div class="one-half">
						<h4 class="heading">The Ultimate Fashion Destination Station</h4>
						We are the champs who design clothes for champions, losers dont buy our stuff so prove what you are. Massively awesome of successfully good-looking chic person or the sadly and disappointing "cool" guy aka (constipated, overated, overhated, douche) :).
					</div>
					
					<div class="one-half last">
						<h4 class="heading">We Are #00FF00 </h4>
						In case you do not know the lingo, I was saying we are green. We sponsor $3 for every piece of clothing you buy to the PlantTree Foundation. They plant trees all over the world and if you do buy actively you will get an email with locations as to where you can plant them. 
					</div>
					<div class="clearfix"></div>				
					
					<!-- 3 cols -->
					<div class="one-third">
						<h4 class="heading">Creation</h4>
						We began this year 2014, the big 2...0...1...4, sounded better in my head, but it is a huge mark on the digital realm of online shopping. Ever expanding are small companies taking over their larger competitors through specialization, mobilization, and localization. Act big, think big, achieve big. Our loyalty to our customers is #1 with a premium product that we even put a warranty on. Shirt isnt holding up? We will fix you up with a lesser value and take your trade-in...say what you paid $30 for your shirt and we will give you a new shirt of value of $25...yep we are that good. 
					</div>
					
					<div class="one-third">
						<h4 class="heading">Obviously JIT</h4>
						You may pay for quick shipping and that works, we are a company operating on the Just-In-Time method requiring actual transaction to go through before creating the product, we do have stock but the shelves keep emptying :(...:). We are actively maintaining a factory in Canada to support the Canadian market. 
					</div>
					
					<div class="one-third last">
						<h4 class="heading">Have a trade-in</h4>
						If you currently shopped before on our site no problem. Simply take a picture and hashtag the problem attached to it. We will take a look at your shirt and send you a promo code. Lightning fast as in hours or even minutes. We are 24/7 so we do like to keep ourselves accessable all the time. 
					</div>
					<div class="clearfix"></div>
					
				
										
				</div>
				<!-- ENDS entry-content -->	
    		</div>
    		<!-- ENDS page content-->
			
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
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