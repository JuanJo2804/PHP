<?php
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$fechadenacimiento = $_POST['fechadenacimiento'];

include 'conexion.php';

$conexion = new Conexion();
$conexion->bdconnect();
$sql = "UPDATE persona SET Nombre='$nombre',Apellido='$apellido',Telefono='$telefono',Email='$email',Fecha_nacimiento='$fechadenacimiento' WHERE Id=$id";

$insertar = $conexion->stm->prepare($sql);
$insertar->execute();

header("location: listado.php");




?>