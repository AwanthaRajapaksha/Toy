<?php
		session_start(); # read up on session.auto_start
		$email=$_SESSION["login"];
?>




<?php
	  	$conn=new mysqli("Localhost","root","","toy");

	  	//$email=$_REQUEST["email"];
	  	$qty=$_REQUEST["qty"];
	  	$price=$_REQUEST["price"];
	  	$item=$_REQUEST["item"];
	  	$total=$price*$qty;

	  	
	  	$conn=new mysqli("Localhost","root","","toy");


		$sql="insert into cart(item,price,qty,total,email) values('$item','$price','$qty','$total','$email')";
		//$conn->query($sql);

		if($conn->query($sql)== true)
		{
		//session_start(); 
		//$_SESSION["cart"] = $email;
		echo '<script language="javascript">';
    	echo 'alert("successfull!"); location.href="http://localhost/toy/cart.php"'; 
    	echo '</script>';
    	

		}
		else
		{
		echo "sorry".$sql ."<br>" . $conn->error;
		}
	 ?>

