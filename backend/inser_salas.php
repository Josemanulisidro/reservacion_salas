<?php
include("conexion.php");
include("salas.php");
$salas = new Salas();
$salas->insertarSala($nom_sala = $_POST['nom_sala'], $descrip_sala = $_POST['descrip_sala'], $id_usu = $_POST['id_usu'], $posicion = $_POST['posicion'] );
?>