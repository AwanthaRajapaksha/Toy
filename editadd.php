<!DOCTYPE html>
<html>
<head>
	
		<title>add post</title>
	<script type="text/javascript">
		//email validation
		function emailval()
		{
			if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(document.signup.email.value))
    			return 1;
			else
				return 0;
		}

			function postadd()
		{
			
			if(isNaN!(document.signup.cell))
				alert("Phone number must be a number"); 	
			
			if(emailval()==0)
				alert("Invalid Email");
		}
	</script>

	<style type="text/css">
		input{
			margin-top: 10px;
		}
	</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
			<!--
			<div style="font-size: 10pt;">
				<form method="post" action="login.php">
					<input style="height: 30px; width: 200px;" type="text" name="username" placeholder="Enter your username">
					<input style="height: 30px; width: 200px;" type="password" name="password" placeholder="Enter your password">
					<input style="height: 25px; width: 100px;" type="submit" value="login">

				</form>
				<a href="signup.html" style="margin-left:350px; font-size: 12pt;">Create new account</a>
			</div>-->
		</td>
	</tr>
</table>
	</div>


	<!--body-->
	<br><br>

	<center><h4 style=" font-size: 25pt;">Post your add here</h4></center>
	<br><br>

	<form name="signup" method="post" enctype="multipart/form-data" action="editaddp.php">
		<center>
		<div style="width: 70%; border: 2px solid; padding-top: 20px;">
	
		
	<table width="45%" style="font-size: 12pt;">
		
		<input name="id" type="hidden"  value="<?php echo $_REQUEST['id']; ?>">

		<tr>
      	<td>Add category</td>
      	<td><select name="cat">
        <option value="0">General Add</option>
        <option value="1">Top Add</option>
        <option value="2">Bump Add</option>
      	</select></td>
    	</tr>

    	<tr>
      	<td>Add Type</td>
      	<td><select name="type">
        <option value="0">Kids Puzzles</option>
        <option value="1">Baby Toys</option>
        <option value="2">Craft for Kids</option>
        <option value="3">Pre-School Toys</option>
        <option value="4">Activity Toys</option>
        <option value="5">Educational Toys</option>
      	</select></td>
    	</tr>

		<tr>
			<td>Toy name</td>
			<td><input type="text" name="toy" placeholder="Enter toy name"></td>
		</tr>
		<tr>
			<td>Shop name</td>
			<td><input type="text" name="shop" placeholder="Enter location"></td>
		</tr>
		<tr>
			<td>Add photos</td>
			<td><input type="file" name="photo1"></td>
		</tr>
		<tr>
			<td>Add photos</td>
			<td><input type="file" name="photo2"></td>
		</tr>
		<tr>
			<td>Add photos</td>
			<td><input type="file" name="photo3"></td>
		</tr>
		<tr>
			<script type="text/javascript">
				function setTwoNumberDecimal(event) {
 			   	this.value = parseFloat(this.value).toFixed(2);
				}
			</script>
			<td>Price(RS)</td>
			<td>
			<input type="number" onchange="setTwoNumberDecimal" min="0" max="99999" step="0.25"  placeholder="Enter price" name="price">
			</td>
		</tr>
		<tr>
			<td>Toy description</td>
			<td><textarea placeholder="Enter description" name="text"></textarea> </td>
		</tr>
		<tr>
			<td>phone number</td>
			<td><input type="text" name="phone" placeholder="Enter your phone number">
		</tr>

		

		
	</table>
	<br><br>
	<input type="submit"  onclick="postadd()" class="btn btn-primary" style="width: 100px;">
	</center>
</form>
<br><br>

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



