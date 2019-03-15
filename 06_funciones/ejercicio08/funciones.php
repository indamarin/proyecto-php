<?php

//Imprimir tabla
function imprimir_tabla($numero)
{
echo "<h2>Tabla del $numero</h2>";
echo "<table border='1' cellpadding='5'>";
for ($i = 0; $i <= 10; $i++)
{
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>x</td>";
    echo "<td>$i</td>";
    echo "<td>=</td>";
    echo "<td>".$numero*$i."</td>";
    echo "</tr>";
}
echo "</table>";
}

//Imprimir tablas

function imprimir_tablas($inicio, $fin)
{
    for($i = $inicio; $i <= $fin; $i++)
    {
        imprimir_tabla($i);
    }

}


//Funcion inicializar array

function inicializar_array($numero_de_elementos, $min, $max)
{
    $numeros = array();

    for ($i=0; $i<$numero_de_elementos; $i++)
    {
        $numeros[$i] = rand($min, $max);
    }
    return $numeros;
}

// Funcion calcular media

function calcular_media($lista)
{
    $numero_de_elementos = count($lista);
    $suma = 0;
    for ($i=0; $i<$numero_de_elementos; $i++)
    {
        $suma = $suma + $lista[$i];  

    }
    $media = $suma / $numero_de_elementos;
    return $media;
}

//Funcion calcular maximo

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

//Funcion calcular minimo

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
?>


