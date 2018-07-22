<?php
	$servername="localhost";
	$username="souvik";
	$password="123456";
	$dbname="car_project";
$conn = new mysqli($servername, $username, $password, $dbname);

/*if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
    echo "Not Connected.............";
	}
else{
	echo "Connection successfully";
	}
*/
$carid=$_GET['carid'];

echo $carid;
echo "<br>";
$sql="DELETE FROM car_book WHERE carid='$carid'";

if ($conn->query($sql) === TRUE)
	{
    echo "Record deleted successfully";
	}
else
	{
    echo "Error deleting record: " . $conn->error;
	}

$conn->close();
?>