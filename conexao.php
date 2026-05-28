<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "sistema_crud";

    if (mysqli_connect($server, $user, $password, $bd)) {
        echo "Conectado";
    } else {
        echo "Erro!";
    }
?>