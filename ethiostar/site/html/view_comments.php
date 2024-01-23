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
	font-size: 16px;
	color: #000000;
}
.style8 {
	font-size: 12px;
	font-weight: bold;
}
.style9 {color: #000000}
.style10 {color: #660000}
.style12 {
	color: #000000;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php 
$sel="All";
?>
  <?php 
if(isset($_POST['search'])){
$sel=$_POST['catagory'];
}
?>
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
		<img src="images/testimonial_img.jpg" alt="" width="985" height="303" /><div style="height:9px"></div>
		
	</div>
<div id="content">&nbsp;<span class="style9">&nbsp;<span class="style8">You are here:</span></span><span class="style8"> <a href="index.php" class="style9">Home</a> <img src="images/arrow.gif" width="5" height="10"> <a href="Manager.html" class="style9" >Manager</a><span class="style10"> <img src="images/arrow.gif" width="5" height="10"> View Comments </span></span>
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
		echo '<img src="images/white.jpg" width="570" height="0"><span class="style9 style8"> Welcome <a href="'; echo $role.".php"; echo'" class="style9 style8">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
		  
		  <?php
			if(isset($_COOKIE['logged']) && $_COOKIE['page']=="manager")
			{
  echo'<div align="center">
  <p><br>
</p>
	  <span class="style7">View comment here<br>
    </span>
<p style="float:left">&nbsp;&nbsp;<img src="images/white.jpg" width="215"></p> 

<table width="333" style="float:left" >
  <form name="form1" method="post" action="">
    <tr>
    <td colspan="2"><span class="style12">Comments</span></td>
  </tr>
  <tr>';?>
    <td width="80">Select Catagory </td>
    <td width="241"><select name="catagory" id="cat">
	<option value="All" <?php if($sel=="All") echo "selected";?>>All</option>
	<option value="Males" <?php if($sel=="Males") echo "selected";?>>Males</option>
	<option value="Females" <?php if($sel=="Females") echo "selected";?>>Females</option>
	<option value="Local Visitors" <?php if($sel=="Local Visitors") echo "selected";?>>Local Visitors</option>
	<option value="Forign Visitors" <?php if($sel=="Forign Visitors") echo "selected";?>>Forign Visitors</option>
	<option value="Choosens" <?php if($sel=="Choosens") echo "selected";?>>Choosens</option>
	</select><input name="search" type="submit" value="Search"></td>
 <?php echo'</tr>';?>
  <?php 
  $local=213;
if(isset($_POST['search'])){
$con = mysql_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("ethiostar",$con);
if($_POST['catagory']=="All"){
$sql="select * from testimonials";}
if($_POST['catagory']=="Males"){
$sql="select * from testimonials where sex = 'Male'";}
if($_POST['catagory']=="Females"){
$sql="select * from testimonials where sex = 'Female'";}
if($_POST['catagory']=="Local Visitors"){
$sql="select * from testimonials where ip = '$local'";}
if($_POST['catagory']=="Forign Visitors"){
$sql="select * from testimonials where ip != '$local'";}
if($_POST['catagory']=="Choosens"){
$sql="select * from testimonials where status = 'Choosen'";}
$result = mysql_query($sql,$con);
If(!$result)
	die("unable to query:");
	echo'  <tr>
    <td>Total Results </td>
    <td><input name="total_results" type="text" size="6" value="'; echo mysql_num_rows($result); echo'" readonly="readonly"></td>
  </tr>';
while($row=mysql_fetch_row($result)){
$name=$row[0];
$sex=$row[1];
$age=$row[2];
$job=$row[3];
$picture=$row[4];
$feedback=$row[5];
$status=$row[6];
echo "<tr><td colspan ='2'><img src='images/white.jpg' width='25'><input name='name2' size='20' type='text' value='";echo $row[0]; echo"' readonly='true'>&nbsp;&nbsp;<img src='images/check3.png' width='20' height='20' onClick='abc(\"$name\",\"$sex\",\"$age\",\"$job\",\"$picture\",\"$feedback\",\"$status\")'> Detail</td></tr>";
}
mysql_close($con);
}
?>
   </form>
	   <script type="text/javascript">
	   function abc(name,sex,age,job,picture,feedback,status){
        document.getElementById('name').value = name;
        document.getElementById('sex').value = sex;
        document.getElementById('age').value = age;
        document.getElementById('job').value = job;
        document.picture.src = picture;
        document.getElementById('feedback').value = feedback;
		if(status=="Choosen"){
		document.form2.accept.disabled = true;
		}
		else{
		document.form2.accept.disabled = false;
		}
		document.form2.delete2.disabled = false;
	}
		</script>
<?php echo'</table>

<table width="326" style="float:left" >
  <form name="form2" method="post" action="">
    <tr>
    <td colspan="2"><span class="style12">Result detail </span></td>
     </tr>
    <tr>
    <td width="53">Name </td>
    <td width="261"><input name="name" type="text" id="name" readonly="true"></td>
  </tr>
  <tr>
    <td>Sex</td>
    <td><input name="sex" type="text" id="sex"  readonly="true"></td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input name="age" type="text" id="age"  readonly="true"></td>
  </tr>
  <tr>
    <td>Job</td>
    <td><input name="job" type="text" id="job"  readonly="true"></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td><img border="5" src="" width="120" height="150" alt="Photo" id="picture">
      &nbsp;</td>
  </tr>
  <tr>
    <td>Feedback</td>
    <td><textarea name="feedback" cols="25" rows="4" resize="none" style="resize:none" id="feedback" readonly="true"></textarea>      &nbsp;</td>
  </tr>
  	  <tr><td></td><td colspan="3"><input name="accept" type="submit" value="Accept"><img src="images/white.jpg" width="30"><input name="delete2" type="submit" value="Delete"></td></tr>
   </form>
</table>';?>
		<script type="text/javascript">
		nm="<?php echo $_POST['name'];?>";
		</script>
		<?php
		if(isset($_POST['delete2']))
		{
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect");
		mysql_select_db("ethiostar",$con);
        $name=$_POST['name'];
        $age=$_POST['age'];
        $job=$_POST['job'];
		$sql="delete from testimonials where name='$name' && age='$age' && job='$job'";
		$result=mysql_query($sql);
		if(!$result)
		die(mysql_error());
		echo '<script language="javascript">
		alert("Comment from "+nm+" deleted sucessfully!");</script>';
		mysql_close($con);
		}
		?>	  

		<?php
		if(isset($_POST['accept']))
		{
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect");
		mysql_select_db("ethiostar",$con);
        $name=$_POST['name'];
        $age=$_POST['age'];
        $job=$_POST['job'];
		$sql="update testimonials set status='Choosen' where name='$name' && age='$age' && job='$job'";
		$result=mysql_query($sql);
		if(!$result)
		die(mysql_error());
		echo '<script language="javascript">
		alert("Comment from "+nm+" is accepted!");</script>';
		mysql_close($con);
		}
		?>	  


	  		<script type="text/javascript">		 
		document.form2.accept.disabled = true;
		document.form2.delete2.disabled = true;
        </script>
<?php echo'
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
		  <p><span>Copyright &copy; Ethio-Star Hotel, Bahir Dar, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information System GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2013</p>
		</div>
	</div>
	</body>
</html>