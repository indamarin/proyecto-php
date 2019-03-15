<?php

class Coche {
    
    //Propiedades o Variables
    private $color;

    //Metodos o funciones
    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor()
    {
        echo "<h1>".$this->color."</h1>";
    }
    


}

//Creamos una instancia (un objeto) de la clase Coche
$miCoche = new Coche();

$miCoche->setcolor("Blanco");
$miCoche->getColor();

?>