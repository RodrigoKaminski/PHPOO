<?php 

abstract class MotorBase
{
  const POTENCIA = 1.0;
  private $aceleracao = 0;
  private $ligado = false;
  
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
    
  /**
  * @param boolean $simounao 
  */
  public function ligar($simounao)
  {
    $this->ligado = $simounao;
  }
}