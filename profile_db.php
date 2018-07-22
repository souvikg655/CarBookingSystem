<?php
$servername="localhost";
$usename="souvik";
$password="123456";
$dbname="car_project";

$conn=mysqli_connect($servername,$usename,$password,$dbname);

$target_dir="profile_picture/";
echo '<pre>';
print_r($_FILES);
echo '</pre>';

$file_choice= $target_file = $target_dir . basename($_FILES["change_pro_picture"]["name"]);

$pic=basename($_FILES["change_pro_picture"]["name"]);

echo "<br>".$pic;

echo "<br><br>link: ".basename($_FILES["change_pro_picture"]["name"]);
echo "<br><br>";
if (move_uploaded_file($_FILES["change_pro_picture"]["tmp_name"], $target_file))
	{
        echo "The file ". basename( $_FILES["change_pro_picture"]["name"]). " has been uploaded.";
        echo "<br>";
        echo "Your All Data Is Update";
    }
else
	{
        echo "Sorry, there was an error uploading your file.";
    }

$update_query="UPDATE FROM user SET username='$pro_name', email='$pro_email', mobnumber='$pro_mobile_number', profile_picture='$pic', password='$pro_ch_password'  WHIRE id='$id'";




if ($conn->query($update_query) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



?>