<?php
include('conexion.php');
include('salas.php');

$salas = new Salas();
$salas->EliminarSala($id_sala = $_POST['id_salas']);

?>