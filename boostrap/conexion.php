<?php

class Conexion{
    public $stm;
    public function bdconnect(){
        try{
            $this->stm = new PDO('mysql:host=localhost;dbname=formulario','root','');
        }
        catch(PDOException $error){
            echo 'Error en: ->'. $error->getMessage();
        }
    }
}
/* $conexion = new Conexion();
$conexion->bdconnect();
 */
?>