
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
    <link rel="stylesheet" href="../css/salas.css">
    <link rel="shortcut icon" href="../css/Logo.png" />
</head>
<body>
    <?php
         include('navegacion.php');
         if ($_SESSION['active']) {
         include('../backend/salas.php');
         include('../backend/reservaciones.php');
         $salas = new Salas();
         $reservaciones = new Reservaciones();
   ?>
<button type="button" class="btn btn-primary btn-lg" id="cargar">Cargar pagina</button>
<script>
    var cargar = document.getElementById('cargar');
    cargar.addEventListener('click', function(){
        location.reload();
    });
</script>


<div class="row sortable"  id="drop-items">
<?php
$result_salas = $salas->getSalas();
while ($row = $result_salas->fetch_assoc()) { 
    date_default_timezone_set('America/Chihuahua');
    $fecha_actual = date("Y-m-d H:i:s");
    // echo $fecha_actual;
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
                $color = "#6095F9";
                $ctexto = "white";
            
                break;
            case 1:
                $color = "#FA444F";
                $ctexto = "white";
                
                break;
            case 2:
                $color = "yellow";
                $ctexto = "black";
                break;
        }
    ?>

<div class="col-md-6 col-lg-4 mb-4" data-index="<?php echo $row['id_salas']; ?>" data-position="<?php echo $row['posicion']; ?>" id="cont_salas">
       <center><div class="drop__card" style="clip-path: polygon(0 24%, 51% 0, 100% 24%, 100% 100%, 0% 100%);font-size: 50px; width: 300px;  background-color:<?php echo $color ?>">
            <div class="drop__data font-size: 10px;">
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
                        <center><button type="submit" class="btn btn-primary" style="background-color:white; color:black">Reservar</button></center>
                        <?php
                    }
                        ?>
                        <?php
                        if($estatus_s1 == 1) {
                        ?>
                        <button type="submit" class="btn btn-primary " style="background-color:white; color:black" disabled hidden>Reservar</button>
                        <?php
                    }
                        ?>
                        <?php
                        if($estatus_s1 == 2) {
                        ?>
                        <button type="submit" class="btn btn-primary" >Reservar</button>
                        <?php
                    }
                        ?>
                    </form>
    
                    <?php
                    
                    if($rol_usu == 1 ){
                        if($estatus_s1 == 1 ) {
                        ?>
                    <form action="../backend/delet_reservacion.php" method="POST">
                        <input type="hidden" name="id_reserv" value="<?php echo $id_reservacion;?>">
                        <button type="submit" class="btn btn-primary">Cancelar reservación</button>
                        </form>
                        <?php
                                }
                            }
                        
                        ?>

                        <center><h1 style="color:<?php echo $ctexto ?>" class="drop__name"><?php echo $row['nom_salas']; ?></h1></center>
            <center><h6  class="drop__descripcion"><?php echo $row['descrip_salas']; ?></h6></center>
            </div>        
        </div></center>
    </div>
 

    <?php } ?>

  <!-- Regitros calendarizados para salas-->
  <?php
            include("calen.php");
        ?>
    <script type="text/javascript" charset="utf-8" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="jquery-ui.min.js"></script>


    <script>
          //si rolo es igual a 1 se activa el sortable
          <?php
        if($rol_usu == 1){
        ?>
    $(document).ready(function () {
       $('.sortable').sortable({
           update: function (event, ui) {
               $(this).children().each(function (index) {
                    if ($(this).attr('data-position') != (index+1)) {
                        $(this).attr('data-position', (index+1)).addClass('updated');
                    }
               });
               guardandoPosiciones();
           }
       });
    });
    function guardandoPosiciones() {
        var positions = [];
        $('.updated').each(function () {
           positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
           $(this).removeClass('updated');
        });

        $.ajax({
           url: 'ajax.php',
           method: 'POST',
           dataType: 'text',
           data: {
               update: 1,
               positions: positions
           }, success: function (response) {
                console.log(response);
           }
        });
    }
    <?php
        }
        ?>
</script>



<?php
 // Sesion activa del if 
    }else{
        include('../backend/salir.php');    
    }
?>

</body>
</html>

