<pre>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "Carro.php";
require_once "Motor/MotorBase.php";
require_once "Motor/Motor16.php";
require_once "Motor/Motor20.php";
require_once "Motor/Motor20Turbo.php";
require_once './Roda/RodaAco.php';
require_once './Acessorios/MotorBase.php';

require_once './vendor/autoload.php';

$log = new MonoLog\Logger();
$motorAgua = new Bosh\Motor\MotorBase();

$motor20= new Ford\Motor\Motor20();
$motor16 = new Ford\Motor\Motor16();
$motorTurbo =  new Ford\Motor\Motor20Turbo();

$roda = new RodaAco();

$carro = new Ford\Carro("Verde", $motorTurbo);

$carro->abastecer(10);
$carro->ligar();
$carro->acelerar(50);


print_r($roda);

print_r($roda->jsonSerialize());







