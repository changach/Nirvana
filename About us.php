<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="display-width, initial-scale=1.0">
  
  </head>
    <!-- add bootstrap css -->
    <?php include('header.html')?>
    <title>Nirvana</title>
</head>
<body>
            <!--Title nav-bar-->

 <nav class="navbar1 navbar-default">
    <div class="container-fluid text-center sticky-top">
     <a class="navbar-brand" href="#">The Problem Of Pain</a>
     <p id="note">Beating depression one step at a time</p>
    </div>
</div>
</nav>
              <!--nav-bar-->
              <!-- black with white text -->
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark">
<ul class= "navbar-nav ml-3 mr-5">
  <li class="nav-item">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="About us.php">Nirvana</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Connect.php">Connect</a>
    </li>
</ul>

 <ul class=" nav navbar-nav ml-auto mr-3">
      <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Login.php"> Login</a>
    </li>
    </ul>
  
</nav>
           
              <!--End of nav-bar-->
            <!--carousel start-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/dep6.jpg" height="450px" width="100%" class="d-block w-100" alt="...">
      <div class="carousel-caption bg-dark mb-5 mr-2 ml-5 my-5 ">
        <h2> The problem of pain </h2>
</p> Can I be saved </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/dep3.jpg" height="450px" width="50%" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/dep7.jpg" height="450px" width="50%" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
    <img src="images/dep4.jpg" height="450px" width="50%" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                      <!--carousel end-->

                      <!--body content-->
                      <!-- cards-->
                      <div class="row row-cols-1 row-cols-md-2 my-3">
  <div class="col mb-4">
    <div class="card">
      <img src="images/dep5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">What is depression?</h5>
        <p class="card-text">A mental health disorder characterised by persistently depressed mood or loss of interest in activities, causing significant impairment in daily life.</p>
        <a href="https://www.medicalnewstoday.com/articles/8933 "target="_blank"> See more</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/dep8.jpg " class="card-img-top " alt="..." height= 400px width= 401px>
      <div class="card-body">
        <h5 class="card-title">Causes of depresssion</h5>
        <p class="card-text">a number of things are often linked to its development. Depression usually results from a combination of recent events and other longer-term or personal factors, rather than one immediate issue or event.</p>
     <a href="https://www.beyondblue.org.au/the-facts/depression/what-causes-depression"target="_blank">See more </a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/dep2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">How to manage it</h5>
    <p class="card-text">What we need to know is that this is not the end of the world.It is not a life sentence and it does not necessarily define how our future lives willl turn out.And with help from a few sources and a few friends,this is how we can manage it.</p>
    <a href="https://www.wellbeingtrackers.com/ "target="_blank">Ready to overcome?</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/dep1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">The problem of pain</h5>
        <p class="card-text">The Son of God suffered unto the death, not that men might
not suffer, but that their sufferings might be like His.
</br class="auth text-right">George MacDonald</br class="auth text-right">
Unspoken Sermons, First Series</p>
      <a href=" http://www.samizdat.qc.ca/cosmos/philo/PDFs/ProblemofPain_CSL.pdf" target="_blank">Read more </a>
      </div>
    </div>
  </div>
</div>





























































<!-- footer -->
<div class ="footer-copyright text-center py-3 bg-light text-cursive">
    © <script>document.write(new Date().getFullYear())</script> Copyright:
    <a>Sharon Chang'ach</a>
  </div>  
    <!-- footer-  -->

<!-- add bootstrap js -->
<?php include('footer.html')?>

</body>
</html>