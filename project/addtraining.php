<?php
require'connection.php';
require'functions.php';?>





<?php


  session_start();  
$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){

   $title=$_POST['title'];
   $type=$_POST['type'];
    
      
    $des=$_POST['des'];
   
  $dur=$_POST['dur'];
             $link=$_POST['link'];
                $posttime=$_POST['posttime'];

  $avatar_path='training/'.$_FILES['avatar']['name'];
$avatar_path=mysqli_real_escape_string($conn,$avatar_path);
    if(preg_match("!image!",$_FILES['avatar']['type'])){
      if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
        $_SESSION['title']=$title;
        $_SESSION['avatar']=$avatar_path;
    if($type=='Online'|| $type=='Offline'){
    $sql="INSERT INTO  training(imagedoc,type,title,des,link,dur,posttime)VALUES('$avatar_path','$type','$title','$des','$link','$dur','$posttime')";

if(mysqli_query($conn,$sql)){


   echo "<script> alert('A New Course Is Added ');
window.location.href='addtraining.php';
</script>";
        }
        else{
                    $_SESSION['message']="user could not be added to database";
                  
                  
        }
}

else{
                $_SESSION['message']="File upload failed";
      }
}

else{
        $_SESSION['message']="please upload only jpg,jpeg,png,gif pictures";
    }


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
</nav><h2 align="center">Hii, Admin You can change functions using this page</h2>
<div  align="Right"><a href="index.php"> <button  onclick="document.getElementById('id06').style.display='block'" style="width:15%;background-color: Red;color: white;padding: 10px; margin: 40px;">Logout!</button></a></div>
 <div  align="center"> <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add New Online Course</button></div>
<div  align="center"> <button  onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Add New Offline Courses</button></div>
<div  align="center"> <button  onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Update Existing Course</button></div>
<div  align="center"> <button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Delete Course</button></div><br>
<div  align="center"><a href="training.php"><button  onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Visit Added Courses</button></a></div>
<div  align="center"><a href="userinfo.php"> <button  onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Back</button></a></div>


 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   <label><b>Upload Logo  Of Scheme, If Any</b></Label>
  <input type="file" name="avatar"/><br/>
    
<br><br>
                                                      
  
  <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="Online"/><?php echo "Online Course";
                               ?>
 
                         </h6>
     
       <label for="psw" align="left"><b>Title Of Course</b></label><input type="text" placeholder="Enter Title Of Course" name="title" required>  

    <label for="psw" align="left"><b>Description Of Scheme</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter description of course" name="des" required>
  
         <label for="psw"><b>For Course access visit..</b></label> <input type="text" placeholder="Enter link" name="link">
  
      
         <label for="psw"><b>Duration Of Course  </b></label> <br><input type="text" placeholder="Enter duration of course" name="dur">
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



<div id="id02" class="modal"data-toggle="modal">
  
  <form class="modal-content animate" action="deletecourse.php"  method="POST" autocomplete="off">
   <div class="imgcontainer">

      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
            <select id="type" name="type" required>
          <optgroup >
      <option>-----Types-----</option>
    
            <option value="Online"><b>Online</b></option>
            <option value="Offline"><b>Offline</b></option>
       
          </optgroup><br></td></tr>
        </select>
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


     <select id="type" name="type" required>
          <optgroup >
      <option>-----Types-----</option>
    
            <option value="Online"><b>Online</b></option>
            <option value="Offline"><b>Offline</b></option>
              
          </optgroup><br></td></tr>
        </select>  </div>
        <br>

        <label for="uname"><b>Title Of Course</b></label>
     <div class="container">
            <select id="title" name="title" required>
          <optgroup >
      <option>-----title-----</option>
<?php




 $query = "SELECT title FROM training";
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




 

<div id="id07" class="modal">
  
  <form class="modal-content animate" action="addoffline.php" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
   <label><b>Upload Logo  Of Scheme, If Any</b></Label>
  <input type="file" name="avatar"/><br/>
    
<br><br>
                                                      
  
  <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="Offline"/><?php echo "Offline Course";
                               ?>
 
                         </h6>

    <label for="psw" align="left"><b>Name Of Center</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter Name Of Vocational Center" name="des">
      <label for="psw" align="left"><b>Address Of Center</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter description of course" name="des" >  
     
       <label for="psw" align="left"><b>Title Of Course</b></label><input type="text" placeholder="Enter Title Of Course" name="title" required>  

    <label for="psw" align="left"><b>Description Of Course</b></label><input type="text" style="height: 200px;text-align: top;padding-top: 5px;" placeholder="Enter description of course" name="des" required>
  
    
    




         <label for="psw"><b>Website Of Vocational Center...</b></label> <input type="text" placeholder="Enter link" name="link">
  
      
         <label for="psw"><b>Duration Of Course  </b></label> <br><input type="text" placeholder="Enter duration of course" name="dur">
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








</body>
</html>









