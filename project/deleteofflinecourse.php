<?php 
require"connection.php";

if(isset($_POST['delete'])){
	$title=$_POST['title'];
	$type=$_POST['type'];
		$name=$_POST['name'];
	$query="SELECT id from addtraining where title='$title' AND name='$name'";
	
	$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);
	if($row){
$id=$row['id'];
		$sql="DELETE FROM addtraining where id='$id'";
	
$res=mysqli_query($conn,$sql);

if($res){
	
	   echo "<script> alert('successfully delete');
window.location.href='addtraining.php';
</script>";
}
else{
echo "error is showing";
	   echo "<script> alert('error is showing');
window.location.href='addtraining.php';
</script>";

}
	}
	else{



	   echo "<script> alert('error');
window.location.href='addtraining.php';
</script>";

	}
}
?>