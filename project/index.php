<!DOCTYPE html>
<html lang="en-US">
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="css/style1.css">
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
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
  </style>
</head>
<body>

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
        <a class="nav-link" href="#service">Services</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
           <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href=blog.php>Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="adminlogin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/women-Construction-Workers-in-Gurgaon-India.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h2 class="text-light">Our Motive!</h2>
        <p class="text-light">A way towards development of society.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/cottage-Industries.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h2 class="text-light">Our Motive!</h2>
        <p class="text-light">A way towards development of society.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/79887580_o.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h2 class="text-light">Our Motive!</h2>
        <p class="text-light">A way towards development of society.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5" id="about">
    <h2 class="text-center">About Us</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="img/slider1.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12" >
    <h4 class="display-4">Social Welfare Portal</h4>
    <p class="py-5 text-justify">We work for the people who are wiling to do something for themselves.Who want to live a dignified life with basic necesities fulfilled.Our services are helpful to enhance a person knowledge about their fundamental rights,duties so noone will take benefit of others.This portal focus on overall development of less skilled people by giving them guidence to start their small business or get a job by industries,government due to which most of the marginal worker will learn to earn livelihood.For more details visit our service.

    </p>
    </div>
  </div>
  </div>
</section>


<section class="my-5">
  <div class="py-5" id="service">
    <h2 class="text-center">Our Services</h2>
  </div>
<div class="container-fluid">
  <div class="row text-center equal-height-columns">


<div class="card-deck text-center">
  <div class="card">
    <img class="card-img-top" src="img/5a419f235bb101514250019.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Government Schemes</h5>
      <p class="card-text">Schemes launched by government may be beneficial for you.</p>
     <footer class="footer_style_2">
     <a href="Govt_scheme.php" class="btn btn-primary" style="width:300px;">See more</a> </footer>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/emblem.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Know your rights</h5>
      <p class="card-text">Everyone has right to know the legal information and live a dignified life.</p>
 <footer class="footer_style_2">
     <a href="fright.php" class="btn btn-primary" style="width:300px;">See more</a> </footer>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/technology-to-promote-cottage-industries-worldwide.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Trainings</h5>
      <p class="card-text">Different ideas and trainings via online videos or through offline centers to promote skill development.</p>
      <footer class="footer_style_2">
     <a href="training.php" class="btn btn-primary" style="width:300px;">See more</a> </footer>
    </div>
  </div>
 <div class="card">
    <img class="card-img-top" src="img/hands-of-the-potter.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Search jobs</h5>
      <p class="card-text">Those who are wiling to become independent,can search jobs to fulfill their basic needs.</p>
     <footer class="footer_style_2">
     <a href="job.php" class="btn btn-primary" style="width:300px;">See more</a> </footer>
    </div>
  </div>

</div>
</div>
</div>

<section class="my-5">
  <div class="py-5" id="gallery">
    <h2 class="text-center">Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/cottage-Industries.jpg" class="img-fluid pb-4 abc">
      </div>

       <div class="col-lg-4 col-md-4 col-12">
        <img src="img/slider1.jpg" class="img-fluid pb-4 abc">
      </div>
    
     <div class="col-lg-4 col-md-4 col-12">
        <img src="img/technology-to-promote-cottage-industries-worldwide.jpg" class="img-fluid pb-4 abc">
      </div>
    
     <div class="col-lg-4 col-md-4 col-12">
        <img src="img/slider2.png" class="img-fluid pb-4 abc">
      </div>
     <div class="col-lg-4 col-md-4 col-12">
        <img src="img/women-Construction-Workers-in-Gurgaon-India.jpg" class="img-fluid pb-4 abc">
      </div>
    
     <div class="col-lg-4 col-md-4 col-12">
        <img src="img/AuKVoPnZXXYEBqm-800x450-noPad.jpg" class="img-fluid pb-4 abc">
      </div>
    

    </div>
      </div>


<footer class="footer_style">
  <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2></div>
  <main class="container-fluid">
    <div class="row p-3">
      <div class="col-lg-4 col-md-4 col-12 offset-md-1">
        <p class="mt-5 text-justify" >E-Legal Aid & Welfare Portal is for supporting the people who are not aware about their rights, and harras by other to fulfill their motive. It also focus in making oppressed and less skilled people independent.</p>
        <p class="text-capitalize">@ 2020 Welfare. All right reserved.</p>
      </div>
<div class=" col-lg-4 col-md-4 col-12" id="contact">
  <h4>Contact details</h4>
  <br>
  <dl class="contact-list">
    <dt>Address:</dt>
    <dd>Agra, U.P.</dd>
  </dl>
  <dl class="contact-list">
    <dt>email:</dt>
    <dd><a class= "anchor_dec"  href="mailto:humanity0809@gmail.com">welfareportal@gmail.com</a></dd>
  </dl>
  <dl class="contact-list">
    <dt>phone no.:</dt>
    <dd><a class= "anchor_dec" href="tel:#">+91 123456</a>
<span>or</span><a class= "anchor_dec" href="tel:9837617900">+91 7017256348</a></dd>
  </dl>
</div>
<div class="col-md-2 col-12">
  <h4>links</h4>
  <br>
  <ul>
    <li><a class= "anchor_dec" href="#service">services</a></li>
    <li><a class= "anchor_dec" href="#contact">contact</a></li>
    <li><a class= "anchor_dec" href="blog.php">blog</a></li>
    <li><a  class= "anchor_dec"href="#about">About</a></li>
  </ul>
</div>
    </div>

    <div class="d-flex justify-content-around align-items-center flex-wrap">
      <div class="p-md-5 p-2 flex-fill">
     <a href="https://www.facebook.com"> <i class="fa fa-facebook-official" arial-hidden="true">
      
    </i></a>
      <span>Facebook</span></div>
      <div class="p-md-5 p-2 flex-fill">
      <a href="https://www.instagram.com"> <i class="fa fa-instagram" arial-hidden="true">
      
    </i></a>
      <span>Instagram</span></div>
      <div class="p-md-5 p-2 flex-fill">
      <a href="https://www.twitter.com"> <i class="fa fa-twitter" arial-hidden="true">
      
    </i></a>
      <span>Twitter</span></div>
    </div>
</main>
</section>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
