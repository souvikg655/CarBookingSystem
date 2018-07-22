<!DOCTYPE html>
<html>
<head>
	<title>User_Registration</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>

<script language="Javascript" type="text/javascript">
	function reg(){

		if (document.reg_form.username.value=="") {
			alert("Enter Your Name.");
			return false;
		}
		if (document.reg_form.email.value=="") {
			alert("Enter Your E-mail Id.");
			return false;
		}
		if (document.reg_form.mobnumber.value=="") {
			alert("Enter Your Mobile Number.......");
			return false;
		}
		if (document.reg_form.pass.value=="") {
			alert("Enter Your Password.......");
			return false;
		}
	}
</script>

<body bgcolor="gray">
<div id='cssmenu'>
<ul>
	<li><img title="Web Logo" style="cursor: pointer;" src="Car_Pic/honda_BRV.jpg" style="height: 50px" width="100px"></a></li>
   <li><a href='home.php'>Home</a></li>
   <li><a href='car_book.php'>Book A Car</a></li>
   <li><a href='about_us.php'>About Us</a></li>
   <li><a href='contact_us.php'>Contact Us</a></li>
   <li class='active'><a href='reg.php'>Registration</a></li>
</ul>
</div>
<br><br>
<div align="center">
	<table style="height: auto;" width="30%" border="0">
		<tr>
			<td style="background-color: green">
				<div align="center">
					<h2 style="color: white">Registration Here</h2>
				</div>	
			</td>
			<br>
		<tr>
			<td style="background-color: blue"><br>
				<div align="center">
					<form action="reg_db_connection.php" method="POST" name="reg_form" onsubmit="return reg();" enctype="multipart/form-data">
					<input type="file" name="reg_picture"><br><br><br>
					<i><b style="color: white">Name: &nbsp;</b></i><input type="text" name="username" value="" placeholder=" Enter Your Name " /><br><br>
					<i><b style="color: white">E-mail: </b></i><input type="email" name="email" value="" placeholder=" happyjourney@gmail.com " /><br><br>
					<i><b style="color: white">Mobile No: </b></i><input type="number" name="mobnumber" value="" placeholder=" Enter mobile Number" /><br><br>
					<i><b style="color: white">Password: </b></i><input type="password" name="pass" value="" placeholder="* * * * * * * * " /><br><br>
					<input style="background-color: green" type="submit" name="submit" />
					</form>
				</div><br>
			</td>
		</tr>
		</tr>
	</table>
</div>
</body>
</html>