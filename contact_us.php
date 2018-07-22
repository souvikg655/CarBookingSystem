<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="shortcut icon" href="Car_Pic/honda_BRV.jpg" />
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
	<link rel="stylesheet" type="text/css" href="CSS/contact_us.css">
</head>

<script language="Javascript" type="text/javascript">
	function validate(){
		if (document.contact_us.username.value=="") {
			alert("Enter Your Name.");
			return false;
		}
		if (document.contact_us.email.value=="") {
			alert("Enter Your email.");
			return false;
		}
		if (document.contact_us.emailmessage.value=="") {
			alert("Enter Your Commant.");
			return false;
		}
		
	}
</script>

<body bgcolor="gray">
<?php 
include('header.php');
?>

<div>
	<h1 class="contact">CONTACT</h1>
</div>
<p class="print_dot">........................................................................................................................................................................................................................................................</p>
<h2 class="help">We'd &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; to&nbsp;&nbsp; help!</h2>
<img class="love" src="Car_Pic/love.svg" height="30px" width="30px" />
<h4 class="travel">We like to create something with travel</h4>

<form action="contact_us_db.php" method="POST" name="contact_us" onsubmit="return validate();">
	<input class="namebox" type="text" name="username" placeholder=" Enter Your Name">
	<input class="emailbox" type="text" name="email" placeholder=" happyjourney123@gmail.com">
	<textarea class="messagetext" name="emailmessage" placeholder="Enter text here......."></textarea>
	<button class="blankbutton" > </button>
	<input class="submit" type="submit" name="submit" value="Send">
</form>

<img class="location_logo" src="Car_Pic/location.png" height="40px" width="20px" />
<h4 class="happyjourney">Happy Journey</h4>
<h4 class="location">West Bengal, Barasat, Kol-700124</h4>

<img class="phone_logo" src="Car_Pic/call3.png" height="40px" width="20px" />
<h4 class="mob_no">8158031244</h4>

<img class="email_logo" src="Car_Pic/email.png" height="40px" width="20px" />
<h4 class="email_id">happyjourney123@gmail.com</h4>
<p class="draw_line">.....................................................................................................................</p>



</body>
</html>