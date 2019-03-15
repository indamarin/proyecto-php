<?php

$ciudad = "Almeria";
$appid = "2e1771d6989168058859fdd4b1b30d89";

$url = "https://api.openweathermap.org/data/2.5/weather?q=".$ciudad."&appid=".$appid."&units=metric";

$json = file_get_contents($url);

$tiempo = json_decode($json);

echo "<pre>";
print_r($tiempo);
echo "</pre>";

echo "<hr>";
echo "<table border=1>";
echo "<tr>";
echo "<td>Temperatura actual:</td>";
echo "<td>".$tiempo->main->temp."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Presion:</td>";
echo "<td>".$tiempo->main->pressure."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Humedad:</td>";
echo "<td>".$tiempo->main->humidity."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Temperatura minima:</td>";
echo "<td>".$tiempo->main->temp_min."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Temperatura maxima:</td>";
echo "<td>".$tiempo->main->temp_max."</td>";
echo "</tr>";
echo "</table>";
?>