<?php

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

//------------------------------------------

function imprimir_tablas($inicio, $fin)
{
    for($i = $inicio; $i <= $fin; $i++)
    {
        imprimir_tabla($i);
    }

}

imprimir_tablas(1,10);
?>