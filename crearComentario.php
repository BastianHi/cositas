<?php
require_once("bd.php");
$id_acta='1250';

if (isset($_POST["nombre"])) {
    $usuario = $_POST["nombre"];
}
if (isset($_POST["coment1"])) {
    $comentar = $_POST["coment1"];
}



//$comentar = $_POST["coment1"];
$crearComentarioSQL = "insert into `comentar` (`id_acta`, `usuario`, `descripcion`) values (".$id_acta.",'$usuario','$comentar')";
$crearComentario = mysqli_query($con, $crearComentarioSQL);
header("Location: acta.php");
?>
