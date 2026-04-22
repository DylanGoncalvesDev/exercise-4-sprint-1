<?php
class Triangulo extends Shape {

//metodo para calcular el area//
public function calcularArea (): string {
    $area = ($this->getAncho() * $this->getAlto()) / 2;
    return "El area del Triangulo es: " . $area;
}

}
?>