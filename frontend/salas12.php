<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
</head>
<body>
    <?php
    include('navegacion.php');
    include('../backend/salas.php');
    include('../backend/reservaciones.php');
    $salas = new Salas();
    $reservaciones = new Reservaciones();

    session_start();
    $id_usu = $_SESSION['id_usu'];
    $nombre_usu = $_SESSION['nombre'];
    $passw_usu = $_SESSION['password'];
    $fecha_usu = $_SESSION['fecha'];
    $rol_usu = $_SESSION['id_rol1'];
    $area = $_SESSION['area2'];

       if ($_SESSION['active']) {
    ?>
        <?php
        $result_salas = $salas->getSalas();
        while ($row = $result_salas->fetch_assoc()) {
        $fecha_actual = date("Y-m-d H:i:s");
        // Consulta el estatus de las salas
        include('../backend/conexion.php');
        //SE ACTIVA SALA  DE ACUERDO AL ESTATUS Y CUANDO LA FECHA ACTUAL ESTE ENTRE LA FECHA DE INICIO Y FIN 
        $sql = "SELECT estatus_s1,fecha_ini,fecha_fin,id_reservacion FROM reservacion WHERE id_salas1 = " . $row['id_salas'] . " AND '$fecha_actual' BETWEEN fecha_ini AND fecha_fin ORDER BY estatus_s1 DESC";
        $result = $conexion->query($sql);
        $row2 = $result->fetch_assoc();
        
        // Obtener el estatus de la sala con un isset
        $estatus_s1 = isset($row2['estatus_s1']) ? $row2['estatus_s1'] : 0;
        $id_reservacion = isset($row2['id_reservacion']) ? $row2['id_reservacion'] : 0; 

        switch($estatus_s1){
            case 0:
                $color = "green";
                $ctexto = "white";
            
                break;
            case 1:
                $color = "red";
                $ctexto = "black";
                break;
            case 2:
                $color = "yellow";
                $ctexto = "black";
                break;
        }

        ?>
        <!-- <div class="container" style="background-color:#ECCD22; width:300px; margin-left: 5px;padding: 0px; border: 1px solid black;display: "> -->
                <div class="btn-group-vertical" draggable="true" >
                    <div style="clip-path: polygon(0 24%, 51% 0, 100% 24%, 100% 100%, 0% 100%);font-size: 80px; color:<?php echo $ctexto ?>; background-color:<?php echo $color ?>" ><?php echo $row['nom_salas']; ?></div>
                    <form action="reservar.php" method="POST">
                        <input type="hidden" name="id_s" value="<?php echo $row['id_salas']; ?>" >
                        <input type="hidden" name="nom_s" value="<?php echo $row['nom_salas']; ?>">
                        <input type="hidden" name="id_usu" value="<?php echo $id_usu; ?>">
                        <input type="hidden" name="nom_usu" value="<?php echo $nombre_usu; ?>">
                        <input type="hidden" name="estatus_s1" value=" <?php echo $row2['estatus_s1']; ?>">
                        <input type="hidden" name="area" value=" <?php echo $area; ?>">
                        <?php
                        if($estatus_s1 == 0) {
                        ?>
                        <center><button type="submit" class="btn btn-primary">Reservar</button></center>
                        <?php
                    }
                        ?>
                        <?php
                        if($estatus_s1 == 1) {
                        ?>
                        <button type="submit" class="btn btn-primary" disabled hidden>Reservar</button>
                        <?php
                    }
                        ?>
                        <?php
                        if($estatus_s1 == 2) {
                        ?>
                        <button type="submit" class="btn btn-primary">Reservar</button>
                        <?php
                    }
                        ?>
                    </form>

                    <?php
                        include('../backend/conexion.php');
                        $sql = "SELECT * FROM `reservacion` WHERE id_usu2 = '$id_usu';";
                        $result = $conexion->query($sql);
                        $row3 = $result->fetch_assoc();
                        $id_usuu = isset($row3['id_usu2']) ? $row3['id_usu2'] : 0;

                        
                      if ($rol_usu == 1 || $id_usuu == $id_usu ) {
                        if($estatus_s1 == 1) {
                        ?>
                    <form action="../backend/delet_reservacion.php" method="POST">
                        <input type="hidden" name="id_reserv" value="<?php echo $id_reservacion;?>">
                        <button type="submit" class="btn btn-primary">Cancelar reservación</button>
                        </form>
                        <?php
                    }
                     }
                    
                        ?>
                </div>  
        <!-- </div> -->
        <?php
        }
        ?>
        <!-- Regitros calendarizados para salas-->
        <?php
            include("calen.php");
        ?>
<!-- Actualizar pagina cada cinco segundos con javascript -->
<script type="text/javascript">
    setTimeout(function(){
        location.reload();
    },5000);

</script>

</body>
</html>
<?php

    }else{
        include('../backend/salir.php');    
    }
?>

