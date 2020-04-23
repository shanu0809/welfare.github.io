<?php
require "connection.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit'])){
        
            $email = mysqli_real_escape_string($conn,$_POST['email']);
        
	
	$sql="SELECT email FROM login where email='$email' ";
		
$result= mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
if($count==1){
		$subject="Password Reset";
		$body="Hi, Admin click here to change your password http://localhost:8080/project/forgot.php";
		$sender_email="From: humanity0809@gmail.com";

		if(mail($email,$subject,$body,$sender_email)){

			echo "check you mail to change your password $email";
		

			
		
		}
		else{
			echo "email sending failed.......";
		}
	}
	else{
		echo "No email found";
	}
}}



	?>
