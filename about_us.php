<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<body bgcolor="gray">
<?php 
include('header.php');
?>

<div align="center">
	<h2 style="color: red">About Us</h2>
</div>

<div>
	<table style="height: auto" width="100%" border="1" >
	<tr>
		<td width="15%">
			<img src="Car_Pic/Ciaz.jpg" height="120" width="195">
		</td>
		<td width="15%">
			<i><b style="color: white">Suzuki Ciaz</b></i>
		</td>
		<td width="20%">
			<i><b style="color: white">Mileage: <i></i></b></i><br><br>
			<i><b style="color: white">Fuel Type:</b></i><br><br>
			<i><b style="color: white">Engine:</b></i><br><br>
			<i><b style="color: white">Transmission:</b></i><br><br>
		</td>
		<td width="50%">
			<i><b style="color: white">Car Charge/km:</b></i><br><br>
			<i><b style="color: white">Car Charge/h:</b></i><br><br>
		</td>
	</tr>
<?php
		$servername="localhost";
		$username="souvik";
		$password="123456";
		$dbname="car_project";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if($conn)
			{
			//echo "Connection Successfull<br>";
			}
		else
			{
			die("Connection failed".mysqli_connect_error());
			echo "Not Connected<br>";
			}
		$sql= " SELECT * FROM car_insert ";
		$result =mysqli_query($conn,$sql);

		if($result->num_rows>0)
			{
			while ($row=$result->fetch_assoc()) 
				{
				echo "<tr>";
				echo "<td> &nbsp;".$row["carname"]."</td>";
				echo "<td> Car Name: ".$row["carname"]."</td>";
				echo "<td> Mileage: ".$row["milage"]."<br><br> Fuel Type: ".$row["fuel_type"]."<br><br> Engine: ".$row["engine"]."<br><br> Transmission: ".$row["transmission"]."</td>";
				echo "<td> Car Charge/h: ".$row["car_charge_h"]."<br><br> Car Charge/km: ".$row["car_charge_km"]."</td>";
				echo "</tr>";
				}
			}
		else
			{
			echo "No Result";
			}
?>
</table>
</div>

</body>
</html>