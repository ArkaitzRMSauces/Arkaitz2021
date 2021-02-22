<?php
    class Departamento{
        private $codDepartamento;
        private $descDepartamento;
        private $fechaCreacionDepartamento;
        private $volumenNegocio;
        private $fechaBajaDepartamento;
        function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento = null){
            $this->codDepartamento = $codDepartamento;
            $this->descDepartamento = $descDepartamento;
            $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
            $this->volumenDeNegocio = $volumenNegocio;
            $this->fechaBajaDepartamento = $fechaBajaDepartamento;
        }
        
        function __get($atributo){
            return $this->$atributo;
        }
        
        function __set($atributo, $nuevoAtributo) {
            $this->$atributo = $nuevoAtributo;
        }
    }
?>
