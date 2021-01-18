<?php

class UsuarioPDO{
    public static function validarUsuario($codUsuario, $password){
        $oUsuario = null;
        $consulta = "Select * from T01_Usuario where T01_CodUsuario=? and T01_Password=?";
        $passwordEncriptado=hash("sha256", ($codUsuario.$password));
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario,$passwordEncriptado]);
        
        if($resultado->rowCount()>0){
            $oUsuarioConsulta = $resultado->fetchObject();
            $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
            $consulta = "Update T01_Usuario set T01_NumConexiones = T01_NumConexiones+1, T01_FechaHoraUltimaConexion=? where T01_CodUsuario=?";
            $resultado = DBPDO::ejecutaConsulta($consulta, [time(),$codUsuario]);
        }
        return $oUsuario;
    }
}