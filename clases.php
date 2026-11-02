<?php

/*
 * Este fichero contine nuestro modelo de datos 
 * donde mantenmos el encapusalmiento
 */
class Contacto {
    private $nombre;
    private $telefono;
    private $correo;
    public function setNombre($nombre) { $this->nombre=$nombre; }
    public function getNombre() { return $this->nombre; }
    public function setTelefono($telefono) { $this->telefono=$telefono; }
    public function getTelefono() { return $this->telefono; }
    public function setCorreo($correo) { $this->correo=$correo; }
    public function getCorreo() { return $this->correo; }
}
class Agenda {
    private $contactos;
    public function __construct() {
        $this->contactos=array();
    }
    public function setContacto($contacto) {
        $this->contactos[]=$contacto;
    }
    public function getContactos() {
        return $this->contactos;
    }
    public function getTotalContactos() {
        return count($this->contactos);
    }
}
