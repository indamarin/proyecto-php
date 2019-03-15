<?php

include 'funciones.php';

$lista = inicializar_array(10,1,30);

//Calcular media
$media = calcular_media($lista);
echo "La media es $media</br>";

//Calcular max
$maximo = calcular_max($lista);
echo "El valor maximo es $maximo</br>";

//Calcular min
$minimo = calcular_min($lista);
echo "El valor minimo es $minimo</br>";



?>