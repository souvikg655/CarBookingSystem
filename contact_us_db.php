<?php
//include("connection_done.php");

$servername="localhost";
$usename="souvik";
$password="123456";
$dbname="car_project";

$username = $_POST['username'];
$email=$_POST['email'];
$emailmessage=$_POST['emailmessage'];

$conn=mysqli_connect($servername,$usename,$password,$dbname);

$sql="INSERT into contact_control (name,email,commend) VALUES('$username','$email','$emailmessage')";
if(mysqli_query($conn,$sql))
	{
		echo "<br>";
		echo "Hi ".$username." Your Value Insert Successfuly.......<br><br>Thank You For Registration In Our Database.";
	}
else{
	echo "<br>";
	echo "<br>";
	echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

mysql_close($check);

?>
