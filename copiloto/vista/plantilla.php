<?php
include_once "vista/modulos/cabecera.php";
include_once "vista/modulos/navbar.php";
if(isset($_GET["ruta"])){
    if ($_GET["ruta"]== "usuarios" ||
    $_GET["ruta"]== "jose" ||
    $_GET["ruta"]== "dos"  ){
        include_once "vista/modulos/".$_GET["ruta"].".php";

    }else{
        include_once "vista/modulos/404.php";
    }
}
include_once "vista/modulos/pie.php";