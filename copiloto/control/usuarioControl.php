<?php

include_once "../modelo/usuarioModelo.php";

class usuarioControl{
    public $idusuario;
    public $nombre;
    public $apellido;
    public $direccion;
    public $documento;
    public $email;
    public $telefono;
    

    public function ctrRegistroUsuario(){
        $objRespuesta= usuarioModelo::mldRegistrarUsuario($this->nombre,$this->apellido,$this->direccion,$this->documento,$this->email,$this->telefono);
        echo json_encode($objRespuesta);
    }
    public function ctrListarUsuarios(){
        $objRespuesta= usuarioModelo::mdlListarUsuarios();
        echo json_encode($objRespuesta);
    }   

    public function ctrEditarUsuario(){
        $objRespuesta= usuarioModelo::mdlEditarUsuario($this->idusuario,$this->nombre,$this->apellido,$this->direccion,$this->documento,$this->email,$this->telefono);
        echo json_encode($objRespuesta); 
    }

    public function ctrBorrarUsuario(){
        $objRespuesta = usuarioModelo::mdlBorrarUsuario();
        echo json_encode($objRespuesta);
    }
}


if(isset($_POST["regNombre"],$_POST["regApellido"],$_POST["regDireccion"],$_POST["regDocumento"],$_POST["regEmail"],$_POST["regTelefono"])){
    $objRespuesta = new usuarioControl();
    $objRespuesta->nombre = $_POST["regNombre"];
    $objRespuesta->apellido = $_POST["regApellido"];
    $objRespuesta->direccion = $_POST["regDireccion"];
    $objRespuesta->documento = $_POST["regDocumento"];
    $objRespuesta->email = $_POST["regEmail"];
    $objRespuesta->telefono = $_POST["regTelefono"];
    $objRespuesta->ctrRegistroUsuario();
}

if(isset($_POST["listarUsuarios"]) =="ok"){
    $objRespuesta= new usuarioControl();
    $objRespuesta->ctrListarUsuarios();

}

if(isset($_POST["editIdUsuario"])){
    $objRespuesta =  new usuarioControl();
    $objRespuesta->idusuario =$_POST["editIdUsuario"];
    $objRespuesta->nombre = $_POST["editNombre"];
    $objRespuesta->apellido = $_POST["editApellido"];
    $objRespuesta->direccion = $_POST["editDireccion"];
    $objRespuesta->documento = $_POST["editDocumento"];
    $objRespuesta->email = $_POST["editEmail"];
    $objRespuesta->telefono = $_POST["editTelefono"];
    $objRespuesta->ctrEditarUsuario();
}

if(isset($_POST["editIsUsuario"])){
    $objRespuesta = new usuarioControl();
    $objRespuesta->ctrBorrarUsuario();
}