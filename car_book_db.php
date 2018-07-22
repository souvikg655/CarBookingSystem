
<?php

$servername="localhost";
$usename="souvik";
$password="123456";
$dbname="car_project";

$choicesit = $_POST['choicesit'];
$carname=$_POST['carname'];
$picuplocation=$_POST['picuplocation'];
$droplocation=$_POST['droplocation'];
$booktime=$_POST['booktime'];
$bookdate=$_POST['bookdate'];
$bookcity=$_POST['bookcity'];
$roundtrip=$_POST['roundtrip'];

$conn=mysqli_connect($servername,$usename,$password,$dbname);

$sql="INSERT into car_book (choicesit,carname,picuplocation,droplocation,booktime,bookdate,bookcity,roundtrip) VALUES('$choicesit','$carname','$picuplocation','$droplocation','$booktime','$bookdate','$bookcity','$roundtrip')";




echo "$carid";

?>


<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<title>Booking Successfull</title>
</head>
<body>
<div align="center">
	<table style="height: auto" width="50%" border="0">
		<tr style="background-color: green">
			<td colspan="2" align="center">
				<h2><br><i style="color: white">CAR BOOKING SUCCESSFULL</i></h2>
			</td>
		</tr>
		<tr align="center" style="background-color: blue">
			<td colspan="2">
				<h3 style="color: white">
					Booking Id<br><br>
					<input style="height: 30px; width: 200px; " type="text" value="<?php echo $carid;?>" />
				</h3>
			</td>
		</tr>
		<tr style="background-color: blue">
			<td width="400px">
				<h3><b><i style="color: white">Your Booking Car Name: <b style="color: red"><?php echo $carname;?></b></i></b></h3>
			</td>
			<td>
				<h3><b><i style="color: white">No of sit: <b style="color: red"><?php echo $choicesit;?></b></i></b></h3>
			</td>
		</tr>
		<tr style="background-color: blue">
			<td width="400px">
				<h3><b><i style="color: white">Your Pickup Time: <b style="color: red"><?php echo $booktime;?></b> </i></b></h3>
			</td>
			<td>
				<h3><b><i style="color: white">Date: <b style="color: red"><?php echo $bookdate;?></b></i></b></h3>
			</td>
		</tr>
		<tr style="background-color: blue">
			<td width="400px">
				<h3><b><i style="color: white">Pickup Location: <b style="color: red"><?php echo $picuplocation;?></b> </i></b></h3>
			</td>
			<td>
				<h3><b><i style="color: white">Drop Location: <b style="color: red"><?php echo $droplocation;?></b></i></b></h3>
			</td>
		</tr>
		<tr style="background-color: blue">
			<td colspan="2">
				<h3><b><i style="color: white"><marquee DIRECTION=LEFT>Thank You For Booking Our Car      </marquee> </i></b></h3>
			</td>
		</tr>
		<tr align="center" style="background-color: blue" >
			<td colspan="2">
				<h3><b><marquee BEHAVIOR=ALTERNATE>
					<h3><b><i style="color: white">HAPPY JOURNEY</i></b></h3>
					</marquee></b></h3>
			</td>
		</tr>
	</table>
</div>
<br>
<div align="center">
	<a href="car_book.php"><button title="Back" style="background-color: green; color: white; height: 30px; border-radius: 20px; cursor: pointer;">Back Booking Page</button></a>
</div>

</body>
</html>