
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
  $field=$_POST['field'];
  $title=$_POST['title'];
 $query = "SELECT field, title,id FROM training where field='$field' AND title='$title'"; 

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
      echo "<script> alert('Invalid Course !!! ');

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

                                      <script>
                  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


</head>
<body style="color:#00000;">


         






<div id="myModal" class="modal" style="background-color:white;">
   <div style="background-color: white; width:1000px; padding-left: 150px;">
        <div class="modal-content"style="background-color: white;">

            <div class="modal-header" style="background-color: #5cb85c;">
                  <h4 class="modal-title">Update Required Field</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <?php
    
            
                $sql = "SELECT * FROM training WHERE id='$id'";
                  $result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
               if($row)
               {
                        ?>





            <div class="modal-body">
                <form  enctype="multipart/form-data" class="modal-content animate" autocomplete="off" action="updatecourse.php" method="POST">

                      <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>ID of Course : </u> </b>
                          <input type="hidden" name="id" class="form-control" name="id" value="<?php echo $row['id'];?>"><?php echo $row['id'];
                         $idpic=$row['id'];
                         ?></h6></div>s
                         <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Type of Course  : </u> </b>

                               <input type="hidden" class="form-control"  name="type" value="<?php echo $row['type'];?>"/><?php echo $row['type'];
                               ?>
 
                         </h6></div>



                    <div class="form-group">
                            <h6 class="jumbotron-heading"><b><u>Title of Course  :</u> </b><input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>"></h6>
                    </div>
      
                     
              <div class="form-group">
                            <h6 class="jumbotron-heading"><b><u>Field of Course  :</u> </b><input type="hidden" class="form-control" name="field" value="<?php echo $row['field'];?>"></h6><?php echo $row['field'];
                            ?>
                    </div>
     


   <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Description of Course  :</u> </b>

                     <?php  if($row['des']==''){
                      ?>
                  <textarea type="text" class="form-control" name="des" placeholder="Enter description " style="overflow-wrap: break-word;text-overflow:none;height:200px;width: 100%;overflow: hidden;"required></textarea> 

 <?php
                        }
                          else{
                              ?>
                                <textarea type="text" class="form-control"  name="des" style="overflow-wrap: break-word;text-overflow:none;height:200px;width: 100%;overflow: hidden;">
                                <?php echo $row['des'];?></textarea>
                        
                        <?php
                      }
                      ?>

                      
</h6></div>





                    <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>Enjoy your course....click it </u> </b>
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
                        <?php if($row['videolink']=='')
                        {?>

                    <h6 class="jumbotron-heading"><b><u>Enter video_id :</u> </b>

<label align="left" style="margin:10px;display: inline;"><b>https://www.youtube.com/embed/</b></label>                                                <?php
 echo str_repeat("&nbsp;",3);?>                   <input type="text" class="form-control" name="videolink" style="height: 40px; width:400px; text-align: top;padding-top: 5px;display: inline; " placeholder="Enter video link id">   
                        
                 
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
 <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row['videolink']; ?>" allowfullscreen></iframe>

    </div>
    <div class="col-lg-6 col-md-6 col-12" >
   
 <button  type="button"  class="btnclass" data-toggle="modal" data-target='#myMod'>Update Video</button>


        </div>
  </div>
  </div>
</section>
                     
 
                    
                    <?php
                  }
                  ?>
                    </h6></div>


   <div class="form-group">
                        <h6 class="jumbotron-heading"><b><u>Updated On  :</u> </b>

                             <input type="hidden" class="form-control"  name="posttime" value="<?php  

date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');
?>
"/><?php
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');


?>
                
                      
</h6></div> 



                  
                 
                  
                    <button type="submit" name="update" class="btnclass">Update </button>
                </form>
                  <?php
                  }
                  else{
                          echo "<script> alert('Problem in loading data of this Course !!! ');

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

 <form class="modal-content animate" action="trainimage.php" enctype="multipart/form-data" method="post" autocomplete="off">

   <div class="form-group">
                          <h6 class="jumbotron-heading"><b><u>ID Of Course :</u> </b>

    <input type="text" name="id" class="form-control" value="<?php echo $row['id'];?>">
                        
</h6></div>   



<div class="form-group">
   <h6 class="jumbotron-heading"><b><u>Enter the new key of video</b></h6><br>
    <label align="left" style="margin:5px;display: inline;"><b>https://www.youtube.com/embed/</b></label>                                                <?php
 echo str_repeat("&nbsp;",3);?>  
    <input type="text" name="videolink" class="form-control" placeholder="Enter the new video key" style="height: 40px; width:400px; text-align: top;padding-top: 5px;display: inline;">
<br><br>
</div>


                  <div>  <button type="submit" name="modified" class="btnclass"data-toggle="modal">Submit Video_id </button></div>

            

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
