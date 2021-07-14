<?php

	$conn=new mysqli("localhost","root","","toy");
	
	$sql="DELETE FROM adds WHERE id='$_REQUEST[id]' ";
	$result = $conn->query($sql);
	
	if($conn->query($sql)== true)
	{
		echo '<script language="javascript">';
    	echo 'alert("Add is deleted."); location.href="http://localhost/toy/seller.php"';
    	echo '</script>';
		
	}
	else
	{
		echo "error".$sql ."<br>" . $conn->error;
	}


	$conn->close();
		?>	