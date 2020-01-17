


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="app-pic" src="Images/logo.jpg"></a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
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
            </ul>
        </div>
      </div>
    </nav>

    <!-- image Slider-->
    <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active" image-center>
          <img class="app" src="Images\medical-online-scheduling.jpg">
          <div class="carousel-caption">
            <h1 class="display-2">Login As A User</h1>
            <h3>Make your life easy by making an appointmen online</h3>
            <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-outline-light btn-lg" name="button">LOGIN</button>
            <button data-toggle="modal" data-target="#myModa" type="button" class="btn btn-primary btn-lg" name="button"> SIGNUP</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="app" src="Images\fully-booked-agenda.jpg">
          <div class="carousel-caption">
            <h1 class="display-2">Login As A Doctor</h1>
            <button data-toggle="modal" data-target="#dmyModal" type="button" class="btn btn-outline-light btn-lg" name="button">LOGIN</button>
            <button data-toggle="modal" data-target="#dmyModa" type="button" class="btn btn-primary btn-lg" name="button"> SIGNUP</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="app" src="Images\backg.jpg" >
        </div>
      </div>
    </div>

    <!---- jumbotron --->

    <div class="container-fluid">
      <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
          <p>A web booking system allow users to book appointmens via the web during the work days, it
          doesn't metter where you are as long as you know the doctor </p>
        </div>
      </div>
    </div>
    <hr class="my-4">

    <!---- FIxed background --->

    <figure>
      <div class="fixed-wrap">
        <div id="fixed">

        </div>
      </div>
    </figure>

    <!---- Meet the team --->

    <div class="container-fluid padding">
      <div class="row welcome text-center">
        <div class="col-12">
          <h1 class="display-4">Meet The Team</h1>
          <hr>
        </div>
      </div>
    </div>

    <!--- Cards --->

    <div class="container-fluid padding">
      <div class="row padding">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/healthcare-dentist.jpg" >
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">The developer of the year in our company</p>
              <a href="#" class="btn btn-outline-secondary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/healthcare-dentist.jpg" >
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">The developer of the year in our company</p>
              <a href="#" class="btn btn-outline-secondary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/healthcare-dentist.jpg" >
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">The developer of the year in our company</p>
              <a href="#" class="btn btn-outline-secondary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <hr class="my-4">
    </div>
    <!--- Contact --->

    <div class="container-fluid padding">
      <div class="row text-center padding">
        <div class="col-12">
          <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
          <a href="#"> <i class="fab fa-facebook"></i> </a>
          <a href="#"> <i class="fab fa-twitter"></i> </a>
          <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
          <a href="#"> <i class="fab fa-instagram"></i> </a>
          <a href="#"> <i class="fab fa-youtube"></i> </a>
        </div>
      </div>
    </div>

    <!---- Login doctor ----->

    <div id="dmyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login Doctor<span id = "slot"></span> </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form class="" action="includes\signind.inc.php" method="post">
                <div class="form-group">
                  <label for="">Name</label>
                  <input required type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input required type="password" name="uPass" class="form-control">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-primary" type="submit" name="signind-btn">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

    <!---- Login ----->

    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login <span id = "slot"></span> </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form class="" action="includes\signin.inc.php" method="post">
                <div class="form-group">
                  <label for="">Name</label>
                  <input required type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input required type="password" name="uPass" class="form-control">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-primary" type="submit" name="signin-btn">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

    <!------ Singup doctor ----->
    <div id="dmyModa" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Signup Doctor<span id = "slot"></span> </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form class="" action="includes\singupd.inc.php" method="post">
                <div class="form-group">
                  <label for="">Full Name:</label>
                  <input required type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Email:</label>
                  <input required type="text"  name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password:</label>
                  <input required type="password"  name="uPass" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Confirm Password:</label>
                  <input required type="password"  name="cPass" class="form-control">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-primary" type="submit" name="signupd-btn">Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

    <!------ Singup ----->
    <div id="myModa" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Signup <span id = "slot"></span> </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form class="" action="includes/site.php" method="post">
                <div class="form-group">
                  <label for="">Full Name:</label>
                  <input required type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Address:</label>
                  <input required type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Phone:</label>
                  <input required type="number" name="phone" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Age:</label>
                  <input required type="text" name="age" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Sex:</label>
                  <select class="" name="gender">
                    <option value="">select</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Email:</label>
                  <input required type="text"  name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password:</label>
                  <input required type="password"  name="uPass" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Confirm Password:</label>
                  <input required type="password"  name="cPass" class="form-control">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-primary" type="submit" name="signup-btn">Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

    <!--- footer --->
<footer>
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <hr class="light">
          <h5>Contac</h5><hr class="light">
          <p>071 196 9659</p>
          <p>shongermr65@gmail.com</p>
          <p>Pretoria, Sunnyside, 153 Troye Street</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Our Hours</h5><hr class="light">
          <p>Monday to Friday: 9am - 5pm</p>
          <p>Saturday: 10am - 4pm</p>
          <p>Sunday: closed</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Service Area</h5><hr class="light">
          <p>Pretoria East</p>
          <p>Soshanguve</p>
          <p>Pretoria North</p>
        </div>
        <div class="col-12">
          <hr class="light-100">
          <h5>&copy; liveup.com</h5>
        </div>
      </div>
    </div>
</footer>

  </body>
</html>
