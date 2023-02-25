<?php
// calcular las deducciones salariales de un empleado


$salario_bruto = 50000;
$isr = 0.1 * $salario_bruto;
$afp = 0.06 * $salario_bruto;

$deducciones = $isr + $afp;
$salario_neto = $salario_bruto - $deducciones;

echo "El salario bruto es: $salario_bruto\n";
echo "El ISR es: $isr\n";
echo "La AFP es: $afp\n";
echo "El total de deducciones es: $deducciones\n";
echo "El salario neto es: $salario_neto\n";






//Calculate the salary of employees based on their hourly rate in PHP.

$empleados = array(
    "Alex" => array("tarifa_por_hora" => 25, "horas_trabajadas" => 35),
    "Javier" => array("tarifa_por_hora" => 30, "horas_trabajadas" => 45),
    "Lupe" => array("tarifa_por_hora" => 20, "horas_trabajadas" => 40),
    "Lorena" => array("tarifa_por_hora" => 22, "horas_trabajadas" => 38),
);

$salarios = array();
foreach ($empleados as $nombre => $datos) {
    $tarifa_por_hora = $datos["tarifa_por_hora"];
    $horas_trabajadas = $datos["horas_trabajadas"];
    $salario = $tarifa_por_hora * $horas_trabajadas;
    $salarios[$nombre] = $salario;
    echo "El salario de $nombre es: $salario\n";
}

$empleado_max_salario = array_search(max($salarios), $salarios);
echo "El empleado con el salario más alto es: $empleado_max_salario\n";

//aqui esta forma resumida

/*
$tarifa_por_hora = 20;
$horas_trabajadas = 40;
$salario = $tarifa_por_hora * $horas_trabajadas;

echo "El salario del empleado es: $salario";
*/
