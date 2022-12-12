<?php 
	include('db_connect/conn.php');
	echo $name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	 if($email!='' && $mobile!=''){
	 	$insertSql=$conn->query("INSERT INTO contact_us(name,email,mobile,subject,message)VALUES('$name','$email','$mobile','$subject','$message')");
		echo "You have successfully submitted your details...";
	}
 ?>