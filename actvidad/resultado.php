<?php

include 'Operacion.php';


$operaciones = new Operaciones();

 $operaciones->numero1=$_POST['num1'];
 $operaciones->numero2=$_POST['num2']; 

$consulta=$_POST['operaciones'];

switch ($consulta){
    case 'suma':
        $operaciones -> Suma();
        break;
    case 'resta':
        $operaciones -> Resta();
        break;
    case 'multiplicacion':
        $operaciones -> Multiplicacion();
        break;
    case 'division':
        $operaciones -> Division();
        break;
}

?>