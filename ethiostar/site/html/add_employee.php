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
function changeTest () { 
var yr=<?php echo date("y"); ?>;
var Index = document.menuForm.catagory.options[document.menuForm.catagory.selectedIndex].value;
if (Index=="Other...") {
document.menuForm.other.disabled = false;
document.menuForm.other.value = "";
document.menuForm.emp_id.value = "";
}
if (Index=="receptionist") {
document.menuForm.emp_id.value = "Rcpt/"+yr+"/";
document.menuForm.other.disabled = true;
document.menuForm.other.value = "Other job title...";
}
if (Index=="manager") {
document.menuForm.emp_id.value = "Mngr/"+yr+"/";
document.menuForm.other.disabled = true;
document.menuForm.other.value = "Other job title...";
}
if (Index=="payroll_clerk") {
document.menuForm.emp_id.value = "Payr/"+yr+"/";
document.menuForm.other.disabled = true;
document.menuForm.other.value = "Other job title...";
}
if (Index=="casher") {
document.menuForm.emp_id.value = "Cash/"+yr+"/";
document.menuForm.other.disabled = true;
document.menuForm.other.value = "Other job title...";
}
if (Index=="system_admin") {
document.menuForm.emp_id.value = "Sysa/"+yr+"/";
document.menuForm.other.disabled = true;
document.menuForm.other.value = "Other job title...";
}
}
function changeTest2 () {
var yy = document.getElementById('yy').value;
var currnet_year=<?php echo date("Y"); ?>;
var age = currnet_year - yy;
document.getElementById('age').value = age;
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
			<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/image.jpg" alt="" width="1000" height="311" /><br />
</div>
	<div id="content">
		<div class="inside">
		
		  <div id="sidebar2">
		    <div class="block style14"></div>
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <a href="system_admin.php" class="style14">System Admin</a> <span class="style16"><img src="images/arrow.gif"> Add Employee </span></span>
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
		echo '<img src="images/white.jpg" width="225" height="0"><span class="style14 style15"> Welcome <a href="'; echo $role.".php"; echo'" class="style14 style15">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
			<p>&nbsp;</p>
			<?php
			if(isset($_COOKIE['logged']) && $_COOKIE['page']=="system_admin")
			{
			echo'<p><span class="style10"><img src="images/white.jpg" width="217" height="7" style="float:left">Register a new employee here:</span>            </p>
			<img src="images/white.jpg" width="217" height="7" style="float:left">
			<table width="360" height="60" border="0">		
  			<tr>
    <form  action="" method="post" name="menuForm" enctype="multipart/form-data">';?>
<?php //form values here
$first="";
$last="";
$age="";
$dd="";
$mm="";
$yy="";
$emp_id="Rcpt/".date("y")."/";
$salary="";
$start_date=date("d")."/".date("m")."/".date("Y");
$sex="Female";
$city="";
$state="";
$country="Ethiopian";
$telephone="";
$email="";
$username="";
$target_path="";
$sel="receptionist";
$oth="Other job title...";
if(isset($_POST['register']))
{
$first=$_POST['fname'];
$last=$_POST['lname'];
$age=$_POST['age'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$emp_id=$_POST['emp_id'];
$salary=$_POST['salary'];
$start_date=$_POST['start_date'];
$sex=$_POST['sex'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$sel=$_POST['catagory'];
$target_path=$_FILES['file']['name'];
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
    <td><span class="style20">Job Title: </span></td>
    <td align="left">';?>
	<select name="catagory" id="catagory" onChange="changeTest()">
	<option value="receptionist" <?php if($sel=="receptionist") echo "selected";?>>Receptionist</option>
	<option value="manager" <?php if($sel=="manager") echo "selected";?>>Manager</option>
	<option value="payroll_clerk" <?php if($sel=="payroll_clerk") echo "selected";?>>Payroll Clerk</option>
	<option value="casher" <?php if($sel=="casher") echo "selected";?>>Casher</option>
	<option value="system_admin" <?php if($sel=="system_admin") echo "selected";?>>System Admin</option>
	<option value="Other..." <?php if($sel=="Other...") echo "selected";?>>Other...</option>
	</select><br><br><input name="other" type="text" disabled="disabled" value="<?php echo $oth;?>">
	<?php echo'</td>
	<td>';?>
	<?php 
			if(isset($_POST['register']) && $_POST['catagory']=="Other...")
			{
				if(is_numeric($_POST['other']))
				{
				$check+=1;
				echo "<span class='style21'>Unknown job title</span>";
				}
				if($_POST['other']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter a job title</span>";
				}
   				echo'<script language="javascript" type="text/javascript">
				document.menuForm.other.disabled = false;
				document.menuForm.other.value = "";
				</script>';
				}
				?>
	<?php echo'</td>
  </tr>
        <tr>
    <td><span class="style20">Employee ID: </span></td>
    <td align="left"><input name="emp_id" type="text" value="';?><?php echo $emp_id; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['emp_id'])||strlen($_POST['emp_id'])<9)
				{
				$check+=1;
				echo "<span class='style21'>Please enter a correct employee ID</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
      <tr>
    <td><span class="style20">Salary: </span></td>
    <td align="left"><input name="salary" id="salary" type="text" size="10" value="';?><?php echo $salary; ?><?php echo'"> in Eth. Birr</td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(!is_numeric($_POST['salary'])||$_POST['salary']<0 )
				{
				$check+=1;
				echo "<span class='style21'>Not a valid salary</span>";
				}
				}
				?>
	
	<?php echo'</td>
  </tr>
          <tr>
    <td><span class="style20">Start Date: </span></td>
    <td align="left"><input name="start_date" type="text" readonly="true" value="';?><?php echo $start_date; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(is_numeric($_POST['start_date'])||strlen($_POST['start_date'])>10)
				{
				$check+=1;
				echo "<span class='style21'>Please enter a correct date</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
<tr>
    <td><span class="style20">Date of birth: </span></td>
    <td align="left">DD <input name="dd" id="dd" type="text" size="1" value="';?><?php echo $dd; ?><?php echo'">
	MM <input name="mm" id="mm" type="text" size="1" value="';?><?php echo $mm; ?><?php echo'">
	YY <input name="yy" id="yy" type="text" size="3" value="';?><?php echo $yy; ?><?php echo'" onKeyDown="changeTest2()" onKeyUp="changeTest2()"></td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(!is_numeric($_POST['dd'])||$_POST['dd']>=32||$_POST['dd']<0 )
				{
				$check+=1;
				echo "<span class='style21'>Not a valid day </span>";
				echo '<script type="text/javascript">document.getElementById("dd").style.borderColor= "red";</script>';
				}
				if(!is_numeric($_POST['mm'])||$_POST['mm']>=13||$_POST['mm']<0 )
				{
				$check+=1;
				echo "<span class='style21'>Not a valid month </span>";
				echo '<script type="text/javascript">document.getElementById("mm").style.borderColor= "red";</script>';
				}
				if(!is_numeric($_POST['yy'])||strlen($_POST['yy'])>=5||$_POST['yy']<1900||$_POST['yy']>=date("Y")-15)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid year </span>";
				echo '<script type="text/javascript">document.getElementById("yy").style.borderColor= "red";</script>';
				}
				}
				?>
	
	<?php echo'</td>
  </tr>
    <tr>
    <td><span class="style20">Age: </span></td>
    <td align="left"><input name="age" id="age" type="text" readonly="true" size="3" value="';?><?php echo $age; ?><?php echo'"> Years old</td>
	<td>';?>
	<?php 
			if(isset($_POST['register']))
			{
				if(!is_numeric($_POST['age'])||$_POST['age']>=130 )
				{
				$check+=1;
				echo "<span class='style21'>Not a valid age </span>";
				}
				if($_POST['age']<=15)
				{
				$check+=1;
				echo "<span class='style21'>Age must be > 15 </span>";
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
    <td><span class="style20">Nationality:</span></td>
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
	</td>
  </tr>
    <tr>
    <td><span class="style20">Photo</span></td>
    <td colspan="2"><input name="file" type="file" id="file">
	<?php
	if(isset($_POST['register']))
			{				
				if($target_path=="")
				{
				$check+=1;
				echo "<span class='style21'>Please choose a picture</span>";
				}
				} 
				echo'</td>
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
$target_path="../html/images/employees/";
$target_path=$target_path.$_FILES['file']['name'];
if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
}
else
{
echo "There was an error uploading the file, pleas try again";
}
	
$password=md5($password);
$dob=$dd."/".$mm."/".$yy;
if($_POST['catagory']=="Other..."){
$sel="index";}
$con=mysql_connect("localhost","root","");
if(!$con)
die("unable to connect");
mysql_select_db("ethiostar",$con);
$sql="insert into employees values('$emp_id','$username','$first','$last','$salary','$start_date','$dob','$age','$sex','$city','$state','$country','$telephone','$email','$sel','$target_path')";
$sql2="insert into accounts values('$username','$password','$sel','offline')";
$result2=mysql_query($sql2);
$result=mysql_query($sql);
if($_POST['catagory']=="Other..."){
$sel=$_POST['other'];}
if($result && $result2)
{
echo '<script language="javascript">
var name="';?><?php echo $first; ?><?php echo'";
var title="';?><?php echo $sel; ?><?php echo'";
alert("You sucessfully hire "+name+" in "+title+" position!");
window.location.href ="add_employee.php";
</script>';

}
mysql_close($con);}
	?>
	<?php echo'</form>
	   
</table>

	  </tr>
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
	</div>';}
		  else{
		  if($_COOKIE['page']==""){
		  Header("location:index.php");
		  }
		  else{
		  Header("location:".$_COOKIE['page'].".php");
			}
			}
			?>
</body>
</html>
