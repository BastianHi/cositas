<?php


//datos de la conexion
$db_host="mysql.face.ubiobio.cl"; //www.ejemplo.cl
$db_user="g7soft";
$db_pass="g7isw2021";
$db_name="7soft2021";


//string conexion
$con = mysqli_connect($db_host, $db_user,$db_pass, $db_name);

if(mysqli_connect_errno())
{
   echo 'No se pudo conectar a la base de datos: ' .mysqli_connect_error();
}else
{
    echo 'Se conecto';
}
?>
