<?php

	
		//setting path
		$target1= "images/".basename($_FILES['photo1']['name']);
		$target2= "images/".basename($_FILES['photo2']['name']);
		$target3= "images/".basename($_FILES['photo3']['name']);

		
		$tpic1=$_FILES["photo1"]["tmp_name"];
		$tpic2=$_FILES["photo2"]["tmp_name"];
		$tpic3=$_FILES["photo3"]["tmp_name"];

		//db connect
		$conn=new mysqli("localhost","root","","toy");

		$pic1=$_FILES["photo1"]["name"];
		$pic2=$_FILES["photo2"]["name"];
		$pic3=$_FILES["photo3"]["name"];
		$tpic1=$_FILES["photo1"]["tmp_name"];
		$tpic2=$_FILES["photo2"]["tmp_name"];
		$tpic3=$_FILES["photo3"]["tmp_name"];
		
		$toy=$_REQUEST["toy"];
		$cat=$_REQUEST["cat"];
		$type=$_REQUEST["type"];
		$shop=$_REQUEST["shop"];
		$price=$_REQUEST["price"];
		$text=$_REQUEST["text"];
		$phone=$_REQUEST["phone"];
		$email=$_REQUEST["email"];
		$password=$_REQUEST["password"];

		$sql="insert into adds(cat,type,toy,shop,pic1,pic2,pic3,price,text,phone,email,password) values('$cat','$type','$toy','$shop','$pic1','$pic2','$pic3','$price','$text','$phone','$email','$password')";
		//$conn->query($sql);
		
		if($conn->query($sql)== true)
		{
		echo '<script language="javascript">';
    	echo 'alert("successfull!"); location.href="http://localhost/toy/homel.php"';
    	echo '</script>';

		}
		else
		{
		echo "sorry".$sql ."<br>" . $conn->error;
		}

		$flag=move_uploaded_file($tpic1,"$target1");
		if($flag)
			{
			echo '<script language="javascript">';
    		echo 'alert("successfull!"); ';
    		echo '</script>';
			}
		else
			echo "Sorry".$sql ."<br>" . $conn->error;
		$flag=move_uploaded_file($tpic2,"$target2");
		if($flag)
			{
			echo '<script language="javascript">';
    		echo 'alert("successfull!"); ';
    		echo '</script>';
			}
		else
			echo "Sorry".$sql ."<br>" . $conn->error;
		$flag=move_uploaded_file($tpic3,"$target3");
		if($flag)
			{
			echo '<script language="javascript">';
    		echo 'alert("successfull!"); ';
    		echo '</script>';
			}
		else
			echo "Sorry".$sql ."<br>" . $conn->error;


	

?>