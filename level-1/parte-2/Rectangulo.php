<?php
class Rectangulo extends Shape {
    
//metodo para calcular el area//
public function calcularArea (): string {
    $area = $this->getAncho() * $this->getAlto();
    return "El area del Rectangulo es: " . $area;
}

}
?>