<?php

function conectar() {
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dataBase = 'doraspatermal';
    $conexion = mysqli_connect($server, $user, $pass, $dataBase);
    if ($conexion) {
        return $conexion;
    }
    echo '<h2>Conexion Fallida</h2>';
}

function desconectar($conexion) {
    if ($conexion) {
        $desconexion = mysqli_close($conexion);
        if (!$desconexion) {
            echo '<h2>Desconexion Fallida</h2>';
        }
    } else {
        echo '<h2>No hay conexion existente</h2>';
    }

}

?>