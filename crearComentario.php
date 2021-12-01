<?php
require_once("bd.php");
$id_acta='1250';
$usuario = 'Juan Campos';

if (isset($_POST["coment1"])) {
    $comentar = $_POST["coment1"];
}



//$comentar = $_POST["coment1"];
$crearComentarioSQL = "INSERT INTO `comentar` (`id_acta`, `usuario`, `descripcion`) VALUES (".$id_acta.",'$usuario','$comentar')";
$crearComentario = mysqli_query($con, $crearComentarioSQL);
header("Location: index.php");
?>
