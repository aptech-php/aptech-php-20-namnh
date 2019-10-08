<?php
var_dump($_GET);
$ten = $_GET['ten'];
$password = $_GET['password'];

if ($ten == 'nam' && $password = '123') {
  // echo "<h1>Dang Nhap Thanh Cong</h1>";
  header('Location: trang-chu.php');
} else {
  //  echo "<h1>Dang Nhap That Bai</h1>";
  header('Location: 404.php');
}