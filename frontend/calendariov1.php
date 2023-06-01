<?php
     session_start();
     if ($_SESSION['active']) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalendarioV1</title>
    <link rel="stylesheet" href="../css/calendario.css">
</head>
<body>
   
    <?php
    include('navegacion.php');
    include('../backend/reservaciones.php');
    $reservaciones = new reservaciones();

    $resultllLunes = $reservaciones->getReservaciones();
    $resultllMartes = $reservaciones->getReservaciones();
    $resultllMiercoles = $reservaciones->getReservaciones();
    $resultllJueves = $reservaciones->getReservaciones();
    $resultllViernes = $reservaciones->getReservaciones();
    $resultllSabado = $reservaciones->getReservaciones();
    $resultllDomingo = $reservaciones->getReservaciones();

    $resultlLunes = $reservaciones->getReservaciones();
    $resultlMartes = $reservaciones->getReservaciones();
    $resultlMiercoles = $reservaciones->getReservaciones();
    $resultlJueves = $reservaciones->getReservaciones();
    $resultlViernes = $reservaciones->getReservaciones();
    $resultlSabado = $reservaciones->getReservaciones();
    $resultlDomingo = $reservaciones->getReservaciones();

    $resultLunes = $reservaciones->getReservaciones();
    $resultMartes = $reservaciones->getReservaciones();
    $resultMiercoles = $reservaciones->getReservaciones();
    $resultJueves = $reservaciones->getReservaciones();
    $resultViernes = $reservaciones->getReservaciones();
    $resultSabado = $reservaciones->getReservaciones();
    $resultDomingo = $reservaciones->getReservaciones();

    $resultsLunes2 = $reservaciones->getReservaciones();
    $resultsMartes2 = $reservaciones->getReservaciones();
    $resultsMiercoles2 = $reservaciones->getReservaciones();
    $resultsJueves2 = $reservaciones->getReservaciones();
    $resultsViernes2 = $reservaciones->getReservaciones();
    $resultsSabado2 = $reservaciones->getReservaciones();
    $resultsDomingo2 = $reservaciones->getReservaciones();

    $resultsLunes3 = $reservaciones->getReservaciones();
    $resultsMartes3 = $reservaciones->getReservaciones();
    $resultsMiercoles3 = $reservaciones->getReservaciones();
    $resultsJueves3 = $reservaciones->getReservaciones();
    $resultsViernes3 = $reservaciones->getReservaciones();
    $resultsSabado3 = $reservaciones->getReservaciones();
    $resultsDomingo3 = $reservaciones->getReservaciones();


    date_default_timezone_set('America/Mexico_City');
      
//obtener cuantos dias tiene el mes
$dias_mes = cal_days_in_month(CAL_GREGORIAN, date("m"), date("y"));
//obtener el mes
$mes = date("F");
//obtener el año
$anio = date("Y");

// Dias de la semana
$llLunes = date("d - m  - Y", strtotime("monday last week last week"));
$llMartes = date("d - m  - Y", strtotime("tuesday last week last week"));
$llMiercoles = date("d - m  - Y", strtotime("wednesday last week last week"));
$llJueves = date("d - m  - Y", strtotime("thursday last week last week"));
$llViernes = date("d - m  - Y", strtotime("friday last week last week"));
$llSabado = date("d - m  - Y", strtotime("saturday last week last week"));
$llDomingo = date("d - m  - Y", strtotime("sunday last week last week"));

$lLunes = date("d - m  - Y", strtotime("monday last week"));
$lMartes = date("d - m  - Y", strtotime("tuesday last week"));
$lMiercoles = date("d - m  - Y", strtotime("wednesday last week"));
$lJueves = date("d - m  - Y", strtotime("thursday last week"));
$lViernes = date("d - m  - Y", strtotime("friday last week"));
$lSabado = date("d - m  - Y", strtotime("saturday last week"));
$lDomingo = date("d - m  - Y", strtotime("sunday last week"));

$fechaLunes = date("d - m  - Y", strtotime("monday this week"));
$fechaMartes = date("d - m  - Y", strtotime("tuesday this week"));
$fechaMiercoles = date("d - m  - Y", strtotime("wednesday this week"));
$fechaJueves = date("d - m  - Y", strtotime("thursday this week"));
$fechaViernes = date("d - m  - Y", strtotime("friday this week"));
$fechaSabado = date("d - m  - Y", strtotime("saturday this week"));
$fechaDomingo = date("d - m  - Y", strtotime("sunday this week"));

$sLunes2 = date("d - m  - Y", strtotime("monday next week"));
$sMartes2 = date("d - m  - Y", strtotime("tuesday next week"));
$sMiercoles2 = date("d - m  - Y", strtotime("wednesday next week"));
$sJueves2 = date("d - m  - Y", strtotime("thursday next week"));
$sViernes2 = date("d - m  - Y", strtotime("friday next week"));
$sSabado2 = date("d - m  - Y", strtotime("saturday next week"));
$sDomingo2 = date("d - m  - Y", strtotime("sunday next week"));

$sLunes3 = date("d - m  - Y", strtotime("monday next week next week"));
$sMartes3 = date("d - m  - Y", strtotime("tuesday next week next week"));
$sMiercoles3 = date("d - m  - Y", strtotime("wednesday next week next week"));
$sJueves3 = date("d - m  - Y", strtotime("thursday next week next week"));
$sViernes3 = date("d - m  - Y", strtotime("friday next week next week"));
$sSabado3 = date("d - m  - Y", strtotime("saturday next week next week"));
$sDomingo3 = date("d - m  - Y", strtotime("sunday next week next week"));


//obtener dias de la semana para cambiar de color para saberl el mes actual
$llLunes1 = date("m", strtotime("monday last week last week"));
$llMartes1 = date("m", strtotime("tuesday last week last week"));
$llMiercoles1 = date("m", strtotime("wednesday last week last week"));
$llJueves1 = date("m", strtotime("thursday last week last week"));
$llViernes1 = date("m", strtotime("friday last week last week"));
$llSabado1 = date("m", strtotime("saturday last week last week"));
$llDomingo1 = date("m", strtotime("sunday last week last week"));

$lLunes1 = date("m", strtotime("monday last week"));
$lMartes1 = date("m", strtotime("tuesday last week"));
$lMiercoles1 = date("m", strtotime("wednesday last week"));
$lJueves1 = date("m", strtotime("thursday last week"));
$lViernes1 = date("m", strtotime("friday last week"));
$lSabado1 = date("m", strtotime("saturday last week"));
$lDomingo1 = date("m", strtotime("sunday last week"));

$fechaLunes0 = date("m", strtotime("monday this week"));
$fechaMartes0 = date("m", strtotime("tuesday this week"));
$fechaMiercoles0 = date("m", strtotime("wednesday this week"));
$fechaJueves0 = date("m", strtotime("thursday this week"));
$fechaViernes0 = date("m", strtotime("friday this week"));
$fechaSabado0 = date("m", strtotime("saturday this week"));
$fechaDomingo0 = date("m", strtotime("sunday this week"));

$sLunes22 = date("m", strtotime("monday next week"));
$sMartes22 = date("m", strtotime("tuesday next week"));
$sMiercoles22 = date("m", strtotime("wednesday next week"));
$sJueves22 = date("m", strtotime("thursday next week"));
$sViernes22 = date("m", strtotime("friday next week"));
$sSabado22 = date("m", strtotime("saturday next week"));
$sDomingo22 = date("m", strtotime("sunday next week"));

$sLunes33 = date("m", strtotime("monday next week next week"));
$sMartes33 = date("m", strtotime("tuesday next week next week"));
$sMiercoles33 = date("m", strtotime("wednesday next week next week"));
$sJueves33 = date("m", strtotime("thursday next week next week"));
$sViernes33 = date("m", strtotime("friday next week next week"));
$sSabado33 = date("m", strtotime("saturday next week next week"));
$sDomingo33 = date("m", strtotime("sunday next week next week"));

//obtener el dia en numero y en letra en español
$dia = date("d l");
$obtener_dia = date("d - m  - Y");
$obtener_mes = date("m", strtotime("this month"));

//obtener dias de la semana para cambiar de color para saberl el dia actual
if($obtener_dia == $fechaLunes){
    $lunes = "#8CDCDE";
}
if($obtener_dia == $fechaMartes){
    $martes = "#8CDCDE";
}
if($obtener_dia == $fechaMiercoles){
    $miercoles = "#8CDCDE";
}
if($obtener_dia == $fechaJueves){
    $jueves = "#8CDCDE";
}
if($obtener_dia == $fechaViernes){
    $viernes = "#8CDCDE";
}
if($obtener_dia == $fechaSabado){
    $sabado = "yellow";
}
if($obtener_dia == $fechaDomingo){
    $domingo = "#8CDCDE";
}


//obtener todos los dias puestos si no son de este mes cambian de color
if($obtener_mes !== $llLunes1){
    $lunes1 = "#DEE8FB";
}
if($obtener_mes != $llMartes1){
    $martes1 = "#DEE8FB";
}
if($obtener_mes != $llMiercoles1){
    $miercoles1 = "#DEE8FB";
}
if($obtener_mes != $llJueves1){
    $jueves1 = "#DEE8FB";
}
if($obtener_mes != $llViernes1){
    $viernes1 = "#DEE8FB";
}
if($obtener_mes != $llSabado1){
    $sabado1 = "#DEE8FB";
}
if($obtener_mes != $llDomingo1){
    $domingo1 = "#DEE8FB";
}

if($obtener_mes != $fechaLunes0){
    $lunes0 = "#DEE8FB";
}
if($obtener_mes != $fechaMartes0){
    $martes0 = "#DEE8FB";
}
if($obtener_mes != $fechaMiercoles0){
    $miercoles0 = "#DEE8FB";
}
if($obtener_mes != $fechaJueves0){
    $jueves0 = "#DEE8FB";
}
if($obtener_mes != $fechaViernes0){
    $viernes0 = "#DEE8FB";
}
if($obtener_mes != $fechaSabado0){
    $sabado0 = "#DEE8FB";
}
if($obtener_mes != $fechaDomingo0){
    $domingo0 = "#DEE8FB";
}


if($obtener_mes !== $lLunes1){
    $lunes2 = "#DEE8FB";
}
if($obtener_mes != $lMartes1){
    $martes2 = "#DEE8FB";
}
if($obtener_mes != $lMiercoles1){
    $miercoles2 = "#DEE8FB";
}
if($obtener_mes != $lJueves1){
    $jueves2 = "#DEE8FB";
}
if($obtener_mes != $lViernes1){
    $viernes2 = "#DEE8FB";
}
if($obtener_mes != $lSabado1){
    $sabado2 = "#DEE8FB";
}
if($obtener_mes != $lDomingo1){
    $domingo2 = "#DEE8FB";
}

if($obtener_mes !== $sLunes22){
    $lunes3 = "#DEE8FB";
}
if($obtener_mes !== $sMartes22){
    $martes3 = "#DEE8FB";
}
if($obtener_mes !== $sMiercoles22){
    $miercoles3 = "#DEE8FB";
}
if($obtener_mes !== $sJueves22){
    $jueves3 = "#DEE8FB";
}
if($obtener_mes !== $sViernes22){
    $viernes3 = "#DEE8FB";
}
if($obtener_mes !== $sSabado22){
    $sabado3 = "#DEE8FB";
}
if($obtener_mes !== $sDomingo22){
    $domingo3 = "#DEE8FB";
}

if($obtener_mes != $sLunes33){
    $lunes4 = "#DEE8FB";
}
if($obtener_mes != $sMartes33){
    $martes4 = "#DEE8FB";
}
if($obtener_mes != $sMiercoles33){
    $miercoles4 = "#DEE8FB";
}
if($obtener_mes != $sJueves33){
    $jueves5 = "#DEE8FB";
}
if($obtener_mes != $sViernes33){
    $viernes4 = "#DEE8FB";
}
if($obtener_mes != $sSabado33){
    $sabado4 = "#DEE8FB";
}
if($obtener_mes != $sDomingo33){
    $domingo4 = "#DEE8FB";
}
    ?>

<Center><h1><?php echo $mes . " " . $anio ?></h1></Center>
<center><h2><?php echo " Tiene ".$dias_mes." días" ?></h2></center>
<center><button type="button" class="btn btn-outline-primary" ><h1><</h1></button>
<button type="button" class="btn btn-outline-primary"><h1>></h1></button></center>
<div class="container text-center" style="border: green 5px solid">
    <div class="row mb-1" > <!--Fila -->
    <?php

    ?>
        <div class="col" style="border: blue 1px solid;background:<?php echo $lunes1;?>">
            <p>Lunes</p>
           <p><h6><?php echo $llLunes;?></h6></p>
           <?php
    while($row = $resultllLunes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
            $dia_r = date("d - m  - Y", strtotime($fecha_ini));
           if($dia_r == $llLunes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $martes1;?>">
            <p>Martes</p>
            <p><h6><?php echo $llMartes;?></h6></p>
            <?php
         while($row = $resultllMartes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $llMartes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
            
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $miercoles1;?>">
            <p>Miercoles</p>
            <p><h6><?php echo $llMiercoles;?></h6></p>
            <?php
    while($row = $resultllMiercoles->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
           if($dia_r == $llMiercoles){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
            <div class="col" style="border: blue 1px solid;background:<?php echo $jueves1;?>">
            <p>Jueves</p>
            <p><h6><?php echo $llJueves;?></h6></p>
            <?php
    while($row = $resultllJueves->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $llJueves){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $viernes1;?>">
            <p>Viernes</p>
            <p><h6><?php echo $llViernes;?></h6></p>
            <?php
    while($row = $resultllViernes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $llViernes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $sabado1;?>">
            <p>Sábado</p>
            <p><h6><?php echo $llSabado;?></h6></p>
            <?php
    while($row = $resultllSabado->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $llSabado){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $domingo1;?>">
            <p>Domingo</p>
            <p><h6><?php echo $llDomingo;?></h6></p>
            <?php
    while($row = $resultllDomingo->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $llDomingo){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
    </div>

    <div class="row mb-1"> <!--Fila -->
        <div class="col" style="border: blue 1px solid;background:<?php echo $lunes2;?>">
            <p>Lunes</p>
           <p><h6><?php echo $lLunes;?></h6></p>
           <?php
    while($row = $resultlLunes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lLunes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>

        <div class="col" style="border: blue 1px solid;background:<?php echo $martes2;?>">
                <p>Martes</p>
                    <p><h6><?php echo $lMartes;?></h6></p>
                    <?php
    while($row = $resultlMartes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lMartes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $miercoles2;?>">
            <p>Miercoles</p>
            <p><h6><?php echo $lMiercoles;?></h6></p>
            <?php
    while($row = $resultlMiercoles->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lMiercoles){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
            <div class="col" style="border: blue 1px solid;background:<?php echo $jueves2;?>">
            <p>Jueves</p>
            <p><h6><?php echo $lJueves;?></h6></p>
            <?php
    while($row = $resultlJueves->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lJueves){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $viernes2;?>">
            <p>Viernes</p>
            <p><h6><?php echo $lViernes;?></h6></p>
            <?php
    while($row = $resultlViernes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lViernes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $sabado2;?>">
            <p>Sábado</p>
            <p><h6><?php echo $lSabado;?></h6></p>
            <?php
    while($row = $resultlSabado->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lSabado){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $domingo2;?>">
            <p>Domingo</p>
            <p><h6><?php echo $lDomingo;?></h6></p>
            <?php
    while($row = $resultlDomingo->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $lDomingo){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
    </div>


    <div class="row mb-1" > <!--Fila -->
        <div class="col" style="border: blue 1px solid;background:<?php echo $lunes;?>; background:<?php echo $lunes0;?>">
            <p>Lunes</p>
           <p><h6><?php echo $fechaLunes;?></h6></p>
           <?php
    while($row = $resultLunes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaLunes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid; background:<?php echo $martes;?>; background:<?php echo $martes0;?>">
            <p>Martes</p>
            <p><h6><?php echo $fechaMartes;?></h6></p>
            <?php
    while($row = $resultMartes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaMartes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $miercoles;?>; background:<?php echo $miercoles0;?> ">
            <p>Miercoles</p>
            <p><h6><?php echo $fechaMiercoles;?></h6></p>
            <?php
    while($row = $resultMiercoles->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaMiercoles){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
            <div class="col" style="border: blue 1px solid; background:<?php echo $jueves;?>; background:<?php echo $jueves0;?>">
            <p>Jueves</p>
            <p><h6><?php echo $fechaJueves;?></h6></p>
            <?php
    while($row = $resultJueves->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaJueves){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid; background:<?php echo $viernes;?>; background:<?php echo $viernes0;?>">
            <p>Viernes</p>
            <p><h6><?php echo $fechaViernes;?></h6></p>
            <?php
    while($row = $resultViernes->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaViernes){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid; background:<?php echo $sabado;?>; background:<?php echo $sabado0;?>">
            <p>Sábado</p>
            <p><h6><?php echo $fechaSabado;?></h6></p>
            <?php
    while($row = $resultSabado->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaSabado){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid; background:<?php echo $domingo;?>; background:<?php echo $domingo0;?>">
            <p>Domingo</p>
            <p><h6><?php echo $fechaDomingo;?></h6></p>
            <?php
    while($row = $resultDomingo->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $fechaDomingo){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
    </div>  <!--Fila -->

    <div class="row mb-1" > <!--Fila -->
        <div class="col" style="border: blue 1px solid;background:<?php echo $lunes3;?>">
            <p>Lunes</p>
           <p><h6><?php echo $sLunes2;?></h6></p>
           <?php
    while($row = $resultsLunes2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sLunes2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $martes3;?>">
            <p>Martes</p style="border: blue 1px solid">
            <p><h6><?php echo $sMartes2;?></h6></p>
            <?php
    while($row = $resultsMartes2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sMartes2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $miercoles3;?>">
            <p>Miercoles</p>
            <p><h6><?php echo $sMiercoles2;?></h6></p>
            <?php
    while($row = $resultsMiercoles2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sMiercoles2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
            <div class="col" style="border: blue 1px solid;background:<?php echo $jueves3;?>">
            <p>Jueves</p>
            <p><h6><?php echo $sJueves2;?></h6></p>
            <?php
    while($row = $resultsJueves2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sJueves2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $viernes3;?>">
            <p>Viernes</p>
            <p><h6><?php echo $sViernes2;?></h6></p>
            <?php
    while($row = $resultsViernes2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sViernes2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $sabado3;?>">
            <p>Sábado</p>
            <p><h6><?php echo $sSabado2;?></h6></p>
            <?php
    while($row = $resultsSabado2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sSabado2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $domingo3;?>">
            <p>Domingo</p>
            <p><h6><?php echo $sDomingo2;?></h6></p>
            <?php
    while($row = $resultsDomingo2->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sDomingo2){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
    </div>  <!--Fila -->

    <div class="row mb-1"> <!--Fila -->
        <div class="col" style="border: blue 1px solid;background:<?php echo $lunes4;?>">
            <p>Lunes</p>
           <p><h6><?php echo $sLunes3;?></h6></p>
           <?php
    while($row = $resultsLunes3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sLunes3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $martes4;?>">
            <p>Martes</p>
            <p><h6><?php echo $sMartes3;?></h6></p>
            <?php
    while($row = $resultsMartes3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
            $dia_r = date("d", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sMartes3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $miercoles4;?>">
            <p>Miercoles</p>
            <p><h6><?php echo $sMiercoles3;?></h6></p>
            <?php
    while($row = $resultsMiercoles3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sMiercoles3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
            <div class="col" style="border: blue 1px solid;background:<?php echo $jueves5;?>">
            <p>Jueves</p>
            <p><h6><?php echo $sJueves3;?></h6></p>
            <?php
    while($row = $resultsJueves3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sJueves3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $viernes4;?>">
            <p>Viernes</p>
            <p><h6><?php echo $sViernes3;?></h6></p>
            <?php
    while($row = $resultsViernes3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sViernes3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $sabado4;?>">
            <p>Sábado</p>
            <p><h6><?php echo $sSabado3;?></h6></p>
            <?php
    while($row = $resultsSabado3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sSabado3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
        <div class="col" style="border: blue 1px solid;background:<?php echo $domingo4;?>">
            <p>Domingo</p>
            <p><h6><?php echo $sDomingo3;?></h6></p>
            <?php
    while($row = $resultsDomingo3->fetch_assoc()){
        $fecha_ini = $row['fecha_ini'];
        $fecha_fin = $row['fecha_fin'];
        $estatus_s1 = $row['estatus_s1'];
        $id_salas1 = $row['id_salas1'];
        switch ($estatus_s1) {
            case 0:
                $estatus_s1 = "finalizada";
                break;
            case 1:
                $estatus_s1 = "pendiente";
                break;
            }
        
         //obtener el dia de la fecha de la variable fecha_ini
         $dia_r = date("d - m  - Y", strtotime($fecha_ini));
            //  echo $dia_r . "<br>";
           if($dia_r == $sDomingo3){
             $mensaje =  "Fue reservado " . "de " . $fecha_ini . " a " . $fecha_fin . " en la sala " . $id_salas1 . " con estatus " . $estatus_s1 . "<br>";
           ?>
           <p style="font-size: 10px;"><?php echo $mensaje; ?></p>
           <?php
           }
        }
           ?>
        </div>
    </div>  <!--Fila --> 

 
 </div>   <!--Container -->
</body>
</html>

<?php
     }else{
        include('../backend/salir.php');
     }
?>