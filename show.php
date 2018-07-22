<!DOCTYPE html>
<html>
<head>
	<title>Show value</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">

<style>
#search_box{
	position: absolute;
	top: 22%;
	right: 4.5%;
	width: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    height: 40px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;

}
#search_box:focus{ 
	width: 20%;
}

</style>
</head>

<body bgcolor="gray">
<?php
include ('admin_header.php');
?>

<div align="center">
	<h1 style="color: pink">CAR BOOKING DETAILS</h1>
</div>
<br><br>

<form action="" method="POST">
	<input id="search_box" type="text" name="search" placeholder="Search......">
</form>

<div align="center">
	<table border="1">
		<tr>
			<td style="background-color: green; color: white" align="center"> <b><i>CARID</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i>SIT</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i>CAR NAME</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i>PICKUP LOCATION</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i>DROP LOCATION</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i>BOOKING TIME</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i> BOOKING DATE</i></b> </td>
			<td style="background-color: green; color: white" align="center"> <b><i>COUNTRY NAME</i></b> </td>
			<td style="background-color: green; color: white" align="center">  <b><i>ROUND TRIP</i></b> </td>
			<td style="background-color: green; color: white" align="center">  <b><i>Response Done</i></b> </td>
			<td style="background-color: white; color: green" align="center"> <b><i>RESPONSE</i></b> </td>
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
		$sql= " SELECT * FROM car_book ";
		$result =mysqli_query($conn,$sql);

		if($result->num_rows>0)
			{
			while ($row=$result->fetch_assoc()) 
				{
				echo "<tr>";
				echo "<td> &nbsp;".$row["carid"]."</td>";
				echo "<td> &nbsp;".$row["choicesit"]." ".$row["lname"]."</td>";
				echo "<td>".$row["carname"]."</td>";
				echo "<td>".$row["picuplocation"]."</td>";
				echo "<td>".$row["droplocation"]."</td>";
				echo "<td>".$row["booktime"]."</td>";
				echo "<td>".$row["bookdate"]."</td>";
				echo "<td> &nbsp;&nbsp;&nbsp;".$row["bookcity"]."</td>";
				echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["roundtrip"]."</td>";
				echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["roundtrip"]."</td>";
				echo "<td> <a href='response.php?carid=".$row["carid"]."'><button>&nbsp;&nbsp;&nbsp;Response</button></a></td>";
				echo "<td> <a href='value_delete.php?carid=".$row["carid"]."'><button> &nbsp;&nbsp;&nbsp;Delete </button</a></td>";
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
