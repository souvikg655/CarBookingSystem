<!DOCTYPE html>
<html>
<head>
	<title>User_Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>

<script language="Javascript" type="text/javascript">
	function validate(){
		if (document.login_form.username.value=="") {
			alert("Enter Your Name.");
			return false;
		}
		if (document.login_form.password.value=="") {
			alert("Enter Your Password.");
			return false;
		}
	}
</script>
<body bgcolor="gray">
<?php
include ('header.php');
?>

	<br><br>
	<div align="center">
		<table style="height: auto" width="30%" border="1">
			<tr>
				<td align="center" style="background-color: green">
					<h2 style="color: white"><i>Login Here</i></h2>
				</td>
			</tr>

			<tr bgcolor="blue">
				<td>
					<div align="center">
						<form action="client_login.php" method="POST" name="login_form" onsubmit="return validate();"><br><br>
							<i><b style="color: white">Username: </b></i>
							<input type="text" name="user1" value="" placeholder="Username" /><br><br>
							<i><b style="color: white">Password:&nbsp; </b></i>
							<input type="password" name="pass" value="" placeholder="* * * * *" /><br><br>
							<input style="background-color: green" type="submit" name="submit" /><br><br><br>
						</form>
						<p style="color: white">Not a user ? Register here !!</p><a href="reg.php"><button style="background-color: yellow">Register</button></a>
					</div><br>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>