<?php

class Inscripcion{
    public $stm;
    public function Bdconnect(){
        try{
            $this->stm=new PDO('mysql:host=localhost;dbname=escuela','root','');
        }
        catch(PDOException $error){
            echo 'Error en: ->'. $error->getMessage();
        }
    }
}

?>