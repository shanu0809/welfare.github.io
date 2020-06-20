
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
    
            
                $sql = "SELECT * FROM scheme WHERE id='$id'";
                  $result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
               if($row)
               {
                        ?>





            <div class="modal-body">
                <form  enctype="multipart/form-data" class="modal-content animate" autocomplete="off" action="modify.php" method="POST">

                      <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>ID of Scheme  : </u> </b>
                          <input type="hidden" name="id" class="form-control" name="id" value="<?php echo $row['id'];?>"><?php echo $row['id'];
                         $idpic=$row['id'];
                         ?></h6></div><br>
                         <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Type of Scheme  : </u> </b>
<?php
if($row['job']==''){
  ?>

                         <input type="text" class="form-control" name="job" placeholder="Enter type of scheme"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="hidden" class="form-control"  name="job" value="<?php echo $row['job'];?>"/><?php echo $row['job'];
                               ?>
                        
                        <?php
                      }
?>
                         </h6></div>
<br>


                    <div class="form-group">
                            <h6 class="jumbotron-heading"><b><u>Title of Scheme  :</u> </b><input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>"></h6>
                    </div>
      <br>
                     

                    <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Sector  :</u> </b>
<?php
if($row['sector']==''){
  ?>

                         <input type="text" class="form-control" name="sector" placeholder="Enter sector"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control"  name="sector" value="<?php echo $row['sector'];?>"></h6></div>
                        
                        <?php
                      }
?>


   <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Description of Scheme  :</u> </b>

                     <?php  if($row['des']==''){
                      ?>
                 <input type="text" class="form-control" name="des" placeholder="Enter description "> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control"  name="des" value="<?php echo $row['des'];?>">
                        
                        <?php
                      }
                      ?>

                      <?php  if($row['n1']==''){
                      ?>
                 <input type="text" class="form-control" name="n1" placeholder="Enter description 1"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="n1" value="<?php echo $row['n1'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['n2']==''){
                      ?>
                 <input type="text" class="form-control" name="n2" placeholder="Enter description 2"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="n2" value="<?php echo $row['n2'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['n3']==''){
                      ?>
                 <input type="text" class="form-control" name="n3" placeholder="Enter description 3"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="n3" value="<?php echo $row['n3'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['n4']==''){
                      ?>
                 <input type="text" class="form-control" name="n4" placeholder="Enter description 4"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="n4" value="<?php echo $row['n4'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['n5']==''){
                      ?>
                 <input type="text" class="form-control" name="n5" placeholder="Enter description 5"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="n5" value="<?php echo $row['n5'];?>">
                        
                        <?php
                      }
                      ?>
</h6></div>


<div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Judiciary Provisions :</u> </b>

                     <?php  if($row['prov']==''){
                      ?>
                 <input type="text" class="form-control" name="prov" placeholder="Enter Provision"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="prov" value="<?php echo $row['prov'];?>">
                        
                        <?php
                      }
                      ?>

                      <?php  if($row['prov1']==''){
                      ?>
                 <input type="text" class="form-control" name="prov1" placeholder="Enter provision 1"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="prov1" value="<?php echo $row['prov1'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['prov2']==''){
                      ?>
                 <input type="text" class="form-control" name="prov2" placeholder="Enter provision 2"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="prov2"  value="<?php echo $row['prov2'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['prov3']==''){
                      ?>
                 <input type="text" class="form-control" name="prov3" placeholder="Enter provision 3"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="prov3" value="<?php echo $row['prov3'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['prov4']==''){
                      ?>
                 <input type="text" class="form-control" name="prov4" placeholder="Enter provision 4"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="prov4" value="<?php echo $row['prov4'];?>">
                        
                        <?php
                      }
                      ?>
                      <?php  if($row['prov5']==''){
                      ?>
                 <input type="text" class="form-control" name="prov5" placeholder="Enter provision 5"> 

 <?php
                        }
                          else{
                              ?>
                               <input type="text" class="form-control" name="prov5" value="<?php echo $row['prov5'];?>">
                        
                        <?php
                      }
                      ?>
</h6></div>


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
                          <h6 class="jumbotron-heading"><b><u>Valid_from :</u> </b>
<?php
if($row['valid_from']==''){
  ?>

                         <input type="date" class="form-control" name="valid1" placeholder="Enter date of announcement"> 
                         
                          <?php
                        }
                          else{
                              ?>
                               <input type="date" class="form-control" name="valid1" value="<?php echo $row['valid_from'];?>">
                        
                        <?php
                      }
?>
</h6></div>

 <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Valid_upto :</u> </b>
<?php
if($row['valid_upto']==''){
  ?>

                         <input type="date" class="form-control" name="valid2" placeholder="Enter date of announcement"> 
                         
                          <?php
                        }
                          else{
                              ?>
    <input type="date" class="form-control" name="valid2" value="<?php echo $row['valid_upto'];?>">
                        
                        <?php
                      }
?>
</h6></div>

 <div class="form-group">
                        <?php if($row['imagedoc']=='')
                        {?>

                                                   <label><b>Upload Logo  Of Scheme, If Any</b></Label>
  <input type="file" name="avatar"/><br/>
                        
                 
                    <?php
                  }
                    else
                    {
                      ?>

<section class="my-5">
  <div class="py-5" id="about">
  
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
     <img class="image fit" src="  <?php echo $row['imagedoc'];?>" height="200px;" width="300px" class="img-fluid aboutimg"/></a>

    </div>
    <div class="col-lg-6 col-md-6 col-12" >
   
 <button  type="button"  class="btnclass" data-toggle="modal" data-target='#myMod'>Update Image</button>


        </div>
  </div>
  </div>
</section>
                     
 
                    
                    <?php
                  }
                  ?>
                    </h6></div>


 



                  
                 
                  
                    <button type="submit" name="update" class="btnclass">Update </button>
                </form>
                  <?php
                  }
                  else{
                          echo "<script> alert('Problem in loading data of this scheme !!! ');
window.location.href='govt.php';
</script>";

                  }

                      ?>
            </div>
        </div>
    </div>
</div>











<div id="myMod" class="modal">
   <div class="modal-dialog"style="background-color: white; width:auto;">
        <div class="modal-content"style="background-color: white;">

            <div class="modal-header" style="background-color: #5cb85c;">
                  <h4 class="modal-title">Update Required Field</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">

 <form class="modal-content animate" action="updateimage.php" enctype="multipart/form-data" method="post" autocomplete="off">

   <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>ID Of Scheme :</u> </b>

    <input type="text" name="id" class="form-control" value="<?php echo $row['id'];?>">
                        
</h6></div>   


<div class="form-group">
   <h6 class="jumbotron-heading"><b><u>Upload Logo  Of Scheme, If Any</b></h6>

<input type='file' name="avatar" onchange="readURL(this);" /></div><br>
    <img id="blah" name="imageselect" align="center" src="#" alt="your image" />
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>




                  <div>  <button type="submit" name="modified" class="btnclass"data-toggle="modal">Submit Image </button></div>

            

                </form></div></div></div></div>






<script>
// Get the modal
var modal = document.getElementById('myMod');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
