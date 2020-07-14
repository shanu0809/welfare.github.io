<!DOCTYPE html>
<head>
<title></title>	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="css/style1.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 	*{margin: 0; padding: 0; box-sizing: border-box;
overflow-x: hidden; 
font-family: 'Josefin Sans', sans-serif;}
 	.bgimg{
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(27deg, navy 50%,lightblue 50%);
 }
.centerdiv{
	width: 300px;
	height: 400px;
	position: absolute;
	top: 50%;
	bottom: 50%;
left: 50%;
right: 50%;
	  background-image: linear-gradient(27deg, lightblue 50%,navy 50%);
	transform: translate(-50%, -50%);
	box-shadow: 0 1px 6px rgba(0,0,0,1), 0 1px 4px rgba(0,0,0,1);
}
.heading{
	text-align: center;
	color: white;
	text-transform:uppercase;
	font-size: 2em;
	word-spacing: 10px;
	margin-top: 40px;
	text-shadow: -2px 2px 1px #0A84C6;
}
.inputbox{
	width: calc(100% - 40px);
	height: 30px;
	display:block;
	margin: auto;
	padding: 0 10px;
}
::placeholder{
letter-spacing: 1px;
color: black;
}
button{
	width: calc(100% - 40px);
	height: 30px;
	display:block;
	margin: auto;
color: white;
background-color: #0A84C6;
border:none;
}
.forgot{
	width: calc(100% - 40px);
	line-height: 30px;
	display:block;
	margin: auto;
color: white;
background-color: dodgerblue;
font-size: 0.8em;
text-align: right;
padding-right: 20px;
}
.error{
	text-align: left;
	font-size: 1em;
	word-spacing: 3px;
	color: red;
}
 </style>
 </head>
 <body> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">E-Legal Aid & Welfare Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
           <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="adminlogin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>




 	<div class="bgimg">
 		<div class="centerdiv">
<h2 class="heading">Forgot Password</h2><br>
<p style="text-align: center;
	color: white;
	text-transform:uppercase;	text-shadow: -2px 2px 1px #0A84C6; ">Change your password</p>
<br>
<br>
<form method="post" action="#">
	

	<div>
	<input type="password" name='pass' class="inputbox" value="" placeholder="Enter New Password" required autofocus>
</div><br>
	<div>
	<input type="password" name='cpass' class="inputbox"value="" placeholder="Re-enter Password" required>
	
</div><br>


	<div>
		<button type="submit" name='log'>submit</button>
</div>


</form>	</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </body>
</html>
<?php

 require "connection.php";
if(isset($_POST['log'])){

$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

 if($pass!=$cpass){
 	 echo "<script> alert('confrim password is not matched ');
window.location.href='forgot.php';
</script>";

}

else if(strlen($pass)<=5){
 	 echo "<script> alert('password must be of length greater than 5');
window.location.href='forgot.php';
</script>";
}
else{
	$sql="update login set passsword='".$cpass."'WHERE username='welfare'";
$result= mysqli_query($conn,$sql);

if($result){

 	 echo "<script> alert('password updated successfully, now you can login using new password ');
window.location.href='adminlogin.php';
</script>";
}
else{
	echo 'failure';}}}


?>
