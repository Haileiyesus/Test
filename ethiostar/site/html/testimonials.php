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
.style21 {color: red;}
.style22 {color: #009900;
	      font-size: 14px;}
-->
</style>

<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>
</head>

<body>
<?php 
 $check=0;
 $ip = getenv("REMOTE_ADDR");
 //$ip = $_SERVER['SERVER_ADDR'];
 $ip = (float)$ip;
?>
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
$user=$_COOKIE['logged'];
$sql="select password, username, role from accounts where username='$user'";
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
    <table width="450" style="float:left">
  <form name="form1" method="post" action="" enctype="multipart/form-data">
  <?php 
  	$name="";
	$sex="Female";
	$age="";
	$job="";
	$feedback="";
	
	if(isset($_POST['send']))
	{
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$job=$_POST['job'];
	$feedback=$_POST['feedback'];
	$target_path=$_FILES['file']['name'];
    }

  ?>
    <tr>
    <td width="44" col>Your Name </td>
    <td width="299" colspan="2"><input name="name" type="text" value="<?php echo $name; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['name'])||strlen($_POST['name'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid name</span>";
				}
				if($_POST['name']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your name</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td>Sex</td>
    <td><input name="sex" type="radio" value="Male" <?php if($sex=="Male") echo 'checked="checked"'; ?>> Male <input name="sex" type="radio" value="Female"  <?php if($sex=="Female") echo 'checked="checked"'; ?>> Female</td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input name="age" type="text" size="8" value="<?php echo $age; ?>">
	 <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['age'])||$_POST['age']>=130||$_POST['age']<0 )
				{
				$check+=1;
				echo "<span class='style21'>Not a valid age</span>";
				}
			}
	 ?>
	</td>
  </tr>
  <tr>
    <td>Job</td>
    <td><input name="job" type="text" value="<?php echo $job; ?>">
	 <?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['job'])||strlen($_POST['job'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid job</span>";
				}
				if($_POST['job']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter your job</span>";
				}
				}
				?>
	</td>
  </tr>
  <tr>
    <td>Photo</td>
    <td><input type="file" name="file" id="file" />
	<?php 
			if(isset($_POST['send']))
			{				
				if($target_path=="")
				{
				$check+=1;
				echo "<span class='style21'>Please choose a picture</span>";
				}
				}
				?>
	</td>
  </tr>
  <tr>
    <td>Feedback</td>
    <td><textarea name="feedback" cols="20" rows="4" style="resize:none" onKeyDown="limitText(this,this.form.countdown,450);" 
onKeyUp="limitText(this,this.form.countdown,450);"><?php echo $feedback; ?></textarea><br>
<font size="1">(Maximum characters: 450)<br>
You have <input readonly type="text" name="countdown" size="3" value="450"> characters left.</font>

	<?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['feedback'])||strlen($_POST['feedback'])>1000)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid comment</span>";
				}
				if($_POST['feedback']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please leave your comment</span>";
				}
				}
				?>
   </td>
  </tr>
  <tr align="left"><td colspan="2" align="left">
  <?php	  
ob_start();
session_start();
	echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
	echo "<tr><td>Type The Letters You See Below</td></tr>\n";
	echo "<tr><td align='left'><image src='captcha.php'></td></tr>\n";
	echo "<tr><td align='left'><input size='24' type='text' name='image'></td>
	</tr>\n";
	echo "</table>\n";
ob_end_flush();
?>
<?php
				if(isset($_POST['send']))
			{
	$image = $_POST["image"];
	if($image != $_SESSION["string"])
	{
	$check+=1;
		echo "<span class='style21'>Please enter the code correctly</span>";
	}
	}
	if(isset($_POST['send']) && $check==0)
			{
$target_path="../html/images/comments/";
$target_path=$target_path.$_FILES['file']['name'];
if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
}
else
{
echo "there was an error uploading the file, pleas try again";
}
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$job=$_POST['job'];
	$picture=$target_path;
	$feedback=$_POST['feedback'];
$con=mysql_connect("localhost","root","");
if(!$con)
die("unable to connect");
mysql_select_db("ethiostar",$con);
$sql="insert into testimonials values('$name','$sex','$age','$job','$picture','$feedback','','$ip')";
$result=mysql_query($sql);
if($result)
{
echo"<span class='style22'>Thank you for giving us a comment!</span>";
}
mysql_close($con);

			}
	?>
</tr>


  <tr align="center">
   
    <td height="41" colspan="2" align="left"><img src="images/white.jpg" width="70"><input name="send" type="submit" value="send">&nbsp;&nbsp;&nbsp;<input name="reset" type="submit" value="Reset"></td>
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
