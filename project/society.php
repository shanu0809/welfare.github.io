
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  src="https://code.jquery.com/jquery-3.3.1.js";
   </script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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

<h2>Helping Societies Page</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Profile</button><br>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Add Requirements</button><br>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Add Vacancies</button><br>
<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Meetings</button><br>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="help1.php" enctype="multipart/form-data" method="POST" autocomplete="off">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <label><b>Upload Logo</b></Label>
                                                          <input type="file" name="avatar" id= "imagedoc" accept="img/*" required/><br/>
    </div>

    <div class="container">
      <label for="uname"><b>Name of Society</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Biography</b></label>
      <input type="text" placeholder="Enter Biography" name="psw" required>
	  <label for="psw"><b> Email_Id</b></label>
						      <input type="email" placeholder="email_id" name="email" required>
							<label for="psw"><b>Phone no.</b></label>  						
						      <input type="number_format" placeholder="Phone no." name="phone" required>
							  
							  				<label for="psw"><b>Motive</b></label>  						
						      <input type="text" placeholder="motive" name="type" required>
        
      <input type="submit" name="submit" value="Add">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
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



<div id="id02" class="modal">
  
  <form class="modal-content animate" action="help2.php"  method="POST" autocomplete="off">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
 </div>
    <div class="container">
      <label for="uname"><b>Name of Society</b></label>
      <input type="text" placeholder="Enter Username" name="name" required><br>
	  					<label for="psw"><b> Email_Id</b></label>
						      <input type="email" placeholder="email_id" name="em" required><br>
							  <label for="psw"><b>Motive</b></label>
				<select id="job" name="job" required>
          <optgroup >
		  <option>-----motive-----</option>
		
            <option value="Save Girl Child"><b>save girl child</b></option>
            <option value="women Empowerment"><b>women empowerment</b></option>
            <option value="Old Age Home"><b>old age home</b></option>
          </optgroup><br></td></tr>
        </select>
							<label for="psw"><b>Phone no.</b></label>  						
						      <input type="number_format" placeholder="Phone no." name="phn" required><br>

      <label for="psw"><b> Add requirements</b></label>
      <input type="text" placeholder="Enter requirement 1" name="r1" required>
	        <input type="text" placeholder="Enter requirement 2" name="r2">
			      <input type="text" placeholder="Enter requirement 3" name="r3">
				        <input type="text" placeholder="Enter requirement 4" name="r4">
	
        
      <button type="submit" name="add">Add Requirements</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
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
  
  <form class="modal-content animate" action="help3.php" method="POST">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
 </div>
    <div class="container">
      <label for="uname"><b>Name of Society</b></label>
      <input type="text" placeholder="Enter Username" name="nm" required>

      <label for="psw"><b> Add vacancies</b></label><br>
      <input type="text" placeholder="Enter vacancy 1" name="v1" required><label for="psw"><b>valid_upto</b></label> <input type="date" placeholder="last date 1" name="ls1" required> 						
	        <input type="text" placeholder="Enter vacancy 2" name="v2"><label for="psw"><b>valid_upto</b></label> <input type="date" placeholder="last date 2" name="ls2"> 
			      <input type="text" placeholder="Enter vacancy 3" name="v3" ><label for="psw"><b>valid_upto</b></label> <input type="date" placeholder="last date 3" name="ls3"> 
				        <input type="text" placeholder="Enter vacancy 4" name="v4"><label for="psw"><b>valid_upto</b></label> <input type="date" placeholder="last date 4" name="ls4"> 
						<label for="psw"><b> Email_Id</b></label>
						      <input type="email" placeholder="email_id" name="eml" required>
							
							  
							  	<select id="job" name="job" required>
          <optgroup >
		  <option>-----motive-----</option>
		
            <option value="Save Girl Child"><b>save girl child</b></option>
            <option value="women Empowerment"><b>women empowerment</b></option>
            <option value="Old Age Home"><b>old age home</b></option>
          </optgroup><br></td></tr>
        </select>
        
      <button type="submit" name="vacancy">Add Vacancies</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
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



<div id="id04" class="modal">
  
  <form class="modal-content animate">
   <div class="imgcontainer">
 <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
 </div>
<div class="container">
	
	 <?php
	 include('functions.php');
            
                $query = "select * from meeting";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                               <h1 class="jumbotron-heading"><?php echo $row['socname'] ?></h1>
                    <h1 class="jumbotron-heading"><?php echo $row['email'] ?></h1>
                      <p class="lead text-muted"><?php echo $row['type'] ?></p>
					  
					                       
                      <p>
                        <a href="accepted.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a href="rejected.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                      </p>
           <?php
                    }
                }else{
                    echo "No Pending Requests.";
                }
           ?>
          
   
           </div>
		   </form>
      </div>
	
	
	
      </div>
<script>
// Get the modal
var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>

