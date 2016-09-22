<?php

require_once 'RodaBasica.php';

class RodaAco implements RodaBasica, Countable, JsonSerializable
{
    const DIAMETRO = 15;
    
    public function parar() {
        
    }

    public function rodar() {
        
    }
    
    public function count($mode = 'COUNT_NORMAL') {
        return 4;
    }

    public function jsonSerialize() {
        return array(
            "diametro" => self::DIAMETRO,
            "quant" => 4
        );
    }

}
