<?php
 require('php.php');

 if(isset($_POST["signin-btn"])){
							$sql= "SELECT * FROM regist WHERE username= '" . $_POST["username"]."' AND uPass= '" . $_POST["uPass"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<span style='color:green;'> alert('You have successfull login')</span>";
                        header("location: ../petiant1.php");

												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'> alert('Invalid username or password')</span>";
										}
						$conn->close();
					}
