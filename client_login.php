<?php
session_start();
  $servername="localhost";
      $username="souvik";
      $password="123456";
      $dbname="car_project";
      $conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
   {
  // echo "Connection Successfull";
   }
else{
   die("Connection failed".mysqli_connect_error());
   echo "Not Connected";
   }

if($_SERVER["REQUEST_METHOD"] == "POST")
   {

   $myusername = $_POST['user1'];
   $mypass = md5($_POST['pass']);

   $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypass'";
  
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   echo "<pre/>";
   print_r($row);
   //$active = $row['active'];

   $count = mysqli_num_rows($result);

   echo "<br>";
   echo "Count: ".$count;
   echo "<br>";

   if($count > 0)
      {
      $_SESSION["id"] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['mobnumber'] = $row['mobnumber'];
      $_SESSION['password'] = $row['password'];

      echo "Done";
      header("location: home.php");
      }
   else
      {
      $error = "Your Login Name or Password is invalid";
      echo $error;
      }
  }
?>