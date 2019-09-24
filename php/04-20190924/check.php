<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_20_namnh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM thong_tin_lop WHERE email = '" . $name . "' AND password = '" . $password  . "'";
echo $sql;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  // while ($row = mysqli_fetch_assoc($result)) {
  //   echo "id: " . $row["id"] . " - Name: " . $row["ten"] . " " . $row["tuoi"] . "<br>";
  // }
  echo "dang nhap thanh cong";
} else {
  echo "Dang nhap that bai";
}

mysqli_close($conn);

var_dump($_POST);