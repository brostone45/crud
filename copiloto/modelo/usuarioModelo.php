<?php
include_once "conexion.php";

class usuarioModelo{
    public static function mldRegistrarUsuario($nombre,$apellido,$direccion,$documento,$email,$telefono){
        $mensaje = array();
        try {
            $objRespuesta= conexion::conectar()->prepare("INSERT INTO practica(nombre,apellido,direccion,documento,email,telefono)VALUES(:nombre,:apellido,:direccion,:documento,:email,:telefono)");
            $objRespuesta->bindParam("nombre",$nombre);
            $objRespuesta->bindParam("apellido",$apellido);
            $objRespuesta->bindParam("direccion",$direccion);
            $objRespuesta->bindParam("documento",$documento);
            $objRespuesta->bindParam("email",$email);
            $objRespuesta->bindParam("telefono",$telefono);
            if($objRespuesta->execute()){
                $mensaje = array("codigo"=>"200","mensaje"=>"Usuario registrado correctamente");
            }else{
                $mensaje = array("codigo"=>"200","mensaje"=>"Usuario registrado correctamente");
            }
        } catch (Exception $e) {
            $mensaje = array("codigo"=>"425","mensaje"=>"Error : ".$e->getMessage()." al registrar el usuario");
        }
        return $mensaje;
    }

    public static function mdlListarUsuarios(){
        $listarUsuarios = null;
        try {
            $objRespuesta =conexion::conectar()->prepare("SELECT * FROM practica ORDER BY idUsuario ASC");
            $objRespuesta->execute();
            $listarUsuarios= $objRespuesta->fetchAll();
            $objRespuesta= null;
        } catch (Exception $e) {
            $listarUsuarios= $e->getMessage();
        }
        return $listarUsuarios;
    }

    public static function mdlEditarUsuario($idusuario, $nombre, $apellido, $direccion, $documento, $email, $telefono){
        $mensaje = array();
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE practica SET nombre=:nombre, apellido=:apellido, direccion=:direccion, documento=:documento, email=:email, telefono=:telefono WHERE idusuario=:idusuario");
            $objRespuesta->bindParam(":idusuario", $idusuario);
            $objRespuesta->bindParam(":nombre", $nombre);
            $objRespuesta->bindParam(":apellido", $apellido);
            $objRespuesta->bindParam(":direccion", $direccion);
            $objRespuesta->bindParam(":documento", $documento);
            $objRespuesta->bindParam(":email", $email);
            $objRespuesta->bindParam(":telefono", $telefono);
            if ($objRespuesta->execute()) {
                $mensaje = array("codigo" => "200", "mensaje" => "Usuario actualizado correctamente");
            } else {
                $mensaje = array("codigo" => "425", "mensaje" => "No fue posible procesar la solicitud de actualización");
            }
        } catch (Exception $e) {
            $mensaje = array("codigo" => "425", "mensaje" => $e->getMessage());
        }
        return $mensaje;
    }

    public static function mdlBorrarUsuario(){
        $borrarUsuario= null;
        try {
            $objRespuesta =conexion::conectar()->prepare("DELETE * FROM practica WHERE idusuario=:idusuario");
            $objRespuesta->execute();
            $borrarUsuario= $objRespuesta->fetchAll();
            $objRespuesta= null;
        } catch (Exception $e) {
            $borrarUsuario= $e->getMessage();
        }
        return $borrarUsuario;
    }
}