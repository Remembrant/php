<?php

/*if (isset($_POST['signup-submit'])) {
  $name = $_POST['fname'];
  $surname = $_POST['lname'];
  $uEmail = $_POST['email'];
  $uPass = $_POST['pwd'];
  $uPassConfirm = $_POST['pwd-confirm'];

  $mysqli = new mysqli('localhost', 'root', '', 'loginsystem');
  $stmt = $mysqli->prepare("INSERT INTO users_table (fname, lname,email, pwd) VALUES (?,?,?,?)");
  $stmt->bind_param('ssss', $name, $surname, $email, $ped);
  $stmt->execute();
  $msg = " Booking Successfull ";
  $stmt->close();
  $mysqli->close();


}
*/




/*if (isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $name = $_POST['fname'];
  $surname = $_POST['lname'];
  $addres = $_POST['address'];
  $phon = $_POST['phone'];
  $idNum = $_POST['id_num'];
  $uDOB = $_POST['dOB'];
  $gender = $_POST['sex'];
  $uEmail = $_POST['email'];
  $uPass = $_POST['pwd'];
  $uPassConfirm = $_POST['pwd-confirm'];


  /*$name $surname $addres $phon $idNum $uDOB $gender $uEmail $uPass $uPassConfirm*/

  /*if (empty($name) || empty($surname) || empty($addres) || empty($phon)
  || empty($idNum) || empty($dOB) || empty($gender) || empty($uEmail) || empty($uPass)
  || empty($uPassConfirm)) {
    header("Location: ../UserRegistration.php?error=emptyfields&fname=".$name.
          "&fname=".$surname. "&address=".$addres. "&phone=".$phon. "&id_num=".$idNum.
          "&dOB=".$dOB. "&sex=".$gender. "&email=".$uEmail);
      exit();
  }
  elseif (!filter_var($uEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uEmail)) {
    header("Location: ../UserRegistration.php?error=invalid");
      exit();
  }
  elseif (!filter_var($uEmail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../UserRegistration.php?error=invalidemail&uEmail=".$uEmail);
      exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uEmail)) {
    header("Location: ../UserRegistration.php?error=invalidemail&uEmail=".$uEmail);
      exit();
  }
  elseif ($uPass !== $uPassConfirm) {
    header("Location: ../UserRegistration.php?error=passwordcheck&email=".$uEmail);
      exit();
  }
  else {
    $sql = "SELECT email FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../UserRegistration.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $uEmail);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result(stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../UserRegistration.php?error=usertaken&email=".$uEmail);
        exit();
      }
      else {
        $sql = "INSERT INTO users (fname, lname, address, phone, id_num, dOB,
        sex, email, pwd) VALUES (?,?,?,?,?,?,?,?,?)";
        mysqli_stmt_execute($stmt);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../UserRegistration.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


          mysqli_stmt_bind_param($stmt, "sssiissss", $name, $surname, $addres,
           $phon, $idNum, $uDOB, $gender, $uEmail, $uPass);
          mysqli_stmt_execute($stmt);
          header("Location: ../UserRegistration.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../UserRegistration.php?error=invalidlogin");
  exit();
}*/


require ('dbh.inc.php');

if(isset($_POST['signin-btn'])){

         $sql1 = "SELECT * FROM users_table WHERE username ='".$_POST["username"]."' ";
                  $result = $conn->query($sql1);
                  if ($result->num_rows > 0) {
                      //echo "<script>alert('Sorry, user already exist!');</script>";
                      echo "Sorry, user already exist!";
                 }
          else{
            $sql = "INSERT INTO users_table (username,uPass) VALUES ('" . $_POST["username"] . "','" . $_POST["uPas"] . "' )";

            if ($conn->query($sql) === TRUE) {
                //echo "<script>location.replace('patient_success_msg.php');</script>";
                echo "location";
            } else {
                //echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
                echo "There was an Error";
            }

            $conn->close();
          }
        }
