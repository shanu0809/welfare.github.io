<?php 
require"connection.php";

if(isset($_POST['delete'])){
	$names=$_POST['names'];
	$job=$_POST['job'];
	$id="SELECT id from scheme where title='$names' AND job='$job'";
	
	$result=mysqli_query($conn,$id);

$row=mysqli_fetch_assoc($result);
	if($row){
$id=$row['id'];
		$sql="DELETE FROM scheme where id='$id'";
	
$res=mysqli_query($conn,$sql);

if($res){
	

   echo "<script> alert('successfully delete');
window.location.href='govt.php';
</script>";
}
else{

   echo "<script> alert('error is showing in deleting scheme');
window.location.href='govt.php';
</script>";
}
	}
	else{


   echo "<script> alert('error');
window.location.href='govt.php';
</script>";

	}
}
?>
                                   <script>
                  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>