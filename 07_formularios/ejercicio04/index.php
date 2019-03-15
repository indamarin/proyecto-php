<html>

    <head>
    </head>

    <body>

        <form action="index.php" method="get">
            <div>
                <label for="numero">Numero de monedas</label>
                <input type="number" id="numero" name="numero_moneda">
            </div>
            <div>
                <label for="monedas">Tipo de moneda</label>
                <select id="monedas" name="tipo_moneda">
                    <option value="1">Dólar Estadounidense</option>
                    <option value="2">Euro</option>
                    <option value="3">Yen japonés</option>
                    <option value="4">Libra esterlina</option>
                    <option value="5">Franco suizo</option>
                </select>
            </div>
            <button type="submit">Enviar</button>

        </form>

    </body>

</html>

<?php

$numero_moneda = $_GET["numero_moneda"];
$tipo_moneda = $_GET["tipo_moneda"];

if (empty($numero_moneda) != 1 && empty($tipo_moneda) !=1 ){
    for($i=0;$i<$numero_moneda;$i++){
        echo "<img src=".$tipo_moneda."/".rand(1,2).".jpg></img>";
    }
    
}
?>
