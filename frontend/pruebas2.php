<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas2</title>

</head>
<body>
<?php
// Obtener el año y mes actual
$year = date('Y');
$month = date('m');

// Obtener el primer y último día del mes
$firstDay = strtotime("first day of $year-$month");
$lastDay = strtotime("last day of $year-$month");

// Obtener el número de días en el mes
$totalDays = date('t', $lastDay);


// Obtener el día de la semana del primer día del mes
$firstDayOfWeek = date('N', $firstDay);

// Crear una matriz de días del calendario
$calendar = array();

// Rellenar los días previos al primer día del mes
for ($i = 1; $i < $firstDayOfWeek; $i++) {
    $calendar[] = null;
}

// Rellenar los días del mes
for ($i = 1; $i <= $totalDays; $i++) {
    $calendar[] = $i;
}

// Imprimir el calendario
echo "<h2>Calendario de $month/$year</h2>";
echo "<table>";
echo "<tr><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th></tr>";

$currentDay = 1;
while ($currentDay <= $totalDays) {
    echo "<tr>";
    for ($i = 1; $i <= 7; $i++) {
        if (($currentDay > 1 || $i >= $firstDayOfWeek) && $currentDay <= $totalDays) {
            echo "<td>$currentDay</td>";
            $currentDay++;
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>


       
  

   


</body>
</html>