<?php
require'connection.php';
?>

<?php


  
$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){

   $title=$_POST['title'];
   $type=$_POST['type'];
    
       $name=$_POST['name'];  
    $des=$_POST['des'];
   
  $dur=$_POST['dur'];
             $link=$_POST['link'];
                $posttime=$_POST['posttime'];
                   $field=$_POST['field'];
                      $country=$_POST['country'];
                         $state=$_POST['state'];
                            $city=$_POST['city'];




  $address=$_POST['address'];
  $avatar_path='offtraining/'.$_FILES['avatar']['name'];
$avatar_path=mysqli_real_escape_string($conn,$avatar_path);
    if(preg_match("!image!",$_FILES['avatar']['type'])){
      if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
        $_SESSION['title']=$title;
        $_SESSION['avatar']=$avatar_path;
    
    $sql="INSERT INTO  addtraining(name,imagedoc,type,title,des,link,dur,posttime,address,field,country,state,city)VALUES('$name','$avatar_path','$type','$title','$des','$link','$dur','$posttime','$address','$field','$country','$state','$city')";

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
 


?>  












































