
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

      
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="css/style1.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"  href="css/styleindex.css">
 
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
        <a class="nav-link" href="index.php#gallery">Gallery</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="blogging/blogView.php">Blogs</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="commentmain.php">AskQuery</a>
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
            <li class="current" class="current"><a href="job.php">Jobs</a></li>
            <li class="current"><a href="training.php">Trainings</a></li>
            <li class="current"><a href="govtscheme.php">Schemes</a></li>
               <li class="current"><a href="amendment.php">Amendments</a></li>
            <li class="current"><a href="fright.php">Rights</a></li>
                  <li class="current"><a href="dpsp.php">DPSPs</a></li>

          </ul>
        </nav>
      </div>
    </header>
        <section id="newsletter" style="background-color:#dd0f5e; background-size:cover; color:#ffffff;" >
      <div class="container" align="left">
        <p> Fundamental Duties were not originally in constitution at the time of enactment (26 jan 1950).These are added by 42th Constitution Amendment in Part lV A. Now, in our contitution there are 11 fundamental duties that prescribe the fundamental obligations and the rights of the citizen to the state.

</div>
   </div>
    </section>
 <main role="main">

      <section class="jumbotron text-center"style="background: url('img/imagess(1).jpg'); background-size:cover">
        <div class="container">
            <?php
    
            $count=0;
                $query = "select * from duty";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
          <div class="dark" style="background-color:#e7ee2c;color:#000000">
  <ul>
    <li>
     <p align="left"><b><?php echo $row['des']; ?></b></p>
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
