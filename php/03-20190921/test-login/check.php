<h1>Hello PHP 20</h1>
<?php
$ten = $_GET['ten'];
$tuoi = $_GET['age'];
echo "Xin chao " . $ten . ", ban " . $tuoi . ' tuoi.';
if ($tuoi < 18) {
  echo "<h3>Ban khong duoc xem noi dung nay</h3>";
} else {
  echo "<h3>Noi dung nhay cam, hihi</h3>";
}
?>