<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<script language="Javascript" type="text/javascript">
	function validate(){
		if (document.admin_login.username.value=="") {
			alert("Enter Your Username.......");
			return false;
		}
		if (document.admin_login.password.value=="") {
			alert("Enter Your Password.......");
			return false;
		}
	}
</script>
<body bgcolor="gray">
<?php
include ('admin_header.php');
?>

<br><br><br>
<div align="center">
	<table style="height: auto;" width="30%" border="1">
		<tr style="background-color: green">
			<td>
				<div align="center">
					<h2 style="color: white">Admin Login Here</h2>
				</div>
			</td>
		</tr>
		<tr style="background-color: blue">
			<td><br>
				<div align="center">
					<form action="show.php" method="POST" name="admin_login" onsubmit="return validate();">
					<table border="0">
						<tr>
						<td>
							<i><b style="color: white">Username: </b></i>
						</td>
						<td>
							<input type="text" name="username" value="" placeholder="Admin Username" />
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">Password: </b></i>
						</td>
						<td>
							<input type="password" name="password" value="" placeholder="* * * * *" />
						</td>
						</tr>
					</table>
					<br>
					<div>
						<input style="background-color: green" type="submit" name="submit" />
					</div>
					<br>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>
</body>
</html>