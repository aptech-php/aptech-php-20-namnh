<?php
$servername = "localhost";
$username = "adminflkasjdfl";
$password = "falksdfl";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
echo "hehe dong 8 ne";
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";