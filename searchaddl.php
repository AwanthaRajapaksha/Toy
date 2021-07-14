<!DOCTYPE html>
<html>
<head>
	<title>add</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		a{
			color: white;
			text-decoration: none;
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
				<td ><button type="button" class="btn btn-outline-light" style="width: 150px;"><a href="home.php" style="font-size: 20pt; color: white;" >Home</a></button></td>
				<td ><button type="button" class="btn btn-outline-light" style="width: 150px;"><a href="contact.html" style="font-size: 20pt; color: white;">Contact</a></button></td>
				<td ><button type="button" class="btn btn-outline-light" style="width: 150px;"><a href="about.html" style="font-size: 20pt; color: white;">About</a></button></td>
			</tr>
			</table>
			
		</td>
		<td width="40%">
			
		</td>
	</tr>
</table>
	</div>

	<!-- search -->
	<br>
	<center>
	<form method="post" action="searchaddl.php">
		<input type="text" name="search" style="width: 400px;" placeholder="Search here...">
		<input type="submit" value="Search" style="background-color:  #e0a848; width: 150px; height: 30px; border-radius: 10px;">
	</form>
	</center>
	<!-- /search-->

	<!--add-->

	<?php

		$search=$_REQUEST["search"];

	  	$conn=new mysqli("Localhost","root","","toy");
		$sql = "SELECT * FROM adds WHERE toy='$search' || shop='$search' ";
		//'$_REQUEST[id]'
		$result = $conn->query($sql);
		while($row=$result->fetch_assoc())
		{
	?>

	<center>
	<div style="height: auto; width: 80%; background-color: #fcd5ae; padding-top: 20px; padding-bottom: 20px; margin-top: 50px; margin-bottom: 25px; border-radius: 50px;" >
		<center>
		<div style="height: 200px; width: 80%; background-color: #ffe4c9; border-radius: 50px;" >
			
			<table>
				<tr>
					<td width="28%">
						<?php echo " <img src='images/".$row['pic1']."' width=200 height=200> "; ?>
					</td>

					<td width="50%">
					<center>
					<h3><?php echo $row["toy"]; ?></h3>
					<br>
					<h1 style="color: #8f0b00">ONLY LKR<?php echo $row["price"]; ?></h1>
					<h4><?php echo $row["shop"]; ?></h4>
					
					

					</center>
					</td>
					
					<td width="20%">
						<button style="background-color: grey;"> 
						<?php
						echo "<a href =profilel.php?id=".$row["id"].">More ></a>";
						?>
					</button>
					</td>

				</tr>
			</table>

		</div>
		</center>
	</div>
	</center>



<?php } ?>

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