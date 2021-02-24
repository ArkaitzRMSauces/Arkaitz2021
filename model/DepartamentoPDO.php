<?php
    class DepartamentoPDO{
        
        public static function buscaDepartamentosPorDescripcion($descDepartamento){
            $aDepartamentos[];
            
            $consulta = "Select * FROM T02_Departamento where T02_DescDepartamento LIKE %";
            $resultado = DBPDO::ejecutarConsulta($sentenciaSQL, [$descDepartamento]);

        if ($resultadoConsulta->rowCount() > 0) {
            $departamento = $resultadoConsulta->fetchObject();
            $numDepartamento = 0;
            
            while ($departamento) { 
                $oDepartamento = new Departamento($departamento->T02_CodDepartamento, $departamento->T02_DescDepartamento, $departamento->T02_FechaCreacionDepartamento, $departamento->T02_VolumenNegocio, $departamento->T02_FechaBajaDepartamento);
                $aDepartamentos[$numDepartamento] = $oDepartamento;
                $numDepartamento++;
                $departamento = $resultadoConsulta->fetchObject();
            }
        }
            
            return $aDepartamentos;
        }
        
        public static function altaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio){
            $altaDepartamento = false;
            
            $consulta = "INSERT into T02_Departamento(T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_FechaBajaDepartamento)";
            $resultado = DBPDO::ejecutaConsulta($consulata, [$descDepartamento, $volumenNegocio, $codDepartamento]);
            
            if($resultado){
                $altaDepartamento = true;
            }
            
            return $altaDepartamento;
        }
        
        public static function  bajaLogicaDepartamento($codDepartamento, $fechaBaja){
            $bajaLogica = false;
            $dateBajaLogica = new DateTime($fechaBaja);
            
            $consulta = "UPDATE T02_Departamento set T02_FechaBajaDepartamento=? WHERE T02_CodDepartamento=?";
            $resultado = DBPDO::ejecutaConsulta($consulta, [$dateBajaLogica->getTimestamp(), $codDepartamento]);
            
            if($resultado){
                $bajaLogica = true;
            }
            
            return $bajaLogica;
        }
        
        public static function modificaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio){
            $modificarDepartamento = false;
            
            $consulta = "UPDATE T02_Departamento SET T02_DescDepartamento=?, T02_VolumenNegocio=? WHERE T02_CodDepartamento=?";
            $resultado = DBPDO::ejecutaConsulta($consulata, [$descDepartamento, $volumenNegocio, $codDepartamento]);
            
            if($resultado){
                $modificarDepartamento = true;
            }
            
            return $modificarDepartamento;
        }
        
        public static function validaCodNoExiste($codDepartamento){
            $codigoNoExiste = true;
            
            $consulta = "SELECT T02_CodDepartamento from T02_Departamento WHERE T02_CodDepartamento=?";
            $resultado = DBPDO::ejecutaConsulta($consulata, [$codDepartamento]);
            
            if($resultado->rowCount()>0){
                $codigoNoExiste = false;
            }
            
            return $codigoNoExiste;
        }
    }
?>
