
 <table>
   <tr>
     <th>id</th>
     <th>username</th>
     <th>email</th>
     <th>date</th>
   </tr>
   <tbody id="data"> <!--data will be displayed here-->

   </tbody>
 </table>



 <script>
   // call ajax
   var ajax = new XMLHttpRequest();
   var method = "GET";
   var url = "data.php";
   var asynchronous = true;

   ajax.open(method, url, asynchronous);
   // sending ajax XHLHttpRequest
   ajax.send();

   //receiving response from
   ajax.onreadystatechange = function()
   {
     if (this.readyState == 4 && this.status == 200) {
       // converting JSON back to array
       //alert(this.responseText);

       var data = JSON.parse(this.responseText);
       console.log(data); // for debugging

       //html value for <tbody>
       var html = "";
       // looping through the database
       for (var i = 0; i < data.length; i++) {
         var id = data[i].bookId;
         var username = data[i].username;
         var email = data[i].email;
         var date = data[i].date;

         // storing at html
         html += "<tr>";
         html += "<td>" + id +  "</td>";
         html += "<td>" + username +  "</td>";
         html += "<td>" + email +  "</td>";
         html += "<td>" + date +  "</td>";
         html += "</tr>";
       }

       // replacing the <tbody> of <table>
       document.getElementById("data").innerHTML = html;
     }
   }
 </script>








//coming

<main>
  <form class="" action="" method="post">

    timeslot: <input required type="text"  name="timeslot" id="timeslot" class="form-control">
    <br>
    name: <input type="text" name="username" placeholder="username" required>
    <br>
    email: <input type="text" name="email" placeholder="email" required>
    <br>
    <button type="submit" name="book-btn">Submit</button>
  </form>
  <br>
  <?php echo isset($msg)?$msg:''; ?>
</main>









<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Booking: <span id = "slot"></span> </h4>
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
              <input required type="text" readonly name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input required type="text" readonly name="email" class="form-control">
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
















 <main>
   <form class="" action="" method="post">

     name: <input type="text" name="username" placeholder="username" required>
     <br>
     email: <input type="text" name="email" placeholder="email" required>
     <br>
     <button type="submit" name="book-btn">Submit</button>
   </form>
   <br>
   <?php echo isset($msg)?$msg:''; ?>
 </main>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript" src="//localhost/php/bootstrap-4.4.1-dist/js/js/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="//localhost/php/bootstrap-4.4.1-dist/js/js/jquery-1.9.0.min.js"></script>
 <script type="text/javascript" src="//localhost/php/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="//localhost/php/bootstrap-4.4.1-dist/js/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="//localhost/php/bootstrap-4.4.1-dist/css/bootstrap.min.css">

 <script>
   $("book").click(function(){
     var timeslot = $(this).attr('data-timeslot');
     $("#slot").html(timeslot);
     $("#timeslot").val(timeslot);
     $("#myModal").modal("show");
   })
 </script>

 <script>
 $(document).ready(function(){
 var r = ' ';
   $("input").change(function(){
   if(result == ' '){
   r = $(this).val();
       }
       else {
         r += ', ' + $(this).val();
       }
       $('#answer').html(r);
   });
 });
 </script>

<div id="answer">

</div>
<script>
$(function(){
 $("#book").change(function(){
   var display = $("#book data-timeslot:selected").text();
   $("#timeslot").val(display);
 })


})
</script>















<div class="">
  <h1>Book for Date: <?php echo date('F d, Y', strtotime($date)); ?> </h1><hr>

</div>
<?php $timeslots = timeslots($duration, $cleanup, $start, $end);
  foreach ($timeslots as $ts) {
?>
<div class="col-md-2">
  <div class="form-group">
    <button id="book" type="btn btn-success book" data-timeslot="<?php echo $ts; ?>" ><?php echo $ts; ?></button>
  </div>
</div>
<?php } ?>

<main>
<form class="form" action="" method="post">
timeslot: <input required type="text" id="timeslot" name="timeslot">
<br>
name: <input type="text" name="username" placeholder="username" required>
<br>
email: <input type="text" name="email" placeholder="email" required>
<br>
<button type="submit" name="book-btn">Submit</button>
</form>
<br>
<?php echo isset($msg)?$msg:''; ?>
</main>











<div class="col-md-6 col-md-offset-3">
  <?php echo isset(&msg)?$msg:''; ?>
  <form class="" action="" autocomplete="off" method="post">
    <div class="from-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="from-group">
      <label for="">Email</label>
      <input type="text" class="form-control" name="email">
    </div>
    <button class="btn btn_primary" type="submit" name="book-btn">Submit</button>
  </form>
</div>

<!---- Two column Section ----->
<div class="container-fluid padding">
  <div class="rwo padding">
    <div class="ol-xs-12 col-sm-6 col-md-4">
      <h2>If you want to know more about us</h2>
      <p>A doctor is experiencing a lot of patients during his daily basis at his local pharmacy, almost every
      day there’s a long queue to consult and some patients return home without being assisted. Looking
      at our economy, money and time are one of the things that should be managed very well. The
      doctor does not have a clue of how his day will tend to be like.</p>
      <p>A web booking system allow users to book appointmens via the web during the work days, it
      doesn't metter where you are as long as you know the doctor</p><br>
      <a href="#" class="btn btn-primary">learn more</a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <img src="Images\healthcare-lifeinsurance.jpg" class="img-fluid">
    </div>
  </div>
</div>
