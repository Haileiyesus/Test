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
.style22 {
	color: #009900;
	font-size: 13px;
}
.style21 {
	color: red;
}
.style23 {
	font-size: 11px;
	color: #660000;
}

-->
</style>

<script type="text/javascript">
imageArray = new Array("images/family.JPG", "images/single.JPG", "images/twin.JPG","images/white.jpg");
altArray = new Array("Family", "Single", "Twin","white"); 
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
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <span class="style16">Room reservation</span></span>
			<p>&nbsp;</p>
			<p><span class="style10">Reserve here:</span></p>
<table width="224" border="0" style="color:#000000">
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="menuForm">
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
$share_with="";
$arr_date="";
$dep_date="";
$sel="";
if(isset($_POST['reserve'])||isset($_POST['check_room']))
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
$share_with=$_POST['share_with'];
$arr_date=$_POST['arr_date'];
$dep_date=$_POST['dep_date'];
$sel=$_POST['select1'];
$res_id=$_POST['id'];
}
?>
			<?php
			$check=0;
			echo'
  <tr >
    <td width="61"><span class="style20">First Name: </span></td>
    <td align="left" width="200"><input name="fname" type="text" value="';?><?php echo $first; ?><?php echo'"></td><td>';?>
	<?php 
			if(isset($_POST['reserve']))
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
			if(isset($_POST['reserve']))
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
			if(isset($_POST['reserve']))
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
			if(isset($_POST['reserve']))
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
			if(isset($_POST['reserve']))
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
			if(isset($_POST['reserve']))
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
			if(isset($_POST['reserve']))
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
	if(isset($_POST['reserve']))
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
    <td><span class="style20">Share With:</span></td>
    <td align="left"><input name="share_with" type="text" value="';?><?php echo $share_with; ?><?php echo'"></td>
	<td>';?>
	<?php 
			if(isset($_POST['reserve']))
			{
				if(is_numeric($_POST['share_with'])||strlen($_POST['share_with'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid name</span>";
				}
				
				}
				?>
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">Arrival Date:</span></td>
    <td align="left" colspan="3" width="200">
	<script src="php_calendar/scripts.js" type="text/javascript"></script>
<input type="text" name="arr_date" id="date" readonly="true" value="';?><?php echo $arr_date; ?><?php echo'"/>
<a href="javascript:viewcalendar()">Calendar</a>';?>
	<?php 
			if(isset($_POST['reserve']))
			{
				
				if($_POST['arr_date']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please pick date</span>";
				}
				}
				?>
	<?php echo'</td>
  </tr>
  <tr>
    <td><span class="style20">Departure Date:</span></td>
    <td align="left" colspan="2">
	<input type="text" name="dep_date" id="date2" readonly="true" value="';?><?php echo $dep_date; ?><?php echo'"/>
<a href="javascript:viewcalendar2()">Calendar</a>';?>
	<?php 
			if(isset($_POST['reserve']))
			{
				
				if($_POST['dep_date']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please pick date</span>";
				}
				}
				?>
	<?php echo'	</td>
  </tr>
  <tr>
    <td><span class="style20">Room Preferences: </span></td>
    <td align="left">
          <select id="select1" onchange="changeTest()" name="select1">
            <option value="3">Choose a room type...</option>
            <option value="1"';?><?php if($sel=="1") echo "selected";?>
			
			<?php echo'>Single</option>
            <option value="2"';?><?php if($sel=="2") echo "selected";?>
			
			<?php echo'>Twin</option>
            <option value="0"';?><?php if($sel=="0") echo "selected";?>
			
			<?php echo'>Family</option>
          </select>
        	</td>
			<td><input name="check_room" type="submit" value="Check Availability"></td>
  </tr>
   <tr>
    <td><span class="style20">Reservation ID:</span></td>
    <td align="left">';

	function randomString($length){
	$chars = "abcdefghijkmnopqrstuvwxyz0123456789";
	srand((double)microtime()*1000000);
	$str = "";
	$i=0;
		
		while($i <= $length){
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$str = $str . $tmp;
			$i++;
		}
	return $str;
}
$string = randomString(rand(7,7));

?>
	<input name="id" type="text" readonly="true" value= "<?php echo $string ?>" >&nbsp;</td>
 </tr>
  <tr>
    <td colspan="2">
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
				if(isset($_POST['reserve']))
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
	    <input name="reserve" type="submit" value="Reserve">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input name="Input" type="reset">	   
	    </span></td>
	  </tr>';
	  ?>
	  <?php
	  if(isset($_POST['reserve'])&&$check==0)
	{
if($sel=="0")$pref="Family";else if($sel=="1")$pref="Single";else if($sel=="2")	$pref="Twin";

$con=mysql_connect("localhost","root","");
if(!$con)
die("unable to connect");
mysql_select_db("ethiostar",$con);
$sql="insert into reservation values('$first','$last','$age','$sex','$city','$state','$country','$telephone','$email','$share_with','$arr_date','$dep_date','$pref','$res_id')";
$result=mysql_query($sql);
if($result)
{
echo"<span class='style22'>You reserve sucessfully, Thank you!</span>";
}
mysql_close($con);}
	?>
	   </form>
	   
</table>
			<p><br><a href="update_reservation.php"><img src="images/update.jpg" alt="" width="134" height="21" border="0"></a></p>
		    <p><a href="cancel_reservation.php"><br><img src="images/cancel.jpg" alt="cancel reservation" width="134" height="21" border="0" ></a></p>
		    <p align="right" class="style7 style8 style9"><br>Come And Feel Like Home </p>
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
		echo '<img src="images/white.jpg" width="210" height="0"><span class="style14 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style14 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
				<p> 
				<?php 

				if(isset($_POST['check_room'])){
				$preference=$_POST['select1'];
				 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ethiostar",$con);
if(isset($_COOKIE['logged'])){
$sql="select room_no,room_type,discount,detail from rooms where floor_no = $preference && status = 'free'";			
}
else{
$sql="select room_no,room_type,price,detail from rooms where floor_no = $preference && status = 'free'";}
$result = mysql_query($sql,$con);
If(!$result)
	die("unable to query:");
	echo "<span class='style11'><caption>Room Results</caption></span><table border='1'><tr class='style15'><th>Room No.</th><th>Room Type</th><th>Price</th><th>Room Detail</th></tr>";
while($row=mysql_fetch_row($result)){
echo "<tr class='style23'>";
	for($i=0;$i<count($row);$i++){
		echo "<td>$row[$i]</td>";
		}
		echo "</tr>";
	 }
	 echo "</table></span>"; 	
mysql_close($con);


				}
				
				?>
				
				
				<?php
						 if(isset($_COOKIE['logged'])){
			echo"<br><span class='style22'>Congraduation!!!, you got a discont on every rooms price.</span><br>";}

			if(isset($_POST['reserve'])||isset($_POST['check_room']))
	        {
				if(isset($_POST['select1']))
				{
				  if($sel==0)
				  echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/family.jpg"  border="0" name="testStar"></img>';
				  else if($sel==1)
				  echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/single.jpg"  border="0" name="testStar"></img>';
				  else if($sel==2)
				  echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/twin.jpg"  border="0" name="testStar"></img>';
				  else
			      echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/white.jpg"  border="0" name="testStar"></img>';
				}
				else
			    echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/white.jpg"  border="0" name="testStar"></img>';
			}	
				else
			echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/white.jpg"  border="0" name="testStar"></img>';
				?>
				<br>
			</p>

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
