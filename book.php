<?php
require ('includes/php.php');
  $conn = mysqli_connect("localhost", "root", "", "loginsystem");
if (isset($_GET['date'])) {
  $date = $_GET['date'];


  // getting data from employee mysql_list_table
  $result = mysqli_query($conn, "SELECT * FROM bookings WHERE date");

  // storing in array
  $data = array();
  if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row['timeslot'];
    }

  }
}

if(isset($_POST['book-btn'])){
    $timeslot = $_POST["timeslot"];
    //$date = $_POST["date"];
         $sql1 = "SELECT * FROM bookings WHERE date ='".$_GET["date"]."' AND timeslot = '" . $_POST["timeslot"] . "' ";
                  $result = $conn->query($sql1);
                  if ($result->num_rows > 0) {
                      //echo "<script>alert('Sorry, user already exist!');</script>";
                      $msg =  "<div class='alert alert-danger'>Sorry you have already booked this slot</div>";
                 }
          else{
            $sql = "INSERT INTO bookings (username,timeslot,email,date) VALUES ('" . $_POST["username"] . "','" . $_POST["timeslot"] . "','" . $_POST["email"] . "','" . $_GET["date"] . "')";

            if ($conn->query($sql) === TRUE) {
                $msg =  "<div class='alert alert-success'>Booked successfull</div>";
            } else {
                $msg =  "<div class='alert alert-danger'>Booking was unsuccessfull</div>";
            }


          }
          $data[]=$timeslot;
          $conn->close();
        }

$duration = 15;
$cleanup = 0;
$start = "09:00";
$end = "15:00";

function timeslots($duration, $cleanup, $start, $end){
  $start = new DateTime($start);
  $end = new DateTime($end);
  $interval = new DateInterval("PT".$duration."M");
  $cleanupInterval = new DateInterval("PT".$cleanup."M");

  for ($intStart = $start; $intStart <$end ; $intStart->add($interval)->add($cleanupInterval)) {
    $endPeriod = clone $intStart;
    $endPeriod->add($interval);
    if ($endPeriod>$end) {
      break;
    }

    $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");

  }
  return $slots;

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
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



    <title></title>
  </head>
  <body>

    <style media="screen">

    .app-pic {
      width: 15%;
      float: left;

    }
    </style>

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

    <div class="container">
      <h1 class="text-center">Book for Date: <?php echo date('F d, Y', strtotime($date)); ?> </h1><hr>
      <?php echo isset($msg)?$msg:''; ?>
      <div class="row">
        <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
          foreach ($timeslots as $ts) {
        ?>
          <div class="col-md-2">
            <div class="form-group">
              <?php if (in_array($ts,$data)) {
                $today = $date==date('Y-m-d')?"today":""; ?>
                <button data-toggle="modal" data-target="#myModal"  class="btn btn-danger"><?php echo $ts; ?></button>
            <?php } else{ ?>
                <button data-toggle="modal" data-target="#myModal"  class="btn btn-success book" data-timeslot="<?php echo $ts; ?>" ><?php echo $ts; ?></button>
              <?php  }?>

            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Booking: <span id = "slot"></span> </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form class="" action="" method="post">
                <div class="form-group">
                  <label for="">Timeslot</label>
                  <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <input required type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input required type="text" name="email" class="form-control">
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-primary" type="submit" name="book-btn">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
    </div>

    <script>
      $(".book").click(function(){
        var timeslot = $(this).attr('data-timeslot');
        $("#slot").html(timeslot);
        $("#timeslot").val(timeslot);
        $("#myModal").modal("show");
      })
    </script>

  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </body>
</html>
