<?php
	  	$conn=new mysqli("Localhost","root","","toy");
	  	
	  	$name=$_REQUEST["username"];
	  	$pw=$_REQUEST["pw"];
	  	
	  	for ($i=1;$i<=1000;$i++) 
	  	{

	  		$sql ="SELECT * FROM adds WHERE id=$i ";
	  		$result = $conn->query($sql);

	  		while($row =$result->fetch_assoc())
		{
			$id=$row["email"];
			$upw=$row["password"];	
		}
		
		if ($id==$name && $upw==$pw) 
			{
				echo '<script language="javascript">';
    			echo 'alert("Login successfull"); location.href="http://localhost/toy/seller.php"'; 
    			echo '</script>';
    			session_start(); 
				$_SESSION["x"] = $id;
			}
			elseif ($i>995) 
	  		{	
				echo '<script language="javascript">';
    			echo 'alert("Invalid login!!!"); location.href="http://localhost/toy/sellerlogin.php"'; 
    			echo '</script>';
	  		}
	  	}
?>