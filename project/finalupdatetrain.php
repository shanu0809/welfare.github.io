<?php 
require"connection.php";

if(isset($_POST['updatefinal'])){
$title=$_POST['title'];
   $type=$_POST['type'];
    
  
      $id=$_POST['id'];
    $des=$_POST['des'];

   
 
             $link=$_POST['link'];

  
       $posttime=$_POST['posttime']; 
  
       $field=$_POST['field']; 


      $query="UPDATE training SET type='$type', title='$title', field='$field',des='$des',link='$link',updatetime='$posttime' WHERE id='$id'";
	
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
                                      <script>
                  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>