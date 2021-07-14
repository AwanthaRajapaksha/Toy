<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<script type="text/javascript">
  		function log() {
  			alert("Please login to proceed!");
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
<a style="margin-left: 95%; font-size: 10pt;" href="sellerlogin.php">seller login</a>
<!--slide show-->
	<div class="container" style="margin-top: 50px; margin-bottom: 50px; width: 100%;"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="photo/s1.jpg" alt="Los Angeles" style="width:100%; height: 480px;">
      </div>

      <div class="item">
        <img src="photo/s2.jpg" alt="Chicago" style="width:100%; height: 480px;">
      </div>
    
      <div class="item">
        <img src="photo/s3.jpg" alt="New york" style="width:100%; height: 480px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--/slide show-->


<center>
<div style="width: 80%; height: 500px; background-color: ; margin-bottom: 20px; ">
	
	<center><table width="100%">
		<tr>
			<td width="50%">
				<div style="width: 100%; height: 480px; background-color: #68dc00; border-radius: 50px; padding-top: 20px;">
					<center><h1 style="color: white;">Kids Puzzles</h1></center>
					<center><img src="photo/cat1.jpg" style="margin-top: 0px;"></center>
					<center><button style="width: 200px; height: 35px; border-radius: 50px; background-color: white;">
						<?php echo "<a href =add_pagel.php?id=0>Select ></a>"; ?>
						</button></center>
				</div>
			</td>

			<td width="50%">
				<div style="margin: 10px;">
				<table width="100%">
					<tr>
						<td width="50%">
							<div style="width: 100%; height: 230px; background-color: #4ad0f7; margin: 10px; border-radius: 50px;padding-top: ;">
							<table>
								<tr>
									<td>
									<div style="margin-left: 50px; padding-top: 0px;">
										<h1 style="color: white; margin-left: 15px;">Baby Toys</h1>
									
									<center><button style="width: 200px; height: 35px; border-radius: 50px; background-color: white;">
										<?php echo "<a href =add_pagel.php?id=1 >Select> </a>";  ?></button></center>
									</div>
									</td>

									<td>
									<div style="margin-left: 15px; padding-bottom: 50px;">
										<center><img src="photo/cat2.jpg"></center>
									</div>
									</td>
								</tr>
							</table>
							</div>
						</td>
					</tr>

					<tr>
						<td width="50%">
							<div style="width: 100%; height: 230px; background-color: #4ad0f7; margin: 10px; border-radius: 50px;padding-top: ;">
							<table>
								<tr>
									<td>
									<div style="margin-left: 50px; padding-top: 0px;">
										<h1 style="color: white; margin-left: 0px;">Craft for Kids</h1>
									
									<center><button style="width: 200px; height: 35px; border-radius: 50px; background-color: white;"><?php echo "<a href =add_pagel.php?id=2>Select ></a>"; ?></button></center>
									</div>
									</td>

									<td>
									<div style="margin-left: 15px; padding-bottom: 50px; padding-top: 15px;">
										<center><img src="photo/cat3.jpg"></center>
									</div>
									</td>
								</tr>
							</table>
							</div>
						</td>
					</tr>
				</table>
				</div>
			</td>
		</tr>
	</table></center>

</div>
</center>

<center>
	<div style="width: 80%; height: 500px; background-color: ; margin-bottom: 0px; margin-left: 20px; ">
		<table>
			<tr>
				<td width="30%" >
					
				<div style="margin-right:20px;">
					<div style="width: 100%; height: 430px; background-color: #faa701; border-radius: 50px; padding-top: 20px; margin-right: ;">
					<center><h1 style="color: white;">Pre-School Toys</h1></center>
					<center><img src="photo/cat4.jpg" style="margin-top: 0px;"></center>
					<center><button style="width: 200px; height: 35px; border-radius: 50px; background-color: white;"><?php echo "<a href =add_pagel.php?id=3>Select ></a>"; ?></button></center>
					</div>
				</div>

				</td>

				<td width="30%">
				<div style="margin-right:20px;">
					<div style="width: 100%; height: 430px; background-color: #68dc00; border-radius: 50px; padding-top: 20px;">
					<center><h1 style="color: white;">Activity Toys</h1></center>
					<center><img src="photo/cat5.jpg" style="margin-top: 0px;"></center>
					<center><button style="width: 200px; height: 35px; border-radius: 50px; background-color: white;"><?php echo "<a href =add_pagel.php?id=4>Select ></a>"; ?></button></center>
					</div>
				</div>
				</td>

				<td width="30%">
				
				<div style="margin-right:20px;">	
					<div style="width: 100%; height: 430px; background-color: #faa701; border-radius: 50px; padding-top: 20px;">
					<center><h1 style="color: white;">Educational Toys</h1></center>
					<center><img src="photo/cat6.jpg" style="margin-top: 0px;"></center>
					<center><button style="width: 200px; height: 35px; border-radius: 50px; background-color: white;"><?php echo "<a href =add_pagel.php?id=5>Select ></a>"; ?></button></center>
					</div>
				</div>

				</td>
			</tr>
		</table>
	</div>
</center>


<!-- Top and Bump adds-->

<center><hr style="width: 100%; height: 5px; background-color: grey;" ></center>
<center><h1 style="color: grey;">Top Adds</h1></center>
<center><hr style="width: 100%; height: 5px; background-color: grey;" ></center>
<center>
<table>
	
	<tr>
<?php
		$count=0;

	  	$conn=new mysqli("Localhost","root","","toy");

	  
	 	# code...
	 
		$sql = "SELECT * FROM adds WHERE cat=1 ORDER BY id DESC";
		//'$_REQUEST[id]'

		$result = $conn->query($sql);
		while($row=$result->fetch_assoc())
			{
	 ?>

	 <?php
	 		$count++;
			if ($count==5) {
				break;
			}
	?>

	<td width="20%">
	<div style="width: 250px; height: auto; color: grey;">	
		<center>
				<div style="border: 5px solid grey; border-radius: 30px; height: 100%; padding-top: 40px; margin: 5px;"><center>
					<?php echo " <img src='images/".$row['pic1']."' width=200 height=200> "; ?>

					<br><br>
					<h2><?php echo $row["toy"]; ?></h2>

					<br><br>
					<h2><?php echo '<h2>Only LKR '.$row["price"].'</h2>'; ?></h2>	
					<div style="color: white;">
						<button class="fa fa-trash" style="background-color: grey; width: 100px;" onclick="window.location.href='profilel.php?id=<?php echo $row["id"] ?>'">More ></button>
					</div>
					</center>
				</div>

			</center>	
	</div>
	</td>

<?php
//$x = $row["id"];
}
 ?>
</tr></table></center>

<center><hr style="width: 100%; height: 5px; background-color: grey;" ></center>
<center><h1 style="color: grey;">Bump Adds</h1></center>
<center><hr style="width: 100%; height: 5px; background-color: grey;" ></center>

<center>
<table>
	
	<tr>
<?php
		$count=0;

	  	//$conn=new mysqli("Localhost","root","","toy");

	  
	 	# code...
	 
		$sql = "SELECT * FROM adds WHERE cat=2 ORDER BY id DESC";
		//'$_REQUEST[id]'

		$result = $conn->query($sql);
		while($row=$result->fetch_assoc())
			{
	 ?>

	 <?php
	 		$count++;
			if ($count==5) {
				break;
			}
	?>
	
	<td width="20%">
	<div style="width: 250px; height: auto; color: grey;">	
		<center>
				<div style="border: 5px solid grey; border-radius: 30px; height: 100%; padding-top: 40px; margin: 5px;"><center>
					<?php echo " <img src='images/".$row['pic1']."' width=200 height=200> "; ?>

					<br><br>
					<h2><?php echo $row["toy"]; ?></h2>

					<br><br>
					<h2><?php echo '<h2>Only LKR '.$row["price"].'</h2>'; ?></h2>	
					<div style="color: white;">
						<button class="fa fa-trash" style="background-color: grey; width: 100px;" onclick="window.location.href='profilel.php?id=<?php echo $row["id"] ?>'">More ></button>
					</div>
					</center>
				</div>

			</center>	
	</div>
	</td>

<?php
//$x = $row["id"];
}
 ?>
</tr></table></center>

<center><hr style="width: 100%; height: 5px; background-color: grey;" ></center>

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