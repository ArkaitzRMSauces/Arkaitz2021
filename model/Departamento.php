<?php
    class Departamento{
        private $codDepartamento;
        private $descDepartamento;
        private $volumenNegocio;
        private $fechaBajaDepartamento;
        function __construct($codDepartamento, $descDepartamento, $volumenNegocio, $fechaBajaDepartamento = null){
            $this->codDepartamento = $codDepartamento;
            $this->descDepartamento = $descDepartamento;
            $this->volumenDeNegocio = $volumenNegocio;
            $this->fechaBajaDepartamento = $fechaBajaDepartamento;
        }
        function getCodDepartamento(){
            return $this->codDepartamento;
        }
        function getDescDepartamento(){
            return $this->descDepartamento;
        }
        function getVolumenDeNegocio(){
            return $this->volumenDeNegocio;
        }
        function getFechaBajaDepartamento(){
            return $this->fechaBajaDepartamento;
        }
        function setCodDepartamento($codDepartamento){
            $this->codDepartamento=$codDepartamento;
        }
        function setDescDepartamento($descDepartamento){
            $this->descDepartamento=$descDepartamento;
        }
        function setVolumenDeNegocio($volumenDeNegocio){
            $this->volumenDeNegocio=$volumenDeNegocio;
        }
        function setFechaBajaDepartamento($fechaBajaDepartamento){
            $this->fechaBajaDepartamento=$fechaBajaDepartamento;
        }
    }
?>
