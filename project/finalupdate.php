<?php 
require"connection.php";

if(isset($_POST['updatefinal'])){
$title=$_POST['title'];
   $job=$_POST['job'];
    $id=$_POST['id'];
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


      $query="UPDATE scheme SET title='$title',sector='$sector',des='$des',n1='$n1',n2='$n2',n3='$n3',n4='$n4',n5='$n5',prov='$prov',prov1='$prov1',prov2='$prov2',prov3='$prov3',prov4='$prov4',prov5='$prov5',link='$link',valid_from='$valid1',valid_upto='$valid2' WHERE id='$id'";
  
$res=mysqli_query($conn,$query);

if($res){
                          echo "<script> alert('Data is successfully updated !!! ');
window.location.href='govt.php';
</script>";
}
else{
echo "error is showing";
}
  }
  else{

echo "error";
  }

?>