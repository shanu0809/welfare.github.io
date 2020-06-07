<?php 
require"connection.php";

if(isset($_POST['update'])){
$title=$_POST['title'];
   $job=$_POST['job'];
    
      $sector=$_POST['sector'];
    $des=$_POST['des'];
     $n1=$_POST['n1'];
      $n2=$_POST['n2'];
       $n3=$_POST['n3'];
        $n4=$_POST['n4'];
         $n5=$_POST['n5'];
   $prov=$_POST['prov'];
      $prov1=$_POST['prov1'];
      $prov2=$_POST['prov2'];
       $prov3=$_POST['prov3'];
        $prov4=$_POST['prov4'];
         $prov5=$_POST['prov5'];
             $link=$_POST['link'];

    $valid1=$_POST['valid1'];
      $valid2=$_POST['valid2'];
      $avatar_path='picture/'.$_FILES['avatar']['name'];
$avatar_path=mysqli_real_escape_string($conn,$avatar_path);
    if(preg_match("!image!",$_FILES['avatar']['type'])){
      if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
        $_SESSION['uname']=$uname;
        $_SESSION['avatar']=$avatar_path;

      $query="UPDATE scheme SET title='$title',sector='$sector',des='$des',n1='$n1',n2='$n2',n3='$n3',n4='$n4',n5='$n5',prov='$prov',prov1='$prov1',prov2='$prov2',prov3='$prov3',prov4='$prov4',prov5='$prov5',link='$link',valid_from='$valid1',valid_upto='$valid2',imagedoc='$avatar_path'";
	
$res=mysqli_query($conn,$sql);

if($res){
	echo"successfully updated";
}
else{
echo "error is showing";
}
	}
	else{

echo "error";
	}
}
?>