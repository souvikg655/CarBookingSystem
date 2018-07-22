<?php
//include("connection_done.php");

$servername="localhost";
$usename="souvik";
$password="123456";
$dbname="car_project";


$target_dir="profile_picture/";
//echo '<pre>';
print_r($_FILES);
//echo '</pre>';

$file_choice= $target_file = $target_dir . basename($_FILES["reg_picture"]["name"]);

$pic=basename($_FILES["reg_picture"]["name"]);

echo "<br>".$pic;

echo "<br><br>link: ".basename($_FILES["reg_picture"]["name"]);
echo "<br><br>";
if (move_uploaded_file($_FILES["reg_picture"]["tmp_name"], $target_file))
	{
        echo "The file ". basename( $_FILES["reg_picture"]["name"]). " has been uploaded.";
        echo "<br>";
        echo "Your All Data Is Update";
    }
else
	{
        echo "Sorry, there was an error uploading your file.";
    }



echo "<br><br><br>";


$username = $_POST['username'];
$email=$_POST['email'];
$mobnumber=$_POST['mobnumber'];
$reg_picture=$pic;
//$reg_picture=$_POST['reg_picture'];
$pass=md5($_POST['pass']);

$conn=mysqli_connect($servername,$usename,$password,$dbname);

$sql="INSERT into user (username,email,mobnumber,profile_picture,password) VALUES('$username','$email','$mobnumber','$reg_picture','$pass')";
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

?>
