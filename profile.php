<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>

<script language="Javascript" type="text/javascript">
	function profile_update(){
		if (document.profile_update.pro_name.value=="") {
			alert("Enter Your Name.");
			return false;
		}
		if (document.profile_update.pro_email.value=="") {
			alert("Enter Your E-mail Id.");
			return false;
		}
		if (document.profile_update.pro_mobile_no.value=="") {
			alert("Enter Your Mobile Number.......");
			return false;
		}
		if (document.profile_update.pro_ch_password.value=="") {
			alert("Enter Your Password.......");
			return false;
		}
	}
	}
</script>

<body bgcolor="gray">
<?php
include ('header.php');
?>
<br><br><br>
<div align="center">
	<form action="profile_db.php" method="POST" enctype="multipart/form-data" name="profile_update" onsubmit="return profile_update();">
		<table style="height: auto;" width="30%" border="0">
		<tr style="background-color: green">
			<td align="center" colspan="2">
				<h2 style="color: white">PROFILE</h2>
				<h4 style="color: black">You can change your profile data</h4>
			</td>
		</tr>
		<tr>
			<td align="center">
				<img src="profile_picture/1sXIrpK.jpg" alt="Sorry! have no profile picture" style="height: 60px; width: 60px;" >
			</td>
			<td>
				<input type="file" name="change_pro_picture">
			</td>

		</tr>
		<tr style="background-color: blue">
			<td style="width: 150px;" align="right">
				<h3 style="color: white">Name: </h3>
			</td>
			<td align="center">
				<input type="text" name="pro_name" placeholder="Change Name" value="<?php echo $_SESSION['username']; ?>" />
			</td>
		</tr>
		<tr style="background-color: blue">
			<td style="width: 150px;" align="right">
				<h3 style="color: white">E-mail: </h3>
			</td>
			<td align="center">
				<input type="E-mail" name="pro_email" placeholder=" Change E-mail Id" value="<?php echo $_SESSION['email']; ?>" />
			</td>
		</tr>
		<tr style="background-color: blue">
			<td style="width: 150px;" align="right">
				<h3 style="color: white">Mobile No: </h3>
			</td>
			<td align="center">
				<input type="number" name="pro_mobile_no" placeholder="Change Mobile No" value="<?php echo $_SESSION['mobnumber']; ?>" />
			</td>
		</tr>
		<tr style="background-color: blue">
			<td style="width: 150px;" align="right">
				<h3 style="color: white">Change Password: </h3>
			</td>
			<td align="center">
				<input type="Password" name="pro_ch_password" placeholder="Change Password" value="<?php echo $_SESSION['password']; ?>" />
			</td>
		</tr>
		<div>
			<tr style="background-color: gray">
			<td align="center" colspan="2">
				<br>
				<input title="Submit" style="background-color: green;color: white;height: 30px;width: 80px;border-radius: 10px;cursor: pointer;" type="submit" name="submit">
			</td>
		</tr>
		</div>
		</table>
	</form>
</div>


</body>
</html>
