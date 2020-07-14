<?php
require'connection.php';
?>

<?php
session_start();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  
$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){

   $type=$_POST['type'];
    
    
    $des=$_POST['des'];
   
  $dur=$_POST['dur'];
             $link=$_POST['link'];
                $posttime=$_POST['posttime'];
                
                      $country=$_POST['country'];
                         $state=$_POST['state'];
                            $city=$_POST['city'];

$videolink=$_POST['videolink'];


  $address=$_POST['address'];

   if($_POST['link']==''){
        $link='no link is provided'; 
    }
       else{     $link=$_POST['link'];
                 $link = test_input($_POST["link"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link)) {
    echo "";

   echo "<script> alert('Error! Invalid URL');
window.location.href='addtraining.php';
   </script>";
    }
  
    }

     if($_POST['videolink']==''){
        $link='no related video'; 
    }
       else{     $videolink=$_POST['videolink'];
           
    }
  
    $person=$_POST['person'];

   $title=$_POST['title'];
$title = test_input($_POST["title"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
    

   echo "<script> alert('Error! Only letters and white space allowed in title of course');
window.location.href='addtraining.php';
   </script>";

    }
          $name=$_POST['name'];  
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    

   echo "<script> alert('Error! Only letters and space is allowed in the name of center');
window.location.href='addtraining.php';
   </script>";

    }

       $field=$_POST['field'];
      if (!preg_match("/^[a-zA-Z ]*$/",$field)) {
    

   echo "<script> alert('Error! Only letters and space is allowed in the name of field');
window.location.href='addtraining.php';
   </script>";

    }

  if($_POST['mob']==''){
     $mob='';
  }
    else{
  $mob=$_POST['mob'];
  if((preg_match("/^[7-9]{1}[0-9]{9}$/i", $mob)) && strlen($mob) == 10)
{
  
}
else{
     echo "<script> alert('phone no. is invalid');
window.location.href='addtraining.php';
</script>";

 }

    
    $sql="INSERT INTO  addtraining(name,imagedoc,type,title,des,link,dur,posttime,address,field,country,state,city,mob,videolink,person)VALUES('$name','$videolink','$type','$title','$des','$link','$dur','$posttime','$address','$field','$country','$state','$city','$mob','$videolink','$person')";
}

if(mysqli_query($conn,$sql)){


   echo "<script> alert('A New Course Is Added ');
window.location.href='addtraining.php';
</script>";
        }

else{
     echo "<script> alert('Error in adding courses');

</script>";
        
    }


}  
}  
 


?>  












































