<?php

class Animal {
    
    public $nombre;
    public $alimentacion;
    
    public function __construct($nombre, $alim) {
        $this->nombre = $nombre;
        $this->alimentacion = $alim;
    }
    
    public function mostrar() {
        echo "Nombre: ".$this->nombre." <br> Tipo: ".$this->alimentacion." <br> ";
    }
}
