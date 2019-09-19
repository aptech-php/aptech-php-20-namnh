<?php
// KHAI BAO
function quetNha($nha)
{
  echo "Toi quet nha cua " . $nha;
}

// GOI FUNCTION
quetNha('Son');


$products = [
  'iphone 11' => [
    'price' => 1099,
    'made' => [
      'in' => 'China',
      'by' => 'California'
    ]
  ],
  'note 9' => [
    'price' => 1099,
    'made' => [
      'in' => 'Viet Nam',
      'by' => 'Korean'
    ]
  ],
  'mua tai' => 'namcoi.com'
];

$tenCuaSanPham = array_keys($products);

?>
<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <h1>Mua hang tai <?php echo $products['mua tai']; ?></h1>
  <table>
    <thead>
      <tr>
        <th>Ten</th>
        <th>Price</th>
        <th>Made In</th>
        <th>Made By</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $tong = 0;
      // $i++ ~ $i = $i + 1;
      for ($i = 0; $i < count($products) - 1; $i++) {
        $tong = $tong + $products[$tenCuaSanPham[$i]]['price'];
        ?>
      <tr>
        <td><?php echo $tenCuaSanPham[$i]; ?></td>
        <td><?php echo $products[$tenCuaSanPham[$i]]['price']; ?></td>
        <td><?php echo $products[$tenCuaSanPham[$i]]['made']['in']; ?></td>
        <td><?php echo $products[$tenCuaSanPham[$i]]['made']['by']; ?></td>
      </tr>
      <?php } ?>
      <tr>
        <td>Tong</td>
        <td>
          <?php echo '$' . $tong; ?>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>