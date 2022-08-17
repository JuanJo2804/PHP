<?php

$id = $_GET['id'];
include 'conexion.php';
$conexion = new Conexion();
$conexion->Bdconnect();
$sql = "SELECT * FROM persona WHERE id=$id";

$consulta = $conexion->stm->prepare($sql);
$consulta->execute();

$personas = $consulta->fetchAll(PDO::FETCH_OBJ);
foreach ($personas as $p){}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
</head>
<body >
        <form action="actualizarpersona.php" method="post">
            
            <div class="row">
                <div class="col-md-1">
                    <img src="https://agenciapublicadeempleo.sena.edu.co/_catalogs/masterpage/MasterPagePrincipal/images/favicon.ico?rev=43" alt="">
                </div>
                
                <div class="col-md-10 d-flex align-items-center">
                    <h1 style="margin:auto">FORMULARIO </h1>
                </div>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <label for="">Nombre</label>
                        <input type="hidden" name="id" value="<?php echo $p->Id; ?>">
                        <input type="text" class="form-control" name="nombre" value="<?php echo $p->Nombre; ?>">
                    </div>

                    <div class="col-md-4">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" name="apellido"  value="<?php echo $p->Apellido; ?>">
                    </div>

                    <div class="col-md-4">
                        <label for="">Telefono</label>
                        <input type="number" class="form-control" name="telefono"  value="<?php echo $p->Telefono; ?> ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Direccion</label>
                        <input type="text" class="form-control" name="direccion" value="<?php echo $p->Direccion; ?>"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Facha de nacimiento</label> 
                        <br>
                        <input type="date" name="fechadenacimiento" class="form-control" value="<?php echo $p->Fecha_nacimiento; ?>">
                    </div>
    
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $p->Email; ?>">
                    </div>
                </div>

            
            <button class="btn btn-danger" type="submit" >Guardar</button>
        </div>
    </form>
</body>
</html>