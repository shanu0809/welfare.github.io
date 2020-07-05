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
     <div align="right"><a href="index.php"><button style="background-color: red;color: white; width:15%;padding: 10px; margin: 40px;">Back To Home</button></a><a href="map.php"><button style="background-color: red;color: white; width:15%;padding: 10px; margin: 40px;">Map</button></a></div>

<h2>Hii, Visit The Jobs Details.</h2>

<input type="text" style="width:100%;" id="myInput" onkeyup="myFunction()" placeholder="Search for Type...." title="Type in a name">

<table id="myTable" style="width: 80%; margin-left:10px; ">
  <tr class="header">
 <th style="width:20%;">City</th>
        <th style="width:20%;">State</th>
           
            <th style="width:20%;">Country</th>
           <th style="width:20%;">Address</th>          
        <th style="width:20%;">Name Of Factory/Industry</th>
     <th style="width:20%;">Contact no.</th>
        <th style="width:20%;">Website</th>
   <th style="width:20%;">Title of Job</th>
      <th style="width:20%;">Skills Required</th>
               <th style="width:20%;">Salary</th>
            <th style="width:20%;">Experience</th>
 <th style="width:20%;">Posted On </th>
  <th style="width:20%;">Updated On</th>
  <th style="width:20%;">Closed On</th>


  </tr>
  
 <?php
 require "connection.php";
 require"functions.php";
 $count=0;
  $sql = "SELECT * FROM  job";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
              
            <tr id="change">

<?php

 echo "<td>" . $row["city"] . "</td>";
  echo "<td>" . $row["state"] . "</td>";
   echo "<td>" . $row["country"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
     echo "<td>" . $row["factory"] . "</td>";
       echo "<td>" . $row["phone"] . "</td>";
      echo "<td>";
      ?> 
      <a href="<?php $row['link'] ?>">
<?php

        echo $row['link'];
        ?>
        </a>
        <?php

echo  "</td>";
?>
    

        <?php  
            echo "<td>" ?>
           

 
  <a href="#" data-toggle="popover"  title="<?php echo $row['title'];?>" data-content="<?php echo $row['des'];?>"><?php echo $row['title']?></a>


<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
       placement : 'left',
        trigger : 'hover'

  });   
});
</script>



   <?php
            
          
                echo "<td>" . $row["skills"] . "</td>";

   
             "</td>";


                echo "<td>" . $row["salary"] . "</td>";

   
             "</td>";

                echo "<td>" . $row["exp"] . "</td>";

   
             "</td>";
          
                echo "<td>" . $row["posttime"] . "</td>";

   
             "</td>";
          
                echo "<td>" . $row["updatetime"] . "</td>";
                 "</td>";
              
                                

                echo "<td>" . $row["closetime"] . "</td>";
                 "</td>";

        
              
                                
                                  ?>  



                                  
                                 
                                  <?php
                                  $count++;
            echo "</tr>";     
          
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
