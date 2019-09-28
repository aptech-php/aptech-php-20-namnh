<?php

class Person
{
  public $name;
  protected $sex;
  private $mayMat;

  function __construct()
  {
    $this->set_may_mat(3);
  }

  public function set_name($n)
  {
    $this->name = $n;
  }

  protected function set_sex($s)
  {
    $this->sex = $s;
  }

  private function set_may_mat($m)
  {
    $this->mayMat = $m;
  }
}

class Nu extends Person
{
  function __construct()
  {
    parent::__construct();
    $this->set_sex('female');
  }
}

$nam = new Person();
// // $nam->set_name('Nam');
$nam->name = 'Nam';
// // $nam->sex = 'male';
// $nam->set_sex('male');
// $nam->set_may_mat('2');
var_dump($nam);
echo "<br>";

$sa = new Nu();
$sa->name = 'Sa';
// $sa->set_sex('female');
var_dump($sa);