<?php
$id=$_GET['id'];
include 'sql.php';
$conexion = new Inscripcion();
$conexion->Bdconnect();
$sql = "DELETE FROM inscripcion WHERE id=$id";

$borrar = $conexion->stm->prepare($sql);
$borrar->execute();

header("location: lista.php");

?>