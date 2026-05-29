<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "sistema_crud";

    $conn = mysqli_connect($server, $user, $password, $bd);

    function msg($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
            $texto
            </div>";
    }
?>