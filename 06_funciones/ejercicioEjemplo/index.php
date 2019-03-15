<?php

/*

//Definir una funcion

function mi_primera_funcion()
{
    echo "Hola esto es una funcion";
}

//Llamada de una funcion

mi_primera_funcion();
*/

function suma($numero1, $numero2)
{
    return $numero1 + $numero2;
}

$resultado = suma(3, 100);
echo "Suma: $resultado";

?>