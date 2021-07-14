<?php

		session_start();
		$email=$_SESSION["login"];
		
		$conn=new mysqli("Localhost","root","","toy");
		$sql = "UPDATE cart SET p_check='1' where email='$email' ";
		
		//$conn->query($sql);

		if($conn->query($sql)== true)
		{
		echo '<script language="javascript">';
    	echo 'alert("Purchase successfull. Your payment has been deducted from your account. Thank you for shoping with Dragon Toys!"); location.href="http://localhost/toy/homel.php"'; //location.href="http://localhost/toy/homel.php"
    	echo '</script>';

		}
		else
		{
		echo "sorry".$sql ."<br>" . $conn->error;
		}

?>