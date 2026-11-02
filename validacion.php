<?php
include "clases.php";
session_start();
if(isset($_SESSION["agenda"]) 
  && isset($_POST["nombre"])) {
    $nombre=strip_tags($_POST["nombre"]);
    $telefono=strip_tags($_POST["telefono"]);
    $correo=strip_tags($_POST["correo"]);
    $contacto=new Contacto();
    $contacto->setNombre($nombre);
    $contacto->setTelefono($telefono);
    $contacto->setCorreo($correo);
    $_SESSION["agenda"]->setContacto($contacto);
}
header("location:index.php");
?>
