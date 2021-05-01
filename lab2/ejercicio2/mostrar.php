<?php
    session_start();
    class Operaciones{
        private $a;
        private $b;
        private $c;

        function __construct($a,$b,$c){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        
        function multiplicar(){
            return $this->a*$this->b*$this->c;
        }
        function menor(){
            
            
        }
    }

    $operacion = $_POST['operacion'];
    $a = $_SESSION['a'];
    $b = $_SESSION['b'];
    $c = $_SESSION['c'];

    $operaciones = new Operaciones($a,$b,$c);
    switch($operacion){
        
        case "multiplicar":
            echo $operaciones->multiplicar();
            break;
        case "menor":
            echo $operaciones->menor();
            break;
    }
?>