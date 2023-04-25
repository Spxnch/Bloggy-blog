<?php 
require '../conexion.php';

session_start();

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$query = "SELECT COUNT(*) AS contar FROM usuario WHERE email = '$email' AND contrasena = '$contrasena'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['usernmae'] = $email;
    header("location: ../../../../html/Mis post/Publicaciones.php");
}else{
    echo "DATOS INCORRECTOS";
}

?>