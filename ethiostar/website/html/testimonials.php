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
	font-size: 16px;
	color: #000000;
}
.style8 {
	font-size: 12px;
	font-weight: bold;
}
.style9 {color: #000000}
.style10 {color: #660000}
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
			<li style="background-color: #590000"><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<?php
			if(isset($_COOKIE['logged']))
			echo '<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>';
			else
			echo '<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>';
			?>
	  </ul>
		<img src="images/testimonial_img.jpg" alt="" width="985" height="303" /><div style="height:9px"></div>
		
	</div>
<div id="content">&nbsp;<span class="style9">&nbsp;<span class="style8">You are here:</span></span><span class="style8"> <a href="index.php" class="style9">Home</a> <img src="images/arrow.gif" width="5" height="10"><span class="style10"> Testimonials</span></span>
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


		echo '<img src="images/white.jpg" width="630" height="1"><span align="right" class="style8 style9"> Welcome <a href="'; echo $role.".php"; echo'" class="style8 style9">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
  <div align="center">
<p><img src="images/Testimonial-1.jpg" alt="testimonials" width="697" height="354"><br>
      <img src="images/Testimonial-22.jpg" alt="testimonials" width="697" height="268"></p>
	  <span class="style7">Leave your comment here<br><br></span>
      <p style="float:left">&nbsp;&nbsp;<img src="images/white.jpg" width="220"></p>
	  <img src="images/Capture.PNG" alt="image" style="float:left"><img style="float:left" src="images/white.jpg" width="50">
    <table width="299" style="float:left">
  <form name="form1" method="post" action="">
    <tr>
    <td width="88">Your Name </td>
    <td width="195"><input name="name" type="text"></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><input name="title" type="text"></td>
  </tr>
  <tr>
    <td>Job</td>
    <td><input name="job" type="text"></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td><img border="5" src="" width="109" height="81" alt="Your Photo">
      &nbsp;
      <input name="Input" type="button" value="Browse"></td>
  </tr>
  <tr>
    <td>Feedback</td>
    <td><textarea name="feedback" cols="20" rows="4" resize="none" style="resize:none"></textarea>      &nbsp;</td>
  </tr>
  <tr><td colspan="2" align="center">
  <?php
ob_start();
session_start();
if(!isset($_POST['submit'])){
	echo "<form method=\"post\" action=\"captcha.php\">\n";
	echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
	echo "<tr><td>Type The Letters You See Below</td></tr>\n";
	echo "<tr><td align='left'><image src='captcha.php'></td></tr>\n";
	echo "<tr><td align='left'><input size='24' type='text' name='image'></td></tr>\n";
	echo "</table></form>\n";
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
  </td></tr>
  <tr>
   
    <td align="center" colspan="2"><input name="send" type="submit" value="send">&nbsp;&nbsp;&nbsp;<input name="reset" type="submit" value="Reset"></td>
  </tr>
  </form>
</table>
</div>
</div>

	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php">About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php" class="style6">Testimonials</a>|</li>
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
