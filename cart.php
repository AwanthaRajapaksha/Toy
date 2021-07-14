<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- delete button -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		a{
			color: white;
		}
		
	</style>
</head>
<body style="background-color: #fcf4e6;">

<!--top-->
	<div style=" background-color:#fbda45; width: 100%; height: 220px; opacity: 0.7;">
		<center>
		<table>
			<tr>
				<td><img src="photo/logo.jpeg" style="width: 150px; height: 150px; border-radius: 100px; margin-bottom: 10px;" ></td>
				<td><img src="photo/name.png"></td>
			</tr>
		</table>
		</center>
		
		
		<div >
			<center><img src="photo/slogan.png"></center>
		</div>		
	</div>

<!--navigation bar-->
<div style="background-color: #e0a848; width: 100%; height: 50px; ">
<table width="100%" border="0">
	<tr>
		<td width="60%">
			
			<table border="0" width="auto">
			<tr>
				<td ><button type="button" class="btn btn-outline-light" style="width: 150px;"><a href="homel.php" style="font-size: 20pt; color: white;" >Home</a></button></td>
				<td ><button type="button" class="btn btn-outline-light" style="width: 150px;"><a href="contact.html" style="font-size: 20pt; color: white;">Contact</a></button></td>
				<td ><button type="button" class="btn btn-outline-light" style="width: 150px;"><a href="about.html" style="font-size: 20pt; color: white;">About</a></button></td>
			</tr>
			</table>
			
		</td>
		<td width="5%">
			<button style="width: 200px;" class="btn btn-danger"  onclick="window.location.href='home.php'"> Log out</button>
		</td>
	</tr>
</table>
	</div>
	<br>
	<!--cart body-->
	<?php
		session_start(); # read up on session.auto_start
		$email=$_SESSION["login"];
	?>

	<?php

		$tot=0;
	  	$conn=new mysqli("Localhost","root","","toy");

		$sql = "SELECT * FROM cart where email='$email' && p_check=0";
		//'$_REQUEST[id]'
		$result = $conn->query($sql);

	 ?>


	 <center>
	 <table style="" border="0" width="80%">
	 	<tr>
	 		<td width="20%" style="border: 1px solid black; background-color: pink;">
	 			<h3>Item</h3>
	 		</td>

	 		<td width="20%" style="border: 1px solid black; background-color: pink;">
	 			<h3>Quatity</h3>
	 		</td >

	 		<td width="20%" style="border: 1px solid black; background-color: pink;">
	 			<h3>Price</h3>
	 		</td>

	 		<td width="20%" style="border: 1px solid black; background-color: pink;">
	 			<h3>Total</h3>
	 		</td>
	 		<td width="5%" >
	 			
	 		</td>
	 	</tr>
<?php while($row=$result->fetch_assoc()) { ?>
	 	<tr>
	 		<td width="20%" style="border: 1px solid black;">
	 			<h3><?php echo $row["item"]; ?></h3>
	 		</td>

	 		<td width="20%" style="border: 1px solid black;">
	 			<h3><?php echo $row["qty"]; ?></h3>
	 		</td >

	 		<td width="20%" style="border: 1px solid black;">
	 			<h3>LKR <?php echo $row["price"]; ?></h3>
	 		</td>

	 		<td width="20%" style="border: 1px solid black;">
	 			<h3>LKR <?php echo $row["total"]; ?></h3>
	 		</td>
	 		<td >
	 			<button class="fa fa-trash" style="margin-left: 75%; background-color: red; width: 30px; height: 30px; border-radius: 10px; margin-left: -50px;" onclick="window.location.href='cart_del.php?id=<?php echo $row["cart_id"] ?>'"></button>
	 		</td>
	 	</tr>
	 <?php
	 $tot=$tot+$row["total"];
	  } ?>

	 <tr>
	 	<td colspan="3" >
	 		<h3 style="margin-left: 75%;">Total Amount</h3>
	 	</td>
	 	<td style="border: 1px solid black;">
	 		<h3 >LKR <?php echo number_format((float)$tot, 2, '.', '');  ?></h3>
	 	</td>
	 </tr>

	 </table>
	 </center>
	 <br>
	<button class="btn btn-danger" style="margin-left: 75%; width: 200px; " onclick="window.location.href='buy.php'"> Buy ></button>
	<br>
	<!--/cart body-->
	<br>
<!--bottom-->
<div style="width: 100%; height: auto; background-color: orange; padding: 30px;">
	<table border="0" width="100%">
		<tr>
			<td width="25%" style="vertical-align: top;"><p><b style="font-size: 14pt;">Head Office</b><br> Dragon (PVT) LTD <br> Address - 200/A/2, <br> Galle Rd, <br> Kollupitiya, <br> Sri Lanka. <br> 23125 <br> 0772535455 </p></td>

			<td width="25%" style="vertical-align: top;"><p><b style="font-size: 14pt;">Badulla Branch</b><br> Dragon (PVT) LTD <br> Address - 172/9, <br> Pahala Widiya, <br> Badulla, <br> Sri Lanka. <br> 22225 <br> 0724952546</p></td>

			<td width="25%" style="vertical-align: top;"><p><b style="font-size: 14pt;">Galle Branch</b><br> Dragon (PVT) LTD <br> Address - 20/B, <br> Temple Rd, <br> Galle, <br> Sri Lanka. <br> 10255 <br> 0715486524 </p></td>

			<td width="25%" style="vertical-align: top;"><p><b style="font-size: 14pt;">Anuradhapura Branch</b><br> Dragon (PVT) LTD <br> Address - 34, <br> Shali Pedesa, <br> Anuradhapura, <br> Sri Lanka. <br> 12455 <br> 0775423125 </p></td>
		</tr>
	</table>	
</div>
</body>
</html>