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
</style>
</head>
<body>

<h2>Hii, Visit the schemes launched by our government.</h2>

<input type="text" style="width:100%;" id="myInput" onkeyup="myFunction()" placeholder="Search for Type...." title="Type in a name">

<table id="myTable" style="width: 100%;">
  <tr class="header">
  
  <th style="width:30%;">Type</th>
        <th style="width:30%;">Title</th>
            <th style="width:30%;">Sector</th>
            <th style="width:30%;">Description</th>
                    
                                <th style="width:30%;">Provision</th>
          
                  <th style="width:30%;">valid_from</th>
                    <th style="width:30%;">valid_upto</th>
                      <th style="width:30%;">Logo</th>
                        <th style="width:30%;">Website</th>




  </tr>
  
 <?php
 require "connection.php";
  $sql = "SELECT * FROM  scheme";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              
            echo "<tr>";
            echo "<td>" . $row["job"] . "</td>";
            echo "<td>" ?>
           

 
  <a href="#" data-toggle="popover" title="<?php echo $row['title'];?>" data-content="<?php echo $row['des'];?> <br><p> For more details visit our website</p>"><?php echo $row['title']?></a>


<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
             <?php
             "</td>";
              echo "<td>" . $row["sector"] . "</td>";
                echo "<td>" . $row["des"] . "</td>";
              
                  echo "<td>" . $row["prov"] . "</td>";
                    if($row['valid_from']=='0000-00-00')
                    {

                              echo "<td>" ?> <?php 
                              "</td>";

                    }
                    else{
                              echo "<td>" . $row["valid_from"] . "</td>";
                            }
                                     if($row['valid_upto']=='0000-00-00'){

                              echo "<td>" ?>  
                              <?php 
                              "</td>";

                    }
                    else{
                                echo "<td>" . $row["valid_upto"] . "</td>";
                              }
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
