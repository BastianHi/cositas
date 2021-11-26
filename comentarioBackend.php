<?php
require_once("bd.php");

$ConsultaComentarioSQL ="SELECT * FROM `comentar`";
$ConsultaComentario =  mysqli_query($con, $ConsultaComentarioSQL);

?>