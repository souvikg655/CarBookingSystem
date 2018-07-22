<!DOCTYPE html>
<html>
<head>
	<title>INSERT CAR DETAILS</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>
<script language="javascript" type="text/javascript">
   function insert_car(){
      if (document.insert_car_details.inp_carname.value==""){
         alert("Enter Car Name.");
         return false;
      }
      if (document.insert_car_details.milage.value==""){
         alert("Enter Milage.");
         return false;
      }
      var insert_car_details = document.getElementById("fuel_type").value;
      if(insert_car_details==""){
         alert("Please select Fuel Type.");
         return false;
      }
      if (document.insert_car_details.engine.value==""){
         alert("Enter Engine.");
         return false;
      }
      var insert_car_details = document.getElementById("transmission").value;
      if(insert_car_details==""){
         alert("Please select Transmission.");
         return false;
      }
      if (document.insert_car_details.carcharge_h.value==""){
         alert("Enter Car Charge/h.");
         return false;
      }
      if (document.insert_car_details.carcharge_km.value==""){
         alert("Enter Car Charge/Km");
         return false;
      }
   }
</script>

<body bgcolor="gray">
<?php
include ('admin_header.php');
?>
<br><br><br>
<div align="center">
   <form action="insert_car_details_db.php" method="POST" name="insert_car_details" onsubmit="return insert_car();" enctype="multipart/form-data">
      <table style="height: auto; width: 50%" border="0">
         <tr>
            <td style="background-color: green" colspan="2" align="center">
            <h2 style="color: white">INSERT CAR DETAILS</h2>
         </td>
         </tr>
         <tr>
            <td style="background-color: blue"align="right">
               <h3 style="color: white">Car Name: <input type="text" name="inp_carname" placeholder="Enter Car Name"></h3>
            </td>
            <td style="background-color: blue"align="right">
               <h3 style="color: white">Car picture: <input type="file" name="inp_picture" ></h3>
            </td>
         </tr>
            <tr>
               <td style="background-color: blue">
                  <h3 style="color: white"align="right">Milage: <input type="number" name="milage" placeholder="Enter Milage"></h3>
               </td>
               <td style="background-color: blue" align="center">
                  <h3 style="color: white"align="right">Fuel Type: 
                     <select id="fuel_type" name="fuel_type">
                        <option value=""> </option>
                        <option value="DIESEL">DIESEL</option>
                        <option value="PETROL">PETROL</option>
                     </select>
                  </h3>
               </td>
            </tr>
            <tr>
               <td style="background-color: blue"align="center">
                  <h3 style="color: white"align="right">Engine: <input type="number" name="engine" placeholder="Enter Engine"></h3>
               </td>
               <td style="background-color: blue"align="center">
                  <h3 style="color: white"align="right">Transmission: 
                     <select id="transmission" name="transmission">
                        <option value=""> </option>
                        <option value="AUTO">AUTO</option>
                        <option value="MANUAL">MANUAL</option>
                        <option value="AUTO/MANUAL">AUTO/MANUAL</option>
                     </select>
                  </h3>
               </td>
            </tr>
            <tr>
               <td style="background-color: blue"align="center">
                  <h3 style="color: white"align="right">Car charge/h: <input type="number" name="carcharge_h" placeholder="Car Charge/h &#8377;"></h3>
               </td>
               <td style="background-color: blue"align="center">
                  <h3 style="color: white"align="right">Car charge/Km: <input type="number" name="carcharge_km" placeholder="Car Charge/Km &#8377;"></h3>
               </td>
             </tr>
             <div>
            <tr>
               <td align="center" colspan="2">
                  <input title="Submit" style="background-color: green;color: white;height: 30px;width: 80px;border-radius: 20px;cursor: pointer;" type="submit" name="submit">
               </td>
            </tr>
            </div>
      </table>
   </form>
   </div>
</body>
</html>