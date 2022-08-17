<?php
$id = $_POST['id'];
$nombre_curso_aspira = $_POST['nombre_curso_aspira'];
$fecha_diligenciamiento = $_POST['fecha_diligenciamiento'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$lugar_nacimiento = $_POST['lugar_nacimiento'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$tipo_documento = $_POST['tipo_documento'];
$numero_documento = $_POST['numero_documento'];
$lugar_expedicion = $_POST['lugar_expedicion'];
$estado_civil = $_POST['estado_civil'];
$desplazado = $_POST['desplazado'];
$desvinculado = $_POST['desvinculado'];
$madre_soltera = $_POST['madre_soltera'];
$tiene_hijos = $_POST['tiene_hijos'];
$cuantos_hijos = $_POST['cuantos_hijos'];
$direccion = $_POST['direccion'];
$estrato = $_POST['estrato'];
$telefono_fijo = $_POST['telefono_fijo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$contributivo = $_POST['contributivo'];
$eps = $_POST['eps'];
$cotizante = $_POST['cotizante'];
$beneficiario = $_POST['beneficiario'];
$subsidiado_sisben = $_POST['subsidiado_sisben'];
$puntaje_sisben = $_POST['puntaje_sisben'];
$gp_sangre_rh = $_POST['gp_sangre_rh'];
$emergencia_nombre = $_POST['emergencia_nombre'];
$emergencia_telefono = $_POST['emergencia_telefono'];
$tiene_enfermedad = $_POST['tiene_enfermedad'];
$que_enfermedad = $_POST['que_enfermedad'];
$tiene_discapacidad = $_POST['tiene_discapacidad'];
$que_discapacidad = $_POST['que_discapacidad'];

include 'sql.php';

$conect=new Inscripcion();
$conect->Bdconnect();
$sql = "UPDATE inscripcion SET nombre_curso_aspira='$nombre_curso_aspira',fecha_diligenciamiento='$fecha_diligenciamiento',apellido='$apellido',nombre='$nombre',lugar_nacimiento='$lugar_nacimiento',fecha_nacimiento='$fecha_nacimiento',edad='$edad',genero='$genero',tipo_documento='$tipo_documento',numero_documento='$numero_documento',lugar_expedicion='$lugar_expedicion',estado_civil='$estado_civil',desplazado='$desplazado',desvinculado='$desvinculado',madre_soltera='$madre_soltera',tiene_hijos='$tiene_hijos',cuantos_hijos='$cuantos_hijos',direccion='$direccion',estrato='$estrato',telefono_fijo='$telefono_fijo',celular='$celular',email='$email',contributivo='$contributivo',eps='$eps',cotizante='$cotizante',beneficiario='$beneficiario',subsidiado_sisben='$subsidiado_sisben',puntaje_sisben='$puntaje_sisben',gp_sangre_rh='$gp_sangre_rh',emergencia_nombre='$emergencia_nombre',emergencia_telefono='$emergencia_telefono',tiene_enfermedad='$tiene_enfermedad',que_enfermedad='$que_enfermedad',tiene_discapacidad='$tiene_discapacidad',que_discapacidad='$que_discapacidad' WHERE id='$id'";

$agregar = $conect->stm->prepare($sql);
$agregar->execute(); 

header("location: lista.php");

echo $sql;

?>