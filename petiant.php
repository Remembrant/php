<?php

require ('includes/php.php');

function build_calendar($month, $year){

//require ('data.php');
/*// getting data from employee mysql_list_table
$result = mysqli_query($conn, "SELECT * FROM bookings WHERE date");

// storing in array
$data = array();
if (mysqli_num_rows($result)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row['date'];
  }

}*/

$daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
$numDays = date('t',$firstDayOfMonth);
$dateComponents = getdate($firstDayOfMonth);
$monthName = $dateComponents['month'];
$dayOfWeek = $dateComponents['wday'];
$dateToday = date('Y-m-d');
$calendar = "<table class = 'table table-bordered'>";
$calendar.="<center><h2>$monthName $year</h2>";
$calendar.= " <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";

$calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m',mktime(0,0,0,$month+1,1,$year))."&year=".date('Y',mktime(0,0,0,$month+1,1,$year))."'>Next Month</a></center><br>";
$calendar.= "<tr>" ;
foreach ($daysOfWeek as $day) {
  $calendar.= "<th class='header'>$day</th>";

}
$currentDay = 1;
$calendar.= "<tr></tr>";

if ($dayOfWeek > 0) {
  for ($i=0; $i < $dayOfWeek; $i++) {
    $calendar.= "<td></td>";
  }
}


$month = str_pad($month, 2, "0", STR_PAD_LEFT);

while ($currentDay <= $numDays) {

if ($dayOfWeek == 7) {
  $dayOfWeek = 0;
  $calendar.="</tr><tr>";
}

  $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
  $date = "$year-$month-$currentDayRel";

  $dayname = strtolower(date('l',strtotime($date)));
  $eventNum = 0;
  $today = $date==date('Y-m-d')?"today":"";
  if ($date<date('Y-m-d')) {
    $calendar.="<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>N/A</button>";
  }/*elseif (in_array($date,$data)) {
    $calendar.="<td class='$today' ><h4>$currentDay</h4><button>Already Booked</button>";
  }*/
  else {
    $calendar.="<td class='$today' ><h4>$currentDay</h4><a href='book.php?date=".$date."'class='btn btn-success btn-xs'>Book</a>";
  }
  $calendar.= "</td>";
  $currentDay++;
  $dayOfWeek++;


}

if ($dayOfWeek != 7) {
  $remainingDays = 7 - $dayOfWeek;
  for ($x=0; $x < $remainingDays; $x++) {
    $calendar.="<td></td>";
  }
}
$calendar.= "</tr>";
$calendar.= "</table>";

echo $calendar;
}
 ?>

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

     <link rel="stylesheet" href="#">
     <style>
     body{




     }

       table{
         color: #d5d5d5;

       }
       td{
         text-align: center;

       }
       .today{
         background: gray;
       }

     </style>
   </head>
   <title></title>
   <body >

     <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
       <div class="container-fluid">
         <a class="navbar-brand" href="#"><img class="app-pic" src="Images/logo.jpg"></a>
         <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarResponsive">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                   <a class="nav-link" href="index">Home</a>
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

       <?php
         $dateComponents = getdate();
         $month = $dateComponents['mon'];
         $year = $dateComponents['year'];
         echo build_calendar($month,$year);
       ?>

   </body>
 </html>
