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
.style21 {color: red;}
.style22 {color: green;}

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
<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount) {
	if (limitField.value.length <= 3) {
		limitCount.value = "Can't Be";		
		document.getElementById("countdown").style.borderColor= "red";
		document.getElementById("countdown").style.color= "red";
		src="images/error.jpg";
		document.getElementById("imgs").src=src;

	}
	 else if(limitField.value.length <= 6) {
		limitCount.value = "Poor";
		document.getElementById("countdown").style.borderColor= "orange";
		document.getElementById("countdown").style.color= "darkred";
		src="images/poor.jpg";
		document.getElementById("imgs").src=src;
	}
	else if(limitField.value.length <= 9) {
		limitCount.value = "Medium";
		document.getElementById("countdown").style.borderColor= "yellow";
		document.getElementById("countdown").style.color= "orange";
		src="images/medium.jpg";
		document.getElementById("imgs").src=src;
	}
	else if(limitField.value.length <= 15) {
		limitCount.value = "Strong";
		document.getElementById("countdown").style.borderColor= "green";
		document.getElementById("countdown").style.color= "green";
		src="images/strong.jpg";
		document.getElementById("imgs").src=src;
	}
	else{
		limitCount.value = "Can't Be";
		document.getElementById("countdown").style.borderColor= "red";
		document.getElementById("countdown").style.color= "red";
		src="images/error.jpg";
		document.getElementById("imgs").src=src;
	}
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
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <a href="login.php" class="style14">Login</a> <span class="style16"><img src="images/arrow.gif"> Sign up </span></span>
			<p>&nbsp;</p>
			<?php
			if(isset($_COOKIE['logged']))
			{
			Header("location:".$_COOKIE['page'].".php");
			}
			else{
			echo'<p><span class="style10"><img src="images/white.jpg" width="217" height="7" style="float:left">Register for a membership  here:</span>            </p>
			<img src="images/white.jpg" width="217" height="7" style="float:left">
			<table width="338" height="60" border="0">
			
  <tr >
    <form  action="" method="post" name="menuForm">';?>
<?php //form values here
$first="";
$last="";
$age="";
$sex="Female";
$city="";
$state="";
$country="";
$telephone="";
$email="";
$username="";
if(isset($_POST['register']))
{
$first=$_POST['fname'];
$last=$_POST['lname'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
}
?>
			<?php
			$check=0;
			echo'<tr>
    <td width="61"><span class="style20">First Name: </span></td>
    <td align="left" width="150"><input name="fname" type="text" value="';?><?php echo $first; ?><?php echo'"></td><td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['fname'])||strlen($_POST['fname'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid name</span>";
				}
				if($_POST['fname']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your first name</span>";
				}
				}
				?>
<?php				
  echo'</tr>
  <tr>
    <td><span class="style20">Last Name: </span></td>
    <td align="left"><input name="lname" type="text" value="';?><?php echo $last; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['lname'])||strlen($_POST['lname'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid name</span>";
				}
				if($_POST['lname']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your last name</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">Age: </span></td>
    <td align="left"><input name="age" type="text" size="5" value="';?><?php echo $age; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(!is_numeric($_POST['age'])||$_POST['age']>=130||$_POST['age']<0 )
				{
				$check+=1;
				echo "<span class='style21'>Not a valid age</span>";
				}
				}
				?>
	
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">Sex: </span></td>
    <td align="left"><input name="sex" type="radio" value="Male"';?> <?php if($sex=="Male") echo 'checked="checked"'; ?> <?php echo'> Male  &nbsp;&nbsp;
    <input name="sex" type="radio" value="Female"';?> <?php if($sex=="Female") echo 'checked="checked"'; ?> <?php echo'> Female</td>
  </tr>
  <tr>
    <td><span class="style20">City:</span></td>
    <td align="left"><input name="city" type="text" value="';?><?php echo $city; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['city'])||strlen($_POST['city'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid city</span>";
				}
				if($_POST['city']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your city</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">State/Province:</span></td>
    <td align="left"><input name="state" type="text" value="';?><?php echo $state; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['state'])||strlen($_POST['state'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid state/province</span>";
				}
				if($_POST['state']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your state/province</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">Country:</span></td>
    <td align="left"><input name="country" type="text" value="';?><?php echo $country; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['country'])||strlen($_POST['country'])>30)
				{
				$check+=1;

				echo "<span class='style21'>Not a valid country</span>";
				}
				if($_POST['country']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your country</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">Telephone:</span></td>
    <td align="left"><input name="telephone" type="text" value="';?><?php echo $telephone; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if($_POST['telephone']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your telephone</span>";
				}
				else if(!is_numeric($_POST['telephone'])||strlen($_POST['telephone'])<9)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid telephone no.</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
   <tr>
    <td><span class="style20">Email:</span></td>
    <td align="left"><input name="email" type="text" value="';?><?php echo $email; ?><?php echo'"></td>
	<td>';?>
<?php
	if(isset($_POST['register']))
			{
$email = $_POST['email']; 
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (preg_match($regex, $email)) {
} 
else if($email=="" || $email==" ")
{
$check+=1;
	echo "<span class='style21'>Please enter your e-mail address</span>";
}
else if(strlen($_POST['email'])>50){
$check+=1;
	echo "<span class='style21'>Email is too long</span>";
}
else { 
$check+=1;
     echo "<span class='style21'>". $email . " is an invalid email. Please try again.</span>";
} 
}
?> 
	<?php echo'</td>
  </tr>
    <tr>
    <td><span class="style20">Username:</span></td>
    <td align="left"><input name="username" type="text" value="';?><?php echo $username; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ethiostar",$con);
$first=$_POST['fname'];
$last=$_POST['lname'];
$regUser=$_POST['username'];
$sql="select  username from accounts where username='$regUser'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$alreadyUser=$row[0];
mysql_close($con);
				if(is_numeric($_POST['username'])||strlen($_POST['username'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid username</span>";
				}
				if($_POST['username']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please write a new username</span>";
				}
				else if($regUser==$alreadyUser){
				$check+=1;
				echo "<span class='style21'>Username already taken.</span><br>Try:<br><span class='style22'><strong>".$regUser.".".$first."</strong> or <strong>".$regUser.".".$last.date("Y")."</strong> or <strong>".$regUser."_".$last."</strong></span>";		
				}
								else{
				echo'<img src="images/check3.png" width="30" height="30">';}
				}
				?>
	<?php echo'</td>
  </tr>
    <tr>
    <td><span class="style20">Password:</span></td>
    <td align="left"><input name="password" type="password" onKeyDown="limitText(this,this.form.countdown);" 
onKeyUp="limitText(this,this.form.countdown);"><input disabled type="text" name="countdown" id="countdown" size="8" value="">&nbsp;<img src="" height="12" id="imgs"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(strlen($_POST['password'])>15)
				{
				$check+=1;

				echo "<span class='style21'>Password can not be morethan 15 characters.</span>";
				}
				if($_POST['password']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter a password</span>";
				}
				else if(strlen($_POST['password'])<4)
				{
				$check+=1;

				echo "<span class='style21'>Minimum characters for a password is 4.</span>";
				}

				}
				?>
	<?php echo'</td>
  </tr>
      <tr>
    <td><span class="style20">Confirm password:</span></td>
    <td align="left"><input name="re-password" type="password"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if($_POST['re-password']!==$_POST['password'])
				{
				$check+=1;

				echo "<span class='style21'>Password mismatch.</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>';
?>
  <tr>
    <td colspan="3">
	  <span class="style20">
<?php	  
ob_start();
session_start();
	echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
	echo "<tr><td>Type The Letters You See Below</td></tr>\n";
	echo "<tr><td align='left'><image src='captcha.php'></td></tr>\n";
	echo "<tr><td align='left'><input size='24' type='text' name='image'></td>
	<td>";?>
	<?php
				if(isset($_POST['register']))
			{
	$image = $_POST["image"];
	if($image != $_SESSION["string"])
	{
	$check+=1;
		echo "<span class='style21'>Please enter the code correctly</span>";
	}
	}
	?>
	<?php echo"</td>
	</tr>\n";
	echo "</table>\n";
ob_end_flush();
?>
<?php			   
echo'
	  </span> </td>
      </tr>
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="register" type="submit" value="Register">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input name="Input" type="reset">	   
	    </span></td>
	  </tr>';
	  ?>
	  <?php
	  if(isset($_POST['register'])&&$check==0)
	{
$password=md5($password);
$con=mysql_connect("localhost","root","");
if(!$con)
die("unable to connect");
mysql_select_db("ethiostar",$con);
$sql="insert into members values('$username','$first','$last','$age','$sex','$city','$state','$country','$telephone','$email')";
$sql2="insert into accounts values('$username','$password','index','offline')";
$result2=mysql_query($sql2);
$result=mysql_query($sql);
if($result && $result2)
{
setcookie("logged",$username,time()+21600);
setcookie("page","index",time()+21600);
echo '<script language="javascript">
var username="';?><?php echo $username; ?><?php echo'";
alert("Thank you "+username+", you register sucessfully!");
window.location.href ="index.php";</script>';

}
mysql_close($con);}
	?>
	<?php echo'</form>
	   
</table>

	  </tr>
</table>
			
		    <p align="center" class="style7 style8 style9">Come And Feel Like Home </p>
		  </div>';}?>
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
