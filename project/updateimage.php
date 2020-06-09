<?php
require 'connection.php';
session_start();
if(isset($_POST['modified'])){
	$idpic=$_POST['idpic'];
	  $avatar_path='picture/'.$_FILES['avatar']['name'];
$avatar_path=mysqli_real_escape_string($conn,$avatar_path);
    if(preg_match("!image!",$_FILES['avatar']['type'])){
      if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
        $_SESSION['idpic']=$idpic;
        $_SESSION['avatar']=$avatar_path;
 $sql="UPDATE scheme  SET imagedoc='$avatar_path' WHERE id='$idpic'";

if(mysqli_query($conn,$sql)){

echo header("location:modifygovt.php");
?>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
      <?php  
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
?>