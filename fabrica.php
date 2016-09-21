<pre>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "Carro.php";
require_once "Motor/MotorBase.php";
require_once "Motor/Motor16.php";
require_once "Motor/Motor20.php";

$motor20 = new Motor20();
$motor16 = new Motor16();

print_r($motor16);

$carro = new Carro("Verde", $motor20);

$carro->abastecer(4);
$carro->ligar();
print_r($carro);






