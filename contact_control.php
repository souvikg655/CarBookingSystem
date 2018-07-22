<!DOCTYPE html>
<html>
<head>
	<title>Contact Control</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<body bgcolor="gray">
<?php
include ('admin_header.php');
?>
<br>
<div align="center">
	<h3 >CONTACT CONTROL</h3>
</div>

<div align="center">
   <table border="1">
      <tr>
         <td style="background-color: green; color: white" align="center"> <b><i>ID</i></b> </td>
         <td style="background-color: green; color: white" align="center"> <b><i>NAME</i></b> </td>
         <td style="background-color: green; color: white" align="center"> <b><i>EMAIL ID</i></b> </td>
         <td style="background-color: green; color: white" align="center"> <b><i>COMMEND</i></b> </td>
         <td style="background-color: white; color: green" align="center"> <b><i>CALL</i></b> </td>
         <td style="background-color: white; color: red" align="center"><b><i>DELETE</i></b> </td>
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
      $sql= " SELECT * FROM contact_control ";
      $result =mysqli_query($conn,$sql);

      if($result->num_rows>0)
         {
         while ($row=$result->fetch_assoc()) 
            {
            echo "<tr>";
            echo "<td> &nbsp;".$row["control_id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["commend"]."</td>";
            echo "<td> <a href='#'><button>&nbsp;&nbsp;&nbsp;Call</button></a></td>";
            echo "<td> <a href='contact_delete.php?control_id=".$row["control_id"]."'><button> &nbsp;&nbsp;&nbsp;Delete </button</a></td>";
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