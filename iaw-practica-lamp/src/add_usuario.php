<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}


include_once("config.php");


$nombre = $_POST['name'];
$edad = $_POST['age'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$contra = md5($passwd);


if(empty($nombre) == 1 || empty($edad) == 1 || empty($email) == 1 || empty($contra) == 1){
    header('Location: new_usuario.php');
    exit;
}

$query= "INSERT INTO users ".
        "(name, age, email, password) ".
        "VALUES (?, ?, ?, ?)";


    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "siss", $nombre, $edad, $email, $contra);
    mysqli_stmt_execute($stmt);
    $comprobar = $stmt->affected_rows;
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);

if ($comprobar == 1){
    header('Location: panel_usuarios.php');
    
}else{
    header('Location: new_usuario.php');
}

?>