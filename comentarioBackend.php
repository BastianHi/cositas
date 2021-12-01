<?php
require_once("bd.php");

$ConsultaComentarioSQL ="select * from `comentar`";
$ConsultaComentario =  mysqli_query($con, $ConsultaComentarioSQL);

?>
