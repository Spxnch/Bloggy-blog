<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "cleverdb";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion) {
    echo "conectado correctamente";
}else{
    echo "No se pudo conectar";
}

?>
