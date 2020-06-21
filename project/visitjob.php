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

<h2>Hii, Visit The Jobs Details.</h2>

<input type="text" style="width:100%;" id="myInput" onkeyup="myFunction()" placeholder="Search for Type...." title="Type in a name">

<table id="myTable" style="width: 80%;">
  <tr class="header">
 <th style="width:20%;">City</th>
        <th style="width:20%;">State</th>
           
            <th style="width:20%;">Country</th>
           <th style="width:20%;">Address</th>          
                               
                      <th style="width:20%;">Name Of Factory/Industry</th>
                        <th style="width:20%;">Website</th>
   <th style="width:20%;">Title of Job</th>
   <th style="width:20%;">Description of Job</th>
      <th style="width:20%;">Skills Required</th>
 <th style="width:20%;">Posted On </th>
  <th style="width:20%;">Updated On</th>
  <th style="width:20%;">Closed On</th>

  <th style="width:20%;">Status</th>
  </tr>
  
 <?php
 require "connection.php";
  $sql = "SELECT * FROM  training";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              
            echo "<tr>";


             echo "<td>" . $row["field"] . "</td>";
          
            echo "<td>" ?>
           

 
  <a href="#" data-toggle="popover"  title="<?php echo $row['title'];?>" data-content="<?php echo $row['des'];?> For more details visit our website"><?php echo $row['title']?></a>


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
          
                echo "<td>" . $row["des"] . "</td>";
              
                                  echo "<td>"
                                  ?>  
                                  <img class="image fit" src="  <?php echo $row['imagedoc'];?>" height="100px" width="150px" style="border-radius:none;" class="img-fluid aboutimg"/></a>
                                  <?php
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
