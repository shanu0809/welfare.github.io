<?php




  session_start();
require "connection.php";
if (!isset($_SESSION['success'])) { 
   echo "<script> alert( 'Alert Admin accessible page !!! You need to login first !');
   window.location.href='adminlogin.php';
   </script>";
} 
 
if (isset($_POST['logout'])) { 
    session_destroy(); 
    unset($_SESSION['success']); 
    header("location: index.php"); 
} 


$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){
    if(empty($_POST['articleno'])){
       $articleno='';
    }
    else{
         $articleno=$_POST['articleno'];
    }
      if(empty($_POST['job'])){
       $job='';
    }
    else{
        $job =$_POST['job'];
    }

 if(empty($_POST['des'])){
  $des='';
 }
 else{  $des=$_POST['des'];
}
  if(empty($_POST['n1'])){
     $n1="";
  }
  else{   $n1=$_POST['n1'];
}
  
    if(empty($_POST['n2'])){
     $n2="";
  }
  else{   $n2=$_POST['n2'];
}
  if(empty($_POST['n3'])){
     $n3="";
  }
  else{   $n3=$_POST['n3'];
}
  if(empty($_POST['n4'])){
     $n4="";
  }
  else{   $n4=$_POST['n4'];
}
  if(empty($_POST['n5'])){
     $n5="";
  }
  else{   $n5=$_POST['n5'];
}

  if(empty($_POST['prov'])){
     $prov="";
  }
  else{   $prov=$_POST['prov'];
}
  if(empty($_POST['prov1'])){
     $prov1="";
  }
  else{   $prov1=$_POST['prov1'];
}
  if(empty($_POST['prov2'])){
     $prov2="";
  }
  else{   $prov2=$_POST['prov2'];
}
  if(empty($_POST['prov3'])){
     $prov3="";
  }
  else{   $prov3=$_POST['prov3'];
}
  if(empty($_POST['prov4'])){
     $prov4="";
  }
  else{   $prov4=$_POST['prov4'];
}
  if(empty($_POST['prov5'])){
     $prov5="NULL";
  }
  else{   $prov5=$_POST['prov5'];
}

  if(empty($_POST['cases'])){
     $cases="";
  }
  else{   $cases=$_POST['cases'];
}
  if(empty($_POST['c1'])){
     $c1="";
  }
  else{   $c1=$_POST['c1'];
}
  if(empty($_POST['c2'])){
     $c2="";
  }
  else{   $c2=$_POST['c2'];
}
  if(empty($_POST['c3'])){
     $c3="";
  }
  else{   $c3=$_POST['c3'];
}
  if(empty($_POST['c4'])){
     $c4="";
  }
  else{   $c4=$_POST['c4'];
}  if(empty($_POST['c5'])){
     $c5="";
  }
  else{   $c5=$_POST['c5'];
}
  
if(empty($_POST['valid1'])){
   $valid1='';
}
else{
   $valid1=$_POST['valid1'];
}
if(empty($_POST['valid2'])){
   $valid2='';
}
else{
      $valid2=$_POST['valid2'];
}


  
    
    $sql="INSERT INTO amend(articleno,motive,newlaw,n1,n2,n3,n4,n5,prov,prov1,prov2,prov3,prov4,prov5,cases,c1,c2,c3,c4,c5,valid_from,valid_upto)VALUES('$articleno','$job','$des','$n1','$n2','$n3','$n4','$n5','$prov','$prov1','$prov2','$prov3','$prov4','$prov5','$cases','$c1','$c2','$c3','$c4','$c5','$valid1','$valid2')";

if(mysqli_query($conn,$sql)){

   echo "<script> alert('A New amendment Is Added You Can Visit The Page or add more ');
window.location.href='amendment.php';
</script>";
        }
        else{
                       echo "<script> alert('Problem Occuring While Adding A New Right');
window.location.href='userinfo.php';
</script>";

                
        }
        
}

    else{
                    $_SESSION['message']="not posted field";
                    echo"not";
        }
}       


?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  src="https://code.jquery.com/jquery-3.3.1.js";
   </script>

<style>


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 70%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


 
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden;

    }
    @media(max-width:768px){
      li{
        list-style: none;
          }
        .d-flex span{
          display:none;
        }
    
    }
    .d-flex div{
      text-align: center;
      border-right: 1px solid grey;
      border-top: 1px solid grey;
    }
    .d-flex div:last-child{
      border-right: none;
    }
    .vertical-center {
  margin: 0;
float:center;
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
        <a class="nav-link" href="index.php#service">Services</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="index.php#contact">Contact Us</a>
           <li class="nav-item">
        <a class="nav-link" href="index.php#about">About</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="adminlogin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>

  <?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" align="left" style="overflow-wrap: break-word;overflow: hidden; padding-left: 20px;"> 
                <h3 style="overflow-wrap: break-word;overflow: hidden; padding-left: 20px;"> 
                    <?php
                        echo $_SESSION['success'];  
                     
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?> 
            <p align="center"> 
                    <strong> 
                Welcome On 
            
                    <?php echo $_SESSION['username']; ?> 
                    Portal
                </strong> 
            </p> 
<br>
<h2 align="center" style="overflow-wrap: break-word;overflow: hidden;">Hii, Admin You can Functions using this page</h2>

  <div class="content"> 
   
        <!-- Creating notification when the 
                user logs in -->
          
        <!-- Accessible only to the users that 
                have logged in already -->
      
            <div  align="Right">
             <a href="index.php?logout='1'"> 
           <button  onclick="document.getElementById('id06').style.display='block'" style="width:15%;background-color: Red;color: white;padding: 10px; margin: 40px;">Logout!</button>
                </a></button></div> 
           
        <?php endif ?> 
    </div> 




 <div  align="center"> <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Constitutional Amendments</button></div><br>
       <div  align="center"> <a href="dpsp.php"><button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Visit Directive Principles of State Policies(DPSPs)</button></div><br>
  <div  align="center"> <a href="duties.php"><button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Visit fundamental duties</button></div><br>

   <div  align="center"> <a href="fright.php"><button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Visit fundamental Rights</button></a></div><br>
  <div  align="center"> <a href="amendment.php"><button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Visit latest Amendments</button></a></div><br>
  <a href="govt.php"><div  align="center"> <button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Government Schemes</button></</div></a><br>
<div  align="center">  <a href="addjob.php"> <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Add Jobs</button></a></div><br>
<div  align="center"> <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Add Trainings</button></div><br>

 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   
                                                      
    </div>
    <div class="container">
                         <select id="job" name="job" required>
          <optgroup >
      <option>-----Title-----</option>
    
            <option value="Fundamental Rights"><b>Fundamental Rights</b></option>
            <option value="DPSPs"><b>DPSPs</b></option>
              <option value="Laws"><b>Constitutional Amendment Acts</b></option>
            <option value="Fundamental Duties"><b>Fundamental Duties</b></option>
                <option value="Fundamental Duties"><b>Other Rules Or Laws</b></option>
          </optgroup><br></td></tr>
        </select><br>
     
      <input type="text" placeholder="Enter Article No." name="articleno">  
    
 

    <label for="psw" align="left"><b>Description Of Amendment</b></label><input type="text" placeholder="Enter description of Amendment" name="des" required>
      <input type="text" placeholder="Enter description 1" name="n1">
      <input type="text" placeholder="Enter description 2" name="n2">
      <input type="text" placeholder="Enter description 3" name="n3">
      <input type="text" placeholder="Enter description 4" name="n4">
      <input type="text" placeholder="Enter description 5" name="n5">
      <label for="psw"><b>Judicial Orders And Provisions</b></label>
      <input type="text" placeholder="Enter provisions" name="prov">
      <input type="text" placeholder="Enter provision 1" name="prov1">
      <input type="text" placeholder="Enter provision 2" name="prov2">
      <input type="text" placeholder="Enter provision 3" name="prov3">
      <input type="text" placeholder="Enter provision 4" name="prov4">
      <input type="text" placeholder="Enter provision 5" name="prov5">
       <label for="psw"><b>Related Cases</b></label>
            <input type="text" placeholder="Enter case if any" name="cases">

      <input type="text" placeholder="Enter case 1" name="c1">
      <input type="text" placeholder="Enter case 2" name="c2">
      <input type="text" placeholder="Enter case 3" name="c3">
      <input type="text" placeholder="Enter case 4" name="c4">
      <input type="text" placeholder="Enter case 5" name="c5">
             <label for="psw"><b>valid_from</b></label>
      <input type="date" placeholder="Enter date" name="valid1"> <br>
      <label for="psw"><b>valid_upto</b></label>
            <input type="date" placeholder="Enter date" name="valid2">
        <br>
      <button type="submit" name="submit">Add</button>
   
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>

