<?php 
require"connection.php";

if(isset($_POST['delete'])){
	$title=$_POST['title'];
	$type=$_POST['type'];
	$query="SELECT id from training where title='$title' AND type='$type'";
	
	$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);
	if($row){
$id=$row['id'];
		$sql="DELETE FROM training where id='$id'";
	
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