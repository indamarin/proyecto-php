<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}


include_once("config.php");


$codigo_usuario = $_GET['codigo_usuario'];


if(empty($codigo_usuario) == 1){
    header('Location: panel_usuarios.php');
    exit;
}


$query= "DELETE FROM users ".
        "WHERE id = ? ";
    
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "i", $codigo_usuario);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);


if ($comprobar == 1){
    header('Location: panel_usuarios.php');
        
}

?>