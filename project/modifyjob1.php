<?php 
require"connection.php";

if(isset($_POST['update'])){
       $id=$_POST['id'];
$title=$_POST['title'];
   $des=$_POST['des'];
       $link=$_POST['link'];

   $address=$_POST['address'];
    $country=$_POST['country'];
     $state=$_POST['state'];
      $city=$_POST['city'];
        $updatetime=$_POST['posttime'];
           $closetime=$_POST['closetime']; 
   $factory=$_POST['factory'];     
        $mob=$_POST['mob'];
     
  $skills=$_POST['skills'];

      $query="UPDATE job SET title='$title',des='$des',link='$link',address='$address',country='$country',state='$state',city='$city',updatetime='$updatetime', closetime='$closetime',factory='$factory' ,skills='$skills',phone='$mob' WHERE id='$id'";
	
$res=mysqli_query($conn,$query);

if($res){
                          echo "<script> alert('Data is successfully updated !!! ');
                          window.location.href='addjob.php';

</script>";
}
else{

                          echo "<script> alert('error! cannot upload in database. ');

</script>";
}
	}
	else{
                          echo "<script> alert('error! ');
window.location.href='addjob.php';
</script>";

	}

                                    
echo

"<script>
                  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>"
?>  
