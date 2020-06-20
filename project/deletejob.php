<?php 
require"connection.php";

if(isset($_POST['delete'])){
	$title=$_POST['title'];
	$factory=$_POST['factory'];
	$id="SELECT id from job where title='$title' AND factory='$factory'";
	
	$result=mysqli_query($conn,$id);

$row=mysqli_fetch_assoc($result);
	if($row){
$id=$row['id'];
		$sql="DELETE FROM job where id='$id'";
	
$res=mysqli_query($conn,$sql);

if($res){
	echo"successfully delete";
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