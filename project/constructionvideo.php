<?php
 require "connection.php";

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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  src="https://code.jquery.com/jquery-3.3.1.js";
   </script>
  <link rel="stylesheet" type="text/css"  href="css/style1.css">
   <link rel="stylesheet" type="text/css"  href="css/styleindex.css">

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
<br>
    <div>
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
            <li class="nav-item">
        <a class="nav-link" href="blogging/blogView.php">Blogs</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="commentmain.php">Ask Query</a>
      </li>
      
      </li>
      
    </ul>
  </div>
</nav></div>

 
<header style="background:url('img/imagess (1).jpg'); color:#ffffff; background-size:cover;">
      <div class="container" >
        <div id="branding">
      
        </div>
        <nav>
          <ul>
        <li class="current"><a href="visitjob.php">Jobs</a></li>
            <li class="current"><a href="govtscheme.php">Schemes</a></li>
            <li class="current"><a href="amendment.php">Amendments</a></li>
                  <li class="current"><a href="fright.php">Rights</a></li>
                          <li class="current"><a href="duties.php">Duties</a></li>
                                 <li class="current"><a href="dpsp.php">DPSPs</a></li>

          </ul>
        </nav>
      </div>
    </header>

  <div align="right" style="padding-left: 10px; padding-right: 10px; margin-right: 30px;"><a href="training.php"><button style="background-color: red;color: white; width:15%;padding: 10px; margin: 40px;">Back</button></a></div>


<section class="my-5">
  <div class="py-5" id="service">
    <h2 class="text-center" style="padding: 5px;">Construction Related Videos</h2>
  </div>

<div class="container-fluid">
  <div class="row text-center equal-height-columns">
   
<div class="card-deck text-center">
    <?php
    $sql = "SELECT * FROM  training WHERE field='construction' OR field='Construction'";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
              <div class="col-lg-4 col-md-4 col-12"  style="overflow-wrap: break-word;overflow: hidden;width: auto;height: auto;">
                <div class="row" style="margin-left: 10px;">
   <iframe style="width:400px;height: 300px;"  src="https://www.youtube.com/embed/<?php echo $row['videolink']; ?>" allowfullscreen></iframe>
<br>
      <h5 style="display: inline;overflow-wrap: break-word;overflow: hidden;"><b><?php echo  "Title : "?></b><?php echo $row['title'];?></h5><br>
     <p style="overflow-wrap: break-word;overflow: hidden;display: inline;" align="left">
      <?php echo $row['des'];?>
      <b><?php echo "posted on : "?></b><?php echo $row['posttime'];?><br>
      <?php 
      if($row['link']==''){

      }
      else{
        ?>
        <b>
          <?php
      echo "Website : "?></b><?php echo $row['link']; 
}
      ?>
    </p>
    </div>
  </div>
<?php
}
}
?>

</div></div></div></div>

</section></body>
</html>