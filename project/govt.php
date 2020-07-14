<?php
require'connection.php';
require'functions.php';?>

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

  
   $job=$_POST['job'];
    
      $sector=$_POST['sector'];
    $des=$_POST['des'];
    if($_POST['n1']==''){
      $n1='';
    }
      else{
    $n1=$_POST['n1'];
  }
   if($_POST['n2']==''){
    $n2='';
   }
      else{
       $n2=$_POST['n2'];
     }
       if($_POST['n3']==''){
    $n3='';
   }
      else{
          $n3=$_POST['n3'];
        }
          if($_POST['n4']==''){
    $n4='';
   }
      else{
             $n4=$_POST['n4'];
           }
             if($_POST['n5']==''){
    $n5='';
   }
      else{
                $n5=$_POST['n5'];
              }

                if($_POST['prov']==''){
    $prov='';
   }
      else{
   
   $prov=$_POST['prov'];
 }
                 if($_POST['prov1']==''){
    $prov1='';
   }
      else{
      $prov1=$_POST['prov1'];
    }
                    if($_POST['prov2']==''){
    $prov2='';
   }
      else{
      $prov2=$_POST['prov2'];
    }
                    if($_POST['prov3']==''){
    $prov3='';
   }
      else{
       $prov3=$_POST['prov3'];
     }
                     if($_POST['prov4']==''){
    $prov4='';
   }
      else{
        $prov4=$_POST['prov4'];
      }
                      if($_POST['prov5']==''){
    $prov5='';
   }
      else{
         $prov5=$_POST['prov5'];
     }
        $title=$_POST['title'];
$title = test_input($_POST["title"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
    

   echo "<script> alert('Error! Only letters and white space allowed in title of scheme');
window.location.href='addtraining.php';
   </script>";

    }     

$sector = test_input($_POST["sector"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$sector)) {
    

   echo "<script> alert('Error! Only letters and white space allowed in name of field');
window.location.href='addtraining.php';
   </script>";

    } 

   if($_POST['link']==''){
        $link='no link is provided'; 
    }
       else{     $link=$_POST['link'];
                 $link = test_input($_POST["link"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link)) {
   

   echo "<script> alert('Error! Invalid URL');
window.location.href='govt.php';
   </script>";
    }
  
    }

    $valid1=$_POST['valid1'];
    $valid2=$_POST['valid2'];
  $avatar_path='picture/'.$_FILES['avatar']['name'];
$avatar_path=mysqli_real_escape_string($conn,$avatar_path);
    if(preg_match("!image!",$_FILES['avatar']['type'])){
      if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
        $_SESSION['uname']=$uname;
        $_SESSION['avatar']=$avatar_path;
    
    $sql="INSERT INTO scheme(imagedoc,job,sector,title,des,n1,n2,n3,n4,n5,prov,prov1,prov2,prov3,prov4,prov5,link,valid_from,valid_upto)VALUES('$avatar_path','$job','$sector','$title','$des','$n1','$n2','$n3','$n4','$n5','$prov','$prov1','$prov2','$prov3','$prov4','$prov5','$link','$valid1','$valid2')";

if(mysqli_query($conn,$sql)){


   echo "<script> alert('A New scheme Is Added You Can Visit The Page or add more ');
window.location.href='govt.php';
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
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow: auto; 
font-family: 'Josefin Sans', sans-serif;
    }

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
  overflow: hidden;

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
      </li>
    </ul>
  </div>
</nav>

<h2 align="center">Hii, Admin You can change functions using this page</h2>
<div  align="Right"><a href="userinfo.php"> <button   style="width:15%;background-color: Red;color: white;padding: 10px; margin: 60px;" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Back</button></a>
<a href="index.php"> <button  onclick="document.getElementById('id06').style.display='block'" style="width:15%;background-color: Red;color: white;padding: 10px; margin: 40px;">Logout!</button></a>

 <div  align="center"> <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add New Schemes</button></div>

<div  align="center"> <button  onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Modify Schemes</button></div>
<div  align="center"><a href="govtscheme.php"><button  onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Visit Schemes Page</button></a></div>
<div  align="center"> <button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Delete Outdated Schemes</button></div>




 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" enctype="multipart/form-data" method="POST" autocomplete="off">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   <label><b>Upload Logo  Of Scheme, If Any</b></Label>
  <input type="file" name="avatar"/><br/>
    

                                                      
  
    <div class="container">
                         <select id="job" name="job" required style="width: 50%;">
          <optgroup >
      <option>-----Type Of Scheme-----</option>
    
            <option value="Central"><b>Central</b></option>
            <option value="State"><b>State</b></option>
              
          </optgroup><br></td></tr>
        </select>  </div>
        <br>
     
       <label for="psw" align="left"><b>Title Of Scheme</b></label><input type="text" placeholder="Enter Title Of Scheme" name="title" required>  
    
 <label for="psw" align="left"><b>Sector</b></label><input type="text" placeholder="Enter sector" name="sector" required>

    <label for="psw" align="left"><b>Description Of Scheme</b></label><input type="text" placeholder="Enter description of Amendment" name="des" required>
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
         <label for="psw"><b>For more details visit..</b></label> <input type="text" placeholder="Enter link" name="link">
       <br><br>
             <label for="psw"style="display: inline;"><b>valid_from</b></label>                              <?php
 echo str_repeat("&nbsp;",3);?>   
      <input type="date" style="display: inline;" placeholder="Enter date" name="valid1">
                                    <?php
 echo str_repeat("&nbsp;",8);?>    
      <label for="psw" style="display: inline;"><b>valid_upto</b></label>                              <?php
 echo str_repeat("&nbsp;",3);?>   
            <input type="date"style="display: inline;" placeholder="Enter date" name="valid2">
        <br>  <br>
      <button type="submit" name="submit">Add</button>
   
    </div>

    <div class="container" align="left" style="background-color:#f1f1f1">
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
  
  <form class="modal-content animate" action="deletegovt.php"  method="POST" autocomplete="off">
   <div class="imgcontainer">

      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

  <label for="uname"><b>Type Of Scheme</b></label>
    <div class="container">
            <select id="job" name="job" required>
          <optgroup >
      <option>-----Types-----</option>
    
            <option value="Central"><b>Central</b></option>
            <option value="State"><b>State</b></option>
       
          </optgroup><br></td></tr>
        </select>
         </div>
      <br>

  <label for="uname"><b>Title Of Scheme</b></label>
     <div class="container">
            <select id="name" name="names" required>
          <optgroup >
      <option>-----title-----</option>



   

<?php




 $query = "select title from scheme";
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

    <div class="container" align="left"  style="background-color:#f1f1f1">
      <button type="button" align="left"  onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
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
  
  <form class="modal-content animate" action="modifygovt.php" method="POST">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>


  <label for="uname"><b>Type Of Scheme</b></label>

    <div class="container">


     <select id="job" name="job" required>
          <optgroup >
      <option>-----Types-----</option>
    
            <option value="Central"><b>Central</b></option>
            <option value="State"><b>State</b></option>
              
          </optgroup><br></td></tr>
        </select>  </div>
        <br>

        <label for="uname"><b>Title Of Scheme</b></label>
     <div class="container">
            <select id="name" name="names" required>
          <optgroup >
      <option>-----title-----</option>
<?php




 $query = "SELECT title FROM scheme";
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

   <div class="container" align="left" style="background-color:#f1f1f1">
      <button type="button" align="left"  onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
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

</body>


</html>

