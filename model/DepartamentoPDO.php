<?php
    class DepartamentoPDO{
        
        public static function buscaDepartamentosPorDescripcion($descDepartamento){
            $aDepartamentos = [];
            $sql="SELECT * FROM T02_Departamento where T02_DescDepartamento like :descDepartamento";
            $resultado=DBPDO::ejecutaConsulta($sql, ["descDepartamento" => "%".$descDepartamento."%"]);

            $indice=0;
            if($resultado->rowCount()>0){
                $departamentoDatos=$resultado->fetchObject();
                while($departamentoDatos){
                    $aDepartamentos[$indice] = new Departamento($departamentoDatos->T02_CodDepartamento,
                                                                $departamentoDatos->T02_DescDepartamento,
                                                                $departamentoDatos->T02_VolumenNegocio, 
                                                                $departamentoDatos->T02_FechaBajaDepartamento);
                    $indice++;
                    $departamentoDatos=$resultado->fetchObject();
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
