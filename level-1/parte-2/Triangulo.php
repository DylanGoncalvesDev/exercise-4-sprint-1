<?php
class Triangulo extends Shape {
    
public function __construct(int|float $ancho, int|float $alto) {
   parent::__construct ($ancho , $alto);
}

public function calcularArea (): string {
    $area = $this->getAncho() * $this->getAlto();
    return "El area del Triangulo es: " . $area;
}

}