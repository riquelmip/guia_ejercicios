<?php
      //   EJERCICIO 1
 /*Los 20 empleados de una fábrica trabajan en dos turnos: diurno o nocturno. Se 
desea calcular el salario diario de cada uno de los empleados de acuerdo con los 
siguientes puntos:
- La tarifa de horas diurnas es de $5
- La tarifa de horas nocturnas es de $10
- Caso de ser domingo, la tarifa se pagará en $10 en el turno diurno y $20 en el 
turno nocturno



$empleados = [
    array( "nombre" => "Adonay", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Samuel", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Miguel", "turno" => "diurno", "domingo" => false),
    array( "nombre" => "Pepe", "turno" => "Nocturno", "domingo" => true),
    array( "nombre" => "Oscar", "turno" => "Nocturno", "domingo" => true),
];

foreach ($empleados as $empleado) {
    $tarifa = $empleado["domingo"] ? ($empleado["turno"] == "nocturno" ? 10 : 20) : ($empleado ["turno"] == "diurno" ? 5 : 10);
    $salario = 8 * $tarifa;

    echo "Nombre: " . $empleado["nombre"] . "\n";
    echo "Turno: " . $empleado["turno"] . "\n";
    echo "Domingo: " . ($empleado["domingo"] ? "Si" : "No") . "\n";
    echo "Salario diario: $" . $salario . "\n\n";
}
*/

//EJERCICIO 2
/*
Bubblesort => algoritmo de ordenamiento ,este algoritmo revisa cada elemento del arrglo, una posicion con otra
y va evaluando que posicion es mayor ó menor  a la siguiente posicion

$arreglo = [3,10,2,14,23,50,7,16];
function BubbleSort($arreglo){
  for($i=0; $i < count($arreglo); $i++){
   for($j = 0; $j < count($arreglo) -1; $j++){
    
   }
  }
}

*/

//EJERCICIO 3
/*Calcular el total a pagar por cada uno de los primeros 10 clientes que llegan a una 
llantería, si el precio de cada llanta es de $80 si se compran menos de 4 llantas y de 
$60 si se compran 4 o más. 
  $clientes = array (
    array("Nombre" => "pepe", "numero de compras" => 3),
    array("Nombre" => "pablo", "numero de compras" => 8),
    array("Nombre" => "penelope", "numero de compras" => 1),
    array("Nombre" => "pascacio", "numero de compras" => 8),
    array("Nombre" => "sandra", "numero de compras" => 18),
    array("Nombre" => "lorena", "numero de compras" => 2),
    array("Nombre" => "alberto", "numero de compras" => 1),
    array("Nombre" => "lucas", "numero de compras" => 5),
    array("Nombre" => "flor", "numero de compras" => 4),
    array("Nombre" => "xiomara", "numero de compras" => 12),
  );

  $promocion = 60;
  $sinpromo = 80;
  foreach($clientes  as $cliente){
    $nombre = $cliente["Nombre"];
    $compras = $cliente["numero de compras"];
    if($compras > 4){
      $totalPago = $compras * $promocion;
      echo "total a  pagar con promoción de ". $nombre." es "."\n"."$".$totalPago." dolares"."\n" ;
    }else if($compras <= 4){
      $totalPago = $compras * $sinpromo;
      echo "total  a pagar sin promoción de " . $nombre." es "."\n"."$".$totalPago ." dolares"."\n";
    }
  }
  */
  //EJERCICIO 4
  /*
  Un vendedor ha hecho una N ventas (este valor lo debe pedir) y desea saber 
cuántas de estas fueron de $400 o menos; cuántas fueron mayores a $400 pero 
inferior a $800; y cuántas de $800 o superior a tal cantidad. Haga el programa
que le proporcione al vendedor esta información.


$n = readline("Ingrese el número de ventas: ");
$ventas_menor_igual_400 = 0;
$ventas_entre_400_y_800 = 0;
$ventas_mayor_igual_800 = 0;

for ($i = 0; $i < $n; $i++) {
    $venta = readline("Ingrese el valor de la venta " . ($i+1) . ": ");
    if ($venta <= 400) {
        $ventas_menor_igual_400++;
    } elseif ($venta < 800) {
        $ventas_entre_400_y_800++;
    } else {
        $ventas_mayor_igual_800++;
    }
}

echo "Ventas de $400 o menos: $ventas_menor_igual_400\n";
echo "Ventas mayores a $400 pero inferiores a $800: $ventas_entre_400_y_800\n";
echo "Ventas de $800 o más: $ventas_mayor_igual_800\n";
*/

//EJERCICIO 5
/* Escribir un programa que permita imprimir en pantalla los números del 1 al 50, 
  excepto el 25. 

  for($i=1; $i<=50;$i++){
   if($i==25){
    continue;
   }
   echo $i."<br/>";
  }
  */
  // EJERCICIO 6
   /*Elaborar un programa, que permita el ingreso de 100 números enteros. El programa 
debe sumar todos los números que sean múltiplos de 3 


$numbers = array(1, 2, 4, 12, 11, 19, 21, 24, 27, 30, 33, 36, 39, 42, 45, 48, 51, 54, 57, 60, 63, 66, 69, 72, 75, 78, 81, 84, 87, 90, 93, 96, 99, 12, 15, 18, 10, 11, 11, 12, 123, 126, 12, 13, 135, 138, 141, 144, 147, 150, 153, 16, 19, 12, 165, 168, 171, 174, 17, 10, 13, 186, 18, 19, 15, 198, 201, 204, 207, 21, 21, 21, 21, 22, 225, 28, 31, 24, 27, 40, 43, 26, 49, 22, 255, 258, 261, 264, 267, 270, 273, 276, 279, 282, 28, 28, 29, 294, 29, 100);

$suma = 0;

foreach ($numbers as $number){
    $suma += ($number % 3 == 0) ? $number : 0;
}


echo "La suma total de los numeros de multiplos de 3 es: " , $suma . "\n";
*/

//EJERCICIO 7
/*
En una empresa de 20 trabajadores, se hará un aumento al salario de acuerdo con 
el tiempo de servicio, para este aumento se tomará en cuenta lo siguiente:
Tiempo de servicio Aumento
1 a menos de 5 años $25
De 5 y menos de 10 años $50
De 10 y menos de 20 años $100
De 20 años a más $150
Al final deberá imprimir el nombre, salario actual, el aumento y el nuevo sueldo de 
cada trabajador.



$empleados = array(
    array("Nombre" => "pepe", "años_de_servicio" => 3),
    array("Nombre" => "nando", "años_de_servicio" => 17),
    array("Nombre" => "pancho", "años_de_servicio" => 7),
    array("Nombre" => "flor", "años_de_servicio" => 9),
    array("Nombre" => "juana", "años_de_servicio" => 10),
    array("Nombre" => "maria", "años_de_servicio" => 7),
    array("Nombre" => "chico", "años_de_servicio" => 2),
    array("Nombre" => "fer", "años_de_servicio" => 4),
    array("Nombre" => "edgar", "años_de_servicio" => 24),
    array("Nombre" => "luz", "años_de_servicio" => 14),
);

$salario = 365;
$aumento1 = 25;
$aumento2 = 50;
$aumento3 = 100;
$aumento4 = 150;

foreach($empleados as $empleado){
    $nombre = $empleado["Nombre"];
    $años_de_servicio = $empleado["años_de_servicio"];
    if($años_de_servicio>=1 && $años_de_servicio <= 5){
        $aumento = $salario + $aumento1;
        echo "\n"."aumento = ".$aumento1;
    } else if($años_de_servicio>5 && $años_de_servicio <= 10){
        $aumento = $salario + $aumento2;
        echo "\n"."aumento = ".$aumento2;
    } else if($años_de_servicio>10 && $años_de_servicio <= 20){
        $aumento = $salario + $aumento3;
        echo "\n"."aumento = ".$aumento3;
    } else if($años_de_servicio>20 ){
        $aumento = $salario + $aumento4;
        echo "\n"." aumento = "."\n".$aumento4;
    }
    echo  "  nombre empleado = ".$nombre.  " salario ".$salario ."\n". " salario y aumento es igual = ".$aumento;
} */

//EJERCICIO 8
/*Crear un Array que almacene los siguientes valores
 100,8,5,20,15,63,6,9,2,1,5,3,4,7,9,102,88,64  y los ordene de menor a mayor. 
 

 $numeros = array(100,8,5,20,15,63,6,9,2,1,5,3,4,7,9,102,88,64 );
     sort($numeros);
     foreach($numeros as $numero){
        echo $numero . " ";
     }
 */

 //EJERCICIO 9
 /*
 Dado el siguiente array [“manzana”,”banana”,”fresa”]
1.	Agrega 3 frutas más al arreglo 
2.	Elimina el valor banana del arreglo


$frutas = array("manzana", "banana", "fresa");
array_push($frutas, "uvas", "pera", "papaya");
$canasta = array_search("banana", $frutas );
array_splice($frutas, $canasta, 1);
foreach ($frutas as $fruta) {
    echo $fruta . " ";
}
*/

//EJERCICIO 10
 /* Un obrero necesita calcular su salario semanal,
  el cual se obtiene de la siguiente manera:
   Si trabaja 40 horas o menos se le paga $4 por hora.
    Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas
     y $6 por cada hora extra. 

         $horas = 41;
         $extras = 1;
         $total1 = 0;
         $tCompleto = 160;

        if( $horas <= 40){
          $total1 = $horas * 4 ;
          echo $total1;
        }else if($horas > 40){
            $total2 = $tCompleto + $extras * 6;
            echo $total2;
        };
   */
  //EJERCICIO 12
   /* Calcular el salario liquido de 10 empleados tomando en cuenta que existen 3 roles 
con las siguientes prestaciones salariales:
Programador Jr     $600
Programador Middle $900
Programador Sr	   $1800


Debera de mostrar el salario mensual descontando (La Renta , Seguro  y AFP)
Debera de mostrar el salario anual descontando (La Renta , Seguro  y AFP)
Debera de mostrar la suma de todos los salarios de los 10 empleados.
renta 10 % , seguro 3% , afp 7% 

 
 $sueldosTotales = array(
    array("Nombre" => "pepe", "nivel" => "jr","salario" => 600),
    array("Nombre" => "ana", "nivel" => "Middle","salario" => 900),
    array("Nombre" => "diego", "nivel" => "jr","salario" => 600),
    array("Nombre" => "juan", "nivel" => "Sr","salario" => 1800),
    array("Nombre" => "martin", "nivel" => "jr","salario" => 600),
    array("Nombre" => "nando", "nivel" => "Middle","salario" => 900),
    array("Nombre" => "lucio", "nivel" => "jr","salario" => 600),
    array("Nombre" => "paco", "nivel" => "Sr","salario" => 1800),
    array("Nombre" => "chico", "nivel" => "jr","salario" => 600),
    array("Nombre" => "cris", "nivel" => "Middle","salario" => 900),
);

foreach($sueldosTotales as $sueldoLiquido){
    $salarioM = $sueldoLiquido["salario"];
    $nombre = $sueldoLiquido["Nombre"];
    $categoria = $sueldoLiquido["nivel"];
    $afp = $salarioM * 0.07;
    $seguro = $salarioM * 0.03;
    $renta = $salarioM * 0.10;

    $salarioTotal = $salarioM - $afp - $seguro - $renta;
    $salarioAno = $salarioTotal * 12;

    echo "Salario mensual de " . $nombre . ": " . number_format($salarioTotal, 2) . " dólares\n";
    echo "Salario anual de " . $nombre . ": " . number_format($salarioAno, 2) . " dólares\n\n";
}

$sumaSalarios = array_reduce($sueldosTotales, function ($carry, $sueldo) {
    return $carry + $sueldo["salario"];
});

echo "La suma de los salarios de los 10 empleados es: " . number_format($sumaSalarios, 2) . " dólares\n";
 */

 //EJERCICIO 13
  /* Calcular la nota  promedio  de un array de estudiantes que contiene los campos
 (nombre , grado y nota )  , además deberá deberá  de retornar cuantos alumnos 
 aprobaron y reprobaron , tome en cuenta que la nota minima para aprobar es 7,5.
 
  $estudiantes = array(
    array("nombre" => "Juan", "grado" => 10, "nota" => 8.5),
    array("nombre" => "María", "grado" => 9, "nota" => 7.0),
    array("nombre" => "Pedro", "grado" => 11, "nota" => 9.0),
    array("nombre" => "Ana", "grado" => 10, "nota" => 6.5)
  );
  $totalNotas = 0;
  $numEstudiantes = count($estudiantes);
  $numAprobados = 0;
  $numReprobados = 0;
  foreach ($estudiantes as $estudiante) {
    $totalNotas += $estudiante["nota"];
    if ($estudiante["nota"] >= 7.5) {
      $numAprobados++;
    } else {
      $numReprobados++;
    }
  }
  $promedio = $totalNotas / $numEstudiantes;
  echo "El promedio de las notas es: " . $promedio . "\n";
  echo "Número de estudiantes aprobados: " . $numAprobados . "\n";
  echo "Número de estudiantes reprobados: " . $numReprobados . "\n";
  */
  //EJERCICIO 14
  /*
Juego de adivinanza: Crea un programa en PHP que genere un número aleatorio entre 1 y 100,
 y permita al usuario adivinar ese número. El programa debe dar pistas para que el usuario sepa si
  el número que está adivinando es demasiado alto o bajo, y contar el número de intentos que le llevó 
  al usuario adivinar el número.
  
   $intentos = 0;
  $numeroRandom = rand(1,20);
  do{
   $numeroUsuario = readline("ingrese un numero entre 1 y 20: ");
    $intentos++;
   if($numeroUsuario> $numeroRandom){
    echo"su numero es mayor que el numero secreto";
   }else if($numeroUsuario < $numeroRandom){
    echo"su numero es menor que el numero secreto";
   }else {
    echo"ha encontrado el numero secreto"."su numero de intentos fue ". $intentos;
   }
  }while($numeroUsuario!= $numeroRandom);
*/
//EJERCICIO 15
/*
Calculadora de propinas: Crea un programa en PHP que permita al usuario
 ingresar el total de una cuenta de restaurante y la calidad del servicio
  (excelente, bueno, regular, malo) y calcule automáticamente el monto de la propina recomendada.
   Puedes definir tus propias reglas para calcular la propina según la calidad del servicio.

echo "Bienvenido a la calculadora de propinas.\n";
echo "Por favor ingrese el total de la cuenta: ";
$pago = trim(fgets(STDIN));
echo "Por favor ingrese la calidad del servicio (excelente, bueno, regular, malo): ";
$calidadServicio = trim(fgets(STDIN));

$porcentajePropinaExcelente = 0.20;
$porcentajePropinaBueno = 0.15;
$porcentajePropinaRegular = 0.10;
$porcentajePropinaMalo = 0.05;

switch ($calidadServicio) {
  case "excelente":
    $propina = $pago * $porcentajePropinaExcelente;
    break;
  case "bueno":
    $propina = $pago * $porcentajePropinaBueno;
    break;
  case "regular":
    $propina = $pago * $porcentajePropinaRegular;
    break;
  case "malo":
    $propina = $pago * $porcentajePropinaMalo;
    break;
  default:
    $propina = 0;
    break;
}

$total = $pago + $propina;

echo "El total de la cuenta es $" . $pago . ", la propina recomendada es $" . $propina . " y el total con propina es $" . $total . ".\n";
*/

?>