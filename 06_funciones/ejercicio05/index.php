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

function calcular_max($lista)
{
    $numero_de_elementos = count($lista);
    $maximo = 0;
    for ($i=0; $i<$numero_de_elementos; $i++)
    {
        if($maximo<$lista[$i]){
            $maximo=$lista[$i];
        }
    }
    
    return $maximo;
}

$lista = inicializar_array(10, 1, 30);

echo "<pre>";
print_r($lista);
echo "</pre>";

echo "</br>";
$maximo=calcular_max($lista);
echo "El máximo valor es: $maximo";



?>