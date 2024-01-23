<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ethio-Star Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 16px;
	font-weight: bold;
}
.style3 {color: #006600}
.style5 {font-size: 12px}
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style8 {color: #000000}
.style11 {font-size: 12px; font-weight: bold; }
.style12 {color: #660000}
.style14 {color: #000000; font-weight: bold; }
-->
</style>
</head>

<body>
<?php
if(isset($_GET['logged']))
{
setcookie("logged","",time()-1);
setcookie("page","",time()-1);
Header("location:index.php");
}
?>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/logo.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home!</span>
		<ul id="menu">
			<li style="background-color: #590000"><a href="index.php">Home</a></li>
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
		<div class="inside">&nbsp;&nbsp;&nbsp; <span class="style11"><span class="style8">You are here</span>: <span class="style12">Home</span></span>
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


		echo '<img src="images/white.jpg" width="675" height="1"><span align="right" class="style8 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style8 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
		  <script language="JavaScript">
var clockID = 0;
function UpdateClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
   var tDate = new Date();

   document.theClock.theTime.value = "" 
                                   + tDate.getHours() + ":" 
                                   + tDate.getMinutes() + ":" 
                                   + tDate.getSeconds();
   clockID = setTimeout("UpdateClock()", 1000);
}
function StartClock() {
   clockID = setTimeout("UpdateClock()", 500);
}
function KillClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
}
</script>
<!--</head>--><br><br>
<body onload="StartClock()" onunload="KillClock()">
<form name="theClock">&nbsp;
<img src="images/white.jpg" width="65"><?php
		echo "Today is: ".date("l")." ".date("jS")." of ".date("F")." 20".date("y");
		?>
 <input type=text name="theTime" size=8 style="text-align: center" readonly="true">
 

</form>
<!--</body>-->
		  
		  <div id="sidebar">
				<div class="order">
					<form action="index.php" method="post">
						<h3>Reservation</h3>
						<table width="239" cellpadding="0" cellspacing="0">
							<tr>
								<td class="first">
								
	
								
									Arrival Date<br />
							
									<select name="month">
										<option selected="selected">January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
								</td>
								<td class="second"><br />
									<select class="year">
									
	<script language="javascript">
	for (i = 2013; i < 	2026; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									
										
									</select>
									<select class="date">
	<script language="javascript">
	j=32
		
	for (i = 1; i < 	j; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									</select>
								</td>
							</tr>
							<tr>
								<td class="first">
									Nights<br />
									<select>
											<script language="javascript">
	j=32
		
	for (i = 1; i < 	j; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									</select>
								</td>
								<td class="third">
									Rooms<br />
									<select>
											<script language="javascript">
	j=11
		
	for (i = 1; i < 	j; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									</select>
								</td>
							</tr>
							<tr>
								<td class="first">
									Adults<br />
									<select>
										<option>1</option>
									</select>
								</td>
								<td class="third">
									Children<br />
									<select>
										<option>1</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="reset"><a href="#">RESET</a></td>
							</tr>
						</table>
						
						<div class="button">
					<div align="left"><a href="reservation.php?mon="><img src="images/button.gif" alt="" width="134" height="21" /></a></div>
					 <div align="left"><br><a href="update_reservation.php"><img src="images/update.jpg" alt="" width="134" height="21" /></a></div>
				          <div align="left"><br><a href="cancel_reservation.php"><img src="images/cancel.jpg" alt="cancel reservation" width="134" height="21"></a>
					      </div>
						</div>																																																																																																												
					</form>
						</form>
						
					
				</div>
			<div class="block">
					<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locations</h4>
					<p>Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.</p>
					
					<br />
				
			</div>
				<span class="style2 style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Click and stay on the map to</span> <span class="style3">Zoom in</span></span>      <img  src="images/map.bmp" width="304" height="207" onclick="this.width=820;this.height=486;" onmouseout="this.width=304;this.height=207" />	
					  </div>
			<div id="center">				
				<div class="block">
					<h4>Last News</h4>
					<p>Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.<br /> Sed condimentum, libero sed cursus dapibus, libero enim feugiat tellus, vitae accumsan elit neque et purus. Cras aliquet consectetuer risus. Ut wisi. Etiam nec nisl placerat enim imperdiet dignissim. Maecenas sit amet nunc vel ligula tempor cursus. Sed faucibus faucibus eros. Praesent pharetra wisi ut sem. Morbi dignissim pulvinar dui. </p>
					<a href="#" class="more">more info</a>
				</div>
				<div class="block">
					<h4>Welcome to our hotel</h4>
					<p><strong>Magna a luctus lacinia, sem Lorem</strong> vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam.<br /> Sed condimentum, libero sed cursus dapibus, libero enim feugiat tellus, vitae accumsan elit neque et purus. Cras aliquet consectetuer risus. Ut wisi. Etiam nec nisl placerat enim imperdiet dignissim. Maecenas sit amet nunc vel ligula tempor cursus. Sed faucibus faucibus eros. Magna a luctus lacinia, sem Lorem vestibulum neque ac onsectetuer Donec fermentum varius erat. Sed sit amet tellus. Duis tristique, lacus vel nonummy lobortis, nibh massa dapibus diam a viverra augue ipsum et diam. </p>
				</div>
				<div class="block">
					<h4>Our Services</h4>
					<p>Etiam felis mauris, mattis sed, dapibus sit amet, elementum at, sapien. Pellentesque eu mi. Vestibulum imperdiet, sem tristique tempus cursus, lacus lectus aliquet lorem, accumsan accumsan arcu velit ac mauris. Quisque et libero. Pellentesque ac pede commodo tortor gravida eleifend. Aliquam interdum velit tristique est. Aliquam pellentesque ultrices ante. Praesent sit amet purus eget velit hendrerit dignissim. Nunc eu libero blandit diam vehicula elementum. Vestibulum mauris elit, porta sit amet, eleifend a, cursus in, sem. Nunc tempus, nunc in convallis porttitor, sapien libero lobortis arcu, eget viverra metus massa a neque. Etiam egestas magna sed sem. </p>
					<p>Nunc feugiat, quam at sagittis commodo, lacus magna congue justo, eget viverra neque risus quis risus. Etiam placerat elit at ligula. Praesent hendrerit augue vitae lorem. Pellentesque dignissim, eros eget sodales.</p>
					<a href="#" class="more">more info about our services</a>
				</div>
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
					<a href="#" target="_blank"><img src="images/img4.jpg" alt="" width="158" height="100" /></a>
					<span>Cultural foods </span>
					<a href="#" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>				</div>
				<img src="images/end.gif" alt="" width="270" height="60" />
			</div>
	  </div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php" class="style6">Home</a>|</li>
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
