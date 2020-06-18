<?php 
require"connection.php";


if(isset($_POST['update'])){
$title=$_POST['title'];
   $type=$_POST['type'];
    
  
      $id=$_POST['id'];
    $des=$_POST['des'];

   $field=$_POST['field'];
    $address=$_POST['address'];

 
             $link=$_POST['link'];

    $dur=$_POST['dur'];
     
  $posttime=$_POST['posttime'];

      $query="UPDATE addtraining SET title='$title',des='$des',link='$link',dur='$dur',updatetime='$posttime',address='$address',field='$field' WHERE id='$id'";
	
$res=mysqli_query($conn,$query);

if($res){
                          echo "<script> alert('Data is successfully updated !!! ');
                          window.location.href='addtraining.php';

</script>";
}
else{

                          echo "<script> alert('error! cannot upload in database. ');
window.location.href='addtraining.php';
</script>";
}
	}
	else{
                          echo "<script> alert('error! ');
window.location.href='addtraining.php';
</script>";

	}

?>