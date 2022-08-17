<?php

include 'sql.php';
$conexion = new Inscripcion();
$conexion->Bdconnect();
$sql = "SELECT * FROM inscripcion";

$anadir = $conexion->stm->prepare($sql);
$anadir->execute();

$personas = $anadir->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
        <table class="table table-hover">
            <tr>
                <th>NOMBRE DEL CURSO AL QUE ASPIRA</th>
                <th>Fechas de diligenciamiento</th>
                <th>Apellidos</th>  
                <th>Nombre</th>
                <th>Lugar de nacimiento</th>
                <th>Fecha de nacimiento</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Tipo de documento</th>
                <th>Numero de documento</th>
                <th>Lugar de expedición</th>
                <th>Estado civl</th>
                <th>Desplazado</th>
                <th>Desvinculado</th>
                <th>Madre soltera</th>
                <th>Tiene hijos</th>
                <th>Cuantos hijos</th>
                <th>Dirección</th>
                <th>Estrato</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Contributivo</th>
                <th>Eps</th>
                <th>Cotizante</th>
                <th>beneficiario</th>
                <th>Subsidiado (SISBEN)</th>
                <th>Puntaje de SISBEN</th>
                <th>RH</th>
                <th>Nombre de persona de emergencia</th>
                <th>Telefono de emergencia</th>
                <th>¿tiene alguna enfermedad?</th>
                <th>¿Que enfermedad?</th>
                <th>¿Tiene alguna discapacidad?</th>
                <th>¿Que discapacidad?</th>
            </tr>
            <?php foreach ($personas as $p) { ?>
            <tr>
                <td><?php echo $p ->nombre_curso_aspira ?></td>
                <td><?php echo $p ->fecha_diligenciamiento ?></td>
                <td><?php echo $p ->apellido ?></td>
                <td><?php echo $p ->nombre ?></td>
                <td><?php echo $p ->lugar_nacimiento ?></td>
                <td><?php echo $p ->fecha_nacimiento ?></td>
                <td><?php echo $p ->edad ?></td>
                <td><?php echo $p ->genero ?></td>
                <td><?php echo $p ->tipo_documento ?></td>
                <td><?php echo $p ->numero_documento ?></td>
                <td><?php echo $p ->lugar_expedicion ?></td>
                <td><?php echo $p ->estado_civil ?></td>
                <td><?php echo $p ->desplazado ?></td>
                <td><?php echo $p ->desvinculado ?></td>
                <td><?php echo $p ->madre_soltera ?></td>
                <td><?php echo $p ->tiene_hijos ?></td>
                <td><?php echo $p ->cuantos_hijos ?></td>
                <td><?php echo $p ->direccion ?></td>
                <td><?php echo $p ->estrato ?></td>
                <td><?php echo $p ->telefono_fijo ?></td>
                <td><?php echo $p ->celular ?></td>
                <td><?php echo $p ->email ?></td>
                <td><?php echo $p ->contributivo ?></td>
                <td><?php echo $p ->eps ?></td>
                <td><?php echo $p ->cotizante ?></td>
                <td><?php echo $p ->beneficiario ?></td>
                <td><?php echo $p ->subsidiado_sisben ?></td>
                <td><?php echo $p ->puntaje_sisben ?></td>
                <td><?php echo $p ->gp_sangre_rh ?></td>
                <td><?php echo $p ->emergencia_nombre ?></td>
                <td><?php echo $p ->emergencia_telefono ?></td>
                <td><?php echo $p ->tiene_enfermedad ?></td>
                <td><?php echo $p ->que_enfermedad ?></td>
                <td><?php echo $p ->tiene_discapacidad ?></td>
                <td><?php echo $p ->que_discapacidad ?></td>
                <td><a href="actualizarformulario.php?id=<?php echo $p->id;?>"><button>Actualizar</button></a> 
                <button onclick="borrar('<?php echo $p->id;?>')">borrar</button></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <script src="alertaHD.js"></script>
    <script>
        var id
        function borrar (id){
        
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            });
            setTimeout(function(){
            location.href = 'borrar.php?id=' + id;}, 1500); 
          }
            else {
            swal("Your imaginary file is safe!");
          }
        });
    }
    </script>
</body>
</html>