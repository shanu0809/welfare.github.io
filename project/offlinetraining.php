<!DOCTYPE html>
<html>
  <html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
  overflow-wrap: break-word;
  overflow: auto;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 14px;
  margin: 10px;
  margin-right: 10px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

.popover{
   background-color:lightblue;
   border:none;
   border-radius:unset;
   min-width:100px;
   width:100%;
   max-width:400px;
   overflow-wrap:break-word;
   color: black;
}    
</style>
</head>
<body>
    <div id= "google_translate_element" style="background-color:white; background-size:cover;color: white;top: 0;display: block;margin-top: 0; height:50px;position:absolute;left:0; right: 0; top:0;width:100%; color:white;">

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
     <div align="right" style="padding-left: 10px; padding-right: 10px; margin-right: 30px;"><a href="index.php"><button style="background-color: red;color: white; width:15%;padding: 10px; margin: 40px;">Back To Home</button></a></div>

<h2>Hii, Visit The Offline Courses Offered By Vocational Centers And Learn Some Skills. </h2>

<input type="text" style="width:98%; padding-left: 10px; padding-right: 10px;" id="myInput" onkeyup="myFunction()" placeholder="Search for Type...." title="Type in a name">
<div>
<table id="myTable" style="width: 98%;padding-right: 10px;padding-left: 10px;">
  <tr class="header">
     <th style="width:40%;">Field</th>

        <th style="width:40%;">Title</th>
           
            
                 <th style="width:40%;">Name Of Center</th>
                      <th style="width:30%;">contact person</th>
                               <th style="width:30%;">mobile no.</th>      
               <th style="width:40%;">Address Of Center</th>  
                 
                                     
                         <th style="width:30%;"align="center">Related video</th>
                        <th style="width:30%;">Website</th>
   <th style="width:20%;">Duration Of Course</th>

 <th style="width:30%;">Posted On </th>
  <th style="width:30%;">Updated On</th>

  </tr>
  
 <?php
 $country='';
 $state='';
 $city='';
 $text='';
 require "connection.php";
  $sql = "SELECT * FROM  addtraining";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>

<?php if($row['country'])
               { 
                $country=$row['country'];
                $sql1="SELECT name from country where id='$country'";
                                  $res=mysqli_query($conn,$sql1);

$row1=mysqli_fetch_assoc($res);
               if($row1)
               {
                

 $country=$row1['name'];
   
}
}

   ?>
   <?php

   if($row['state'])
               { 
                $state=$row['state'];
                $sql1="SELECT name from state where id='$state'";
                                  $res=mysqli_query($conn,$sql1);

$row1=mysqli_fetch_assoc($res);
               if($row1)
               {
                   
       $state=$row1['name']; 
      

      }
    }
      ?>
      

      <?php

      if($row['city'])
               { 
                $city=$row['city'];
                $sql1="SELECT name from city where id='$city'";
                                  $res=mysqli_query($conn,$sql1);

$row1=mysqli_fetch_assoc($res);
               if($row1)
               {
         $city=$row1['name'];


}
}
?>
       <?php       
            echo "<tr>";
  echo "<td>" . $row['field'] . "</td>";


            echo "<td>" ?>
           

 
  <a href="#" data-toggle="popover"  title="<?php echo $row['title'];?>" data-content="<?php echo $row['des'];?>"><?php echo $row['title']?></a>


<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
       placement : 'bottom',
        trigger : 'hover'

  });   
});
</script>




             <?php
             "</td>";
          
                                  ?>
<?php
    echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['person'] . "</td>";
        echo "<td>" . $row['mob'] . "</td>";
    



            echo "<td>"; ?>
           

 
  <a href="#" data-toggle="popover"  title="<?php echo $row['title'];?>" data-content="<?php echo $row['address']." , ".$city." , ".$state." , ".$country;?>"><?php echo $row['address'];?></a>


<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
       placement : 'bottom',
        trigger : 'hover'

  });   
});
</script>

                                                                       <?php
                                                                        echo "</td>";
                                    echo "<td>"; ?>
                                    <div align="center" style="display:inline-block;border:2px solid red; overflow: hidden;padding: 5px;">
                                      <?php 
                                      if($row['videolink']==''){
                                        echo "no video in support of course";
                                      }
else{
                                      $text=$row['videolink'];
                                      ?>
                                      <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row['videolink']; ?>" allowfullscreen></iframe>
</div>

        <?php 
      }

                                     "</td>";
                                    ?>

                                   <?php
                                    echo "<td>" ?>
<a href ="<?php echo $row['link'];?>">
<?php
        echo $row['link'];
        ?>
        </a>
        <?php

                                     "</td>";
                                    ?>


   <?php
             "</td>";
          
                echo "<td>" . $row["dur"] . "</td>";

   
             "</td>";
          
                echo "<td>" . $row["posttime"] . "</td>";

   
             "</td>";
          
                echo "<td>" . $row["updatetime"] . "</td>";
              
                                  echo "<td>"
                                  ?>  



                                  
                                 
                                  <?php
            echo "</tr>";     
          
        }
        } else {
          echo "0 results";
        }




      ?>


</table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
