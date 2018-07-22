<?php

$servername="localhost";
$username="souvik";
$password="123456";
$dbname="car_project";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
	{
	echo "Connection Successfull";
	}
else{
	die("Connection failed".mysqli_connect_error());
	echo "Not Connected";
	}

$carid=$_GET['carid'];

echo $carid;



//mysql_close($conn);
?>