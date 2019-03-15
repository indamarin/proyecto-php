<?php

class Persona {
    //Propiedades
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $edad;


    //Constructor

    public function __construct($nombre = "", $apellido1 = "", $apellido2 = "", $edad = 0) {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->edad = $edad;
    }

    //Funciones o metodos
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    /*
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getEdad() {
        return $this->edad;
    }
    */
    public function imprimir() {
        echo "Nombre: ".$this->$nombre;
        echo "Apellido1: ".$this->$apellido1;
        echo "Apellido2: ".$this->$apellido2;
        echo "Edad: ".$this->$edad;
    }

}
// Instacia
$inda = new Persona();

$inda->setNombre("Indalecio");
$inda->setApellido1("Marin");
$inda->setApellido2("Ramos");
$inda->setEdad(20);

$inda->imprimir();

/*
echo "Nombre: ".$inda->getNombre();
echo "</br>";
echo "Apellido1: ".$inda->getApellido1();
echo "</br>";
echo "Apellido2: ".$inda->getApellido2();
echo "</br>";
echo "Edad: ".$inda->getEdad();
echo "</br>";
*/

//Creamos otra instancia

$maria new Persona("Maria", "Sanchez", "Saez", 25);




?>