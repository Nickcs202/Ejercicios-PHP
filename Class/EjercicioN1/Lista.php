<?php

class Lista {
   
    public $list;
    
    public function nuevo($param) {
        $this->list[]=$param;
    }
    
    public function listar() {
    //echo 'lkjsadhfjksad';        
//var_dump($list); 
        foreach ($this->list as $value) {
            echo "<br><<<>>><br>";
            echo "nombre: ".$value->nombre."<br>"; 

            echo "tipo: ".$value->alimentacion."<br>"; 

            if(isset($value->edad)){ 

            echo "edad: ".$value->edad."<br>"; 

              }
        }
    }
    
        function listarAnimal() {
            echo 'A';
            foreach ($this->list as $value) {
                if ($value instanceof Animal) {
                  $value->mostrar();  
                }
            }
        }
        
    
}

?>
