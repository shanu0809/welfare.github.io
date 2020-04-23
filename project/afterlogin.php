<?php
require "connection.php";
echo $msg;
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit']) and isset($_POST['username']) and isset($_POST['password'])){
        
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql="SELECT username, passsword
	 FROM login where username='$username' AND passsword='$password' ";
		}
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){

$_SESSION['login_user']=$username;

	header('location:userinfo.php');
	
}
else{
	echo 'failure';
}}?>
