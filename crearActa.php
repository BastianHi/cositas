<?php
require_once("bd.php");
  

if (isset($_POST["coment1"])) {
    $descripcion = $_POST["coment1"];
}
  $id_reu = $_POST["id_r"];


$crearActaSQL = "insert into `acta` (`acta`, `id_reu`) values ('$descripcion',".$id_reu.")";
$crearActa = mysqli_query($con, $crearActaSQL);
header("Location: acta.php");
?>
