<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_passport";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query_user = "SELECT * FROM users AS a
JOIN passports AS b
ON a.passport_id = b.id";

$result = mysqli_query($conn, $query_user);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['email'];
    echo "<br>";
    echo $row['passport_id'];
    echo "<br>";
    echo $row['info'];
    // $passportInfo = $row['passport_id'];
    // $query_passport_of_user = "SELECT * FROM passports WHERE id = " . $passportInfo;
    // $result = mysqli_query($conn, $query_passport_of_user);
    // $passport = mysqli_fetch_assoc($result);
    // echo $passport['info'];
  }
} else {
  echo "0 results";
}