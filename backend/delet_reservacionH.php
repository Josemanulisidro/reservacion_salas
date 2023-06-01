<?php
include('conexion.php');
include('reservaciones.php');

$reservaciones = new Reservaciones();
$reservaciones->eliminarReservacionH($id_r = $_POST['id_reserv']);

?>