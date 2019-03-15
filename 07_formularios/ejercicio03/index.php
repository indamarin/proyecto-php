<html>

    <head>
    </head>

    <body>

        <form action="index.php" method="get">
            <div>
                <label for="numero">Numero para mostrar su tabla de multiplicar</label>
                <input type="number" id="numero" name="numero_multi">
                <button type="submit">Enviar</button>
            </div>

        </form>

    </body>

</html>

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

$num_multiplicar = $_GET["numero_multi"];

if (empty($num_multiplicar) != 1){
    imprimir_tabla($num_multiplicar);
}
?>

