<?php
require'connection.php';
require'functions.php';
include('dbs.php');
?>

<?php


  session_start();  
$_SESSION['message']='';


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){

   $factory=$_POST['factory'];
        $address=$_POST['address'];
         $exp=$_POST['exp'];
            $salary=$_POST['salary'];
    $des=$_POST['des'];
    $country=$_POST['country'];
    $sql1="SELECT name FROM country WHERE id='$country'";
    $res=mysqli_query($conn,$sql1);
    $row2=mysqli_fetch_assoc($res);
    if($row2){

$country=$row2['name'];
    }

      $state=$_POST['state'];
          $sql1="SELECT name FROM state WHERE id='$state'";
    $res=mysqli_query($conn,$sql1);
    $row2=mysqli_fetch_assoc($res);
    if($row2){

$state=$row2['name'];
    }
        $city=$_POST['city'];

            $sql1="SELECT name FROM city WHERE id='$city'";
    $res=mysqli_query($conn,$sql1);
    $row2=mysqli_fetch_assoc($res);
    if($row2){

$city=$row2['name'];
    }
             $link=$_POST['link'];
                 $link = test_input($_POST["link"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link)) {
    echo "Invalid URL";
    }

$title = test_input($_POST["title"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
      $_SESSION['message'] = "Only letters and white space allowed";
    }
$factory = test_input($_POST["factory"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$factory)) {
      $_SESSION['message'] = "Only letters and white space allowed";
    }



                $posttime=$_POST['posttime'];
                  $closetime=$_POST['closetime'];

    $skills=$_POST['skills'];
       $status=$_POST['status'];
    $sql="INSERT INTO  job(skills,title,factory,des,country,state,city,link,posttime,status,address,closetime,salary,exp)VALUES('$skills','$title','$factory','$des','$country','$state','$city','$link','$posttime','$status','$address','$closetime','$salary','$exp')";

if(mysqli_query($conn,$sql)){


   echo "<script> alert('A New job Is Added ')</script>";

   
} 
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js">





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
  padding-top: 30px;
  padding-bottom: 20px;
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
 overflow-y: hidden;

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
.headdiv{

}
</style>
  <div id="divLoading"></div>
  <style>
  #divLoading {
    display : none;
  }
  #divLoading.show{
    display : block;
    position : fixed;
    z-index: 100;
    background-image : url('http://loadinggif.com/images/image-selection/3.gif');
    background-color:#666;
    opacity : 0.4;
    background-repeat : no-repeat;
    background-position : center;
    left : 0;
    bottom : 0;
    right : 0;
    top : 0;
  }
  #loadinggif.show {left : 50%;
    top : 50%;
    position : absolute;
    z-index : 101;
    width : 32px;
    height : 32px;
    margin-left : -16px;
    margin-top : -16px;
  }

.multiselect {
  width: 500px;
  margin-left: 20px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
  al

}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}


  </style>

                                      <script>
                  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

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
        <a class="nav-link " href="blogging/blogView.php">Blogs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="commentmain.php">Ask Query</a>
      </li>
    </ul>
  </div>
</nav><h2 align="center">Hii, Admin You can change functions using this page</h2>

<div  align="Right"><a href="userinfo.php"> <button   style="width:15%;background-color: Red;color: white;padding: 10px; margin: 60px;" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Back</button></a>
<a href="index.php"> <button  onclick="document.getElementById('id06').style.display='block'" style="width:15%;background-color: Red;color: white;padding: 10px; margin: 40px;">Logout!</button></a>
</div>
<section class="my-5">
 
<div class="container-fluid">
 
 
   

 <div  align="center"> <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add New Jobs</button></div>


<div  align="center"> <button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Delete Outdated Job</button></div>
<div  align="center"> <button  onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Update Existing Job</button></div>

<div  align="center"><a href="visitjob.php"><button  onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Visit Jobs</button></a></div>

</div></section>



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    
<br>
                                                      

     
       <label for="psw" align="left"><b>Name Of Job</b></label><input type="text" placeholder="Enter title of job " name="title" required> 

           <label for="psw" align="left"><b>Description Of Job</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter description of Job" name="des" required/>

           <label for="psw" align="left"><b>Skills Required For Job</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter skills" name="skills"/><br><br>
                <label for="psw" align="left" style="margin-left:5px;display: inline; "><b>Experience Required if any,</b></label>                                         <?php
 echo str_repeat("&nbsp;",3);
 ?><input type="number"  min="0" max="50" style="height: 40px; width:200px; text-align: top;padding-top: 5px;display: inline; " placeholder="Experience" name="exp" />                                         <?php
 echo str_repeat("&nbsp;",3);
 ?><label for="psw" align="left"style="display: inline;"><b>Years</b></label>
                                           <?php
 echo str_repeat("&nbsp;",8);
 ?><label for="psw" align="left" style="display: inline;"><b>Salary Expected in Rs.</b></label>
                                         <?php
 echo str_repeat("&nbsp;",3);
 ?>
 <input type="number"  min="1000"  max="100000" style="height: 40px; width:200px; text-align: top;padding-top: 5px;display: inline;" placeholder="Enter Salary/month" name="salary" /><br><br>

           <label for="psw"><b>Name Of Factory/Industry</b></label> <input type="text" placeholder="Enter name of factory or industry" name="factory"/> 


  
         <label for="psw"><b>For Job visit..</b></label> <input type="text" placeholder="Enter website or e-mail of factory if any," name="link"/>
  
      
         <label for="psw"><b>Address Of Factory</b></label> <br><input type="text" placeholder="Enter address of factory" name="address"/>
<br>

<?php

$sql="select id,name from country";
$stmt=$con->prepare($sql);
$stmt->execute();
$arrCountry=$stmt->fetchAll(PDO::FETCH_ASSOC);
$id='';
?>


<div>
<label for="country"><b>Country</b></label>
            <select class="form-control" id="country" name="country">
              <option value="-1">Select Country</option>
              <?php
              foreach($arrCountry as $country){
                ?>
                <option value="<?php echo $country['id']?>"><?php echo $country['name']?></option>
                <?php

       
                ?>
             <?php 
           }
              ?>
            </select>
</div>


<div>
<label for="state"><b>State</b></label>
            <select class="form-control" id="state" name="state">
              <option>Select State</option>
            </select>
</div>

  <div><label for="city"><b>City</b></label>
            <select class="form-control" id="city" name="city">
              <option>Select City</option>
            </select>
</div> 


  
    <br>
 
            <h6 class="jumbotron-heading"><b><u>Posting Time  :</u> </b>
                             <input type="hidden" class="form-control"  name="posttime" value="<?php  

date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>
"/><?php
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');


?></h6>

<br><br>
            <h6 class="jumbotron-heading"><b>Closing Time  : </b></h6>
                             <input type="date" class="form-control"  name="closetime" placeholder="Enter date of closing"/> 
<br>

  <h6 class="jumbotron-heading"><b>Status  : </b>
                             <input type="hidden" class="form-control"  name="status" value="Active"/> <?php echo "Active";
                             ?></h6>





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

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  <script>
  $(document).ready(function(){
    jQuery('#country').change(function(){
      var id=jQuery(this).val();
      if(id=='-1'){
        jQuery('#state').html('<option value="-1">Select State</option>');
      }else{
        $("#divLoading").addClass('show');
        jQuery('#state').html('<option value="-1">Select State</option>');
        jQuery('#city').html('<option value="-1">Select City</option>');
        jQuery.ajax({
          type:'post',
          url:'get_data.php',
          data:'id='+id+'&type=state',
          success:function(result){
            $("#divLoading").removeClass('show');
            jQuery('#state').append(result);
          }
        });
      }
    });
    jQuery('#state').change(function(){
      var id=jQuery(this).val();
      if(id=='-1'){
        jQuery('#city').html('<option value="-1">Select City</option>');
      }else{
        $("#divLoading").addClass('show');
        jQuery('#city').html('<option value="-1">Select City</option>');
        jQuery.ajax({
          type:'post',
          url:'get_data.php',
          data:'id='+id+'&type=city',
          success:function(result){
            $("#divLoading").removeClass('show');
            jQuery('#city').append(result);
          }
        });
      }
    });
  });
  </script>





<div id="id02" class="modal">
  
  <form class="modal-content animate" action="deletejob.php"  method="POST" autocomplete="off">
   <div class="imgcontainer">

      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

<label for="uname"><b>Name Of Job</b></label>
     <div class="container" style="width: 70%;">
            <select id="title" name="title" required>
          <optgroup >
      <option>-----Title Of Job-----</option>
<?php




 $query = "SELECT title FROM job";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['title']; ?>"><b><?php echo $row['title'];

          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        
        </select>

 

      </div>
        <br>

        <label for="uname"><b>Name Of Factory</b></label>
     <div class="container" style="width: 70%;">
            <select id="factory" name="factory" required>
          <optgroup >
      <option>-----Name Of Factory-----</option>
<?php




 $query = "SELECT factory FROM job";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['factory']; ?>"><b><?php echo $row['factory'];

          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        
        </select>
</div>
<br>
    <div  align="center">
 <button type="submit" name="delete">Delete</button>
</div>

   <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
</div></form></div>

  

<script>


 // Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="modifyjob.php" method="POST">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

          <label for="uname"><b>Name Of Job</b></label>
     <div class="container" style="width: 70%;">
            <select id="name" name="title" required>
          <optgroup >
      <option>-----Title Of Job-----</option>
<?php




 $query = "SELECT title FROM job";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['title']; ?>"><b><?php echo $row['title'];

          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        
        </select> </div>
        <br>

        <label for="uname"><b>Name Of Factory</b></label>
     <div class="container" style="width: 70%;">
            <select id="factory" name="factory" required>
          <optgroup >
      <option>-----name Of Factory-----</option>
<?php




 $query = "SELECT factory FROM job";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['factory']; ?>"><b><?php echo $row['factory'];

          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        
        </select>
</div>
<br>
    <div  align="center">
 <button type="submit" name="updates">Update Changes</button>
</div>

   <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
</div></form></div>

  


<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





</div>
</body>
</html>









