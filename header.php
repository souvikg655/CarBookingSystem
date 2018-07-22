<?php
session_start();
?>
<div id='cssmenu'>
	<ul>
		<li><img title="Happy Journey" style="cursor: pointer;" src="Car_Pic/honda_BRV.jpg" style="height: 50px" width="100px"></a></li>
		<li><a href='home.php'>Home</a></li>

		<?php
		if($_SESSION['id']!='') { ?>
		<li><a href='car_book.php'>Book A Car</a></li>
		<?php
			}
		?>

		<li><a href='about_us.php'>About Us</a></li>
		<li><a href='contact_us.php'>Contact Us</a></li>
		<?php 
		if($_SESSION['id']!=''){ ?>
		<li><a href='profile.php'>Profile</a></li>
		<?php
	}
	?>
	<li><a href='<?php echo $_SESSION['id']==''?'login.php':'logout.php'  ?>'>
		<?php 
		//print_r($_SESSION);
		if($_SESSION['id']==''){
			echo "Login";
		}
		else{
			echo "Logout";
		}
		?>
	</a></li>
</ul>
</div>