
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

    <link rel="stylesheet" href="css/style.css">
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
        <a class="nav-link" href="#Our Services">Services</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="#Contact Us">Contact Us</a>
           <li class="nav-item">
        <a class="nav-link" href="#About Us">About</a>
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
            <li><a href="index.html"><b>Visit Jobs</b></a></li>
            <li><a href="about.html"><b>Visit Trainings</b></a></li>
            <li class="current"><a href="services.html">Visit Government Schemes</a></li>
            <li class="current"><a href="services.html">Visit Latest Amendments</a></li>

          </ul>
        </nav>
      </div>
    </header>
        <section id="newsletter" style="background-color:#dd0f5e; background-size:cover; color:#ffffff;" >
      <div class="container" align="center">
<h2 align="center"><b>Right To Freedom Of Religion(25-28)<b></h2>
                   <p>It includes freedom of conscience and free profression, practice, and propagation of religion, freedom to manage religious affairs, freedom from certain taxes and freedom from religious instructions in certain educational institutes.</p>
   </div>
    </section>
 <main role="main">

      <section class="jumbotron text-center"style="background: url('img/imagess(1).jpg'); background-size:cover">
        <div class="container">
            <?php
    
            
                $query = "select * from religion";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
          <div class="dark" style="background-color:#e7ee2c;color:#000000">
  <ul>
         
             <?php if( $row['articleno']==''){
                                  
                                  }
                                     else{?>
                                     <li>
                               <h6 class="jumbotron-heading"><b><u>Article  :</u> </b><?php echo $row['articleno'];
                             } ?></h6>
                             </li>
                                  <?php if( $row['title']==''){
                                  
                                  }
                              
                              
                                     else{?>
                                       <li>
                                <h6 class="jumbotron-heading"><b><u>title :</u> </b> <?php echo $row['title'];
                              } 
                              ?></h6>
                              </li>
                             
                               <?php if( $row['des']==''){
                              
                                  }  
                              
                                 
                                  else{
                                    ?>
                            <li>
                                 <h6 class="jumbotron-heading"><b><u>Description Of Article : </b></u><?php echo $row['des'];?><br>
                                  <ul>
                                         <?php if( $row['des1']==''){
                              
                                  }
                                    
                               
                                  else{

                                    ?>
                                    <li>
                                 <?php echo $row['des1'];
                               }
                               ?></li>
                                 <?php if( $row['des2']==''){
                              
                                  }
                                    
                                  
                                  else{
                                    ?>
                                     <li>
                                  <?php echo $row['des2'];
                                }
                                ?></li>
                                
                                     <?php if( $row['des3']==''){
                              
                                  }
                                    
                                 
                                  else{
                                    ?>
                                       <li>
                                   <?php echo $row['des3'];
                                 }
                                   ?></li>
                                      
                                    <?php if( $row['des4']==''){
                              
                                  }
                                  else{
                                    ?><li>
                                    <?php echo $row['des4'];
                                  }?>
                                    
                                  </li>

                                      <?php if( $row['des5']==''){
                              
                                  }
                                       
                                
                                  else{
                                    ?>
                                      <li>
                                     <?php echo $row['des5'];

                                      }}

                                     ?></li></ul>  
                              
                               </h6>
                               
                               </li>
                              <?php if( $row['prov']==''){
                                  
                                  }
                             
                                 
                                     else{?>
                                         <li>
                                 <h6 class="jumbotron-heading"><b><u> Judicial Review And Provisions : </b></u><?php echo $row['prov'];
                                  ?><br>
                                  <ul>
                                    <?php if($row['prov1']==''){

                                    }
                                   else{?>
                                    <li>
                                       <?php echo $row['prov1'];
                                     }?>
                                         
                                       </li>
                                 <?php if($row['prov2']==''){

                                    }
                                   else{?>
                                    <li>
                                       <?php echo $row['prov2'];
                                     }?>
                                         
                                       </li>
                                        <?php if($row['prov3']==''){

                                    }
                                   else{?>
                                    <li>
                                       <?php echo $row['prov3'];
                                     }?>
                                         
                                       </li>
                                        <?php if($row['prov4']==''){

                                    }
                                   else{?>
                                    <li>
                                       <?php echo $row['prov4'];
                                     }?>
                                         
                                       </li>
                                        <?php if($row['prov5']==''){

                                    }
                                   else{?>
                                    <li>
                                       <?php echo $row['prov5'];

                                      }}

                                     ?>
                                 </li></ul>
                                  
                                </h6></li>
                                  <?php if( $row['newlaw']==''){
                                    
                                  }
                                     else{
                                      ?>
                              
                                 <li>
                                  
                                 <h6 class="jumbotron-heading"><b><u>New Amendment : </b></u><?php echo $row['newlaw'];?><br>
                                  <ul>
                                         <?php if( $row['n1']==''){
                              
                                  }
                                    
                               
                                  else{

                                    ?>
                                    <li>
                                 <?php echo $row['n1'];
                               }
                               ?></li>
                                 <?php if( $row['n2']==''){
                              
                                  }
                                    
                                  
                                  else{
                                    ?>
                                     <li>
                                  <?php echo $row['n2'];
                                }
                                ?></li>
                                
                                     <?php if( $row['n3']==''){
                              
                                  }
                                    
                                 
                                  else{
                                    ?>
                                       <li>
                                   <?php echo $row['n3'];
                                 }
                                   ?></li>
                                      
                                    <?php if( $row['n4']==''){
                              
                                  }
                                  else{
                                    ?><li>
                                    <?php echo $row['n4'];
                                  }?>
                                    
                                  </li>

                                      <?php if( $row['n5']==''){
                              
                                  }
                                       
                                
                                  else{
                                    ?>
                                      <li>
                                     <?php echo $row['n5'];

                                      }}

                                     ?></li></ul>  
                              

                               

                                 </h6>
                              
                               </li>
                                  <?php if( $row['valid_from']==''){
                                    
                                  }
                               
                                 
                                     else{?>
                                       <li>
                                 <h6 class="jumbotron-heading"><b><u>Valid_from : </b></u><?php echo $row['valid_from'];
                                 }
                                  ?></h6>
                               </li>
                             
                             
                                 <?php if( $row['valid_upto']==''){
                                  
                                  }
                                   else{?>
                                     <li>
                                 <h6 class="jumbotron-heading"><b><u>Valid_upto : </b></u><?php echo $row['valid_upto'];
                                  }?></h6>

                               </li>



                          </ul>
                      </div>
                                        
                  
            <?php
          
                    }
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