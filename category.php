<?php
session_start();
$cartNum = '0';
if(isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		$cartNum += $v;
	}
}
?>

<!DOCTYPE html>
<html>
<!-- 
	"Assembler Couture"
	CST COMP199 Q3 2014
	Luke Booth, Matthew Marzitelli, Victoria Zou
-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assembler Couture | Catalogue</title>
<meta name="description" content="Fashion Destination Station" />
<link rel="icon" type="image/png" href="favicon.png">

<!--css-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="css/lessframework.css"/>
<link rel="stylesheet" media="all" href="css/ddsmoothmenu.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyphoto.css"/>

<!--js--> 
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<!--added this for greying menu options -->
<style type="text/css">
.ddsmoothmenu li a.current {
   
    color:white;  
}

</style>

 <!---menu-->
<script type="text/javascript" src="js/jquery_005.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
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
       <!--The Assembler -->
        <div class="cleaner"></div>
    
</div>    
<div id="nav">
    	 <div class="ddsmoothmenu1">
    	    <div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" >Home</a>
                </li>
                <li><a href="category.php?cat=1&gen=Mens" >Mens</a>
                    <ul>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Shirt" >Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Mens&sub=Pants" >Pants</a></li>                        
                  </ul>
                <li><a href="category.php?cat=1&gen=Womens" >Womens</a>
                	<ul>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Shirt" >Shirts</a></li>
                        <li><a href="category.php?cat=2&gen=Womens&sub=Pants" >Pants</a></li>                        
                  </ul>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li style="float:right;"><a href="cart.php" style="padding: 11px 20px 9px;"><?php echo "<span style='margin-top: -10px;'>($cartNum)</span>"; ?><img src='images/cart.png'></a></li>               
		</ul>
            </div>
            </div>
         </div>
</div>
    <div class="wrapper cf" style="margin-top:127px;">
  
	<a href="index.php" style="border: solid black 1px; position:fixed; left: 0;"><img src="images/CaffeFantastico160x600.png" /><br>Advertisement.</a>
	<a href="index.php" style="border: solid black 1px; position:fixed; right: 0;"><img src="images/TerribleTees160x600.png" /><br>Advertisement.</a>          
            <div id="combo-holder">
            
<select id="comboNav" style="float:left; clear:left;">
<option value="" selected="selected">Navigation</option>
<option value="index.php">HOME</option>
<option value="category.php?cat=1&gen=Mens">WOMENS</option>
<option value="category.php?cat=1&gen=Womens">MENS</option>
<option value="about.php">ABOUT</option>
<option value="contact.php">CONTACT</option></select>
</div>

    <div id="templatemo_main">
    		
	<?php

		//Extract the query string values 
		$catnum = $_GET['cat'];
		$gender = $_GET['gen'];

		// Connect to the MySQL server using linked login/pw
		require ("../../comp199login.php");
		
		// Error if cannot connect
		if (!$LinkID) {
			die('Could not connect: ' . mysql_error());
		}

		// Choose the database
		mysql_select_db("c199grp05", $LinkID);
		
		//Query DB for the appropriate products
		if($catnum == 1) {
			$result1 = mysql_query("
				SELECT product_id, prod_gender, prod_style, prod_thumb, prod_name
				FROM fashion_products JOIN product_info
				USING (prod_style)
				WHERE prod_gender = '$gender'
				GROUP BY prod_thumb
			",$LinkID);
		} else { //Different Query if there are shirt/pant sub-cat selected
			$subcat = $_GET['sub'];
			$result1 = mysql_query("
				SELECT product_id, prod_gender, prod_style, prod_thumb, prod_name
				FROM fashion_products JOIN product_info
				USING (prod_style)
				WHERE prod_gender = '$gender' 
				AND prod_type = '$subcat'
				GROUP BY prod_thumb
			",$LinkID);
		}

		// Show error if applicable
		echo mysql_error($LinkID);
		
		//Set up Arrays to extract product info
		$piclist = Array();
		$itemlist = Array();

		//Loop to extract product info and append them to the appropriate arrays
		while ($row = mysql_fetch_assoc($result1)) {
			$piclist[] = $row['prod_thumb'];
			$itemlist[] = $row['prod_name'];
		}

		//For each product, print display it's info
		for($i = 0; $i < count($itemlist); ++$i) {
			echo "<div style='width: 280px; height=320px; display:inline-block;'>";
			echo "<a href='product.php?id=$piclist[$i]'><img src='images/$piclist[$i].png' /></a><br>";
			echo "$itemlist[$i]<br>";
			echo "</div>";
			
		}
	?>
    </div>
	</div>
       <div id="templatemo_footer100">  
			<div class="wrapper cf"> 
      
			<a id="gotop" href="#top"><img src="images/backtotop.png" alt="go to top"></a>
     <!--footer start -->

  <!-- made this for potential bonus marks??????-->
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