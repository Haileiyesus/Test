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
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/image.jpg" alt="" width="1000" height="311" /><br />
</div>
	<div id="content">
		<div class="inside">
		
		  <div id="sidebar2">
		    <div class="block style14"></div>
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"><span class="style16"> Login </span></span>
			<p>&nbsp;</p><br>
			<?php
			if(isset($_COOKIE['logged']))
			{
			Header("location:".$_COOKIE['page'].".php");
			}
			else{
			echo'	<p><span class="style10"><img src="images/white.jpg" width="217" height="7" style="float:left">Login  here:</span></p>
			<img src="images/white.jpg" width="217" height="7" style="float:left">
			<table width="205">
			<form  action="'; echo $_SERVER["PHP_SELF"]; echo'" method="post" name="menuForm">
			<tr><td colspan="2" align="center">';
	if(isset($_GET["msg"]))
	echo '<span style="color:red">Sorry, wrong username or password</span>';
	echo'</td></tr>
  <tr >
    <td width="53"><span class="style20">Username: </span></td>
    <td align="left" width="257"><input name="username" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Password: </span></td>
    <td align="left" ><input name="password" type="password" >
  </tr>
 
 
 
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="login" type="submit" value="Login">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="register.php" class="style15" >Not a member yet?</a> </td>
	  </tr>
	   </form>';
	 
	   if(isset($_POST["login"]))
	   {
$user=$_POST["username"];
$pass=$_POST["password"];
$conn=mysql_connect("localhost","root","");
if(!$conn)
die("unable to connect ".mysql_error());
$db=mysql_select_db("ethiostar",$conn);
if(!$db)
die("unable to find database ".mysql_error());
$sql="select * from accounts where username='$user'";
$result=mysql_query($sql);
if(!$result)
die("unable to process query ".mysql_error());
$row=mysql_fetch_row($result);
$username=$row[0];
$password=$row[1];
if($pass===$password){
setcookie("logged",$username,time()+21600);
setcookie("page",$row[2],time()+21600);
Header("location:".$row[2].".php");

}
else
Header("location:?msg=wrg");
echo "";
mysql_close($conn);

	   }
	
echo'</table>
			
		    <p align="center" class="style7 style8 style9">Come And Feel Like Home </p>
		  </div>';}
		  ?>
		  <div id="photogallery">
				<div class="photos"><a href="#" target="_blank"><img src="images/img1.jpg" alt="" width="158" height="100" /></a>
					<span>Ethio-Star</span>
					<a href="#" target="_blank"><img src="images/img2.jpg" alt="" width="158" height="100" /></a>
					<span>Bahir Dar at night </span>
			</div>
			</div>
		</div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php">About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php">Locations</a>|</li>
			<li><a href="contact_us.php">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; Ethio-Star Hotel, Bahir Dar, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information System GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
		  <p>&nbsp;</p>
		  <p>2013</p>
		</div>
	</div>
</body>
</html>
