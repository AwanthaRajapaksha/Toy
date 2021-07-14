<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		.d{

		}
		
	</style>

<script type="text/javascript">
		function login()
		{
			alert ("Please login to proceed");
		}
</script>

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
			<div style="font-size: 10pt;">
				<form method="post" action="login.php">
					<input style="height: 30px; width: 200px;" type="text" name="uname" placeholder="Enter your username">
					<input style="height: 30px; width: 200px;" type="password" name="password" placeholder="Enter your password">
					<input style="height: 25px; width: 100px;" type="submit" value="login">

				</form>
				<a href="signup.html" style="margin-left:350px; font-size: 12pt;">Create new account</a>
			</div>
		</td>
	</tr>
</table>
	</div>

	<!--add part-->
	<?php

		//session_start(); # read up on session.auto_start
		//$email=$_SESSION["login"];

	?>

	<?php
	  	$conn=new mysqli("Localhost","root","","toy");


		$sql = "SELECT * FROM adds where id='$_REQUEST[id]'";
		//'$_REQUEST[id]'
		$result = $conn->query($sql);

		while($row=$result->fetch_assoc())
			{
	 ?>



	<div style="margin-bottom: 50px; margin-top: 50px;">
	<center>
	<table width="80%">
		<tr>
			<td width="50%">
				
				<div style="width: 100%; height: 600px; border: 6px solid pink; padding-top: 50px;">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  					<div class="carousel-inner">
    				<div class="carousel-item active">
			      	<?php echo " <img src='images/".$row['pic1']."' width=550 height=450> "; ?>
				    </div>
    				<div class="carousel-item">
    				<?php echo " <img src='images/".$row['pic2']."' width=550 height=450> "; ?>
      				
    				</div>
    				<div class="carousel-item">
      				<?php echo " <img src='images/".$row['pic3']."' width=550 height=450> "; ?>
    				</div>
  					</div>
  					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  					</a>
					</div>
				</div>

			</td>

			<td width="50%">
				
				<div style="width: 100%; height: 500px; background-color: #d19792;">
					<center>
						<br><br>
					<h3><?php echo $row["toy"]; ?></h3>
					<br>

					<h1 style="color: #8f0b00">ONLY LKR<?php echo $row["price"]; ?></h1>
					<br><br>
					<p>
						<?php echo $row["text"]; ?>
					</p>
					<br>
					<h4><?php echo $row["shop"]; ?></h4>
					<li>FREE - Standard Delivery (LKR 250.00 on orders under LKR 1500.00) 3-5 working days</li>
					<br>
					<button style="width: auto;" class="btn btn-secondary"  onclick="login()"> Add to cart ></button>
					</center>
				</div>

			</td>
		</tr>
	</table>
	</center>
</div>
<?php 
} ?>


	<!--/add part-->
	
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