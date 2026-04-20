<?php
//llamamos a la superclase y sus subclases//
require 'Shape.php';
require 'Rectangulo.php';
require 'Triangulo.php';

//instanciamos//
$rectangulo1 = new Rectangulo (45, 23.6);
$triangulo1 = new Triangulo (12.7, 61);

//probamos setters//
$rectangulo1 -> setAncho (98);
$Triangulo1 -> setAlto (120);

//probamos getters//
 echo "\n" . $rectangulo1 -> getAncho ();
 echo "\n" . $Triangulo1 -> getAlto ();

//llamamos al metodo para calcular el area//
echo "\n" . $rectangulo1 -> calcularArea ();
echo "\n" . $triangulo1 -> calcularArea ();

?>