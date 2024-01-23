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
.style7 {
	font-family: "Adine Kirnberg";
	font-size: 36px;
}
.style8 {
	font-size: 46px;
	font-weight: bold;
}
.style13 {font-size: 12px}
.style14 {
	color: #000000;
	font-weight: bold;
}
.style15 {color: #660000}
-->
</style>
</head>

<body>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/logo.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li style="background-color: #590000"><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<?php
			if(isset($_COOKIE['logged']))
			echo '<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>';
			else
			echo '<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>';
			?>
		</ul>
		<img src="images/image.jpg" alt="" width="1000" height="311" /><br />
	</div>
	<div id="content">
		<div class="inside">
		
		  <div id="sidebar">
		    <span class="style13"><span class="style14">You are here:</span> <strong><a href="index.php" class="style14">Home</a> <img src="images/arrow.gif" width="5" height="10"> <span class="style15">About our hotel</span></strong></span>
		    <div class="block">
			  <div class="block">
					<h4>Our Services</h4>
					<div align="justify"><br>
					  					  &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bar.JPG" alt="bar" width="275" height="185"><br>
					Ethio-Star hotel provides its customers with the highest standard of service and is committed to do that for all its respected guests. In addition to the existing accommodation, we are constructing additional 77 luxury rooms, ballroom and restaurant to meet the ever-growing customer demand. In short, we are here to give you a service for your highest level of satisfaction.<br>
			    Services				
					</div>
					<ul><br>
					  <li> Free shuttle service to and from the airport.</li>
					  <li>  Fast WIFI Internet in every corner.</li>
			          <li>  Complimentary breakfast.</li>
			          <li>24 hours front desk service.</li>
			          <li>Wake up call.</li>
			            <li>Laundry service.</li>
			            <li>Car rental service.</li>
			            <li>Convenient restaurant and bar service.</li>
			            <li>Fast and convenient room service.</li>
			            <li>DSTV and many free channels in each room.</li>
			            <li>Clean rooms with private terrace and quiet surroundings.</li>
			            <li>Delicious meals.</li>
			            <li>Well-trained and very cooperative staff.</li>
			            <li>Very convenient for town taxi service.</li>
			            <li>Free parking</li>
			            <li>First class restaurant with international menu.</li>
						<li>Meeting halls with all required accessories.</li>
			            <li>Buffet Type For the sake of delivering convenient and consistence services, we have got only the first grade catering service which is 154.00 birr for non-fasting buffet and 126.00 birr for fasting buffet which is inclusive of one small water or soft drink.</li>
		        </ul>
			  </div>
		    </div>
			  <p>&nbsp;</p><br>
			  <p class="style7 style8" align="right">Come And Feel</p>
		  </div>
		  
			<div id="center">
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
		echo '<img src="images/white.jpg" width="210" height="0"><span class="style14 style13"> Welcome <a href="'; echo $role.".php"; echo'" class="style14 style13">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
			  <div class="block">
			    
			    <br>
					<h4>Last News</h4>
				  <p><strong>Ethio-Star hotel is now aiming to build a new second branch in Bahir Dar city.</strong> As the manager specifies the new hotel will have so many new features.<br />
				  </p>
				  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <img src="images/Bahir-Dar-10.jpg" alt="around es hotel" width="205" height="124"><br />
				  <br />
			    Ethio-Star hotel provides its customers with the highest standard of service and is committed to do that for all its respected guests. In addition to the existing accommodation, we are constructing additional 77 luxury rooms, ballroom and restaurant to meet the ever-growing customer demand. In short, we are here to give you a service for your highest level of satisfaction.				  </p>
			  </div>
			  <div class="block">
					<h4>Welcome to our hotel</h4>
			    <p><strong>Welcome to Ethio-Star hotel Bahir Dar, Ethiopia. </strong>Our hotel is fabulous and has a good hospitality like no other hotels in the city.                  
			    <p><img src="images/din.jpg" alt="dinner" width="302" height="114"><br>
			        <br>
				    Buffet Type For the sake of delivering convenient and consistence services, we have got only the first grade.
			  </div>
				<p class="style7 style8">Like Home...! </p>
			</div>
			<div id="photogallery">
				<div class="photos">
				<img src="images/photogallery_title.gif" alt="" width="270" height="40" id="title" />
				<a href="#" target="_blank"><img src="images/img1.jpg" alt="" width="158" height="100" /></a>
					<span>Ethio-Star</span>
					<a href="#" target="_blank"><img src="images/img2.jpg" alt="" width="158" height="100" /></a>
					<span>Bahir Dar at night </span>
					<a href="#" target="_blank"><img src="images/img3.jpg" alt="" width="158" height="100" /></a>
					<span>City center </span>
					
					<a href="#" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>				</div>
				<img src="images/end.gif" alt="" width="270" height="60" />
			</div>
		</div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php" class="style6">About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php">Locations</a>|</li>
			<li><a href="contact_us.php">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; Ethio-Star Hotel, Bahir Dar, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information System GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2013</p>
		</div>
	</div>
</body>
</html>
