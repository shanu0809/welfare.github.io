
<?php
require'connection.php';
require'functions.php';
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
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>



<?php
$id='';


if(isset($_POST['updates'])){
  $title=$_POST['title'];
  $factory=$_POST['factory'];
 $query = "SELECT factory, title,id FROM job where title='$title' AND factory='$factory'"; 

                   $result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);
               if($row)
               {
                $id=$row['id'];
                        ?>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>

<?php
}

else{
      echo "<script> alert('Invalid scheme !!! ');
window.location.href='addjob.php';
</script>";
  }
}
else{
  echo "error";
}



?>


  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden; 
font-family: 'Josefin Sans', sans-serif;
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
    .jumbotron-heading{
      text-align: left;
      text-align: justify;
      text-justify:inter-word;

    }
    .dark{
      border-radius: 20px 20px 20px 20px;
      min-height:auto;
      max-height: auto;
    }

    /* Set a style for all buttons */
.btnclass {
  text-align: center;
  background-color: #4CAF50;
  color: white;
  padding: 20px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;

}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}
  </style>  




</head>
<body style="color:#00000;">


         






<div id="myModal" class="modal" style="background-color:white;">
   <div style="background-color: white; width:1000px; padding-left: 150px;">
        <div class="modal-content"style="background-color: white;">

            <div class="modal-header" style="background-color: #5cb85c;">
                  <h4 class="modal-title">Update Required Field</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <?php
    
            
                $sql = "SELECT * FROM job WHERE id='$id'";
                  $result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
               if($row)
               {
                        ?>





            <div class="modal-body">
                <form  enctype="multipart/form-data" class="modal-content animate" autocomplete="off" action="modifyjob1.php" method="POST">

                      <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>ID of Job  : </u> </b>
                          <input type="hidden" name="id" class="form-control" name="id" value="<?php echo $row['id'];?>"><?php echo $row['id'];
                         $idpic=$row['id'];
                         ?></h6></div>
                         <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Title of Job  : </u> </b>
<?php
if($row['title']==''){
  ?>

                         <input type="text" class="form-control" name="title" placeholder="Enter title of job"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="hidden" class="form-control"  name="title" value="<?php echo $row['title'];?>"/><?php echo $row['title'];
                               ?>
                        
                        <?php
                      }
?>
                         </h6></div>


   <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Description of Job  :</u> </b>

                     <?php  if($row['des']==''){
                      ?>
                 <input type="textarea" class="form-control" name="des" placeholder="Enter description of job "> 

 <?php
                        }
                          else{
                              ?>
                               <input type="textarea" class="form-control"  name="des" value="<?php echo $row['des'];?>">
                        
                        <?php
                      }
                      ?></h6></div>

                     

                    <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Skills Required For Job:</u> </b>
<?php
if($row['skills']==''){
  ?>

                         <input type="text" class="form-control" name="skills" placeholder="Enter skills"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control"  name="skills" value="<?php echo $row['skills'];?>"></h6></div>
                        
                        <?php
                      }
?>




                    <div class="form-group">
                            <h6 class="jumbotron-heading"><b><u>Name Of Factory :</u> </b><input type="text" class="form-control" name="factory" value="<?php echo $row['factory'];?>"></h6>
                    </div>

                     

                    <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Address of factory:</u> </b>
<?php
if($row['address']==''){
  ?>

                         <input type="text" class="form-control" name="address" placeholder="Enter address of factory"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control"  name="address" value="<?php echo $row['address'];?>"></h6></div>
                        
                        <?php
                      }
?>



  <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>Country of Job  : </u> </b>
                          <input type="hidden" name="country" class="form-control" value="<?php echo $row['country'];?>"/><?php echo $row['country'];
                 
                         ?></h6></div>


  <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>State of Job  : </u> </b>
                          <input type="hidden" name="state" class="form-control" value="<?php echo $row['state'];?>"/><?php echo $row['state'];
                      
                         ?></h6></div>



  <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>City of Job  : </u> </b>
                          <input type="hidden" name="city" class="form-control" value="<?php echo $row['city'];?>"><?php echo $row['city'];
                       
                         ?></h6></div>

                                             <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Contact No. : </u> </b>
<?php
if($row['phone']==''){
  ?>

                         <input type="text" class="form-control" name="mob" placeholder="Enter cotact no."> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="mob" value="<?php echo $row['phone'];?>">
                        
                        <?php
                      }
?>


                    <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Link to visit more....: </u> </b>
<?php
if($row['link']==''){
  ?>

                         <input type="text" class="form-control" name="link" placeholder="Enter link"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="link" value="<?php echo $row['link'];?>">
                        
                        <?php
                      }
?>
</h6></div>
 <div class="form-group">
 <h6 class="jumbotron-heading"><b><u>Updated Time  :</u> </b>
                             <input type="hidden" class="form-control"  name="posttime" value="<?php  

date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>
"/><?php
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');


?></h6></div>

 <div class="form-group">
            <h6 class="jumbotron-heading"><b>Closing Time  : </b>
            <?php
if($row['closetime']==''){
  ?>
                             <input type="date" class="form-control"  name="closetime" placeholder="Enter date of closing"/></h6> </div>
<?php
}
                             else{
                              ?>
  <input type="date" class="form-control"  name="closetime" value="<?php echo $row['closetime'];?>"/>
                           <?php
                             }
                             ?>
                             </h6> </div>

<br>
<br>
  <button type="submit" name="update" class="btnclass">Update </button><br><br>

    
                  </div>
                </form>

                  <?php
                  }
                  else{
                          echo "<script> alert('Problem in loading data of this job !!! ');
window.location.href='addjob.php';
</script>";

                  }

                      ?>
            </div>
        </div>
    </div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
