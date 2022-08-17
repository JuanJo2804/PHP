<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$fechadenacimiento = $_POST['fechadenacimiento'];

include 'conexion.php';

$conexion = new Conexion();
$conexion->bdconnect();
$sql = "INSERT INTO persona(Nombre,Apellido,Telefono,Direccion,Fecha_nacimiento,Email) 
VALUES ('$nombre','$apellido','$telefono','$direccion','$fechadenacimiento','$email')";

$insertar = $conexion->stm->prepare($sql);
$insertar->execute();

header("location: listado.php");
?>