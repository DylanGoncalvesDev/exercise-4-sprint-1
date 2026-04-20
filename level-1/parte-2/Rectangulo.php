<?php
class Rectangulo extends Shape {
    
//constructor heredando de la super clase//
public function __construct(int|float $ancho, int|float $alto) {
   parent::__construct ($ancho , $alto);
}

//metodo para calcular el area//
public function calcularArea (): string {
    $area = $this->getAncho() * $this->getAlto();
    return "El area del Rectangulo es: " . $area;
}

}
?>