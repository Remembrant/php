<?php
require ('php.php');

if(isset($_POST['signupd-btn'])){

  $uPass = $_POST["uPass"];
  $cPass = $_POST["cPass"];
  if ($uPass==$cPass) {

echo "string";

         $sql1 = "SELECT * FROM doctor WHERE username ='".$_POST["username"]."' ";
                  $result = $conn->query($sql1);
                  if ($result->num_rows > 0) {
                      //echo "<script>alert('Sorry, user already exist!');</script>";
                      echo "Sorry, user already exist!";
                 }
                  else{
                    $sql = "INSERT INTO doctor (username,email,password) VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "','" . $_POST["uPass"] . "' )";

                    if ($conn->query($sql) === TRUE)
                    {
                        //echo "<script>location.replace('patient_success_msg.php');</script>";
                        echo "<script>alert('User registered successfull!!! Go to login button')</script>";
                        //header("location: ../index.php");
                    }
                    else
                    {
                        echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;

                    }


                  }
            }
            else
            {
              echo "<script>alert('Please confirm your password again!!!')</script>";
            }
            $conn->close();
        }
