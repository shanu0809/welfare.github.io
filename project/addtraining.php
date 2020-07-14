<?php
require'connection.php';
require'functions.php';
include('dbs.php');
?>





<?php


  session_start(); 
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){

   $type=$_POST['type'];
        $title=$_POST['title'];
    $des=$_POST['des'];
   
  $field=$_POST['field'];
            
                $posttime=$_POST['posttime'];
              


   if($_POST['link']==''){
        $link='no link is provided'; 
    }
       else{     $link=$_POST['link'];
                 $link = test_input($_POST["link"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link)) {
   

   echo "<script> alert('Error! Invalid URL');
window.location.href='addtraining.php';
   </script>";
    }
  
    }

     if($_POST['videolink']==''){
        $link='no related video'; 
    }
       else{     $videolink=$_POST['videolink'];
           
    }
  



  

    $sql="INSERT INTO  training(type,des,link,posttime,field,videolink,title)VALUES('$type','$des','$link','$posttime','$field','$videolink','$title')";

if(mysqli_query($conn,$sql)){


   echo "<script> alert('A New Course Is Added ');

</script>";
        }
        else{

   echo "<script> alert(' user could not be added to database');
window.location.href='addtraining.php';
</script>";
                  
                  
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
  </style>
  
                                      <script>
                  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


</head>
<body>

  <div id= "google_translate_element" style="background:url('img/pic06.jpg');background-size:cover;color: white;top: 0;display: block;margin-top: 0; height:auto;position:absolute;left:0; right: 0; top:0;width:100%;"></div>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
     
    </ul>
  </div>
</nav><h2 align="center">Hii, Admin You can change functions using this page</h2>

<div  align="Right"><a href="userinfo.php"> <button   style="width:15%;background-color: Red;color: white;padding: 10px; margin: 60px;" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Back</button></a>
<a href="index.php"> <button  onclick="document.getElementById('id06').style.display='block'" style="width:15%;background-color: Red;color: white;padding: 10px; margin: 40px; ">Logout!</button></a>
</div>
<section class="my-5">
 
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
   

 <div  align="center"> <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Online Course</button></div>


<div  align="center"> <button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Delete Online Course</button></div>
<div  align="center"> <button  onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Update Online Course</button></div>

<div  align="center"><a href="training.php"><button  onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Visit Added Online Courses</button></a></div>


    </div>

    <div class="col-lg-6 col-md-6 col-12">

  
<div  align="center"> <button  onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Add Offline Courses</button></div>
<div  align="center"> <button  onclick="document.getElementById('id08').style.display='block'" style="width:auto;" >Delete Offline Course</button></div>


<div  align="center"> <button  onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Update Offline Course</button></div>

<div  align="center"><a href="offlinetraining.php"> <button  onclick="document.getElementById('id010').style.display='block'" style="width:auto;" >Visit Added Offline Course</button></a></div>

</div></div></div></section>






<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                                                      
  
  <h6 class="jumbotron-heading" align="center"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="Online" required/><?php echo "Online Course";
                               ?>
 
                         </h6>
<br>
<div>
                           <select id="field" name="field" style="width:50%;" align="center"required>
          <optgroup >
      <option>----Field related to course------</option>
    
            <option value="agriculture"><b>Agriculture</b></option>
            <option value="construction"><b>construction</b></option>
              
          </optgroup><br></td></tr>
        </select>  </div>
        <br>

                               <label for="psw" align="center"><b>Title</b></label><input type="text" class="form-control"  name="title" placeholder="Enter title" required/>
    <label for="psw" align="center"><b>Description Of Course</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter description of course" name="des" required>
  <br>
         <label for="psw"align="center"><b>For Course access visit..</b></label> <input type="text" placeholder="Enter link" name="link"/>
  
<br><br>

<label align="center" style="margin:10px;display: inline;"><b>https://www.youtube.com/embed/</b></label>                                                <?php
 echo str_repeat("&nbsp;",3);?>                   <input type="text" class="form-control" name="videolink" style="height: 40px; width:400px; text-align: top;padding-top: 5px;display: inline; margin-left: 40px;" placeholder="Enter video link id" required/>   <br><br>
 
            <h6 class="jumbotron-heading" align="center"><b><u>Posting Time  :</u> </b>
                             <input type="hidden" class="form-control"  name="posttime" value="<?php  

date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>
"/><?php
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');


?>

<br><br>
      <button type="submit" name="submit" align="center" >Add</button>
   
  </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
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



<div id="id07" class="modal" data-toggle="modal">
  
  <form class="modal-content animate" action="addoffline.php" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
 <br>
                                                      
  
  <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="Offline"/><?php echo "Offline Course";
                               ?>
 
                        </h6>

         <label for="psw"><b>Title Of Course</b></label> <input type="text" placeholder="Enter title of course" name="title" required/>



 <label for="psw" align="left"><b>Field Of Course</b></label><input type="text" placeholder="Enter Field Of Course" name="field" required/> 



    <label for="psw" align="left"><b>Description Of Course</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px; overflow-wrap: break-word;" placeholder="Enter description of course" name="des" required/>




    <label for="psw" align="left"><b>Name Of Center</b></label><input type="text"  placeholder="Enter Name Of Vocational Center" name="name" required/>

      <label for="psw" align="left"><b>Address Of Vocational Center</b></label><input type="text" style="height: 100px;text-align: top;padding-top: 5px; overflow-wrap: break-word;" placeholder="Enter Address of course Center" name="address" required/> <br><br>
          <label for="psw" align="left" style="display: inline;"><b>Contact Person</b></label>                                          <?php
 echo str_repeat("&nbsp;",3);
 ?><input type="text"  placeholder="Enter Name of contact person" name="person" style="height: 40px; width:400px; text-align: top;padding-top: 5px;display: inline; " />                                          <?php
 echo str_repeat("&nbsp;",8);
 ?> 
           <label for="psw" align="left"style="display: inline;"><b>Phone no.</b></label>                                          <?php
 echo str_repeat("&nbsp;",3);
 ?><input type="number"  placeholder="Enter Phone no." name="mob" style="height: 40px; width:200px; text-align: top;padding-top: 5px;display: inline; " /> 
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


  
    
      <br><br>
<label align="left" style="margin:10px;display: inline;"><b>https://www.youtube.com/embed/</b></label>                                                <?php
 echo str_repeat("&nbsp;",3);?>                   <input type="text" class="form-control" name="videolink" style="height: 40px; width:400px; display: inline;margin-left: 40px; " placeholder="Enter video link id">   
<br><br>
<label for="psw"><b>Website Of Vocational Center...</b></label> <input type="text" placeholder="Enter link" name="link"/>
  
      
         <label for="psw"><b>Duration Of Course  </b></label> <br><input type="text" placeholder="Enter duration of course" name="dur"/>
<br>
 
            <h6 class="jumbotron-heading"><b><u>Posting Time  :</u> </b>
                             <input type="hidden" class="form-control"  name="posttime" value="<?php  

date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>
"/><?php
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');


?>

<br><br>
      <button type="submit" name="submit">Add</button>
   
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id07').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>









<script>
// Get the modal
var modal = document.getElementById('id07');

// When the user clicks anywhere outside of the modal, close it
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
 



<div id="id08" class="modal">
  
  <form class="modal-content animate" action="deleteofflinecourse.php"  method="POST" autocomplete="off">
   <div class="imgcontainer">

      <span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="offline course"/><?php echo "Offline Course";
                               ?>
 
                         </h6>
         </div>
      <br>

  <label for="uname"><b>Title Of Course</b></label>
     <div class="container">
            <select id="title" name="title" required>
          <optgroup >
      <option>-----title-----</option>



   

<?php




 $query = "select title from addtraining";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['title'] ?>"><b><?php echo $row['title'];
          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        </select>
         </div>

  <label for="uname"><b>Name Of Center</b></label>
     <div class="container">
            <select id="name" name="name" required>
          <optgroup >
      <option>-----Name-----</option>



   

<?php




 $query = "SELECT name from addtraining";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['name'] ?>"><b><?php echo $row['name'];
          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        </select>
         </div>    
        
      <button type="submit" name="delete">Delete</button>
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id08').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>


 // Get the modal
var modal = document.getElementById('id08');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<div id="id02" class="modal">
  
  <form class="modal-content animate" action="deletecourse.php"  method="POST" autocomplete="off">
   <div class="imgcontainer">

      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

<div class="container">
      <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="offline course"/><?php echo "Online Course";
                               ?>
 
                         </h6>
         </div>
      <br>

  <label for="uname"><b>Title Of Course</b></label>
     <div class="container">
            <select id="title" name="title" required>
          <optgroup >
      <option>-----title-----</option>



   

<?php




 $query = "select title from training";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['title'] ?>"><b><?php echo $row['title'];
          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        </select>
         </div>

  <label for="uname"><b>Field Of Course</b></label>
     <div class="container">
            <select id="field" name="field" required>
          <optgroup >
      <option>-----Field Of Course-----</option>



   

<?php




 $query = "SELECT field from training";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['field'] ?>"><b><?php echo $row['field'];
          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        </select>
         </div>    
        
      <button type="submit" name="delete">Delete</button>
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

                        


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





<div id="id03" class="modal">
  
  <form class="modal-content animate" action="modifycourse.php" method="POST">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

 <div class="container">
      <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="offline course"/><?php echo "Online Course";
                               ?>
 
                         </h6>
         </div>
      <br>

  <label for="uname"><b>Title Of Course</b></label>
     <div class="container">
            <select id="title" name="title" required>
          <optgroup >
      <option>-----title-----</option>



   

<?php




 $query = "select title from training ";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['title'] ?>"><b><?php echo $row['title'];
          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        </select>
         </div>

  <label for="uname"><b>Field Of Course</b></label>
     <div class="container">
            <select id="field" name="field" required>
          <optgroup >
      <option>-----Field Of Course-----</option>



   

<?php




 $query = "SELECT field from training";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['field'] ?>"><b><?php echo $row['field'];
          }
        }
        ?></b></option>
          
       
          </optgroup><br></td></tr>
        </select>
         </div>    
        
      <button type="submit" name="updates">Update Changes</button>
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id08').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>






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

<div id="id09" class="modal">
  
  <form class="modal-content animate" action="modifyofflinecourse.php" method="POST">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="container">

<h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="offline course"/><?php echo "Offline Course";
                               ?>
 
                         </h6></div>




        <br>

        <label for="uname"><b>Title Of Course</b></label>
     <div class="container">
            <select id="title" name="title" required>
          <optgroup >
      <option>-----title-----</option>
<?php




 $query = "SELECT title FROM addtraining ";
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


  <label for="uname"><b>Name Of Center</b></label>
     <div class="container">
            <select id="name" name="name" required>
          <optgroup >
      <option>-----Name-----</option>



   

<?php




 $query = "SELECT name from addtraining";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                         <option value="<?php echo $row['name'] ?>"><b><?php echo $row['name'];
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
      <button type="button" onclick="document.getElementById('id09').style.display='none'" data-dismiss="modal" class="cancelbtn">Cancel</button>
</div></form></div>

  






<script>
// Get the modal
var modal = document.getElementById('id09');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>






</body>
</html>









