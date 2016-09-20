<?php

class Carro
{

  public $cor = "Branco";
  private $potencia;
  private $capacidadeTanqueCombustivel;
  private $marca = "Ford";
  private $modelo = "Fiesta";
  private $anoFabricacao = 2016;
  private $chassi;
  
  public function __construct($cor = "Branco")
  {
    $this->cor = $cor;
  }
 
  public function __toString()
  {
    return $this->marca.':' .$this->modelo.':' .$this->anoFabricacao;
  }
  
  public function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }
  
  public function __get($atributo)
  {
    return $this->$atributo;
  }
  
  private function andar()
  {
  
  }
  
  public function acelerar()
  {
  
  }
  
  public function frear()
  {
  
  }
  
  public function ligar()
  {
  
  }
  
  public function desligar()
  {
  
  }
  
  public function abastecer()
  {
  
  }
  
}