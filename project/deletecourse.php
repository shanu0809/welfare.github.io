<?php 
require"connection.php";

if(isset($_POST['delete'])){
	$title=$_POST['title'];
	$field=$_POST['field'];
	$query="SELECT id from training where title='$title' AND field='$field'";
	
	$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);
	if($row){
$id=$row['id'];
		$sql="DELETE FROM training where id='$id'";
	
$res=mysqli_query($conn,$sql);

if($res){
	   echo "<script> alert('Successfully delete ');
window.location.href='addtraining.php';
</script>";
}
else{
   echo "<script> alert('Error!! ');
window.location.href='addtraining.php';
</script>";
}
	}
	else{

echo "error";
	}
}
?>