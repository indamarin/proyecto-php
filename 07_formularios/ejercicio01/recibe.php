<?php

if (empty($_GET["user_name"]) == 1){
    echo "No hay valores";
}else{
    echo "Bienvenido a IAW:".$_GET["user_name"];
}



//print_r($_GET);
?>