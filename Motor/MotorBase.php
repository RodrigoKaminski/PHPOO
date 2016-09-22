<?php 

namespace Ford\Motor;

require_once "MotorBase.php";
abstract class MotorBase


{
  const POTENCIA = 1.0;
  protected $aceleracao = 0;
  private $ligado = false;
  
  protected $potencia = 1.0;
  
  /**
  * Retorna o toque da aceleracao
  * @param float $valor
  * @return float 
  */
  
  public function acelerar($valor)
  {
    $this->aceleracao = $valor;
    return $this->aceleracao * self::POTENCIA;
  }
    
  abstract public function refrigerar();
        
  
  
  /**
  * @param boolean $simounao 
  */
  public function ligar($simounao)
  {
    $this->ligado = $simounao;
  }
  
  public function getPotencia()
  {
      return $this->potencia;
              
  }
}