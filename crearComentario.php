<?php
require_once("bd.php");
$id_acta='1250';
$usuario = 'Juan Campos';

if (isset($_POST["coment1"])) {
    $comentar = $_POST["coment1"];
}



//$comentar = $_POST["coment1"];
$crearComentarioSQL = "insert into `comentario` (`id_acta`, `usuario`, `descripcion`) values (".$id_acta.",'$usuario','$comentar')";
$crearComentario = mysqli_query($con, $crearComentarioSQL);
header("Location: 146.83.194.142:1070/cositas/bastian.php");
?>
