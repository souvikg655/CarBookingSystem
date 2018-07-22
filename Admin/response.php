<?php
	$servername="localhost";
	$username="souvik";
	$password="123456";
	$dbname="car_project";
$conn = new mysqli($servername, $username, $password, $dbname);
$carid=$_GET['carid'];
//mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking Response</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<body bgcolor="gray">
<?php
include ('admin_header.php');
?>
<br><br>

<div>
	<form action="response_db.php" method="POST">
		<table style="height: auto" width="30%" border="1" align="center">
			<tr style="background-color: green">
				<td colspan="2">
					<h3 align="center" style="color: white">RESPONSE</h3>
				</td>
			</tr>
			<div>
			<tr style="background-color: blue">
				<td align="center" colspan="2">
					<h3 style="color: white">Response Id</h3>
					<h3><b><input type="text" value="<?php echo $carid;?>"></b></h3>
					<h3 align="left"><b><i style="color: white;">Name: </i></b></h3>
					<h3 align="left"><b><i style="color: white;">E-mail Id: </i></b></h3>
					<h3 align="left"><b><i style="color: white;">Mobile No: </i></b></h3>
					<select>
						<option value=""> </option>
						<option value="Booked">Booked</option>
						<option value="Under Process">Under Process</option>
						<option value="Cancel">Cancel</option>
					</select>
					<br><br>
					<div>
						<input style="background-color: green;color: white; border-radius: 20px;" type="Submit" name="Submit">
					</div>
					<br>
				</td>
			</tr>
			</div><br>
		</table>
	</form>
</div>


</body>
</html>