<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ethio-Star Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style9 {font-size: 12px}
.style10 {
	color: #000000;
	font-weight: bold;
}
.style11 {color: #660000}
-->
</style>
</head>

<body>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/logo.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li style="background-color: #590000"><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.html">Contacts</a></li>
			<?php
			if(isset($_COOKIE['logged']))
			echo '<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>';
			else
			echo '<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>';
			?>
		</ul>
		<img src="images/image.jpg" alt="" width="1000" height="311" /><br />
	
</div>
	
	<div id="content2">
		<p>&nbsp;&nbsp;<span class="style9">&nbsp;&nbsp;&nbsp;<span class="style10">You are here:</span> <strong><a href="index.php" class="style10">Home</a> <img src="images/arrow.gif" alt="" /> <span class="style11" >Photogallery</span></strong></span>
		<?php
		if(isset($_COOKIE['logged'])){
		$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ethiostar",$con);
$page=$_COOKIE['page'];
$sql="select password, username, role from accounts where role='$page'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$password=$row[0];
$username=$row[1];
$role=$row[2];
mysql_close($con);


		echo '<img src="images/white.jpg" width="635" height="0"><span class="style10 style9"> Welcome <a href="'; echo $role.".php"; echo'" class="style10">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
		 </p><p>&nbsp;</p>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOW Slider, Fullscreen Gallery jQuery, jQuery Panel Gallery" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->


	<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/bahirdaratnight.jpg" alt="bahir-dar-at-night" title="Bahir Dar At Night" id="wows1_0"/></li>
<li><img src="data1/images/bahirdar18.jpg" alt="Bahir-Dar-18" title="Semahtat" id="wows1_1"/></li>
<li><img src="data1/images/525977_545345602162313_1395065277_n.jpg" alt="525977_545345602162313_1395065277_n" title="The New National Stadium" id="wows1_2"/></li>
<li><img src="data1/images/6582144roundabout_near_hotel_bahir_dar.jpg" alt="6582144-Roundabout_near_hotel_Bahir_Dar" title="Near Ethio-Star Hotel" id="wows1_3"/></li>
<li><img src="data1/images/63171704.jpg" alt="63171704" title="Kitfo" id="wows1_4"/></li>
<li><img src="data1/images/ababa1.jpg" alt="Ababa-1" title="Chef Cooking Fish Gulash" id="wows1_5"/></li>
<li><img src="data1/images/ababa2.jpg" alt="Ababa-2" title="Fish Kotelet" id="wows1_6"/></li>
<li><img src="data1/images/24.jpg" alt="24" title="Doro Wet" id="wows1_7"/></li>
<li><img src="data1/images/beefcasserole.jpg" alt="beef-casserole" title="Beef Casserole" id="wows1_8"/></li>
<li><img src="data1/images/ethiop_bahar_main.jpg" alt="ethiop_bahar_main" title="Tis Abay" id="wows1_9"/></li>
<li><img src="data1/images/ethiopianfood.jpg" alt="ethiopian-food" title="Ethiopian Food" id="wows1_10"/></li>
<li><img src="data1/images/ethiostarhotel.jpg" alt="ethio-star-hotel" title="Ethio-Star Hotel" id="wows1_11"/></li>
<li><img src="data1/images/ethiostarhotelbaher3.jpg" alt="ethiostar-hotel-baher-3" title="Ethio-Star Hotel" id="wows1_12"/></li>
<li><img src="data1/images/fap09.jpg" alt="fap-09" title="Delicious Foods" id="wows1_13"/></li>
<li><img src="data1/images/homlandhotelbedroom.jpg" alt="ES-Hotel-Bedroom" title="Ethio-Star Hotel Bedroom" id="wows1_14"/></li>
<li><img src="data1/images/img_6846.jpg" alt="IMG_6846" title="Cultural Foods" id="wows1_15"/></li>
<li><img src="data1/images/kitfo.jpg" alt="kitfo" title="Kitfo" id="wows1_16"/></li>
<li><img src="data1/images/littleethiopia_cover.jpg" alt="little-ethiopia_cover" title="Ethiopian Cultural Variety Foods" id="wows1_17"/></li>
<li><img src="data1/images/pennepasta_8.jpg" alt="PennePasta (8)" title="Penne Pasta" id="wows1_18"/></li>
<li><img src="data1/images/quens_chefweb.jpg" alt="Quens Chef-WEB" title="Master Chef" id="wows1_19"/></li>
<li><img src="data1/images/tanahotellg.jpg" alt="TanaHotelLg" title="Double Bedroom" id="wows1_20"/></li>
<li><img src="data1/images/test.jpg" alt="test" title="King Bedroom" id="wows1_21"/></li>
<li><img src="data1/images/tibs.jpg" alt="tibs" title="Tibs" id="wows1_22"/></li>
<li><img src="data1/images/tumblr_mc1m2jfdxr1r781pfo1_500.jpg" alt="tumblr_mc1m2jFdXR1r781pfo1_500" title="Delicious Lunch" id="wows1_23"/></li>
<li><img src="data1/images/url.jpg" alt="url" title="Trip On Lake Tana" id="wows1_24"/></li>
<li><img src="data1/images/url3.jpg" alt="url3" title="Unforgatable Dinner" id="wows1_25"/></li>
<li><img src="data1/images/url5.jpg" alt="url5" title="Night Diet" id="wows1_26"/></li>
</ul></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

<br /><br /><br />
	&nbsp;&nbsp;<img src="data1/images/ethiostarhotel.jpg" alt="esh" width="310" height="150" />
	<img src="data1/images/ethiostarhotelbaher3.jpg" alt="ethio" width="310" height="150" />
	<img src="data1/images/bahirdar18.jpg" alt="tis abay" width="310" height="150" /><p>&nbsp;</p>
	&nbsp;&nbsp;<img src="data1/images/homlandhotelbedroom.jpg" alt="bedroom" width="310" height="150" />
	<img src="data1/images/tanahotellg.jpg" alt="trip" width="310" height="150" />
	<img src="data1/images/test.jpg" alt="bed" width="310" height="150" /><p>&nbsp;</p>
	&nbsp;&nbsp;<img src="data1/images/63171704.jpg" alt="food" width="310" height="150" />
	<img src="data1/images/url.jpg" alt="alga" width="310" height="150"/>
	<img src="data1/images/ethiop_bahar_main.jpg" alt="semahtat" width="310" height="150"/><p>&nbsp;</p>
	&nbsp;&nbsp;<img src="data1/images/littleethiopia_cover.jpg" alt="food2" width="310" height="150"/>
	<img src="data1/images/quens_chefweb.jpg" alt="chef" width="310" height="150"/>
	<img src="data1/images/pennepasta_8.jpg" alt="pasta" width="310" height="150"/><p>&nbsp;</p>
	&nbsp;&nbsp;<img src="data1/images/525977_545345602162313_1395065277_n.jpg" alt="stadium" width="310" height="150" />
	<img src="data1/images/6582144roundabout_near_hotel_bahir_dar.jpg" alt="roundabour" width="310" height="150"/>
	<img src="data1/images/bahirdaratnight.jpg" alt="night" width="310" height="150"/>
	
</div>
	
	<div id="footer">
	
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php">About our Hotel</a>|</li>
			<li><a href="photogallery.php" class="style6">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php">Locations</a>|</li>
			<li><a href="contact_us.html">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; Ethio-Star Hotel, Bahir Dar, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information System GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2013</p>
		</div>
	</div>
</body>
</html>
