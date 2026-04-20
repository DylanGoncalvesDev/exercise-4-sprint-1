<?php
class Shape {
  //atributos//
  private $ancho = 0;
  private $alto = 0;

  //constructo//
  public function __construct (int|float $ancho, int|float $alto) {
    $this-> ancho = $ancho;
    $this-> alto = $alto;
  }

  //getters//
  public function getAncho (): int|float {
     return $this-> ancho;
  }
  public function getAlto (): int|float {
     return $this-> alto;
  }

  //setters//
  public function setAncho (int|float $ancho) {
     $this->ancho = $ancho;
   
  }
  public function setAlto (int|float $alto) {
     $this->alto = $alto;
  }

}