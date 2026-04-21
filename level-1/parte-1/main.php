 <?php
  echo "//Parte 1//";

  //llamamos a la clase//
  require 'Empleado.php';

  //instanciamos//
  $empleado1 = new Empleado ("Juan", 8600);
  $empleado2 = new Empleado ("Paula", 5000);

  //probamos setters//
  $empleado1 -> setNombre ("laura");
  $empleado1 -> setSueldo (12000);

  //probamos getters//
  echo "\n" . $empleado1 -> getNombre ();
  echo "\n" . $empleado1 -> getSueldo();
  
  //llamamos al metodo para determinar que empleados tienen impuestos//
  echo "\n" . $empleado1 -> determinarImpuesto ();
  echo "\n" . $empleado2 -> determinarImpuesto ();

?> 

 

