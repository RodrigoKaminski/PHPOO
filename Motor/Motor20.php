<?php

namespace Ford\Motor;
use Ford\Motor\MotorBase;

require_once "MotorBase.php";

class Motor20 extends Ford\Motor\MotorBase 
{
    const POTENCIA = 2.0;
    
    protected $potencia = 2.0;
    
    public function acelerar($valor) {
        
        
        $torque = parent::acelerar($valor);
        $this->aceleracao= $valor+5;
        return $torque + 0.1;
    }

    public function afterBurner()
    {
        
    }
    
    public function refrigerar()
    {
        
    }

}