<?php
include('conexion.php');
include('reservaciones.php');

$reservaciones = new Reservaciones();
$reservaciones->eliminarReservacion($id_r = $_POST['id_reserv']);

?>