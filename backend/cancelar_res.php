<?php
include('conexion.php');
$id_s = $_POST['id_s'];
$up = "UPDATE `reservacion` SET `estatus_s1`= '0' WHERE id_salas1 = '$id_s'";
$up2 = $conexion -> query($up);
if($up2){
    echo "<script> alert('Cancelación exitosa de sala'); </script>";
    echo "<script> window.location.href='../frontend/salas.php'; </script>";
}else{
    echo "<script> alert('Error al actualizar sala'); </script>";
    echo "<script> window.location.href='../frontend/salas.php'; </script>";
}

?>