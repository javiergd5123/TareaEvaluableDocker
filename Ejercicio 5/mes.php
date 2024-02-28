<?php
// Definimos un array con los nombres de los meses
$meses = [
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre'
];

// Obtenemos el número del mes actual
$numero_mes_actual = date('n');

// Mostramos el nombre del mes actual
echo 'El mes actual es: ' . $meses[$numero_mes_actual];
?>