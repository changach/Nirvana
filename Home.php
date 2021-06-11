<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="display-width, initial-scale=1.0">

    <!-- add bootstrap css -->
    <?php include('header.html')?>
    <title>Nirvana</title>
</head>
<body>


  <!--Title nav-bar-->

  <nav class="navbar1 navbar-default">
    <div class="container-fluid text-center sticky-top">
     <a class="navbar-brand" href="#">NIRVANA</a>
     <p id="note"><marquee behaviour="scroll"direction="right">Beating Depression One step At A time </marquee></p>
    </div>
</div>
</nav>
              <!--nav-bar-->
              <!-- black with white text -->
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark">
<ul class= "navbar-nav ml-3 mr-5">
  <li class="nav-item active">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
    <li class="nav-item">
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
      <img src="images/hap3.jpg" height="450px" width="100%" class="d-block w-100" alt="...">
      <div class="carousel-caption bg-dark mb-5 mr-2 ml-5 my-5 ">
        <h2> Life </h2>
        <p>Through endurance we conquer</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hap2.jpg" height="450px" width="50%" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h3>Live</h3>
        <p>Cause you only do it once</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hap1.jpg" height="450px" width="50%" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h3>Love</h3>
        <p>Be Free </p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="images/hap4.jpg" height="450px" width="50%" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h3>Laugh</h3>
        <p>It never costs a thing</p>
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
                
             <!--content-->

<!-- Two equal columns -->
    <!--Content Cards-->
    <div class="card mb-3" style="max-width: 1000px max-length:600px">
  <div class="row g-2">
    <div class="col-md-4 my-1">
      <img src="images/dep1.jpg"
        alt="..."
        class="img-fluid"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Depression</h5>
        <h5>The problem of pain </h5>
        <p class="card-text">
        Mental pain is less dramatic than physical pain, but it is more common and also more hard to bear. The frequent attempt to conceal mental pain increases the burden: it is easier to say “My tooth is aching” than to say “My heart is broken
        </p>
        <a href="#" class="btn btn-primary">See More</a>
      </div>
    </div>
  </div>
</div>
   
            <!-- end of content card-->

            <!--begin content card 2-->
            <div class="row">
            <div class="card my-2 ml-5" style="width:450px" >
  <div class="card-body">
    <h4 class="card-title">About Us</h4>
    <p class="card-text">Nirvana means a perfect place of peace and hapiness.</br>This Website aims at showing that indeed there is a light at the end of the tunnel.A human being can survive almost anything, as long as she sees the end in sight. But depression is so insidious that we fail to see the light.</br><P id="about">LET US BRING BACK THE LIGHT</P> </p>
    <a href="About us.php" class="btn btn-primary">Learn More</a>
  </div>
  </div>
 <!--begin content card 3-->
 <div class="column">
          <div class="card my-2 ml-5 " style="width:450px" >
  <div class="card-body">
    <h4 class="card-title">Connect With Us</h4>
    <p class="card-text">There are wounds that never show on the body that are deeper and more hurtful than anything that bleeds.</br>But we need to know that a problem shared is half solved.</br><p id="dep">Depression is beatable!,Together.</p> </p>
    <a href="Connect.php" class="btn btn-primary">Connect</a>
  </div>
</div>
</div>
<!--end content card 3-->

</div>
          </div>
    <!--end of content card -->
 

 

<!-- footer -->
<div class ="footer-copyright text-center py-3  text-cursive">
    © <script>document.write(new Date().getFullYear())</script> Copyright:
    <a>Sharon Chang'ach</a>
  </div>  
    <!-- footer-  -->

<!-- add bootstrap js -->
<?php include('footer.html')?>


</body>
</html>