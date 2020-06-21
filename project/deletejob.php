<?php 
require"connection.php";

if(isset($_POST['delete'])){
	$title=$_POST['title'];
	$factory=$_POST['factory'];
	$sql1="SELECT id from job where title='$title' AND factory='$factory'";
	
	$result=mysqli_query($conn,$sql1);

$row=mysqli_fetch_assoc($result);
	if($row){
$id=$row['id'];
		$sql="DELETE FROM job where id='$id'";
	
$res=mysqli_query($conn,$sql);

if($res){
	
	   echo "<script> alert('successfully delete ');
window.location.href='addjob.php';
</script>";
}
else{
	   echo "<script> alert('error is showing');
window.location.href='addjob.php';
</script>";
}
	}
	else{


	   echo "<script> alert('error');
window.location.href='addjob.php';
</script>";
	}
}
?>