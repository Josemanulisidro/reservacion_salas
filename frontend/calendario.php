<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/calendario.css">
    <title>Calendario</title>
    <link rel="shortcut icon" href="../css/Logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="jquery-ui.min.js"></script>
</head>
<body>
<?php
 include('navegacion.php');
    //obtener todos los meses del año
    $meses = array("January","February","March","April","May","June","July", "August","September","October","November","December");
    $años = array("2023","2024","2025","2026","2027","2028","2029","2030","2031","2032");
   
?>
<div class="container">
    <div class="row">
        <div class="col-md-1"> 
        </div>
        <div class="col-md-3">
            <form action="calendario.php" method="post">
                <select name="mes" class="form-select">
                    <?php
                        foreach($meses as $mes){
                            echo "<option value='$mes'>$mes</option>";
                        }
                    ?>
                </select>
                </div>
                
                <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-lg" >Buscar</button>
                </div> 
            </form>
        
    </div>
</div>

    <?php
    if(isset($_POST['mes']) ){
    $mess = $_POST['mes'];
    $messs = date('m', strtotime($mess));

    }else{
        $messs = date('m');
        $año = date('Y');
    }

$year =  date('Y');
$month = $messs;


// Obtener el mes en letras en español solo se muestra en el calendario no en la variable
// setlocale(LC_TIME, 'spanish');
// $month = strftime('%B');


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
?>

<?php
//obtener el dia de la fecha de la variable fecha_ini
    echo "<div class='container'>";
echo "<h1>Calendario</h1>";
echo "<h2> $month  - $year</h2>";
echo "<table class='table table-hover table-bordered h-50 w-80' style='border: blue 3px solid;'>";
echo "<thead>";
echo "<th style='background-color:#CDBEAB'>Lun</th>";
echo "<th style='background-color:#CDBEAB'>Mar</th>";
echo "<th style='background-color:#CDBEAB'>Mié</th>";
echo "<th style='background-color:#CDBEAB'>Jue</th>";
echo "<th style='background-color:#CDBEAB'>Vie</th>";
echo "<th style='background-color:#CDBEAB'>Sáb</th>";
echo "<th style='background-color:#CDBEAB'>Dom</th>";
echo "</thead>";

echo"<tbody>";
$currentDay = 1;
while ($currentDay <= $totalDays) {
    echo "<tr>";
    for ($i = 1; $i <= 7; $i++) {
        if (($currentDay > 1 || $i >= $firstDayOfWeek) && $currentDay <= $totalDays) {
         
            echo "<td>" . "<center><h5>  $currentDay  </h5></center>";
            echo "<br>";
            $dia_actual = date("d");
            $mes_actual = date("m");
            $año_actual = date("Y");
            if($dia_actual == $currentDay && $mes_actual == $month && $año_actual == $year){
                //poner de color rojo la casilla del dia actual
            echo "<center><div style='background-color:yellow; width: auto; height: auto; display: inline;'>Día actual</div></center>";
            }
            echo "<br>";
            include('../backend/conexion.php');
            $sql = "SELECT * FROM salas INNER JOIN reservacion ON salas.id_salas = reservacion.id_salas1";
            $result = $conexion->query($sql);
            while($row = $result->fetch_assoc()){
                $fecha_ini = $row['fecha_ini'];
                $fecha_fin = $row['fecha_fin'];
                $estatus_s1 = $row['estatus_s1'];
                $id_salas1 = $row['id_salas1'];
                $nombre_sala = $row['nom_salas'];
                switch ($estatus_s1) {
                    case 0:
                        $estatus_s1 = "finalizada";
                        break;
                    case 1:
                        $estatus_s1 = "pendiente";
                        break;
                    }
                
            $dia_r = date("d", strtotime($fecha_ini));
            $mes_r = date("m", strtotime($fecha_ini));
            $año_r = date("Y", strtotime($fecha_ini));
            
            if($dia_r == $currentDay && $mes_r == $month && $año_r == $year){
              $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $nombre_sala . " con estatus " . $estatus_s1 . "<br>";
                echo $mensaje;
            }else{
                echo $mensaje = "";
            }
        }
            echo "</td>";
            $currentDay++;
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
?>
    
</body>
</html>