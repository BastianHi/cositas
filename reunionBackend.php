<?php
require_once("bd.php");

$ConsultaReunionSQL ="select * from `reunion`";
$ConsultaReunion =  mysqli_query($con, $ConsultaReunionSQL);

?>