<?php

// getting data from database
$conn = mysqli_connect("localhost", "root", "", "loginsystem");

// getting data from employee mysql_list_table
$result = mysqli_query($conn, "SELECT * FROM bookings WHERE date");

// storing in array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

//returning response in JSON format
echo json_encode($data);
