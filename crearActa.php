<?php
require_once("bd.php");
$id_acta='1250';


if (isset($_POST["coment1"])) {
    $descripcion = $_POST["coment1"];
}

$crearActaSQL = "insert into `acta` (`id_acta`, `acta`) values (".$id_acta.",'$descripcion')";
$crearActa = mysqli_query($con, $crearActaSQL);
header("Location: index.php");
?>