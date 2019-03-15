<?php



include_once("config.php");



$codigo_producto = $_GET['codigo_producto'];

$result = mysqli_query($mysqli, "SELECT codigo AS codigo_fabricante, nombre AS nombre_fabricante,  FROM fabricante");
$resultado = mysqli_query($mysqli, "SELECT nombre AS nombre_producto, precio AS precio_producto, codigo_fabricante AS cod_fab_prod FROM producto WHERE codigo = ". $codigo_producto);

?>