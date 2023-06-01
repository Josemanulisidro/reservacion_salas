<?php
include('../backend/conexion.php');
    if (isset($_POST['update'])) {
        foreach($_POST['positions'] as $position) {
           $index = $position[0];
           $newPosition = $position[1];

          $UpdatePosition = ("UPDATE salas SET posicion = '$newPosition' WHERE id_salas = '$index' ");
          $result = $conexion->query($UpdatePosition);
        //   $result = mysqli_query($con, $UpdatePosition);
          print_r($UpdatePosition);
        }
    }
?>

