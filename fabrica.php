<pre>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "Carro.php";

$carro = new Carro("Verde");
$carro2 = new Carro("Preto");
$carro3 = new Carro();

$carro->marca = "Audi";
echo $carro->modelo;

var_dump ($carro);


