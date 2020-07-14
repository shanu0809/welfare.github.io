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
<br>
     <div align="right"><a href="index.php"><button style="background-color: red;color: white; width:15%;padding: 10px;height: 60px; margin: 40px;"><b>Back To Home</b></button></a></div>
<h2 style="margin-left: 10px;">Hii, Visit the schemes launched by our government.</h2>

<input type="text" style="width:98%;padding-left:5px;padding-right:10px; margin-left: 10px;margin-right: 10px;" id="myInput" onkeyup="myFunction()" placeholder="Search for Type...." title="Type in a name">

<table id="myTable" style="width: 98%; padding-left:5px;padding-right:5px;margin-left: 10px;margin-right: 10px;">
  <tr class="header">
  
  <th style="width:10%;">Type</th>
         <th style="width:20%;">Sector</th>
        <th style="width:20%;">Title</th>
      <th style="width:30%;">Logo</th>
                        <th style="width:10%;">Website</th>

            <th style="width:50%;">Description</th>
                    
                                <th style="width:50%;">Provision</th>
                     




  </tr>

 <?php
  $count=0; 
 require "connection.php";
 require"functions.php";
  $sql = "SELECT * FROM  scheme";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            
            <tr id="change" align="left">
              <?php
            echo "<td>" . $row["job"] . "</td>";

              echo "<td>" . $row["sector"] . "</td>";
            echo "<td>" ?>
           

 
  <a href="#" data-toggle="popover" style="color: red;" title="<?php echo $row['title'];?>" data-content="
   <?php echo $row['des'];
   ?>
  <?php 
if($row['valid_from']=='0000-00-00'){}
else{
   echo (" Valid_from : ".$row['valid_from']);
 }
 
if($row['valid_upto']=='0000-00-00'){}
else{
  
   echo ("Valid_upto : ".$row['valid_upto']);
 }
 ?>"><?php echo $row['title'];?>
</a>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
       placement : 'auto',
        trigger : 'hover'

  });   
});
</script>
             <?php
             "</td>";

                                  echo "<td>"
                                  ?>  
                                  <img class="image fit" src="  <?php echo $row['imagedoc'];?>" height="150px" width="180px" style="border-radius:none;" class="img-fluid aboutimg"/>
                                  <?php
                                 echo "</td>";
                                  ?>

                                                                     <?php
                                    echo "<td>" ?>
                                    <?php
if($row['link']=='no link is provided'){
  echo "no link is provided";
}
else{
                                    ?>
<a href ="<?php echo $row['link'];?>">
<?php
        echo $row['link'];
      }
        ?>
        </a>
        <?php

                                     "</td>";
                                    ?>
                                  <?php

              

         
if($row['n1']==''){
    echo "<td>" . $row["des"] . "</td>";
}
else{
   echo "<td>";
   ?>
  <a href="#" data-toggle="popover" style="color: red;" title="<?php echo $row['des'];?>" data-content="
  <?php 
if($row['n1']==''){}
else{
   echo $row['n1'];
 }
 if($row['n2']==''){}
else{
   echo $row['n2'];
 }
 if($row['n3']==''){}
else{
   echo $row['n3'];
 }
 if($row['n4']==''){}
else{
   echo $row['n4'];
 }
 if($row['n5']==''){}
else{
   echo $row['n5'];
 }
 

 ?>"><?php echo $row['des'];?>
</a>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
       placement : 'auto',
        trigger : 'hover'

  });   
});
</script>
          
          <?php 
          echo "</td>";
          }

          if($row['prov']==''){
             echo "<td>" ;
            echo "No provision is mentioned.";
            echo "</td>";
          } 
          else{  
                 
                  if($row['prov1']==''){
                     echo "<td>" . $row["prov"] . "</td>";
                  }
                  else{
                     echo "<td>";
                    ?>
   <a href="#" data-toggle="popover" style="color: red;" title="<?php echo $row['prov'];?>" data-content="
  <?php 
if($row['prov1']==''){}
else{
   echo $row['prov1'];
 }
 if($row['prov2']==''){}
else{
   echo $row['prov2'];
 }
 if($row['prov3']==''){}
else{
   echo $row['prov3'];
 }
 if($row['prov4']==''){}
else{
   echo $row['prov4'];
 }
 if($row['prov5']==''){}
else{
   echo $row['prov5'];
 }
 

 ?>"><?php echo $row['prov'];?>
</a>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
       placement : 'auto',
        trigger : 'hover'

  });   
});
</script>
                 
                 


                                  
                                 
                                  <?php
                                  echo "</td>";
                                   }
                                }
            echo "</tr>";     
           $count++;
        }

        } else {
          echo "0 results";
        }




      ?>


</table>
      <?php
        
                    
                    if($count>=count(fetchAll($sql))){?>
                      <tr id="change">
                   <?php }

                else{
                    echo "No records found";
                }
            ?>

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
