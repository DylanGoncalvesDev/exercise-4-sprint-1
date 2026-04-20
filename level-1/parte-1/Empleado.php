<?php
class Empleado {
  //atributos//
  private $nombre = "";
  private $sueldo = 0;

  //constructo//
  public function __construct (string $nombre, int $sueldo) {
    $this-> nombre = $nombre;
    $this-> sueldo = $sueldo;
  }

  //getters//
  public function getNombre () : string {
     return $this-> nombre;
  }
  public function getSueldo (): int|float {
     return $this-> sueldo;
  }

  //setters//
  public function setNombre (string $nombre) {
     $this->nombre = $nombre;
   
  }
  public function setSueldo (int $sueldo) {
     $this->sueldo = $sueldo;
  }

  //metodo propio//
  public function determinarImpuesto (): string {
     $mensaje = "";
     
     if ($this->sueldo > 6000) {
         $mensaje = "El empleado " . $this->nombre . " debe pagar impuestos";
     } else {
         $mensaje = "El empleado " . $this->nombre . " No tiene que pagar impuestos";
     }
     return $mensaje;
  } 
  
}

?> 