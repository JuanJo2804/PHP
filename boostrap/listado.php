<?php

include 'conexion.php';
$conexion = new Conexion();
$conexion->Bdconnect();
$sql = "SELECT * FROM persona";

$consulta = $conexion->stm->prepare($sql);
$consulta->execute();

$personas = $consulta->fetchAll(PDO::FETCH_OBJ);
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
        <table class="table table-hover" class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Fecha de nacimiento</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($personas as $p) { ?>
            <tr>
                <td><?php echo $p ->Nombre ?></td>
                <td><?php echo $p ->Apellido?></td>
                <td><?php echo $p ->Telefono?></td>
                <td><?php echo $p ->Direccion?></td>
                <td><?php echo $p ->Fecha_nacimiento?></td>
                <td><?php echo $p ->Email?></td>
                <td><a href="formularioActualizar.php?id=<?php echo $p->Id;?>"><button>Actualizar</button></a> 
                <button>Eliminar</button></td>
            </tr>
            <?php }?>
        </table>
    </div>
    
    <script>

        function borrar(id){
            swal({
                title: "¿Estas seguro que deseas eliminar ?",
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
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        }
    </script>
</body>
</html>