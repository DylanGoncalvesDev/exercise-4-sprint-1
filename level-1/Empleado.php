<?php
class Empleado {
  //atributos//
  private $nombre = "";
  private $sueldo = 0;

  public function __construct ($nombre, $sueldo) {
    $this-> nombre = $nombre;
    $this-> sueldo = $sueldo;
  }

  //getters//
  public function getNombre () {
     return $this-> nombre;
  }
  public function getSueldo () {
     return $this-> sueldo;
  }

  //setters//
  public function setNombre ($nombre) {
     $this->nombre = $nombre;
   
  }
  public function setSueldo ($sueldo) {
     $this->sueldo = $sueldo;
  }
  public function hacienda () {
     //$mensaje = "";
     if ($this->sueldo > 6000) {
         $mensaje = "El empleado " . $this->nombre . " debe pagar impuestos";
     } else {
         $mensaje = "El empleado " . $this->nombre . " No tiene que pagar impuestos";
     }
     return $mensaje

  } 
  
}

    










?> 