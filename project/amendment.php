
<!DOCTYPE html>
<?php
    require"connection.php";
      require "functions.php";
?>
<head>
<title>W3.CSS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css"  href="css/styleindex.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="css/style1.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden; 
font-family: 'Josefin Sans', sans-serif;
    }
    @media(max-width:768px){
      li{
        list-style: none;
          }
        .d-flex span{
          display:none;
        }
    
    }
    .d-flex div{
      text-align: center;
      border-right: 1px solid grey;
      border-top: 1px solid grey;
    }
    .d-flex div:last-child{
      border-right: none;
    }
    .jumbotron-heading{
      text-align: left;
      text-align: justify;
      text-justify:inter-word;

    }
    .dark{
      border-radius: 20px 20px 20px 20px;
      min-height:auto;
      max-height: auto;
    }
  </style>
</head>
<body style="background:url('img/a5573f84de418681399bdbfcf7ac78f711.jpeg') repeat 0 -400px ; background-size:cover;color:#ffffff;border-bottom:#dd0f5e 3px solid;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">E-Legal Aid & Welfare Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#service">Services</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="index.php#contact">Contact Us</a>
           <li class="nav-item">
        <a class="nav-link" href="index.php#about">About</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="adminlogin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>
 
<header style="background:url('img/imagess (1).jpg'); color:#ffffff; background-size:cover;">
      <div class="container" >
        <div id="branding">
      
        </div>
        <nav>
          <ul>
            <li><a href="visitjob.php">Jobs</a></li>
            <li><a href="training.php">Trainings</a></li>
            <li><a href="govtscheme.php">Schemes</a></li>
            <li><a href="fright.php">Fundamental Rights</a></li>
             <li><a href="duties.php">Fundamental Duties</a></li>
              <li><a href="dpsp.php">DPSPs</a></li>

          </ul>
        </nav>
      </div>
    </header>
        <section id="newsletter" name="lastrecord" style="background-color:#dd0f5e; background-size:cover; color:#ffffff;" >
      <div class="container" align="left">
       <a href="#change"> <div style="display:inline;white-space:nowrap; padding-left: 20px;"><img src="img/giphy.gif" alt="animate"height=100, width=100 align="left" style='border-radius: 100%;'></div></a>
<?php $result=mysqli_query($conn,'SELECT id, articleno, motive,newlaw FROM amend  ORDER BY id DESC LIMIT 1')or die('invalid query:'.mysqli_error($conn));
while($row=mysqli_fetch_assoc($result)){?>
  <?php if($row['articleno']==''){}
  else{?>
<div  style="display:inline; white-space:nowrap;padding-left: 20px;padding-top: 30px; padding-bottom: 30px;"><b><?php echo"Article No.:-  ".$row['articleno'];
}
?></b></div><br>

<div  style="display:inline; white-space:nowrap;padding-left: 40px;padding-top: 30px; padding-bottom: 30px;">
<?php echo"Motive:-    ".$row['motive'];?></div><br>
<div  style="display:inline; white-space:nowrap;padding-left: 40px;padding-top: 30px; padding-bottom: 30px;">
<?php echo"Description:- ".$row['newlaw'];
?>
</div><br>
<?php
}
mysqli_free_result($result);
?></b>
</div>
   </div>
    </section>
 <main role="main">

      <section class="jumbotron text-center"style="background: url('img/imagess(1).jpg'); background-size:cover">
        <div class="container">
            <?php
    
            $count=0;
                $query = "select * from amend";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
          <div class="dark" style="background-color:#e7ee2c;color:#000000">

        
                                    
                               <h5 class="jumbotron-heading"><b><?php echo $row['articleno'];?></b>
                            </h5>
                           
                                
                                  
                                <h6 class="jumbotron-heading"><b><u>motive :</u> </b> <?php echo $row['motive'];?>
                              
                            
                              </h6>
                           
                          
                                 <h6 class="jumbotron-heading" style="overflow-wrap: break-word;overflow: hidden;"><b><u>Description Of Article : </b></u><?php echo $row['newlaw'];?>
                                 <br>
                                
                                         <?php 
                                         if( $row['n1']==''){}
                              else{

                                    ?>
                          
                                 <?php echo $row['n1'];
                                 ?>
                                 <br>
                              <?php
                               }
                               ?>
                                 <?php if( $row['n2']==''){
                              
                                  }
                                    
                                  
                                  else{
                                    ?>
                                
                                  <?php echo $row['n2'];
                                  ?>
                                  <br>
                                  <?php
                                }
                                ?>
                                
                                     <?php if( $row['n3']==''){
                              
                                  }
                                    
                                 
                                  else{
                                    ?>
                                     
                                   <?php echo $row['n3'];
                                   ?>
                                   <br>
                                   <?php
                                 }
                                   ?>
                                      
                                    <?php if( $row['n4']==''){
                              
                                  }
                                  else{
                                    ?>
                                    <?php echo $row['n4'];
                                    ?>
                                    <br>
                                    <?php
                                  }?>
                                    
                               

                                      <?php if( $row['n5']==''){
                              
                                  }
                                       
                                
                                  else{
                                    ?>
                                     
                                     <?php echo $row['n5'];
                                     ?>
                                     <br>
<?php
                                      }

                                     ?>
                              
                               </h6>
                               
                              
                              <?php if( $row['prov']==''){
                                  
                                  }
                             
                                 
                                     else{?>
                                        
                                 <h6 class="jumbotron-heading"style="overflow-wrap: break-word;overflow: hidden;"><b><u> Judicial Review And Provisions : </b></u><?php echo $row['prov'];
                                  ?><br>
                                                                     <?php if($row['prov1']==''){

                                    }
                                   else{?>
                                  
                                       <?php echo $row['prov1'];
                                       ?>
                                       <br>
                                       <?php
                                     }?>
                                         
                                      
                                 <?php if($row['prov2']==''){

                                    }
                                   else{?>
                                 
                                       <?php echo $row['prov2'];
                                       ?>
                                       <br>
                                       <?php
                                     }?>
                                         
                                  
                                        <?php if($row['prov3']==''){

                                    }
                                   else{?>
                              
                                       <?php echo $row['prov3'];
                                       ?>
                                       <br>
                                       <?php
                                     }?>
                                         
                                      
                                        <?php if($row['prov4']==''){

                                    }
                                   else{?>
                                
                                       <?php echo $row['prov4'];
                                      ?> 
                                    <br>
                                    <?php
                                     }?>
                                         
                                     
                                        <?php if($row['prov5']==''){

                                    }
                                   else{?>
                                
                                       <?php echo $row['prov5'];
?>
                                       <br>
<?php
                                      }}

                                     ?>
                             
                                  
                                </h6>
                                  <?php if( $row['cases']==''){
                                    
                                  }
                                     else{
                                      ?>
                              
                               
                                  
                                 <h6 class="jumbotron-heading"style="overflow-wrap: break-word;overflow: hidden;"><b><u>Cases : </b></u><?php echo $row['cases'];?><br>
                                  
                                         <?php if( $row['c1']==''){
                              
                                  }
                                    
                               
                                  else{

                                    ?>
                                   
                                 <?php echo $row['c1'];
                                 ?>
                                 <br>
                                 <?php
                               }
                               ?>
                                 <?php if( $row['c2']==''){
                              
                                  }
                                    
                                  
                                  else{
                                    ?>
                                    
                                  <?php echo $row['c2'];
                                  ?>
                                 <br> 
                                 <?php
                                }
                                ?>
                                
                                     <?php if( $row['c3']==''){
                              
                                  }
                                    
                                 
                                  else{
                                    ?>
                                   
                                   <?php echo $row['c3'];
                                   ?>
                                   <br>
                                   <?php
                                 }
                                   ?>
                                      
                                    <?php if( $row['c4']==''){
                              
                                  }
                                  else{
                                    ?>
                                    <?php echo $row['c4'];?>

                              <br>
                                  <?php
                                  }?>
                                    
                                 

                                      <?php if( $row['c5']==''){
                              
                                  }
                                       
                                
                                  else{
                                    ?>
                                      
                                     <?php echo $row['c5'];
                                     ?>
                                     <br> 
<?php
                                      }}

                                     ?> 
                              

                               

                                 </h6>
                              
                            
                                  <?php if( $row['valid_from']==''){
                                    
                                  }
                               
                                 
                                     else{?>
                                     
                                 <h6 class="jumbotron-heading"style="overflow-wrap: break-word;overflow: hidden;"><b><u>Valid_from : </b></u><?php echo $row['valid_from'];
                                 ?>
                                 <br>
                                 <?php
                                 }
                                  ?></h6>
                             
                             
                             
                                 <?php if( $row['valid_upto']==''){
                                  
                                  }
                                   else{?>
                                    
                                 <h6 class="jumbotron-heading"style="overflow-wrap: break-word;overflow: hidden;"><b><u>Valid_upto : </b></u><?php echo $row['valid_upto'];?>
                                 <br>
                                 <?php
                                  }?></h6>

                      


                         
                      </div>
                                        
                  
            <?php
          $count++;
                    }
                    if($count>=count(fetchAll($query))){?>
                      <div id="change">
                   <?php }

                }else{
                    echo "No records found";
                }
            ?>
          
        </div>
          
      </section>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
