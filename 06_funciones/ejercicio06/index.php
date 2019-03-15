<?php

function inicializar_array($numero_de_elementos, $min, $max)
{
    $numeros = array();

    for ($i=0; $i<$numero_de_elementos; $i++)
    {
        $numeros[$i] = rand($min, $max);
    }
    return $numeros;
}

//----------------------------------------------------------------

function calcular_min($lista)
{
    $numero_de_elementos = count($lista);
    $minimo = 40;
    for ($i=0; $i<$numero_de_elementos; $i++)
    {
        if($minimo>$lista[$i]){
            $minimo=$lista[$i];
        }
    }
    
    return $minimo;
}

$lista = inicializar_array(10, 1, 30);

echo "<pre>";
print_r($lista);
echo "</pre>";

echo "</br>";
$minimo = calcular_min($lista);
echo "El máximo valor es: $minimo";



?>