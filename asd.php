<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\jquery-2.2.3.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    </script>
    <title></title>
  </head>
  <body>

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
              <form class="" action="" method="post">
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Singin</button>
        </div>
      </div>

    </div>
    </div>

    <button type="button" name="button" data-toggle="modal" data-target="#myModal">POPPUP</button>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                  <input type="btn btn-primary" data-target="modal" value="Close">
                </div>
              </div>
            </div>
          </div>

          <a href="#" data-toggle="modal" data-target="#myModal">Open Modal</a>

        </div>
      </div>
    </div>



    <div class="container-fluid ">
      <div class="jumbotron">
        <div class="container-fluid">
          <h1 composha.info> <span label label-default>Sbonelo Site</span> </h1>
          <a class="btn btn-success btn-lg" id="btnGreen" role="button"data-toggle="modal" data-target="#myModal">learn more</a>
        </div>
      </div>
    </div>





    <script>
      var h = hello();
    </script>
    <script type="text/javascript" src="js\jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js\jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js\jquery core 3.4.1.js"></script>
  </body>
</html>
