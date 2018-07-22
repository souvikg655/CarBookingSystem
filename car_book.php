<!DOCTYPE html>
<html>
<head>
	<title>Car Booking</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
</head>

<script language="Javascript" type="text/javascript">
	function validate(){
		var booking_alert = document.getElementById("choice_sit").value;
		if(booking_alert==""){
			alert("Please select No. of Sit");
			return false;
		}
		var booking_alert = document.getElementById("car_name").value;
		if(booking_alert==""){
			alert("Please Select Car Name");
			return false;
		}
		if (document.car_booking.picuplocation.value=="") {
			alert("Enter Your Pickup Location.");
			return false;
		}
		if (document.car_booking.droplocation.value=="") {
			alert("Enter Your Drop Location.");
			return false;
		}
		if (document.car_booking.booktime.value=="") {
			alert("Enter Booking Time.");
			return false;
		}
		if (document.car_booking.bookdate.value=="") {
			alert("Enter Booking Date.");
			return false;
		}
		var booking_alert = document.getElementById("book_city").value;
		if(booking_alert==""){
			alert("Please select Your City Name");
			return false;
		}
		var booking_alert = document.getElementById("round_trip").value;
		if(booking_alert==""){
			alert("Please Select Round Trip");
			return false;
		}
		
	}
</script>

<body bgcolor="gray">
<?php 
include('header.php');
?>
<br><br>
<div align="center">
	<table style="height: auto" width="30%" border="0">
		<tr style="background-color: green">
			<td>
				<div align="center">
					<h2 style="color: white">BOOK A CAR</h2>
				</div>
			</td>
		</tr>
		<tr style="background-color: blue">
			<td><br>
				<div align="center">
					<form action="car_book_db.php" method="POST" name="car_booking" onsubmit="return validate();">
					<table border="0">
						<tr>
						<td>
							<i><b style="color: white">Choice Sit: </b></i>
						</td>
						<td>
						<select id="choice_sit" name="choicesit">
							<option value=""> </option>
	  						<option value="1">1 sit</option>
			  				<option value="2">2 sits</option>
			  				<option value="3">3 sits</option>
			  				<option value="4">4 sits</option>
			  				<option value="5">5 sits</option>
			  				<option value="6">6 sits</option>
			  				<option value="7">7 sits</option>
			  				<option value="8">8 sits</option>
						</select>
							</td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr>
						<td>
							<i><b style="color: white">Car Name:</b></i>
						</td>
						<td>
						<select id="car_name" name="carname">
							<option value=""> </option>
							<option value="Hyundai Eon">Hyundai Eon</option>
							<option value="Hyundai Grand i10">Hyundai Grand i10</option>
							<option value="Hyundai Grand i10 Prime">Hyundai Grand i10 Prime</option>
							<option value="Hyundai i20">Hyundai i20</option>
							<option value="Hyundai Elite i20">Hyundai Elite i20</option>
							<option value="Hyundai Xcent Prime">Hyundai Xcent Prime</option>
							<option value="Hyundai Xcent">Hyundai Xcent</option>
							<option value="Hyundai">Hyundai</option>
							<option value="Suzuki Dzire">Suzuki Dzire</option>
							<option value="Suzuki-Vitara-Brezza">Suzuki-Vitara-Brezza</option>
							<option value="Maruti Baleno">Maruti Baleno</option>
							<option value="Suzuki Ciaz">Suzuki Ciaz</option>
							<option value="Tata Safari">Tata Safari</option>
							<option value="Mahindra Scorpio">Mahindra Scorpio</option>
						</select>	
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">Picup Location: </b></i>
						</td>
						<td>
							<input type="text" name="picuplocation" value="" placeholder="Enter Current Location" />
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">Drop Location: </b></i>
						</td>
						<td>
							<input type="text" name="droplocation" value="" placeholder="Enter Drop Location" />
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">Time: </b></i>
						</td>
						<td>
							<input type="Time" name="booktime" value="" />
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">Date: </b></i>
						</td>
						<td>
							<input type="Date" name="bookdate" value="" />
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">City: </b></i>
						</td>
						<td>
							<select id="book_city" name="bookcity">
								<option value=""> </option>
								<option value="India">India</option>
								<option value="Others">Others</option>
							</select>
						</td>
						</tr>

						<tr><td></td></tr>
						<tr><td></td></tr>

						<tr>
						<td>
							<i><b style="color: white">Round Trip: </b></i>
						</td>
						<td>
							<select id="round_trip" name="roundtrip">
								<option value=""> </option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</td>
						</tr>
					</table>
						<br>
						<div>
							<input style="background-color: green" type="submit" name="submit" value="Book A Car" />
						</div>
					</form>
				</div><br>
			</td>
		</tr>
	</table>
</div>



</body>
</html>
