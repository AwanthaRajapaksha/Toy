<?php

	$conn=new mysqli("localhost","root","","toy");

	//getting values from the form
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$pw=$_REQUEST["pw"];
	$address=$_REQUEST["add"];
	$country=$_REQUEST["country"];
	$phone=$_REQUEST["phone"];
	$c_no=$_REQUEST["card"];
	$c_name=$_REQUEST["cname"];
	$expire=$_REQUEST["exdate"];
	$cvc=$_REQUEST["cvc"];
	
	//updating values
	$sql = "INSERT INTO users(name,email,password,address,country,phone,c_no,c_name,expire,cvc) values('$name','$email','$pw','$address','$country','$phone','$c_no','c_name','$expire','$cvc')";

	if($conn->query($sql)== true)
	{
		echo '<script language="javascript">';
    	echo 'alert("Successfully Added"); location.href="http://localhost/toy/signup.html"';
    	echo '</script>';
	}
	else
	{
		echo "error".$sql ."<br>" . $conn->error;
	}