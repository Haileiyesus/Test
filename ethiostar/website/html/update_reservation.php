<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ethio-Star Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--

.style7 {
	font-family: "Adine Kirnberg";
	font-size: 36px;
}
.style8 {
	font-size: 46px;
	font-weight: bold;
}
.style9 {
	font-size: 36px;
	color: #990000;
}
.style10 {
	font-size: 18px;
	color: #000000;
}
.style11 {
	font-size: 12px;
	font-weight: bold;
}
.style14 {color: #000000}
.style15 {font-size: 12px; font-weight: bold; color: #000000; }
.style16 {color: #660000}
.style20 {font-size: 12; color: #000000; }
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
		  
		    <div class="block style14"></div>
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <span class="style16">Update reservation</span></span>
			<p>&nbsp;</p>
			<p><span class="style10">Update reservation here:</span></p>
			<table width="264" >
			<form  action="" method="post" name="menuForm">
  <tr >
    <td colspan="2"><input name="fname2" type="text" value="Enter name to search room..." onClick="value=''" size="26"><input name="search" type="submit" value="Search"></td>
  
  </tr>		
  <tr >
    <td width="73"><span class="style20">First Name: </span></td>
    <td align="left" width="179"><input name="fname" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Last Name: </span></td>
    <td align="left"><input name="lname" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Age: </span></td>
    <td align="left"><input name="age" type="text" size="6"></td>
  </tr>
  <tr>
    <td><span class="style20">Sex: </span></td>
    <td align="left"><input name="sex" type="text" size="9" ></td>
  </tr>
  <tr>
    <td><span class="style20">City:</span></td>
    <td align="left"><input name="city" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">State/Province:</span></td>
    <td align="left"><input name="state" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Country:</span></td>
    <td align="left"><input name="country" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Telephone:</span></td>
    <td align="left"><input name="telephone" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Share With:</span></td>
    <td align="left"><input name="share_with" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Arrival Date:</span></td>
    <td align="left"><input name="arr_date" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Departure Date:</span></td>
    <td align="left"><input name="dep_date" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Room Preferences: </span></td>
    <td align="left"><input name="preferences" type="text" ></td>
  </tr>
  
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="update" type="submit" value="Update Reservation">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input name="Input" type="reset">	   
	    </span></td>
	  </tr>
	   </form>
</table>
		    <p><a href="reservation.php"><img src="images/new.jpg" alt="" width="134" height="21" border="0"></a></p>
			 <p><a href="cancel_reservation.php"><br><img src="images/cancel.jpg" alt="" width="134" height="21" border="0"></a></p>
		    <p align="right" class="style7 style8 style9">Come And Feel Like Home </p>
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
		echo '<img src="images/white.jpg" width="210" height="0"><span class="style14 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style14 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
				<img src="images/white.jpg"><br>
		  <span class="style15">Results:</span><br>
		  <div style="border: double"><br /><br /><br />
		  <br />
		  <br /><br /></div>	  
		  </div>
			<div id="photogallery">
				<div class="photos"><a href="#" target="_blank"><img src="images/img1.jpg" alt="" width="158" height="100" /></a>
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
			<li><a href="about_us.php" >About our Hotel</a>|</li>
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
