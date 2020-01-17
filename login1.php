<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <title></title>
  </head>
  <body>
    <div class="main">
      <div class="logo">
        <img src="Images\logo.jpg" alt="">
      </div>
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="login-box">
    <h3>login</h3>
      <form action="includes/signin.inc.php" method="post">
        <div class="text-box">
          <input type="text" placeholder="Username" name="username">
        </div>
        <div class="text-box">
          <input type="password" placeholder="Password" name="pwd">
        </div>
        <button class="btn" type="submit" name="Login">Login</button>
      </form>

      <div class="creata-acc">
        <p>Click<a href="UserRegistration.php"> here </a>to create a new account. </p>
      </div>
    </div>
  </body>
</html>
