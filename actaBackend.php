<?php
require_once("bd.php");

$ConsultaActaSQL ="select * from `acta`";
$ConsultaActa =  mysqli_query($con, $ConsultaActaSQL);

?>