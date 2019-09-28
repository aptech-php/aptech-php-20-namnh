<?php
class Fruit
{
  var $name;
  var $color;
  var $weight;

  function set_name($n)
  {
    $this->name = $n;
  }

  function get_name()
  {
    return $this->name;
  }
}
// object apple
$apple = new Fruit();
$apple->set_name('Toi la qua Tao');
echo $apple->get_name();

$banana = new Fruit();
$banana->set_name('Toi la qua Chuoi');
// var_dump($banana);