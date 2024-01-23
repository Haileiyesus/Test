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

<script type="text/javascript">
imageArray = new Array("images/white.jpg", "images/rooms3.JPG", "images/rooms4.JPG", "images/rooms.JPG");
altArray = new Array("white", "Single", "Twin", "Family"); 
function changeTest () { 
var Index = document.menuForm.select1.options[document.menuForm.select1.selectedIndex].value; 
document.testStar.src = imageArray[Index]; document.testStar.alt = altArray[Index]; 
} 
</script>
</head>

<body>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/logo.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.html">About our Hotel</a></li>
			<li><a href="photogallery.html">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.html">Locations</a></li>
			<li><a href="contact_us.html">Contacts</a></li>
			<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/image.jpg" alt="" width="1000" height="311" /><br />
</div>
	<div id="content">
		<div class="inside">
		
		  <div id="sidebar2">
		    <div class="block style14"></div>
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <a href="login.php" class="style14">Login</a> <span class="style16"><img src="images/arrow.gif"> Sign up </span></span>
			<p>&nbsp;</p>
			<p><span class="style10"><img src="images/white.jpg" width="217" height="7" style="float:left">Register for a membership  here:</span></p>
			<img src="images/white.jpg" width="217" height="7" style="float:left">
			<table width="224" >
			<form  action="" method="post" name="menuForm">
			
  <tr >
    <td width="61"><span class="style20">First Name: </span></td>
    <td align="left" width="147"><input name="fname" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Last Name: </span></td>
    <td align="left"><input name="lname" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Age: </span></td>
    <td align="left"><input name="age" type="text" size="5"></td>
  </tr>
  <tr>
    <td><span class="style20">Sex: </span></td>
    <td align="left"><input name="radio" type="radio"> Male  &nbsp;&nbsp;
    <input name="radio" type="radio"> Female</td>
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
    <td><span class="style20">Email:</span></td>
    <td align="left"><input name="email" type="text" ></td>
  </tr>
 
  <tr>
    <td colspan="2">
	  <span class="style20">
	  <?php
ob_start();
session_start();
if(!isset($_POST['submit'])){
	
	echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
	echo "<tr><td>Type The Letters You See Below</td></tr>\n";
	echo "<tr><td align='left'><image src='captcha.php'></td></tr>\n";
	echo "<tr><td align='left'><input size='24' type='text' name='image'></td></tr>\n";
	echo "</table>\n";
}else {
	$image = $_POST['image'];
	if($image == $_SESSION['string']){
		echo "<b>Great sucess!</b>\n";
		}else {
			echo "<em>Failure!</em>\n";
			   }
}
ob_end_flush();			   
?>
	  </span> </td>
      </tr>
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="reserve" type="submit" value="Register">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input name="Input" type="reset">	   
	    </span></td>
	  </tr>
	   </form>
</table>
			
		    <p align="center" class="style7 style8 style9">Come And Feel Like Home </p>
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
			<li><a href="about_us.html" >About our Hotel</a>|</li>
			<li><a href="photogallery.html">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.html">Locations</a>|</li>
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
