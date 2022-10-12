<?php

class Motor{

  
    public $name;
    public $cc;
    public $bensin;
    public $tank;
    public $jarak;


    public function __construct($name, $bensin, $cc, $tank, $jarak)
{
    $this->name = $name;
    $this->bensin = $bensin;
    $this->cc = $cc;
    $this->tank = $tank;
    $this->jarak = $jarak;
}
public function attack($jarak)
{
    $jarak->cc = $jarak->cc - ($this->bensin - $jarak->tank);
    echo "$this->name lebih boros dari  $jarak->name \n";
    echo "karena $jarak->name sisa bensin-nya $jarak->bensin \n";

    

}
}
$motor1 = new Motor("Beat", 5, 125, 12, 30);
$motor2 = new Motor("supra", 4, 110, 6, 30);

$motor1->attack($motor2);

