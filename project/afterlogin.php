<?php

session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
$_SESSION['success']="";
require "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

if(isset($_POST['submit']) and isset($_POST['username']) and isset($_POST['password'])){
        
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql="SELECT username, passsword
	 FROM login where username='$username' AND passsword='$password' ";
		
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){

$_SESSION['username']=$username;

$_SESSION['success']='You have logged in!';
	header('location:userinfo.php');
	
}
else{
	 echo "<script> alert( 'Username or password incorrect');
	 window.location.href='adminlogin.php';
	 </script>";
}
    
}
}
?>
