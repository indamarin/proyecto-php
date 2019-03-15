<?php
session_start();

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<h1>Nombre: ";
echo $_POST['nombre'];
echo "</h1>";







if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}


include_once("config.php");


$dir_subida = '../productos/imagenes/';



if(empty($_FILES['imagen']) == 1){
    $imagen = '../assets/default.png'; 
}else{
  
    $posicion = strpos($_FILES['imagen']['name'], ".");
    $extension = substr($_FILES['imagen']['name'],$posicion);
    $nombre = uniqid().$extension;
    $imagen = $dir_subida.$nombre;

  
    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen)) {
        header('Location: new_producto.php');
    }  
}


$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$fabricante = $_POST['fabricante'];


if(empty($nombre) == 1 || empty($precio) == 1 || empty($fabricante) == 1 || empty($imagen) == 1){
    header('Location: new_producto.php');
    exit;
}

$query= "INSERT INTO producto ".
        "(nombre, precio, codigo_fabricante, imagen) ".
        "VALUES (?, ?, ?, ?)";

    
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "sdis", $nombre, $precio, $fabricante, $imagen);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);

if ($comprobar == 1){
    header('Location: panel.php');
    
}else{
    header('Location: new_producto.php');
}

?>
