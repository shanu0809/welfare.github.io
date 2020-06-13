
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Activate Bootstrap 4 Modals via Data Attributes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>

<?php
$id="";
require 'connection.php';
session_start();
if(isset($_POST['modified'])){

	$id=$_POST['id'];
	  $avatar_path='training/'.$_FILES['avatar']['name'];
$avatar_path=mysqli_real_escape_string($conn,$avatar_path);
    if(preg_match("!image!",$_FILES['avatar']['type'])){
      if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
        $_SESSION['id']=$id;
        $_SESSION['avatar']=$avatar_path;
 $sql="UPDATE training  SET imagedoc='$avatar_path' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
      
        
        echo "<script> alert(' Logo updated successfully  !!! ');

</script>"; 
?>

<script>
    $(document).ready(function(){
        $("#myModal1").modal('show');
    });
</script>

 <?php

  }
        else{
                    $_SESSION['message']="user could not be added to database";
                      echo "<script> alert(' user could not be added to database  !!! ');

</script>"; 
?>
<script>
    $(document).ready(function(){
        $("#myModal1").modal('show');
    });
</script>
    <?php                
        }
}

else{
                $_SESSION['message']="File upload failed";
                      echo "<script> alert(' File upload failed !!! ');

</script>"; ?>
<script>
    $(document).ready(function(){
        $("#myModal1").modal('show');
    });
</script>
    <?php 
      }
}

else{
        $_SESSION['message']="please upload only jpg,jpeg,png,gif pictures";

                     echo "<script> alert(' please upload only jpg,jpeg,png,gif pictures !!! ');

</script>"; 
?>
<script>
    $(document).ready(function(){
        $("#myModal1").modal('show');
    });
</script>

<?php
    }   
 





}
?>
    <div id="myModal1" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                   <form  enctype="multipart/form-data" class="modal-content animate" action="train.php"  method="POST" autocomplete="off">
                <div class="modal-body">

                	  <div class="form-group">
                         <h6 class="jumbotron-heading"><b><u>ID of Course  : </u> </b> 
                                     <?php
            $sql = "SELECT * FROM training WHERE id='$id'";
                  $result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
               if($row)
               {
                        ?>   
                        <input type="text" name="ids" class="form-control" value="<?php echo $row['id'];?>">
                       <?php
                   }
                        ?> </h6><br>
                    <p>Do you want to continue further to update other fields ? Choose button 'YES'.</p>
                    <p class="text-secondary"><small>If you don't want to go further choose button 'NO'.</small></p>
                </div>
                <div class="modal-footer">
            
            
                    <button type="submit" class="btn btn-primary"  name="data">Yes</button>
                    <a href="addtraining.php"><button type="button" class="btn btn-primary">No</button></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>