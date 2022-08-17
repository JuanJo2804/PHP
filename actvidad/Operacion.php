<?php


class Operaciones{
    public $numero1;
    public $numero2;

    public function Suma(){
        echo $this->numero1 + $this->numero2;
    }
    public function Resta(){
        echo $this->numero1 - $this->numero2;
    }
    public function Multiplicacion(){
        echo $this->numero1 * $this->numero2;
    }
    public function Division(){
        echo $this->numero1 / $this->numero2;       
    }
}

?>