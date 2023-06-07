<?php
$nombre = readline("primer nombre \n");
$apellido = readline("primer apellido \n");
echo"Bienvenido $nombre $apellido \n";


$numero1 = readline("Primer numero \n");
$numero2 = readline("segundo numero \n");
$suma = $numero1 + $numero2;
echo "El resultado de la suma es: $suma \n";


$numero1 = readline("Primer numero \n");
$numero2 = readline("segundo numero \n");
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
echo "El resultado de la suma es: $suma \n El resultado de la resta es: $resta \n";
echo "El resultado de la multiplicacion es: $multiplicacion \n";


$nombre = readline("Ingrese su nombre \n");
$sueldo = readline("Ingrese su sueldo \n");
$aumento = ($sueldo*0.15) + $sueldo;
echo "Estimado trabajador $nombre teniendo en cuenta su salario $sueldo se le informa que se le ha aplicado un aumento del 15%, su salario actual es de $aumento \n";
?>