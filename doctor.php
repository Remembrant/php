<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="css\bootstrap.css">
    <link rel="stylesheet" media="all" href="css\bootstrap.min.css">
    <link rel="stylesheet" media="all" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="js\jquery-2.2.3.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\MyImageSlider.js"></script>
    <script src="js\jquery.js"></script>
    <script src="js\jquery.nivo.slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="p.css">
    <title></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="app-pic" src="Images/logo.jpg"></a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <button class="btn btn-primary" type="button" name="button"><a class="nav-link" href="index.php">Logout</a></button> 
                </li>
            </ul>
        </div>
      </div>
    </nav>



    <div class="container-fluid padding">
      <div class="row padding">
        <div class="container-fluid">
          <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
              <h1>Welcome doctor</h1>
              <p>A web booking system allow users to book appointmens via the web during the work days, it
              doesn't metter where you are as long as you know the doctor </p>
              <button class="btn btn-outline-dark btn-lg"  type="button" name="button"> <a href="appointmens.php">View Bookings</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-------- fixed background---->

    <figure>
      <div class="fixed-wrap">
        <div id="fixed">

        </div>
      </div>
    </figure>



  </body>
</html>
