<?php 
require"connection.php";

if(isset($_POST['update'])){
$title=$_POST['title'];
   $job=$_POST['job'];
    
  
      $id=$_POST['id'];
    $des=$_POST['des'];

   $prov=$_POST['prov'];
 
             $link=$_POST['link'];

    $dur=$_POST['dur'];
     
  $posttime=$_POST['posttime'];

      $query="UPDATE training SET title='$title',des='$des',link='$link',dur='$dur',updatetime='$posttime' WHERE id='$id'";
	
$res=mysqli_query($conn,$query);

if($res){
                          echo "<script> alert('Data is successfully updated !!! ');
window.location.href='govt.php';
</script>";
}
else{

                          echo "<script> alert('error! cannot upload in database. ');
window.location.href='govt.php';
</script>";
}
	}
	else{
                          echo "<script> alert('error! ');
window.location.href='govt.php';
</script>";

	}

?>