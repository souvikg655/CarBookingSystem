<?php

$servername="localhost";
$usename="souvik";
$password="123456";
$dbname="car_project";

$inp_carname = $_POST['inp_carname'];
$milage=$_POST['milage'];
$fuel_type=$_POST['fuel_type'];
$engine=$_POST['engine'];
$transmission=$_POST['transmission'];
$carcharge_h=$_POST['carcharge_h'];
$carcharge_km=$_POST['carcharge_km'];

$conn=mysqli_connect($servername,$usename,$password,$dbname);

$sql="INSERT into car_insert (carname,milage,fuel_type,engine,transmission,car_charge_h,	car_charge_km) VALUES('$inp_carname','$milage','$fuel_type','$engine','$transmission','$carcharge_h','$carcharge_km')";
if(mysqli_query($conn,$sql))
	{
		echo "<br>";
		echo "Hi......... Your Value Insert Successfuly.......<br><br>Thank You For Registration In Our Database.";
	}
else{
	echo "<br>";
	echo "<br>";
	echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
//mysql_close($check);
echo "<br><br><br><br>";

$target_dir="car_pic_db/";
//echo '<pre>';
print_r($_FILES);
//echo '</pre>';
$file_choice= $target_file = $target_dir . basename($_FILES["inp_picture"]["name"]);



if (move_uploaded_file($_FILES["inp_picture"]["tmp_name"], $target_file))
	{
        echo "The file ". basename( $_FILES["inp_picture"]["name"]). " has been uploaded.";
        echo "<br>";
        echo "Your All Data Is Update";
        echo "<br><br><br>";
        echo "Your profile pic link is: " .basename( $_FILES["inp_picture"]["name"]);
    }
else
	{
        echo "Sorry, there was an error uploading your file.";
    }

?>