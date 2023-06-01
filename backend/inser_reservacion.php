<?php
include('conexion.php');
include('reservaciones.php');

$nombre_r = $_POST['name_re'];
$tema_r = $_POST['tema_r'];
$area = $_POST['area'];
$fecha_r = date("Y-m-d H:i:s");
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$id_usu2 = $_POST['id_usu2'];
$id_s = $_POST['id_s'];
$estatus_s1 = $_POST['estatus_s1'];

$reservacion = New Reservaciones();
$reservacion->insertarReservacionn($nombre_r,$tema_r,$area,$fecha_r,$fecha_ini,$fecha_fin,$id_usu2,$id_s,$estatus_s1);

?>