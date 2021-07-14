<?php
	  	$conn=new mysqli("Localhost","root","","toy");
	  	$username=$_REQUEST["uname"];
	  	$password=$_REQUEST["password"];
	  	for ($i=1;$i<=100;$i++) 
	  	{
	  		$sql ="SELECT * FROM users WHERE u_id='$i' ";
	  		$result = $conn->query($sql);
	  		while($row =$result->fetch_assoc())
		{
			$email=$row["email"];
			$pw=$row["password"];	
		}
		if ($email==$username && $pw==$password) 
			{
				echo '<script language="javascript">';
    			echo 'alert("Hi Welcome!!!"); location.href="http://localhost/toy/homel.php"';
    			echo '</script>';
    			session_start();
    			$_SESSION["login"] = $email;
    			
    			
			}
			elseif ($i>95) 
	  		{	
				echo '<script language="javascript">';
    			echo 'alert("Invalid login!!!"); location.href="http://localhost/toy/home.php"';
    			echo '</script>';
	  		}
	  	}
?>