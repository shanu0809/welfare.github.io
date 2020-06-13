  





































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

if (empty($_POST["link"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(
    	?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link)) {
      $websiteErr = "Invalid URL";
      echo $websiteErr;
    }
  }





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