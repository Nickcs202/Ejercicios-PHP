<?php

class Anfivio extends Animal{
    
    public $edad;
    
    public function __construct($nombre, $tipo, $edad) {
        parent::__construct($nombre,$tipo);
        $this->edad = $edad;
        }
        
        function mostrar() {
            echo parent::mostrar()."Su edad es ".$this->edad."<br>";
        }
    
}
