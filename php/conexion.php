
<?php


$conexion = mysqli_connect("localhost","root","","conexion_bd");

if ($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'error de conexion';
}




?>