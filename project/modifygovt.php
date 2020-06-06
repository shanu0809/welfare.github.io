 
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

</head>

<body>
<div id="id03" class="modal">
<form class="modal-content animate" action="modifygovtsch.php" method="POST">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
 <?php
 require "connection.php";
if(isset($_POST['updates'])){
$type=$_POST['job'];
$names=$_POST['names'];

 $query = "SELECT * FROM scheme where title='$names'AND job='$type'";
 $result=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($result);
 if($row){?>
 <label for="psw" align="left"><b>Sector</b></label>
 <ul>
  <li>
<?php if($row['sector']==''){?>

<input type="text" placeholder="Enter sector" name="sector">
<?php}
else{?>
<input type="text" name="sector" value="<?php echo $row['sector']; ?>">
<?php
}
?>
</li>
    <label for="psw" align="left"><b>Description Of Scheme</b></label>
    <li>
<?php if($row['des']==''){
  ?>
<input type="text" placeholder="Enter description of Scheme" name="des">
<?php }
else{
  ?>
 <input type="text" name="des" value="<?php echo $row['des']; ?>"> 
<?php
}
?></li>
<li>
<?php if($row['n1']==''){
  ?>

      <input type="text" placeholder="Enter description 1" name="n1">
<?php
}
else{
  ?>
  <input type="text" name="n1" value="<?php echo $row['n1']; ?>">
<?php
}
?></li>
<li>
  <?php 
if($row['n2']==''){?>
 <input type="text" placeholder="Enter description 2" name="n2">
<?php
}
else{
  ?>
<input type="text"  name="n2" value="<?php echo $row['n2']; ?>">
 
 <?php 
}
?></li>
 <li>
 <?php if($row['n3']==''){?>

      <input type="text" placeholder="Enter description 3" name="n3">
  <?php
}
  else{
    ?>
    <input type="text" name="n3" value="<?php echo $row['n3']; ?>">
 
 <?php
  }
  ?></li>
 <li>
  <?php 
 if($row['n4']==''){
  ?>
   <input type="text" placeholder="Enter description 4" name="n4">
 <?php}
  else {
    ?>
    <input type="text"  name="n4" value="<?php echo $row['n4']; ?>">  
 
 <?php }?></li>
 <li>
  <?php 
 if($row['n5']==''){
  ?>

      <input type="text" placeholder="Enter description 5" name="n5">
  <?php
}
  else{
    ?>
    <input type="text" name="n5" value="<?php echo $row['n5']; ?>">

 <?php
  }
  ?></li>

      <label for="psw"><b>Judicial Orders And Provisions</b></label>
      <li>
 <?php if($row['prov']==''){?>

      <input type="text" placeholder="Enter provisions" name="prov">
  <?php
}

  else{
    ?>
    <input type="text"  name="prov" value="<?php echo $row['prov']; ?>">
 <?php
  }
  ?>
</li>
 
 <li>
  <?php if($row['prov1']==''){
    ?>

     
      <input type="text" placeholder="Enter provision 1" name="prov1">
  <?php
}
else{
  ?>
    <input type="text" name="prov1" value="<?php echo $row['prov1']; ?>">

 
 <?php
  }
  ?>
</li>
<li>
<?php 
 if($row['prov2']==''){?>

      <input type="text" placeholder="Enter provision 2" name="prov2">
  <?php
}
  else{
    ?>
    <input type="text" name="prov2" value="<?php echo $row['prov2']; ?>">

 
 <?php 
}
?></li>
 <li>
  <?php 
 if($row['prov3']==''){
  ?>

      <input type="text" placeholder="Enter provision 3" name="prov3">
  <?php}
  else{
    ?>
    <input type="text" name="prov3" value="<?php echo $row['prov3']; ?>">
 
 <?php 
}
?></li>
 <li>
  <?php
 if($row['prov4']==''){
  ?>

     
      <input type="text" placeholder="Enter provision 4" name="prov4">
  <?php
}
  else{
    ?>
    <input type="text" name="prov4" value="<?php echo $row['prov4'];?>">
 
 <?php 
}
?></li>
 <li>
  <?php
 if($row['prov5']==''){
  ?>

      <input type="text" placeholder="Enter provision 5" name="prov5">
  <?php
}
  else{
    ?>
 

     <input type="text"  name="prov5" value="<?php echo $row['prov5']; ?>">
 
 <?php 
}
?></li>

             <label for="psw"><b>valid_from</b></label>
             <li>
 <?php if($row['valid_from']=='')
 {
  ?>
  <input type="date" placeholder="Enter date" name="valid1"> 
  <?php
}
  else{
    ?>

     <input type="text"  name="valid1" value="<?php echo $row['valid_from']; ?>">
  <?php
}
?></li>

      <label for="psw"><b>valid_upto</b></label>
      <li>
  <?php if($row['valid_upto']==''){
    ?>
  <input type="date" placeholder="Enter date" name="valid2">
<?php
}

else{?>

     <input type="text"  name="valid2" value="<?php echo $row['valid_upto']; ?>">
  <?php
}
?></li>

         <label for="psw"><b>For more details visit..</b></label>
         <li>
         <?php if($row['link']=='')
         {
          ?>
           <input type="text" placeholder="Enter link" name="link"/>

        <?php 
      }
        else{
          ?>

     <input type="text"  name="link" value="<?php echo $row['link']; ?>"/>

        <?php
      }
        ?></li></ul>

     
 <br>     
 <button type="submit" name="update">Update Changes</button>

  </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<?php
}
}
else{
  echo "not perform";
}
?>


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
